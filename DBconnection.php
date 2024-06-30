<?php
function connectDB()
{
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "1234";
    $dbname = "bd";

    return mysqli_connect($hostname,$username,$password,$dbname);
}
?>