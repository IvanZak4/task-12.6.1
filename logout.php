<?php
function logout(): void
{
    unset($_SESSION['id']);
    unset($_SESSION['login']);
    unset($_SESSION['auth']);
    header('Location: /index.php');
    die();
}

logout();


// redirect('/index.php');


