<?php  
session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connection Failed" . $conn->connect_error);
	}
	?>
    <?php
if(isset($_POST["login"])){
	$matricno = $_POST["matno"];
	$pass = $_POST["spass"];
	$cpass = sha1($pass);

$query= "SELECT * FROM adminreg WHERE matric_no = '$matricno' AND hpassword = '$cpass'";
$result = $conn->query($query);
if(mysqli_num_rows($result) == 1){
	$found_user = mysqli_fetch_assoc($result);

		$_SESSION['userid'] = $found_user['id'];
		$_SESSION['matno'] = $found_user['matric_no'];
		header("Location:reg.php");
		}
else {	
													  	
	echo "<script>alert('Invalid Username or Password');</script>";
		header("Location:index.php");
		}
			
	}

?>
