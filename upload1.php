
<html>
 <a href="view_image.php"> Login</a>  
      <p>
	      <?php
		       session_start();
		       if(isset($_SESSION['success']))
			   {
				   echo "Success";
			   }
			   else
			   {
				   echo "";
			   }
		  ?>
	  
	  </p>
     <form action="Register.php" method="post" 
	 enctype="multipart/form-data">
	 Name:<input name="name" required><br><br> 
	 User:<input name="user" required><br><br>
	 Pass:<input name="pass" required><br><br>
	 Email:<input name="email" required><br><br>
	 Profile Pics:<input type="file" name="image" required><br><br>
	  <input type="submit" name="submit" value="upload" >
	 </form>
	 
</html>