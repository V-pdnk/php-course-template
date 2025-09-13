<?php
    $name = 'Ефанов Влад Вадимович';
    $age = 24;
?>

<title><?= $name?></title>
<?for ($age; $age > 0; $age--):?>
    <p><?= $age?> Статичный текст </p>
<?endfor;?>