<?php
include ("../db/config.php");


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<head>
<title><?php echo $title;?></title>

<style>>
#header{left:10%;}
#logo{left:0px;top:0px; position:absolute;width="10.5%";}
</style>
</head>
<body>
<div id="header">


</div>
<div id ="logo"> </div>
<div id="menu">
    
<?php
    include ("menu.php");
    ?>

<div id="bar">

</div>
<div id="container">
<div id="cont">



</div>

</div>

<div id="footer">
<p style="text-align:enter;"> Copy Right || <?php echo $writer;?> </p>

</div>
</body>
</html>