<?php
header('Content-Type: text/html; charset=utf-8');
$email = $_POST['email'];
$password = $_POST['password'];

echo "Email: $email <br>";
echo "Пароль: $password <br>";