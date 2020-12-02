<?php
include ("../db/config.php");
$sql="SELECT * FROM cu_info";
$result=mysqli_query($myconnection,$sql);

echo '<table border="2px" width="100%"> 
<row> <th width="25%"> Customer Id </th><th width="25%">Name </th><th width="25%"> Email</th><th width="25%"> Password</th></row> </table>
';


while($row=mysqli_fetch_array($result))
{

$id=$row['cu_id'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
// for password decodeing $decodepassword=base64_decode($password) or $password=base64_decode($row['password']);

echo '<table border="2px" width="100%"><tr>
<td>'.$id.'</td>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$password.'</td> <td> <a href="edit.php" ? id='.$id.'>Edit</a> </td></tr>';



}

echo '</table>';

?>

