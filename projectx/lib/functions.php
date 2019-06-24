<?php

function db($sql=null)
{
    if($connection = mysqli_connect("localhost","php", "12345","artem"))
    {
        mysqli_query($connection, "SET NAMES utf8");
    }

    if($sql)
    {
        $result = mysqli_query($connection,$sql);
        return $result;

    }



}

