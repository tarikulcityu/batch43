<?php
include ("../db/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql=" UPDATE cu_info SET cu_id='$id',name='$name',email='$email',password='$password' WHERE cu_id=$id";

$result=mysqli_query($myconnection,$sql);



header ("location:../view/customerdetails.php ");
?>
