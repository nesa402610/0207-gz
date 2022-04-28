<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysql = mysqli_connect("localhost", "vytspqpe_nesa402610", "R5SlFL8V", "vytspqpe_zerotwoGZ");

if (!$mysql) {
    print("error");
} else {
    $inputValue = $_POST['value'];
    $field = $_POST['field'];
    $id = $_SESSION['id'];
    $mysql->query("UPDATE `users` SET $field='$inputValue' WHERE `id`=$id");
    $_SESSION["$field"] = $inputValue;
}