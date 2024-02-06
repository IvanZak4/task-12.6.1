<?php

include'./users.php';

function getUserList($users) {
    global $users;
var_dump($users);
};

function existUser($login) {
    global $users;
    foreach ($users as $key => $value) {
        if ($key == $login) {
            print_r('Пользователь с таким логином существует');
        } else print_r('Пользователя с таким логином не существует');
};
};

function checkPassword($login, $password) {
    global $users;
    foreach ($users as $key => $value) {if ($key == $login) {$checkLogin = true;};};
    if (password_verify($password, $users['admin']['password'])) {$checkPassword = true;};
    if ($checkLogin===true AND $checkPassword===true){return true;};
};

function getCurrentUser() {
    global $users;
    if ($_SESSION['auth']==true) {
        print_r($users['admin']['name']);
    } else print null;
};