<?php
function summa ($a,$b)
{
    $sum = $a+$b;
    echo"сумма чисел ". $a." и ".$b." равна ".$sum."<br>";
}

function uravneniye($chislo,$ravno)
{
    $otvet = $ravno-$chislo;
    echo "x = ".$otvet;

}

summa(153,150);//сумма чисел 5 и 3 равна 8
uravneniye(8,20);

