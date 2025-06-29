<?php include_once '../includes/header.php';?>
            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class=" text-center mb-5 text-dark ">Batch Add Page</h1>
<form method="post">
<div class="container">
    <div class="row">
        <div class="col-lg">
            <input class="form-control" type="text" name="b_name"/>
        </div>
        <div class="col-lg">
            <input class="btn btn-success" type="submit" name="submit"/>
        </div>
    </div>
    
</div>
</form>
           
<?php
    if(isset($_POST["submit"])){
       $name= $_POST["b_name"];

    $q= "INSERT INTO `tbl_batch`(`name`) VALUES ('$name')";
    $result= mysqli_query($conn,$q);
    if($result){
     echo "<script>
        window.location.href = 'view-batch.php';
      </script>";

    }
   
    }
?>
                </div>
                <!-- /.container-fluid -->
<?php include_once '../includes/footer.php';?>