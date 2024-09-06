<?php
$s="localhost";
$u="root";
$p="";
$db="user";
$coon=mysqli_connect($s,$u,$p,$db);
if(!$coon)
{
    die("connection failed".mysqli_connect_error());
}


?>
