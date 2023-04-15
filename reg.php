<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Пример обработки форм</title>
</head>
<body>
    <form action="" method = "post">
        <input type="text" name = "test">
        <input type="submit" value = "тестируем!">
    </form> 
    <?php
    if (isset($_POST['test']))
    {
        $test = $_POST['test'];
        echo $test;
        $mysqli = new mysqli("localhost", "root", "root", "lessonweb");

        $result = $mysqli->query("INSERT INTO `testbase`(`id`, `test`) VALUES ('[value-1]','[value-2]')' AS _msg FROM DUAL");
        $row = $result->fetch_assoc();
        echo $row['_msg'];
    }