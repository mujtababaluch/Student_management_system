<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "student_management_system";

$conn = mysqli_connect($host,$username,$password,$db_name);

if(!$conn){
    die("Connection Failed!!".mysqli_connect_error());
}

?>