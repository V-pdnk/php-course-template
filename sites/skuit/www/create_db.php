<?php
$db = new PDO('sqlite:database.sqlite');

$db->exec("
    CREATE TABLE IF NOT EXISTS books (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        author TEXT NOT NULL,
        year TEXT NOT NULL,
        description TEXT NOT NULL
    )
");

echo "База данных создана";