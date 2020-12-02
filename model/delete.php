<?php


include ("../db/config.php");
$id=$_GET['id'];

$sql="DELETE FROM cu_info WHERE cu_id=$id";
$result=mysqli_query($myconnection,$sql);
header ("location:../view/customerdetails.php ");


?>