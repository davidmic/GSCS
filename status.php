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
                <li><a href="clr-status.php">Check Clearance Status</a></li>
                <li><a href="send-mail.php">Send Mail</a></li>
                <li><a href="#">Log Out</a></li>
                </ul>
          	</div>
            </div>
            <?php 
	
//echo $_SESSION['username'];


	//$id = $_SESSION['userid'];

?>
       <div class="col-md-9">
<script language="javascript">
function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes,width=400, height=100%, left=100, top=25";
  var content_vlue = document.getElementById("print_content").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<html><head><title>Graduating Student Clearance System</title>');
   docprint.document.write('</head><body onLoad="self.print()" style="width: 100%; font-size:12px; font-family:arial;">');
   docprint.document.write(content_vlue);
   docprint.document.write('</body></html>');
   docprint.document.close();
   docprint.focus();
}
</script>

      
       <div id="print_content" style="width: 100%;"><br>
       
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
						    $fac = $row['faculty'];
							 $phone = $row['phone_no'];
							   $email = $row['e_mail'];
                $hod = $row['hodstatus'];
                $bur = $row['burstatus'];
                $fal = $row['falstatus'];
                $library = $row['library'];
                $health = $row['health'];
                $sport = $row['sport'];
                $security = $row['security'];
                $sa = $row['studentaffairs'];
                $aa = $row['academicaffairs'];
							?>

        <div class="panel panel-default" style="height: 900px;">
          <div class="panel-heading"> Clearance Status </div>
          <div class="panel-body" style="">
            <center><img src="img/gscs.png" width="60px" height="60px"></center>
        <strong><center>NAME OF THE UNIVERSITY</center></strong>
        <strong><center>Clearance Form(ACADEMIC YEAR)</center></strong> 
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
       <label for="fn">Department: </label>
       <input type="text" id="fn"  name="dept" value="<?php echo $dept; ?>"></input>
       <br>
       <label for="fn">Course of Study: </label>
       <input type="text" id="fn" name="cos" value="<?php echo $cos; ?>"/>
       		  
       <br>
       <label for="fn">Faculty: </label>
       <input type="text" id="fn" name="fal" value="<?php echo $fac; ?>"/>
       		    
       <br>
       <br>
       <h5> Sections Approved</h3>
       <table class="table">
         <tr>
          <td>Hod of Department</td>
          <td><?php echo $hod ?></td>
         <tr>
          <tr>
          <td>Hod of Faculty</td>
          <td><?php echo $fal ?></td>
         <tr>
          <tr>
          <td>University Bursar</td>
          <td><?php echo $bur ?></td>
         <tr>
          <tr>
          <td>University Liberian</td>
          <td><?php echo $library ?></td>
         <tr>
          <tr>
          <td>University Health Service</td>
          <td><?php echo $health ?></td>
         <tr>
          <tr>
          <td>Sport Unit</td>
          <td><?php echo $sport ?></td>
         <tr>
          <tr>
          <td>Security Unit</td>
          <td><?php echo $security ?></td>
         <tr>
          <tr>
          <td>Student Affairs</td>
          <td><?php echo $sa ?></td>
         <tr>
          <tr>
          <td>Academic Affairs</td>
          <td><?php echo $aa ?></td>
         <tr>
       </table>
       <center><a href="javascript:Clickheretoprint()" class="btn btn-primary">Print</a>  

       </div>
     
    </form>

    </div>
    </div>
    </div>
<?php  }
							}
							?>
</div>
</div>
<?php
$conn->close();
?>
<br>
<footer class="panel-footer" style="background-color:#15ACEC; margin-top:1%">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Clearance System</strong></h5>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>