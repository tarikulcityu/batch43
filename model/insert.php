<?php
include ("../db/config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=base64_encode($_POST['password']);

$sql=" INSERT INTO cu_info(name,email,password) VALUES ('$name','$email','$password')";

$result=mysqli_query($myconnection,$sql);
/*if($result===TRUE)
{
    echo ("Data added");
}
else 
{
     echo ("Data not added");
    
}*/


$host="localhost";
$user="root";
$password="";
$db="student";

$myconnect=mysqli_connect($host,$user,$password,$db);


$student_id=$_POST['id'];
$student_name=$_POST['name'];

//To Insert Student Information in database

$insert_sql="INSERT INTO student_info(std_id,std_name) VALUES ('$student_id','$student_name')";
$insert_result =mysqli_query($myconnect,$insert_sql);

//To Update Student Information in database

$update_sql="UPDATE student_info SET std_name='$student_name' WHERE std_id='$student_id'";
$update_result =mysqli_query($myconnect,$update_sql);

//To Delete Student Information in database

$delete_sql="DELETE FROM student_info WHERE std_id='$student_id'";
$delete_result =mysqli_query($myconnect,$delete_sql);

//To VIEW Student Information from database

$view_sql="SELECT std_name FROM student_info WHERE std_id='$student_id'";
$view_result =mysqli_query($myconnect,$view_sql);

$row=mysqli_fetch_row($view_result)

















header ("location:../view/customerdetails.php ? name=$name");
?>


