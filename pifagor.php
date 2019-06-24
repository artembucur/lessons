<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form method="post">
    Число строк <input type="text" name="tr">
    Число столбцов <input type="text" name="td">
    <input type="submit" value="Нарисовать таблицу">
</form>



<?php
echo "<table>\n";
for ($i=1;$i<=$_POST['tr'];$i++)
{
    echo "\t<tr>\n";
    for ($t=1;$t<=$_POST['td'];$t++)
    {
            if ($t==1 OR $i==1)
            {
                echo "\t\t<td class='first'>";
                echo "&nbsp;";
            }
            else
            {
                echo "\t\t<td>";
            }
            echo $i*$t;
            if ($t==1)
            {
                echo "&nbsp;";
            }
            echo "</td>\n";


    }
    echo "\t</tr>\n";
}


echo "</table>";

?>

</body>
</html>