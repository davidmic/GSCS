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
        <img src="FUL Logo.jpg" alt="Federal University Lokoja" style="width:5%; height:100%">
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
                <li class="active"><a href="#">Staff Registration</a></li>
                <li class="active"><a href="#">Student Registration</a></li>
                <li><a href="#">Clearance Process</a></li>
                <li><a href="#">About</a></li>
                </ul>
          	</div>
            </div>
       <div class="container-fluid">
       <h4 style="padding-left:100px;">Student Registration</h4>
       <form style="padding-left:100px;" class="form-group" action="staffreg.php" method="post">
       <div class="form-control">
        <label for="">Department </label>
       <select value="Choose Document" name="dept">
       		<option>HOD</option>
            <option>Bursary</option>
            <option>Faculty</option>
            
       </select>
       <br>
       <label for="fn">Staff ID: </label>
       <input type="text" id="fn"  name="sid"></input>
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
       
             <button style="margin-left:380px;" class="btn btn-primary" name="submit">Submit</button>
       </div>
    </form>
    </div>

</div>
<?php
if(isset($_POST["submit"])){
	$dept = $_POST["dept"];
	$staffid = $_POST["sid"];
	$password = $_POST["pass"];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$hpassword = sha1($password);
	$query = "INSERT INTO hodtbl(staff_id,password,hpassword,f_name,l_name,dept) VALUES ('$staffid','$password','$hpassword','$fname','$lname','$dept')";
	if($conn->query($query) === TRUE){
		echo ("Record Successfully Added");
	
	}else{
		echo "Error". $query . "<br>" . $conn->error;
	}
	
	
	
}
?>

<footer class="panel-footer" style="background-color:#15ACEC; margin-top:28%;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Clearance System</strong></h5>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
$conn->close();
?>
</body>
</html>