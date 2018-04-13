<?php
    session_destroy();
	if(!$_SESSION['u'])
	{
		header("Location:upload1.php");
	}

?>