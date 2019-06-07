<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Ваше имя <input type="text" name="imja">
    Ваш возраст <input type="text" name="vozrast">
    <input type="submit" value="ok">
</form>
<?php
$name = $_POST['imja'];
$age = $_POST['vozrast'];

echo "Меня зовут ".$name." и мне ".$age." лет";
?>
</body>
</html>