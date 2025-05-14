<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<button type="submit" class="btn btn-success"><a href="insert.php">create+</a></button>
<body>
    <table class="table table-bordered table-hover table-striped mb-5">
        <tr class="table table-dark">
            <th>ID</th>
            <th>PartName</th>
            <th>Category</th>
            <th>SupplierName</th>
            <th colspan="2">ACTION</th>
        </tr>
        <?php
        include 'connect.php';
        $count="1";
        $sql="SELECT * FROM sparepart";
        $result= mysqli_query($conn,$sql);
        while ($row= mysqli_fetch_assoc($result)) {
            
        ?>
        <tr>
            <td><?php echo $count ++?></td>
            <td><?php echo $row['PartName']?></td>
            <td><?php echo $row['Category']?></td>
            <td><?php echo $row['SupplierName']?></td>
            <td><a href="update.php?update=<?php echo $row['PartId']?>" class="btn btn-info btn-lg">edit</a></td>
            <td><a href="delete.php?delete=<?php echo $row['PartId']?>" class="btn btn-danger btn-lg">delete</a></td>
        </tr>
        <?php
        }?>


    </table>
</body>
</html>