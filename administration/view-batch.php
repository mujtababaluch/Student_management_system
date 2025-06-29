<?php include_once '../includes/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="text-center mb-5 text-dark">View Batches Page</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $q = "SELECT * FROM `tbl_batch`";
                    $res = mysqli_query($conn, $q);

                    while($row = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td>
                            <a href="edit-batch.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="delete-batch.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" ">Delete</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

<?php include_once '../includes/footer.php'; ?>
