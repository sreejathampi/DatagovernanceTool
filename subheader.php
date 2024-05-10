<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title>HealthCare DataGovernance Tool</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/dashboard-style.css">	
</head>
<body>

<?php 
       include("includes/database.class.php");

       include("includes/functions.php");

       include("includes/includefunctions.php");
       ?>


	<!-- dashboard home section starts -->
	
    </div><nav class="main-menu">


  
		 <div class="logo">
		 	<a href="index.php">
		 		<img src="img/sinro.png">
		 	</a>
		 </div>
		<div class="scrollbar" id="style-1">
		      
		<ul>
		  
		<li>                                   
		<a href="index.php">
			<img src="img/dashboard/work-time.png">
			<span class="nav-text">My Activities</span>
		</a>
		</li>   
                

		   
		<li class="nav-item has-submenu">
			<a class="nav-link" href="">
				<img src="img/dashboard/to-do-list.png">
				<span class="nav-text">Data Access Control <i class="fas fa-angle-down"></i></span>
			</a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="usercategoryview.php">User Category </a></li>
				<li><a class="nav-link" href="userrolesubcategory.php">User Sub Category </a></li>
				<li><a class="nav-link" href="userview.php">UserManagement </a></li>
				<!-- <li><a class="nav-link" href="assignments.html">My Assignments</a></li>
				<li><a class="nav-link" href="projects.html">My Projects</a></li> -->
			</ul>
		</li>
              <li class="nav-item has-submenu">
			<a class="nav-link" href="">
				<img src="img/dashboard/to-do-list.png">
				<span class="nav-text">Data Access Policies <i class="fas fa-angle-down"></i></span>
			</a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="accesspermissionview.php">Role-Based Access Controls </a></li>
				
			</ul>
		</li>
	

	<li class="nav-item has-submenu">
			<a class="nav-link" href="">
				<img src="img/dashboard/to-do-list.png">
				<span class="nav-text">Data Privacy and Security <i class="fas fa-angle-down"></i></span>
			</a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="usercategoryview.php">Anonymization Rules: Configured </a></li>
				<li><a class="nav-link" href="userrolesubcategory.php">Sensitive Data: Anonymized </a></li>
				
			</ul>
	</li>
	

       <li class="nav-item has-submenu">
			<a class="nav-link" href="">
				<img src="img/dashboard/to-do-list.png">
				<span class="nav-text">Data Sources <i class="fas fa-angle-down"></i></span>
			</a>
		<ul class="submenu collapse">
			<li><a class="nav-link" href="patientrecordsview.php">Patient Records</a></li>
			<li><a class="nav-link" href="healthmonitoringdata.php">Health Monitoring Data</a></li>
			<li><a class="nav-link" href="OperationalandPerformanceData.php">Operational Data</a></li>
			<li><a class="nav-link" href="hipparegulations.php">HIPAA Regulations</a></li>	
			<li><a class="nav-link" href="hipaacompliance.php">HIPAA compliance data</a></li>
		</ul>
	</li>




		<li>                                 
		<a href="invite.html">
			<img src="img/dashboard/invitation.png">
			<span class="nav-text">Invite & Win</span>
		</a>
		</li>   

		<li>                                 
		<a href="profile.html">
			<img src="img/dashboard/user.png">
			<span class="nav-text">Profile</span>
		</a>
		</li>

		<li>                                 
		<a href="logout.php">
			<img src="img/dashboard/logout.png">
			<span class="nav-text">Signout</span>
		</a>
		</li>
		  


	</nav>