<?php
header('Content-Type: text/html; charset=utf-8');

$mysql = mysqli_connect("localhost", "vytspqpe_nesa402610", "R5SlFL8V", "vytspqpe_zerotwoGZ");

if (!$mysql) {
    print("error");
} else {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = trim(mb_strtolower($_POST['email']));
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);


    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");

    if ($result->num_rows != 0) {
        print('exist');
    } else {
        $mysql->query("INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')");
        print('ok');
    }


}


//echo "Имя: $firstname <br>";
//echo "Фамилия: $lastname <br>";
//echo "E-mail: $email <br>";
//echo "Пароль: $password <br>";

