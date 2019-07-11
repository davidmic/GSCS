<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Graduating Student Clearance System</title>
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
        <img src="img/GSCS.png" alt="GSCS Logo" style="width:5%; height:100%">
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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Clearance</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact Us</a></li>
                </ul>
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px">login</button>
				<div class="modal fade" id="modal-dept">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3>Log in</h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
								<ul class="nav nav-pills">
									<li class="active"><a data-toggle="pill" href="#home">Student</a></li>
									<li><a data-toggle="pill" href="#menu2">Clearance Staff</a></li>
									<li><a data-toggle="pill" href="#menu1">Admin</a></li>

								</ul>
								<div class="tab-content">
									<!-- Student -->
									<div id="home" class="tab-pane fade in active">
										<h3>Student</h3>
										<form method="post" action="studentlogin.php">
											<div class="form-group">
												<input type="text" class="form-control" name="matno" placeholder="Matriculation Number">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="spass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-department" name="login">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
                                        

									</div>
									<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>Admin</h3>
										<form method="post" action="adminlogin.php">
											<div class="form-group">
												<input type="text" class="form-control" name="admin_username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="adminpass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-admin" name="login2">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									<!-- Clearance Staff -->
									<div id="menu2" class="tab-pane fade">
    									<h3>Clearance Staff</h3>
										<form method="post" action="stafflogin.php">
                                        	<div class="form-group">
												<select type="text" class="form-control" name="staff" placeholder="Department">
                                                	<option>Faculty</option>
                                                    <option>Bursary</option>
                                                    <option>HOD</option>
                                                    
                                                </select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" name="cname" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="cpass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-faculty" name="login3">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 	
                </div>
          </nav>
          </div>
          		

        <div class="container">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
        
          <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/two.jpg" alt="one">
        </div>
    
        <div class="item">
          <img src="img/three.jpg" alt="two">
        </div>
    
        <div class="item">
          <img src="img/four.jpg" alt="three">
        </div>
    
        <div class="item">
          <img src="img/five.jpg" alt="four">
        </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      </div> 

<footer class="panel-footer" style="background-color:#15ACEC; margin-top:70px;">
<h5 style="text-align:center; color:white"><strong>Mike(c)2018 Graduating Student Clearance System</strong></h5>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
