<?php  
session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connedtion Failed" . $conn->connect_error);
	}
	?>
    <?php

		if(isset($_POST['login2'])){
			$username = $_POST['admin_username'];
			$password = $_POST['adminpass'];
			if (($username === 'admin') && ($password === 'admin')){
				$_SESSION['login'] = $username;
				header("Location:adminreg.php");die();
                }
				
			if($username === 'admin')$userError = 'invalid USERNAME';
			if($password === 'admin')$passError = 'invalid PASSWORD';
				
				}
			
				
		
		?>
		
