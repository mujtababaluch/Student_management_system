<?php include_once '../includes/header.php';?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Student add Page</h1>
<form method="post" enctype="multipart/form-data">
      <div class="container">
    <div class="row">
        <div class="col-lg">
            <input class="form-control"  type="text" name="s_name"/>
        </div>
        <div class="col-lg">
            <Select class="form-control" name="batch_id">
                <option value="">Select Batch</option>
                <?php 
                      $q = "SELECT * FROM `tbl_batch`";
                    $res = mysqli_query($conn, $q);

                    while($row = mysqli_fetch_assoc($res)) {
                ?>
                <option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
            <div class="col-lg">
            <input class="form-control"  type="file" name="img"/>
        </div>

        <div class="col-lg">
            <input class="btn btn-success" type="submit" name="submit"/>
        </div>
    </div>
    
</div>
</form>

<?php 
    if(isset($_POST["submit"])){
            $name = $_POST["s_name"];
            $batch = $_POST["batch_id"];
            $imagename= $_FILES["img"]["name"];
            $tempimage =$_FILES["img"]["tmp_name"];
            
            $targetdir = "uploads/";
            $targetfile = $targetdir . basename($imagename);

            if(move_uploaded_file($tempimage ,$targetfile)){
                $q = "INSERT INTO `tbl_students`(`student_name`, `student_batch`, `student_image`) VALUES ('$name','$batch','$imagename')";
                $res= mysqli_query($conn,$q);
                if($res){
                    echo "<Script>
                        window.alert('Record Added')
                    </script>";
                } 
            }
            else{
                echo "file upload erroe";
            }
    }
?>
                </div>
                <!-- /.container-fluid -->
<?php include_once '../includes/footer.php';?>