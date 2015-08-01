<?php
$hostname="student-db.cse.unt.edu"; //local server name default localhost
$username="sk0732";  //mysql username default is root.
$password="sk0732";       //blank if no password is set for mysql.
$database="sk0732";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>