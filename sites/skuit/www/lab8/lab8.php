<?php

function printHelloWorld(){
    echo "Привет, мир!";
    return 0;
}

function getHelloWorld(){
    return "Привет, мир!";
}

$res = getHelloWorld();

function printHelloWorld2($name){
    echo "Привет, содержимое $name!";
    return 0;
}

function printHelloWorld3($name){
    return "Привет, содержимое $name!";
}

$hello = printHelloWorld3("тест 4");

function calculateTotal($price, $count){
    return $price * $count;
}

function isEven($number){
    $isCheck = ($number % 2 == 0) ? true:false;
    return $isCheck;
}


?>

<html lang="ru">

<h1>test1 <? printHelloWorld() ?></h1>
<h1>test2 <? echo $res ?></h1>
<h1>test3 <? printHelloWorld2("окак") ?></h1>
<h1>test4 <? echo $hello ?></h1>
<h1>test5 <? 
    for($i=0; $i<5; $i++):
        $one = rand(100,10000);
        $two = rand(1,10);
        echo nl2br("\nцена: $one; количество: $two\n");
        echo "итог: " . calculateTotal($one, $two);
    endfor; ?>
</h1>
<h1>test6 <? for($i = 0; $i < 5; $i++):
    $rint = rand(1,100);
    echo "$rint четное? ";
    echo (isEven($rint)) ? "четное":"Не четное";?></br><?
    endfor; ?>
</h1>






</html>