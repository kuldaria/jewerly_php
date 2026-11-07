<?php

function init($request, $urlconf) {
  $method = isset($request['method']) ? $request['method'] : 'get';
  $q = isset($request['url']) ? $request['url'] : '';

  foreach ($urlconf as $url_pattern => $r) {
    $matches = array();
  
    if (strpos($url_pattern, '#') === 0) {
      if (!preg_match($url_pattern, $q, $matches)) {
        continue;
      }
      $is_regex = true;
    } else {
      if ($url_pattern !== $q) {
        continue;
      }
      $is_regex = false;
    }

    if (isset($r['auth'])) {
      require_once($r['auth'] . '.php');
      $auth_func = $r['auth'];
      if (!$auth_func($request)) {
        return access_denied();
      }
    }

    require_once($r['module'] . '.php');
    $func = sprintf('%s_%s', $r['module'], $method);

    if (function_exists($func)) {
      if ($is_regex) {
        array_shift($matches);
        $entity = call_user_func_array($func, array_merge(array($request), $matches));
      } else {
        $entity = $func($request);
      }
    } else {
      return array('headers' => array('HTTP/1.1 405 Method Not Allowed'), 'entity' => 'Method Not Allowed');
    }

    if (is_string($entity)) {
      $entity = array(
        'headers' => array('Content-Type: text/html; charset=utf-8'),
        'entity' => theme('page', array('#content' => array($entity))),
      );
    }

    return $entity;
  }

  return not_found();
}

function conf($param) {
  global $conf;
  return isset($conf[$param]) ? $conf[$param] : NULL;
}

function theme($t, $c = array()) {
  $template = conf('theme') . '/' . str_replace('/', '_', $t) . '.tpl.php';
  if (file_exists($template)) {
    ob_start();
    include($template);
    return ob_get_clean();
  }
  return "Template $t not found at $template";
}

function redirect($location) {
  return array('headers' => array("Location: $location", 'HTTP/1.1 302 Found'), 'entity' => '');
}

function access_denied() {
  return array('headers' => array('HTTP/1.1 403 Forbidden'), 'entity' => '<h1>403 Access Denied</h1>');
}

function not_found() {
  return array('headers' => array('HTTP/1.1 404 Not Found'), 'entity' => '<h1>404 Not Found</h1>');
}
