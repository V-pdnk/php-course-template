<?php


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
</head>
<body>

<h2>Добавить книгу</h2>

<form action="storage.php" method="post">
    <input type="text" name="name" placeholder="Название" required><br><br>
    <input type="text" name="author" placeholder="Автор" required><br><br>
    <input type="text" name="year" placeholder="Год" required><br><br>
    <input type="text" name="description" placeholder="Описание" required><br><br>
    <button type="submit">Сохранить</button>
</form>

</body>
</html>