<?php
header('Content-Type: text/html; charset=utf-8');

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$link = $url[2];
require_once("php/classes/User.php");
require_once("php/db.php");

if ($link == 'auth') {
    $content = file_get_contents("pages/login.html");
} else if ($link == 'reg') {
    $content = file_get_contents("pages/register.html");
} else if ($link == 'blog') {
    $content = file_get_contents("pages/blog.html");
} else if ($link == 'users') {
    require_once('pages/users/index.php');
} else if ($link == 'addUser') {
    echo User::addUser($_POST["name"], $_POST["lastname"], $_POST['email'], $_POST['pass']);
//    var_dump($mysqli);
} else if ($link == 'userLogin') {
    echo User::authUser($_POST['email'], $_POST['pass']);
//    var_dump($mysqli);
} else {
    $content = file_get_contents("pages/index.php");
}

if (!empty($content))
    require_once('template.php');
//if ($link == 'blog') {
//    require_once('blog.html');
//} else if ($link == 'cart') {
//    require_once('cart.html');
//
//}

