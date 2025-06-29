<?php
include "../includes/config.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

$q="DELETE FROM tbl_batch WHERE id = $id" ;

$res= mysqli_query($conn,$q);

if($res){
    header("location:view-batch.php");
    exit();
}
}
?>