<?php
session_start();

include_once'./functions.php';
include'./users.php';

// Логин - admin
// Пароль - 123456
// Пароль хранится в хэшированном виде, с помощью password_hash() в файле users.php
// Сравнение введеного пароля и хэшированного происходит в функции checkPassword с помощью password_verify()

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;


if (null !== $login || null !== $password) {
if (checkPassword($login, $password)==true) {
    $_SESSION['auth'] = true; 
    $_SESSION['login'] = $login;
};
};



if ($_SESSION['auth']==true) {
    header('Location: /profile.php');
    die();
};

