<?php 
$fname=$lname=$mname=$sex=$fal=$dept=$cos=$phone=$email="";
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
<title>Untitled Document</title>
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
        <img src="img/gscs.png" alt="GSCS" style="width:5%; height:100%">
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
            <h4 style="margin-left:230px">Bursary Clearance</h4>
            <div class="col-md-2" style="border:; background:;">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul id="" class="nav nav-pills nav-stacked list" style="padding-left:0px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:18px;">
                <li class="active"><a href="#">Student List</a></li>
                <li><a href="#">Approved Student</a></li>
                <li><a href="#">Disapproved Student</a></li>
                <li><a href="#">Mail</a></li>
                <li><a href="#">Log Out</a></li>
                </ul>
          	</div>
            </div>
       <div class="col-md-10">
       <br>
       <h4>Student List</h4>
       <form style="padding-left:0%;" class="form-group">
       <table class="table table-bordered">
       <thead>
       <th>No</th>
       <th>Matric No</th>
       <th>Last Name</th>
       <th>First Name</th>
       <th>Decline</th>
       </thead>
       <?php 
	   $yu = "SELECT id, matric_no, l_name, f_name FROM adminreg WHERE falstatus = 'Approve'";
	   $reslt = $conn->query($yu);
	   if ($reslt->num_rows > 0) {	
		while($row=$reslt->fetch_assoc()){
		$id = $row['id'];
		$matric=$row['matric_no'];
		$lname = $row['l_name'];
		$fname = $row['f_name'];
		?>
        <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $matric;?></td>
        <td><?php echo $lname;?></td>
        <td><?php echo $fname;?></td>
		<td><a href='rejectf.php?id=<?php echo $id?>'><span class='glyphicon glyphicon-remove' style="font-size:30px; color:red"></span></a></td>
            
	
            </tr>
        <script>
        </script>
		<?php }
	   }
	   ?>
      
   
      
       </table>
       </form>
       <br>
       
	     
       
    
</div>
    </div>
    

</div>
<footer class="panel-footer" style="background-color:#15ACEC; margin-top:10%;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Cearance System</strong></h5>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>