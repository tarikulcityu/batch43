<?php
include ("../db/config.php");


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<head>
<title><?php echo $title;?></title>
  <body>
      <h1>  Add your information</h1>
      <form id="signup" name="signup" method="post" action="../model/insert.php">
      
      <p> Customer Name</p> <br>
          <input type="text" id="name" name="name" placeholder="Write your name">
          <p> Customer Email</p> <br>
          <input type="email" id="email" name="email" placeholder="Write your email">
          <p> Customer Password</p> <br>
          <input type="password" id="password" name="password" placeholder="Write your password">
          <input type="submit" value="Signup">
      
      </form>
      
    </body>
    
    <div id="footer">
<p> Copy Right || <?php echo $writer;?> </p>

</div>
</body>
</html>