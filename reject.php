<?php 
extract($_REQUEST);
session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connection Failed" . $conn->connect_error);
	}
	
?>
<!doctype>
<html>
<head>
<title>
</title>
    <meta charset="utf-8">
    <title>Federal University Lokoja</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>
<body>
<?php
 $query = "update adminreg set hodstatus = 'Disapprove' WHERE id='$id'";
 $result=$conn->query($query);
 header("Location:hod.php");
?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
  <?php
$conn->close();
?>
  </html>             