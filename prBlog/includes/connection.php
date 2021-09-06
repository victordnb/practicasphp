<?php
//connection to database
$server = "localhost";
$user = "root";
$password = "";
$database = "blog";
$db = mysqli_connect('localhost', 'root', '', 'blog');
if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}
mysqli_query($db, "SET NAMES 'utf8'");
?>

