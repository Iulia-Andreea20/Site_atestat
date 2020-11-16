<?php
$server = "127.0.0.1";
$database = "utilizator";
$username = "root";
$parola = "";
 
// conectarea la serverul MySQL
$connect = mysql_connect($server,$username,$parola) or die( mysql_error() );
 
// selecteaza baza de date test
$db = mysql_select_db($database,$connect) or die( mysql_error() );
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$country=$_POST['country'];
$message=$_POST['message'];

$query="INSERT INTO t11(firstname,lastname,country,message) VALUES ('$firstname','$lastname','$country','$message')";

if (!mysql_query($query)) {
echo "eroare";
die(mysql_error());
} else 
{echo "datele au fost introduse";}

mysql_close($connect);

?>
