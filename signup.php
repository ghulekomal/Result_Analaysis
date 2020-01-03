<?php
error_reporting(~E_ALL & ~E_NOTICE);
include("connection.php");
include("query.php");
?>
<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Signup </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.php">
				RESULT ANALYSIS				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="index.php" class="">
							Already have an account? Login now
						</a>
						
					</li>
					<li class="">						
						<a href="index.php" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="" method="post">
		
			<h1>Student Registration</h1>			
			
			<div class="login-fields">
				<div class="field">
					<label for="enrolment no">Enrolment No:</label>
					<input type="text" required id="enrol" name="enrol" value="" placeholder="Enrolment No" class="login" />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="firstname">First Name:</label>
					<input type="text" required id="firstname" name="firstname" value="" placeholder="First Name" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Last Name:</label>	
					<input type="text" required id="lastname" name="lastname" value="" placeholder="Last Name" class="login" />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="collage">Collage:</label>
					<input type="text" id="college" name="college" value="" placeholder="Collage" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="Department">Department:</label>
					<select name="Dept"  class="form-control" id="Dept" placeholder="Department">
					<option value="IT">INFORMATION TECHNOLOGY</option>
					<option value="COMP">COMPUTER</option>
					<option value="E&TC">ELECTRONIS</option>
					<option value="ELECTRICAL">ELECTRICAL</option>
					<option value="CIVIL">CIVIL</option>
					<option value="MECH">MECHANICAL</option>
					</select>
					
					<div class="field">
					<label for="year">year:</label>
					<select name="year" id="year" placeholder="year">
					<option value="FY">FY</option>
					<option value="SY">SY</option>
					<option value="TY">TY</option>
					</select>
					
					
						<div class="field">
					<label for="Examtype">Exam Type:</label>
					<select name="exam" id="exam" placeholder="Exam Type">
					<option value="SUMMER">Summer</option>
					<option value="WINTER">Winter</option>
					
					</select>
						<div class="field">
					<label for="Pattern">Pattern:</label>
					<select name="Patt" id="Patt" placeholder="Pattern">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
					<option value="F">F</option>
					<option value="G">G</option>
					
                    </select>
				<div class="field">
					<label for="sem">Semester:</label>	
					<input type="text" required id="seme" name="seme" value="" placeholder="Semester" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="Username">User Name:</label>	
					<input type="text" id="uname" required name="uname" value="" placeholder="User Name" class="login" />
				</div> <!-- /field -->
				</div> <!-- /field -->
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" required name="password" value="" placeholder="Password" class="login"/>
				</div> <!-- /field -->
				
				
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				<input type="submit" name="btn_reg" value="Register" class="button btn btn-primary">
				
			</div> <!-- .actions -->
			 
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="index.php">Login to your account</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
