<?php
include ("../db/config.php");
$id=$_GET['id'];

$sql="SELECT * FROM cu_info WHERE cu_id=$id";
$result=mysqli_query($myconnection,$sql);


while($row=mysqli_fetch_array($result))

{
$id=$row['cu_id'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password']; 
}

 
echo ' <form id="" method= "POST" action="../model/update.php">
<P> Customer id:</p><br>
<input type="text" name="id" value="'.$id.'" readonly >

<P> Customer Name:</p><br>
<input type="text" name="name" value="'.$name.'"  >

<P> Customer Email:</p><br>
<input type="email" name="email" value="'.$email.'" readonly >

<P> Customer Password:</p><br>
<input type="password" name="password" value="'.$password.'" readonly >

<input type="submit" value="Update">

';


?>

