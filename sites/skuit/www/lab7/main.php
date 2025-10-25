<?php
/*1. Проверка чётности числа*/
$randNum = rand(1,100);
/*2. Определение наибольшего из двух чисел*/
$randNum1 = rand(1,100);
$randNum2 = rand(1,100);
$bigNum = null;
if($randNum1 == $randNum2):
    $bigNum = $randNum1;
endif;
$bigNum = ($randNum1 > $randNum2) ? $randNum1:$randNum2;
/*3. Сумма чисел от 1 до N*/
?>
<html lang=ru>
    <div class="1">
        <h1>1. Проверка чётности числа</h1>
        <h2>Случайное число: <?= $randNum ?></h2>
        <h2>И это число *барабанная дробь*: <?= ($randNum % 2 == 0) ? "Четное!":"Нечетное!"?></h2>
    </div>

    <div class="2">
        <h1>2. Определение наибольшего из двух чисел</h1>
        <h2>Случайные числа: <?= $randNum1 ?> и <?= $randNum2 ?></h2>
        <h2>В схватке за звание самого большого числа побеждает: <?= $bigNum ?>!</h2>
    </div>

</html>