<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysql = mysqli_connect("localhost", "vytspqpe_nesa402610", "R5SlFL8V", "vytspqpe_zerotwoGZ");

if (!$mysql) {
    print("error");
} else {
    $email = trim(mb_strtolower($_POST['email']));
    $password = $_POST['password'];

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $result = $result->fetch_assoc();
//    var_dump($result);

    if (password_verify($password, $result['password'])) {
        print('ok');
        $_SESSION['first_name'] = $result['first_name'];
        $_SESSION['last_name'] = $result['last_name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['id'] = $result['id'];
    } else {
        print('invalid');
    }
}

