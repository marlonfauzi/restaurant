<?php
$host = "localhost";
$user = "root";
$pass = "usbw";
$database= "ifood";
$conecta = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($database) or die (mysql_error());
?>