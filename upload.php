<form  method="post" action="upload.php" enctype="multipart/form-data">
      <input type="email" required="required" name="email">
	  </input><br><br>
	  <input type="file" name="image"  required="required">
	  </input><br><br>
	  <input type="submit"  name="submit" value="submit">
	  </input><br><br>
</form>

<?php
      $email=$_POST['email'];
      $img=$_FILES['image']['name'];
	  //echo $img;
	  //echo $email;
      $conn=mysqli_connect("localhost","root","","guhan");
	  $query="insert into upload_image values('$email','$img')";
      mysqli_query($conn,$query);
      mkdir("images/$email");
      move_uploaded_file($_FILES['image']['tmp_name'],"images/$email/$img");
?>



