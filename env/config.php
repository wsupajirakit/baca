<?php

try
{
    $servername = "localhost";
    // $username = "root";
    // $password = "";
    $username = "root";
    $password = "";
    $dbname = "bacara_db";

    $objCon = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_select_db($objCon,$dbname);
}
catch(Exception $e)
{
    echo $e->getmessage();
}
?>