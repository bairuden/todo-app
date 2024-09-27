<?php
$hostname = "localhost";
$username = "root";
$password = " ";
$dbname = "todo";
$conn =  new msqli_connect($hostname,$username,$password,$dbname);
if(!connect){


echo "connection failed";
}
?>
