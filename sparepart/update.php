<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><body>
    <form action="" method="post">



    <?php
    include 'connect.php';
    $PartId=$_GET['update'];
    $sql="SELECT * FROM sparepart WHERE PartId='$PartId' ";
    $result=mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($result);
    if (isset($_POST['submit'])) {

        $PartId=$_GET['update'];
        $PartName=$_POST['PartName'];
        $Category=$_POST['Category'];
        $SupplierName=$_POST['SupplierName'];
        $sql="UPDATE sparepart SET PartName='$PartName',Category='$Category',SupplierName=' $SupplierName' where PartId='$PartId' ";
        $result=mysqli_query($conn,$sql);
        if ($result) {
          //  echo"<script>alert('record update')</script>";
          header('location:display.php');
        }
        else {
       // echo"<script>alert('record update')</script>";
        }
    }
    
    
    ?>
        <label for="PartName">PartName</label>

        <input type="text" name="PartName" value="<?php echo $row['PartName']?>"><br><br><br>
        <label for="Category">Category</label>
        <input type="text" name="Category" value="<?php echo $row['Category']?>">
        <label for="SupplierName">SupplierName</label>
        <input type="text" name="SupplierName" value="<?php echo $row['SupplierName']?>" >

        <button type="submit" name="submit">update</button>


    </form>

</body>
</html>