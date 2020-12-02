<?php
$host="localhost";
$user="root";
$password="";
$db="shop";
$writer="batch43rd";
$title="batch 43rd";
$myconnection=mysqli_connect($host, $user, $password,$db);
if(mysqli_connect_error())
{
    echo mysqli_connect_error();
}
else{
   // echo "connected";
}

?>