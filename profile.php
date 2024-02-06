<?php
session_start();
include_once'./functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Салон красоты</title>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_logo">Paradise</div>

            <nav class="nav">

            <a class="nav_link" href="logout.php">Выйти</a>
            </nav>
        </div>
    </div>
</header>


<div class="intro">
    <div class="container">
        <div class="intro_inner">
        <h1 class="intro_title">Добро пожаловать в Рай, <?php getCurrentUser(); ?></h1>
        </div>
</div>
</div>

<div class="section">
    <div class="container">

        <div class="section_header">
        <h2 class="section_title">О нас</h2>
            <div class="section_text">
                <p>
                Центр Здоровья и Красоты «Paradise» был открыт в 1998 году.<br> Наша команда профессионалов находится в неустанном поиске последних достижений индустрии красоты. С Российских и Европейских выставок и конференций мы привозим новые разработки ведущих мировых косметологических брендов.<br> Центр Здоровья и Красоты «Paradise» — настоящий райский уголок, объединивший высокие технологии Запада и утонченную чувственность Востока. Это идеальное место для отдыха, заботы о своем здоровье, теле и внешности и для женщин, и для мужчин. Он не оставит равнодушным даже самого взыскательного посетителя.
                </p>
            </div>
        </div>

        <div class="about">
            <div class="about_item">
                <img src="./images/about1.webp" alt="" width="372" height="250">
            </div>
            <div class="about_item">
                <img src="./images/about2.webp" alt="" width="372" height="250">
            </div>
            <div class="about_item">
                <img src="./images/about3.webp" alt="" width="372" height="250">
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">

        <div class="section_header">
        <h2 class="section_title">Услуги</h2>
            <div class="section_text">
                <p>
                    
                        <li>Чистка лица ( ручная и ультразвуковая)</li>
<li>Химический пилинг</li>
<li>Массаж лица</li>
<li>Шугаринг</li>
<li>Татуаж</li>
<li>Косметические инъекции для омоложения</li>
<li>LPG массаж (Lift M6 – безоперационная подтяжка лица)</li>
<li>RF-лифтинг</li>
<li>Микротоковая терапия</li>
<li>Дерматония</li>
<li>Ламинирование ресниц Yumi LASHES</li>
<li>Ламинирование бровей</li>
                </p>
            </div>
        </div>

        
    </div>
</div>

<div class="section">
    <div class="container">

        <div class="section_header">
        <h2 class="section_title">Акции</h2>
            <div class="section_text">
                <p>
                Только с 01.02.2024 по 25.02.2024 при покупке Сертификата на сумму более 5000 руб. - предоставляется скидка 10%!
                </p>
            </div>
        </div>

        
    </div>
</div>
</body>
</html>