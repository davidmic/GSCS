<?php 

session_start();
$conn = new MySQLi("localhost","root","","project");
if($conn->connect_error){
	die ("Connedtion Failed" . $conn->connect_error);
	}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Bio-Data</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content=" IE=edge">
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
    <br>
    <br>
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
            <div class="col-md-3" style="border:; background:;">
            <div style="background-color:#b9e5f3;" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul class="nav nav-pills nav-stacked" style="padding-left:0px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:18px;">
                <li class="active"><a href="reg.php">Student Bio-Data</a></li>
                <li><a href="dept-clr.php">Departmental Clearance</a></li>
                <li><a href="bur-clr.php">Bursary Clearance</a></li>
                <li><a href="fal-clr.php">Faculty Clearance</a></li>
                <li><a href="status.php">Check Clearance Status</a></li>
                <li><a href="send-mail.php">Send Mail</a></li>
                <li><a href="#">Log Out</a></li>
                </ul>
          	</div>
            </div>

                        <?php 
	
//echo $_SESSION['username'];


if(isset($_POST["sub"])){
	$matric_no = $_POST["mno"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$mname = $_POST["mname"];
	$sex = $_POST["sex"];
	$dept = $_POST["dept"];
	$cos = $_POST["cos"];
	$fal = $_POST["fal"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$id = $_SESSION['userid'];
	$query = "update adminreg set f_name = '$fname', l_name = '$lname',m_name = '$mname',sex = '$sex',dept = '$dept',cos = '$cos',faculty = '$fal',phone_no = '$phone',e_mail = '$email' WHERE id = '$id'";
	if($conn->query($query) === TRUE){
		echo "<script>alert('Updated Successfully')</script>";
	}else{
		echo "Error". $query . "<br>" . $conn->error;
	}
	
	
}

?>
       <div class="col-md-9">
        <div>
          <img src="img/g.jpeg"  style="width: 400px; height: 300px; float: right; margin-top: 90px; background: transparent;">
        </div>
       	<?php 
							$userid = $_SESSION['userid'];
							$query= "SELECT * FROM adminreg WHERE id ='$userid'";
							$relt = $conn->query($query);	
							if ($relt->num_rows === 1) {	
							while($row=$relt->fetch_assoc()){
							$matno=$row['matric_no'];
							$fname=$row['f_name'];
							$lname=$row['l_name'];
							$mname = $row['m_name'];
							$sex = $row['sex'];
							$dept = $row['dept'];
							$cos = $row['cos'];
							$fal = $row['faculty'];
							$phone = $row['phone_no'];
							$email = $row['e_mail'];
							?>
       <h4>Student Bio-Data</h4>
       <form style="padding-left:0%;" class="form-group" action="" method="post">
       <div class="form-control">
       <label for="fn">Matriculation No: </label>
       <input type="text" id="fn"  name="mno" value="<?php echo $matno;?>"></input>
       <br>
       <label for="fn">First Name: </label>
       <input type="text" id="fn"  name="fname" value="<?php echo $fname;?>"></input>
       <br>
       <label for="fn">Last Name: </label>
       <input type="text" id="fn"  name="lname" value="<?php echo $lname; ?>"></input>
       <br>
       <label for="fn">Middle Name: </label>
       <input type="text" id="fn"  name="mname" value="<?php echo $mname; ?>"></input>
       <br>
       <label for="fn">Sex: </label>
       <select id="fn" name="sex" value="<?php echo $sex; ?>">
       		<option>Male</option>
            <option>Female</option>
       </select>
       <br>
       <label for="fn">Department: </label>
       <input type="text" id="fn"  name="dept" value="<?php echo $dept; ?>"></input>
       <br>
       <label for="fn">Course of Study: </label>
       <select id="fn" name="cos" value="<?php echo $cos; ?>">
       		<option>Computer Science</option>
       </select>     
       <br>
       <label for="fn">Faculty: </label>
       <select id="fn" name="fal" value="<?php echo $fal; ?>">
       		<option>Science</option>
       </select>     
       <br>
       <label for="fn">Phone Number: </label>
       <input type="text" id="fn" name="phone" maxlength="11" value=<?php echo $phone; ?>></input>
      	<br>
       <label for="fn">Email Address: </label>
       <input type="email" id="fn"  name="email" value="<?php echo $email;?>"></input>
      	<br>
       <button style="margin-left:380px;" class="btn btn-primary" name="sub">Update</button>
       </div>
      
    </form>
    </div>
<?php }
							}
							?>
</div>

<footer class="panel-footer" style="background-color:#15ACEC; margin-top:11%;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Clearance System</strong></h5>
</footer>
<?php
$conn->close();
?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>