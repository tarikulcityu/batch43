<?php
include ("../db/config.php");


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<head>
<title><?php echo $title;?></title>
  <body>
<div id="menu">
<?php  include ("menu.php");?>
</div>
      
    
<div id="cont">

<?php  
include ("../model/viewcuinfo.php");


?>


</div>
    
    <div id="footer">
<p> Copy Right || <?php echo $writer;?> </p>

</div>
</body>
</html>