<?php
include 'connect.php';

$PartId =$_GET['delete'];
$sql ="DELETE FROM sparepart where PartId =$PartId";
$result= mysqli_query($conn,$sql);

if ($result) {
    //echo"<script>alert('recored deleted')</script>";
    header('location:display.php');
}
else {
    //echo"<script>alert('recored not deleted')</script>";
}


?>