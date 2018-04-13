   <?php
          session_start();
          $x="";
          if(empty($_POST['name'])||empty($_POST['user'])||
	      empty($_POST['pass'])|| empty($_POST['email'])||
		  empty($_FILES['image']['name']))
		  {  
			   $name="";
			   $user="";
			   $email="";
			   $pass="";
			   $image="";
			   $x="Please check all the fileds that has filled";
		 }
			else
			{
			   $name= $_POST['name'];
	           $user= $_POST['user'];
	           $pass= $_POST['pass'];
	           $email= $_POST['email'];
	           $image=$_FILES['image']['name'];
	   	}
   ?>
   <?php
	     // create database "Payilagam";
		 // create table "profile"
		 // create columns ( name, user, pass, email, image)
		 
		 $conn=mysqli_connect("localhost","root","","payilagam");
		      
		 $query="insert into profile values('$name','$user','$pass','$email','$image')";
		 $sql=mysqli_query($conn,$query);
		 if($sql)
		 {
			 $_SESSION['success']="Success";
		 }
		 mkdir("images/$email");
		 move_uploaded_file($_FILES['image']['tmp_name'],
		 "images/$email/$image");
		 if($_SESSION['success'])
		 {
			 header("location:upload1.php");
		 }
		 
	 ?>