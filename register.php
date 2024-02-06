<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>

<form class="card" action="process.php" method="post" enctype="multipart/form-data">
    <h2>Авторизация</h2>

    <label for="login">Имя<input type="text" id="login" name="login" placeholder="Логин"></label>
            <div class="grid">
                <label for="password">Пароль<input type="password" id="password" name="password" placeholder="******"></label>
            </div>
                <input name="submit" type="submit" value="Войти">
</form>

</body>
</html>