<?php
session_start();
if ($_GET['logout']) {
    session_destroy();
    header("Location : /logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="logout.php" method="get">
        <button type="submit" name="logout">Выйти</button>
    </form>
    <?php
    if (isset($_SESSION["name"])) {
        echo $_SESSION["name"];
    }
    ?>
</body>

</html>