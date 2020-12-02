<?php
include ("../db/config.php");
$sql="SELECT * FROM cu_info";
$result=mysqli_query($myconnection,$sql);

echo '<table border="2px" width="100%"> 
<row> <th width="10%"> Customer Id </th><th width="20%">Name </th><th width="25%"> Email</th><th width="25%"> Password</th><th width="15%"> Action</th></row>';

while($row=mysqli_fetch_array($result))
{
$id=$row['cu_id'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
// for password decodeing $decodepassword=base64_decode($password) or $password=base64_decode($row['password']);

echo '<tr>
<td>'.$id.'</td>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$password.'</td> <td> <a href="../view/edit.php ? id='.$id.'">Edit</a> </td>
<td> <a href="../model/delete.php ? id='.$id.'" onclick="return confirm()">Delete</a> </td></tr>';
}

echo '</table>';

?>

