<?php
// запуск сесси
session_start();

echo '<a href = "news.php"> Перейти на страницу новости</a> </br>';

// сохранение в переменную SESSION
$_SESSION["id_user"] == "admin";

// получаем сохранённые значения из сесии
$user_id = $_SESSION["id_user"];

$name = "Иван";
$age = 30;
$password = "2605";

$_SESSION["name"] = $name;
$_SESSION["age"] = $age;
$_SESSION["name"] = $name;
$_SESSION["pass"] = $password;

echo "Здравствуйте," . $name . " Вам " . $age . " лет ";
echo '<br>';
