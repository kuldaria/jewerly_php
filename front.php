<?php

function front_get($request) {
  return theme('try_page'); 
}

function front_post($request) {
  $fio = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $login = 'user' . rand(100, 999);
  $pass = bin2hex(random_bytes(4));

  db_command("INSERT INTO users_site (login, password) VALUES (?, ?)", $login, $pass);
  $user_id = db_insert_id();
  
  db_command("INSERT INTO form_data_site (user_id, fio, phone, email, message) VALUES (?, ?, ?, ?, ?)", 
             $user_id, $fio, $phone, $email, $message);

  return redirect('/'); 
}
