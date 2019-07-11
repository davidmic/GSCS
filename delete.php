
<?php
extract($_REQUEST);
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connection Failed" . $conn->connect_error);
	}
	
$sql="select * from dimage where id='$del'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
unlink("files/$row[imagename]");
$query = ("delete from dimage where id='$del'");
$result = $conn->query($query);
header("Location:dept-clr.php");

?>