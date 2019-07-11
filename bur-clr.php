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
<title>Student Files</title>
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
        <h3 id="ful">Graduating Stude1nt Clearance System</h3>
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
            <div style="background-color:#b9e5f3;"class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul id="" class="nav nav-pills nav-stacked list" style="padding-left:0px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:18px;">
                <li class=""><a href="reg.php">Student Bio-Data</a></li>
                <li><a href="dept-clr.php">Departmental Clearance</a></li>
                <li class="active"><a href="bur-clr.php">Bursary Clearance</a></li>
                <li><a href="fal-clr.php">Faculty Clearance</a></li>
                <li><a href="clr-status.php">Check Clearance Status</a></li>
                <li><a href="send-mail.php">Send Mail</a></li>
                <li><a href="#">Log Out</a></li>
                </ul>
          	</div>
            </div>
       <div class="col-md-9">
       <br>
       <h4>Bursary Clearance</h4>
       <form style="padding-left:0%;" class="form-group" enctype="multipart/form-data" action="bur-clr.php" method="post">
       <br>
       <div class="form-control">
       <select value="Choose Document" name="name">
       		<option>School Fees Receipt 100L</option>
            <option>School Fees Receipt 200L</option>
            <option>School Fees Receipt 300L</option>
            <option>School Fees Receipt 400L</option>
       </select>
       </div>
       <br>
       <div class="form-control">
       <input type="file" name="file" ></input>
       </div>
       <br>
       <button style="margin-left:60%;" class="btn btn-primary" name="save">Save</button>
       <button style="margin-left:70%; margin-top:-6.5%" class="btn btn-primary" name="">Continue</button>
       
    </form>
    <?php 
	if (isset($_POST["save"])){
		$name = $_POST["name"];
		$image = $_FILES['file']['name'];
		$size=$_FILES['file']['size'];
  		$type=$_FILES['file']['type'];
  		$temp=$_FILES['file']['tmp_name'];
		$userid =$_SESSION['userid'];
		move_uploaded_file($temp,"files/".$image);
    $train = 'img/fees.jpg';
    $compareMachine = new compareImages($train);
    $image1Hash = $compareMachine->getHasString(); 
    $test = 'files/'.$image;
    $image2Hash = $compareMachine->hasStringImage($test); 
    $diff = $compareMachine->compareHash($image2Hash); 
    //echo 'Image 2 Hash :'.$image2Hash.'<br/>';
    //echo 'Different rates (image1 Vs image2): '.$diff;
    if($diff>15){
    echo "<script>alert('Please Try Again, Image not Accepted.... Input a trusted file!!!!!')</script>";
  }
  else{

$query= "INSERT INTO bimage (name,student_id,imagename) VALUES ('$name','$userid','$image')";
if ($conn->query($query) === TRUE){
echo "Success";
}
else{
die($conn->error . mysqli_error());
}
}
}
?>

    
    <style type="text/css">
	#wrapper {
	margin:;
	float: none;
	width:;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
 }


		</style>
<div class="">
		<h5>Uploaded Receipt Files</h5>
		 <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px"> No</th>
				  <th>Name</th>
                  <th>File</th>
               	  <th> Action </th>
                </tr>
              </thead>
              <tbody>
			 	
                 
                              
										<tr>
										<?php 
							$userid = $_SESSION['userid'];
							$query= "SELECT * FROM bimage WHERE student_id ='$userid'";
							$result = $conn->query($query);	
							if ($result->num_rows > 0) {	
							while($row=$result->fetch_assoc()){
							$id=$row['id'];
							$name=$row['name'];
							$image=$row['imagename'];
							?>
					
                                         <td><?php echo $id ?></td>
                                         <td><?php echo $name ?></td>
                                         <td><?php echo $image ?></td>
										 <td>
				<a href="delete.php?del=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
               	
                </td>
               
                </tr>
                 <?php	
				}
											}
				 ?>	
                </tbody>
               
		</table>
</div>	
</div>
    </div>
    

</div>
<footer class="panel-footer" style="background-color:#15ACEC; margin-top:5%;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Cearance System</strong></h5>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>