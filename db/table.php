<?php
include ("config.php");
//--------customer info------------


$tbl_student = 'CREATE TABLE IF NOT EXISTS student (
  studentID int(11) NOT NULL,
  PRIMARY KEY (studentID);
  fname varchar(50) NOT NULL,
  lname varchar(50) NOT NULL,
  phone varchar(11) NOT NULL,
  DOB date NOT NULL,
  address varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  street varchar(50) NOT NULL
)';

$student_info= mysqli_query($myconnect,$tbl_student);

if($student_info===TRUE)
    echo "Student table created ";
else
    echo "Student table not created";


$tbl_exam = 'CREATE TABLE IF NOT EXISTS exam (
  exam_no int(11) NOT NULL,
  PRIMARY KEY (exam_no),
  subject varchar(50) NOT NULL,
  studentID int(11) NOT NULL,
  UNIQUE KEY studentID (studentID)
)';

$exam_info= mysqli_query($myconnect,$tbl_exam);

if($exam_info===TRUE)
    echo "Exam table created ";
else
    echo "Exam table not created";


$tbl_cu_info="CREATE TABLE IF NOT EXISTS cu_info(
 cu_id int NOT NULL auto_increment,
    PRIMARY KEY(cu_id),
    name VARCHAR (50),
    email VARCHAR (50),
    password VARCHAR (20)

)";
    $cu_info= mysqli_query($myconnection,$tbl_cu_info);

if($cu_info===TRUE)
    {
    echo "Customer table created ";
}
    else {
    echo "Customer nt table created  ";
}
//------- Product info-------------------

$tbl_product="CREATE TABLE IF NOT EXISTS product(
 p_id int NOT NULL auto_increment,
    PRIMARY KEY(p_id),
    p_name VARCHAR (50) NOT NULL,
   img_name VARCHAR(50) NOT NULL,
   img_path VARCHAR(50) NOT NULL ,
   img_type VARCHAR(50) NOT NULL, 
    quentiy int (50) NOT NULL,
    price int (20) NOT NULL

)";
    $product= mysqli_query($myconnection,$tbl_product);

if($product===TRUE)
    {
    echo "<br>Product table created ";
}
    else {
    echo "product nt table created  ";
}

//------------order table--------------
$tbl_order="CREATE TABLE IF NOT EXISTS cu_order(
 or_id int  NOT NULL auto_increment,
    PRIMARY KEY(or_id),
    cu_id int   NOT NULL,
    p_id int  NOT NULL,
    quentiy int (11) NOT NULL,
    FOREIGN KEY(cu_id) REFERENCES cu_info (cu_id),
    FOREIGN KEY(p_id) REFERENCES product (p_id)
   )";
    $order= mysqli_query($myconnection,$tbl_order);

if($order===TRUE)
    {
    echo "<br>Order table created ";
}
    else {
    echo " <br>Order table not created  ";
}
?>