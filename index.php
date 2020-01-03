<?php 
session_start();
error_reporting(~E_ALL & ~E_NOTICE);
ini_set('display_errors', 'Off');
include("connection.php");
include("query.php");
  if($_SESSION['loginRES']==true){
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<script>
    function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  </script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">Result Analysis </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
           
          <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-user"></i><?php echo $_SESSION['loginRESuname']; echo "['".$_SESSION['loginRESdept']."']" ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
      <!-- login info-->
        <li <?php if(($_GET['reg']=="") or ($_GET['reg']=="dashboard")) {?> class="active" <?php } ?>><a href="index.php?reg=dashboard"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
   
        <li <?php if($_GET['reg']=="import") {?>class="active" <?php } ?>><a href="index.php?reg=import"><i class="icon-list-alt"></i><span>Import Data</span> </a> </li> 


	 
     <li <?php if($_GET['reg']=="report") {?>class="active" <?php } ?>><a href="index.php?reg=report"><i class="icon-list-alt"></i><span>Report</span> </a> </li>
    
     
     <li <?php if($_GET['reg']=="setting") {?>class="active" <?php } ?>><a href="index.php?reg=setting"><i class="icon-code"></i><span>Settings</span> </a> </li>

      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            
            <!-- /widget-header -->
            <div class="widget-content">
            
             <?php
				if(($_GET['reg']=="") or ($_GET['reg']=="dashboard"))
					include("dashboard.php");
				else if($_GET['reg']=="import")
					include("import.php");
				else if($_GET['reg']=="report")
					include("report.php");
				else if($_GET['reg']=="setting")
					include("settings.php");
				
			?>
              
            
            
            
            
            
            </div></div></div></div></div></div></div>




<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12">  <a href="">Designed by : </a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<?php 
}
else {
  include("login.php");
}
?>