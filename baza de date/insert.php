<?php
$server = "127.0.0.1";
$database = "utilizator";
$username = "root";
$parola = "";
 
// conectarea la serverul MySQL
$connect = mysql_connect($server,$username,$parola) or die( mysql_error() );
 
// selecteaza baza de date test
$db = mysql_select_db($database,$connect) or die( mysql_error() );
$Name=$_POST['Name'];
$Mail=$_POST['Mail'];
$query="INSERT INTO t1(Name,Mail) VALUES ('$Name','$Mail')";

if (!mysql_query($query)) {
echo "eroare";
die(mysql_error());
} else 
{echo "datele au fost introduse";}

mysql_close($connect);

?>
