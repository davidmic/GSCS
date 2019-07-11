<?php 
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connedtion Failed" . $conn->connect_error);
	}
	
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Administrator Page</title>
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
        <img src="img/gscs.png" alt="GSCS Logo" style="width:5%; height:100%">
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
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="adminreg.php">Student Registration</a></li>
                <li class=""><a href="#">Student List</a></li>
                <li class=""><a href="#">Staff Registration</a></li>
                <li class=""><a href="#">Staff List</a></li>
                <li><a href="#">View Clearance Progress</a></li>
                <li><a href="#">About</a></li>
                </ul>
          	</div>
            </div>
       <div class="container-fluid">
       <h4 style="padding-left:100px;">Student Registration</h4>
       <form style="padding-left:100px;" class="form-group" action="adminreg.php" method="post">
       <div class="form-control">
       <label for="fn">Matriculation Number: </label>
       <input type="text" id="fn"  name="matno"></input>
       <br>
       <label for="fn">Password: </label>
       <input type="password" id="fn"  name="pass"></input>
       <br>
       <label for="fn">First Name: </label>
       <input type="text" id="fn"  name="fname"></input>
       <br>
       <label for="fn">Last Name: </label>
       <input type="text" id="fn"  name="lname"></input>
       <br>
        <label for="">Status </label>
       <select value="Choose Document" name="sta">
       		<option>Cleared</option>
            <option>Not Cleared</option>
            
       </select>
       
       <br>
             <button style="margin-left:380px;" class="btn btn-primary" name="submit">Save</button>
       </div>
    </form>
    </div>

</div>
<div>
          <img src="img/F.jpeg"  style="width: 400px; height: 300px; float: right; margin-top: 0px; background: transparent;">
        </div>
<?php
if(isset($_POST["submit"])){
	$matricno = $_POST["matno"];
	$password = $_POST["pass"];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$status = $_POST["sta"];
	$hpassword = sha1($password);
	$query = "INSERT INTO adminreg(matric_no,password,hpassword,Status,f_name,l_name) VALUES ('$matricno','$password','$hpassword','$status','$fname','$lname')";
	if($conn->query($query) === TRUE){
    ?>
    <script>
    alert("Student Successfully Registered");
    window.location ("adminreg.php");
    </script>
	<?php
	}else{
    ?>
    <script>
    alert("Student Successfully Registered");
    window.location ("adminreg.php");
    </script>
    <?php
		echo "Error". $query . "<br>" . $conn->error;
	}
	
}
?>

<footer class="panel-footer" style="background-color:#15ACEC; margin-top:24%;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Clearance System</strong></h5>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
$conn->close();
?>
</body>
</html>