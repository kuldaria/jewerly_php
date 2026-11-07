<?php

function api_post($request) {
    $json_input = file_get_contents('php://input');
    $data = json_decode($json_input, true);

    if (empty($data)) {
        return array(
            'headers' => array('Content-Type' => 'application/json', 'HTTP/1.1 400 Bad Request'),
            'entity' => json_encode(['error' => 'No data provided'])
        );
    }

    $login = 'user_' . substr(uniqid(), -5);
    $password = bin2hex(random_bytes(4));
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    db_command("INSERT INTO users_site (login, password) VALUES (?, ?)", $login, $password_hash);
    $user_id = db_insert_id();

    db_command(
        "INSERT INTO form_data_site (user_id, fio, phone, email, message) VALUES (?, ?, ?, ?, ?)",
        $user_id,
        $data['name'],
        $data['phone'], 
        $data['email'], 
        $data['message'] 
    );

    return array(
        'headers' => array('Content-Type' => 'application/json'),
        'entity' => json_encode([
            'status' => 'success',
            'message' => 'Заявка успешно создана',
            'login' => $login,
            'password' => $password
        ])
    );
}


function api_put($request, $id) {
        'headers' => array('Content-Type' => 'application/json'),
        'entity' => json_encode(['status' => 'updated', 'id' => $id])
    );
}
