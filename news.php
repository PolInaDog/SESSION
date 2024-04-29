<?php
session_start();
echo '<a href = "/index.php.php"> Перейти на главную страницу новости</a> </br>';

$name = $_SESSION["name"];
$age = $_SESSION["age"];

unset($_SESSION['pass']);


echo "Здравствуйте," . $name . " Вы на странице " . $_SESSION['REQUEST_URI'];
echo '<br>';
if (isset($_SESSION["pass"])) {
    echo $_SESSION["pass"];
} else {
    echo "Пароль удалён";
}
