<?php 
extract($_REQUEST);
session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connection Failed" . $conn->connect_error);
	}
	
?>
<!doctype html>
<html>	
<head>
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
<div class="container-fluid">
     
     <div id="head" class="">
        <header>
        <img src="img/gscs.png" alt="GSCS" style="width:5%; height:100%">
        <h3 id="ful">Graduating Student Clearance System</h3>
        </header>
    </div>
    
     <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav nav-pills" style="padding-left:100px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:18px;">
                <li><a href="#">Home</a></li>
                <li class=""><a href="#">Student Registration</a></li>
                <li><a href="#">Clearance Process</a></li>
                <li><a href="#">NNN</a></li>
                </ul>
          	</div>
            </div>
            <?php
//$id = $_SESSION['id'];
$sql="select matric_no, f_name, l_name from adminreg where id='$del'";
$rest = $conn->query($sql);
if ($rest->num_rows > 0) {	
	while($row=$rest->fetch_assoc()){
	$matric	= $row['matric_no'];
	$fname=$row['f_name'];
	$lname=$row['l_name'];
	
	?>

       <div class="container-fluid">
       <h4 style="padding-left:100px;">Student Departmental Receipt</h4>
       <form style="padding-left:100px;" class="form-group" action="adminreg.php" method="post">
       <div class="form-control">
       <label for="fn">Matriculation Number: </label>
       <input type="text" id="fn"  name="matno" disabled value="<?php echo $matric; ?>";></input>
       
       <label for="fn">First Name: </label>
       <input type="text" id="fn"  name="fname" disabled value="<?php echo $fname; ?>"></input>
        <label for="fn">Last Name: </label>
       <input type="text" id="fn"  name="lname" disabled  value="<?php echo $lname; ?>"></input>
       
       
       <?php
       	}
}
?>
    </form>
    </div>

</div>

<br>
<?php 
//$id = $_SESSION['id'];
$sql="select * from fimage where student_id='$del'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {	
	while($row=$result->fetch_assoc()){
	$name=$row['name'];
	$image=$row['imagename'];
	
	
	?>
    <div class="col-sm-6 col-md-5" style="padding-left:120px;">
     	<div class="thumbnail">
        <?php echo $name; ?>
    <img src="files/<?php echo $image ?>" style="height:200px">
    </div>
  </div>

<?php 
}
	}
?>
<footer class="panel-footer" style="background-color:#15ACEC; margin-top:33%;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Clearance System</strong></h5>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
$conn->close();
?>
</body>
</html>