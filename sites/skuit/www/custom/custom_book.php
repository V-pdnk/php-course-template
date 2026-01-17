<?php

$bookName = "Тихий Дон";
$bookAuthor = "Михаил Шолохов";
$bookYear = 1928;
$bookDescription = " Описывает жизнь донского казачества в один из самых переломных периодов истории России: Первую мировую войну, Революцию 1917 года и Гражданскую войну.";

$studentName = "Влад Ефанов";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $bookName; ?> — Детальная страница</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
            flex-shrink: 0;
        }

        main {
            flex: 1;
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<header>
    <h2>Книжный каталог</h2>
    <p>Студент: <?php echo $studentName; ?></p>
</header>

<main>
    <h1><?php echo $bookName; ?></h1>
    <p>Автор: <?php echo $bookAuthor; ?></p>
    <p>Год издания: <? $bookYear; ?></p>
    <p><?php echo $bookDescription; ?></p>
</main>

<footer>
    <p>Лабораторная работа №10 - <?php echo $studentName; ?></p>
</footer>