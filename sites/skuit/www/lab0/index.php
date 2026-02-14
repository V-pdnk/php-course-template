<?php

$position = "developer";
$salary = 2500;
$tooHigh = "Высокая зарплата";
$money = [2500, 2600, 2550];
$isRemote = true;

function isHighSalary(int $salary): bool 
{
    $isHigh = false;
    if($salary > 3000) {
        $bool = true;
    }
    return $isHigh;
}


?>

<!doctype html>

<html lang="ru">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

<p>Длинна строки: <?= mb_strlen($position) ?></p>
<p>Средняя зарплата: 
    <? 
        $n = 0;
        foreach($money as $oneMonth) {
            $n += $oneMonth;
        }
        echo $n / count($money);
    ?>
</p>
<p><? echo $isRemote ? "Удаленная работа" : "Офис"; ?></p>
<p><? echo isHighSalary(5000) ? 'true':'false' ?></p>
<p><? echo isHighSalary(2000) ? 'true':'false' ?></p>

</body>

</html>