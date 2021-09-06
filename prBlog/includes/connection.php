<?php
//connection to database
$server = "localhost";
$user = "root";
$password = "";
$database = "prblog";
$db = mysqli_connect('localhost', 'root', '', 'prblog');
if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}
mysql_query($db, "SET NAMES 'utf8'");
?>

