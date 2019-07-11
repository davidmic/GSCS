<?php 
extract($_REQUEST);
$fname=$lname=$mname=$sex=$fal=$dept=$cos=$phone=$email="";
session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connedtion Failed" . $conn->connect_error);
	}
	
?>
 <?php 
			  if(isset($_POST["save"])){ 
	  			$status = $_POST["status"];
	  			$query = "INSERT INTO hodclear(status) VALUES ('$status')";
	  			if ($result = $conn->query($query) === TRUE){
					echo "success";
					}else
					echo "Failed" . mysqli_error();
			  }
		?>
