<?php  
session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connedtion Failed" . $conn->connect_error);
	}
	?>
    <?php

		if(isset($_POST['login3'])){
			$username = $_POST['cname'];
			$password = $_POST['cpass'];
			if (($username === 'HODSTAFF') && ($password === '12345')){
				$_SESSION['login'] = $username;
				header("Location:hod.php");die();
                }elseif(($username === 'BURSARY') && ($password === '12345')){
					$_SESSION['login'] = $username;
					header("Location:bursary.php");die();
					}
					elseif(($username === 'FACULTY') && ($password === '12345')){
					$_SESSION['login'] = $username;
					header("Location:faculty.php");die();
					}
					else
					echo "<script>alert('Invalid Username or Password');</script>";
					header("Location:index.php");
		}
		
		?>
		
