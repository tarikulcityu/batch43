<?php
include ("../db/config.php");


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<head>
<title><?php echo $title;?></title>
  <body>
      <h1>  Add your Product Information</h1>
      <form id="product" name="product" enctype="multipart/form-data" method="post" action="../model/addproduct.php">
      
      <p> Product Name</p> <br>
          <input type="text" id="pname" name="pname" placeholder="Write your product name"><br>
          <p> Upload product image</p> <br>
          <input type="file" id="img" name="img" ><br>
          <p> quentity</p><br>
        <input type="number" id="quentity" name="quentity" placeholder="Write your product quentity"><br>
     <p> Product Price</p><br>
        <input type="number" id="price" name="price" placeholder="Write your product price"><br>

          <input type="submit" name="btn_upload" value="Add product">
      
      </form>
      
    </body>
    
    <div id="footer">
<p> Copy Right || <?php echo $writer;?> </p>

</div>
</body>
</html>