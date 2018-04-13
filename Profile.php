           <a href="logout.php"> Logout</a><br><br>

            <?php
		    session_start();
		    $_SESSION['n']="";
			$_SESSION['u']="";
			$_SESSION['p']="";
			$_SESSION['e']="";
			$_SESSION['i']="";
			$host="localhost";
			$user="root";
			$pass="";
			$_SESSION['pass']=$_POST['pass'];
			$_SESSION['email']=$_POST['email'];
			$conn=mysqli_connect($host,$user,$pass,"payilagam");
			$q=mysqli_query($conn,"select * from profile 
			where email='".$_SESSION['email']."' and 
			pass='".$_SESSION['pass']."'");
			$row=mysqli_fetch_row($q);
			$_SESSION['n']=$row[0];
			$_SESSION['u']=$row[1];
			$_SESSION['p']=$row[2];
			$_SESSION['e']=$row[3];
			$_SESSION['i']=$row[4];
			
			
			if(!$_SESSION['n'])
			{
				header("Location:upload1.php");
			}
			else
			{
			echo $_SESSION['n']."<br>";
			echo $_SESSION['u']."<br>";
			echo $_SESSION['p']."<br>";
			echo $_SESSION['e']."<br>";
			}
			?>
			<img src="images/<?php echo $_SESSION['email'];?>/<?php echo $_SESSION['i'];?>" width="100" height="100" alt="not found"/>