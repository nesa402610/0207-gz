<?php
header('Content-Type: text/html; charset=utf-8');

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$link = $url[2];

if ($link == 'auth') {
    $content = file_get_contents("pages/login.html");
} else if ($link == 'reg') {
    $content = file_get_contents("pages/register.html");
} else if ($link == 'blog') {
    $content = file_get_contents("pages/blog.html");
}else if ($link == 'users') {
    require_once('pages/users/index.php');
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

