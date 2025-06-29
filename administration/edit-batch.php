<?php include_once '../includes/header.php';?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit batch Details</h1>
        <?php
        if(isset($_GET["id"])){
            $id = $_GET['id'];
                 $q = "SELECT * FROM `tbl_batch` where id = $id";
                    $res = mysqli_query($conn, $q);
            $row= mysqli_fetch_assoc($res);
          
        }
        ?>
<form method="post">
<div class="container">
    <div class="row">
        <div class="col-lg">
            <input class="form-control" type="text" name="b_name" value="<?php echo $row["name"]?>"/>
        </div>
        <div class="col-lg">
            <input class="btn btn-success" type="submit" value="Update" name="Update"/>
        </div>
    </div>
</div>
</form>
<?php
if(isset($_POST["Update"])){

    $name = $_POST["b_name"];

    $q= "UPDATE `tbl_batch` SET `name`='$name' WHERE id = $id";
    $res = mysqli_query($conn , $q);
    if($res){
        echo "<script>
        window.location.href = 'view-batch.php';
      </script>";
    }
}
?>
                </div>
                <!-- /.container-fluid -->
<?php include_once '../includes/footer.php';?>