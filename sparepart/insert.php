<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="PartName">PartName</label>

        <input type="text" name="PartName"><br><br><br>
        <label for="Category">Category</label>
        <input type="text" name="Category">
        <label for="SupplierName">SupplierName</label>
        <input type="text" name="SupplierName">

        <button type="submit" name="submit">submit</button>


    </form>

    <?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        $PartName=$_POST['PartName'];
        $Category=$_POST['Category'];
        $SupplierName=$_POST['SupplierName'];
        
        $sql="INSERT INTO sparepart(PartName,Category,SupplierName)VALUES('$PartName','$Category',' $SupplierName')";
        $result= mysqli_query($conn,$sql);
        if ($result) {
            echo"<script>alert('record added')</script>";
        }
        else {
            echo"<script>alert('record  not added')</script>";
        }
    }
    
    
    ?>
</body>
</html>