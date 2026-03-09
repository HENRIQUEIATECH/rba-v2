<?php

$errors = [];

if (!empty($_POST)) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  if (empty($name)) {
      $errors[] = 'Nome está vazio';
  }

  if (empty($email)) {
      $errors[] = 'Email está vazio';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email é inválido';
  }

  if (empty($message)) {
      $errors[] = 'Mensagem está vazia';
  }
}
