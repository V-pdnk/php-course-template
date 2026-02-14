<?php

$movie = "avatar";
$age = 15;
$accessDenied = "Доступ запрещен";
$soldTickets = [10, 20, 15];
$hasTicket = true;

function canWatch(int $age) : bool {
    $access = false;
    if ($age >= 16) {
        $access = true;
    } 
    return $access;
}

?>

<!doctype html>

<html lang="ru">
<h1><?= strtoupper($movie)?></h1>
<p>Доступ: <?php echo (canWatch($age) ? 'Доступ разрешен' : 'Доступ запрещен'); ?></p>
<p>Проданно билетов: <?=  count($soldTickets); ?></p>
<p><? if($hasTicket) {
        echo  "Приятного просмотра!";
    }
    ?></p>
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

 

</body>

</html>