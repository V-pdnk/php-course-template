<?php
$db = new PDO('sqlite:database.sqlite');

$stmt = $db->prepare("INSERT INTO books (name, author, year, description) VALUES (?, ?, ?, ?)");
$stmt->execute([
    $_POST['name'],
    $_POST['author'],
    $_POST['year'],
    $_POST['description']
]);

echo "Данные сохранены<br>";
echo '<a href="add_book.php">Добавить еще одну книгу</br></a>';
echo '<a href="books.php">Вернуться на главный экран</a>';