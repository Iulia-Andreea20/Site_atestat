<?php
 
$server = "127.0.0.1";
$database = "utilizator";
$username = "root";
$parola = "";
 
// conectarea la serverul MySQL
$connect = mysql_connect($server,$username,$parola) or die( mysql_error() );
 
// selecteaza baza de date test
$db = mysql_select_db($database,$connect) or die( mysql_error() );
?>