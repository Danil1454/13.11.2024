<?php
// Подключение к БД
$db = new PDO (
    'mysql:host=localhost;dbname=new_life;cahrset=utf8',
    'root',
    null,
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
)

?>