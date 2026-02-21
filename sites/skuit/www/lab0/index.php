<?php

$email = "student@gmail.com";
$score = 85;
$scre = [70, 80, 90];
$hasHomework = false;

function isPassed(int $score): bool
{
    $result = false;
    $score > 60 ? $result = true : $result = false;
    return $result;
}

$exist = false;

for($i = 0; $i < strlen($email); $i++){
    $email[$i] === "@" ? $exist = true : $exist = false;
    if($exist){
        break;
    }
}

$array_sum = array_sum($scre);
$array_sum /= count($scre);



?>

<!doctype html>

<html lang="ru">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>exam</title>

</head>

<body>

    <p>Содержит "@"?: <?php echo($exist ? "Да" : "Нет"); ?></p>
    <p>Больше 60?: <?= $score > 60 ? "Сдал" : "Не сдал"; ?></p>
    <p>Средняя оценка: <?= $array_sum ?></p>
    <p>Сдал ДЗ?: <?= $hasHomework ? "Да" : "Нет"; ?></p>
    <p>Вызов функции: <?php echo(isPassed($score) ? "True" : "False") ?></p>

</body>

</html>