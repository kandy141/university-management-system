<?php
session_start();
if(!isset($_SESSION['roll']) ){
if($_SESSION['user_account']==1)
header("Location: login.php");
}
?>
<html>
<head>
 <style>
     #signoutlink, #reg, #exam, #fee, #event
	   {
         display: block;
		 height: 30px;
		 width: 100px;
		 font-weight:bold;
         font:20px sans-serif;
		 box-shadow:3px 3px 3px 3px #000;
		 border: 1px solid #000;
		 padding: 5px 5px 5px 5px;
		 border-radius:7px;
		 background-color:#A5A1A0;
		 foreground-color:black;
		 text-decoration: none;
       } 
     #signoutlink:link { color: black; }
	 #signoutlink:active { color: black; }
	 #signoutlink:visited { color: black; }
	 #signoutlink:hover { color: black; } 

	 #reg, #exam, #fee, #event {width: 70%; text-decoration: none}
	 #heade {
	background-color: rgb(74,0,0);
	border-bottom: double 3px #aba;
	border-left: solid 0px #9a9;
	border-right: solid 0px #565;
	border-top: solid 1px #9a9;
	font: italic normal 230% 'Times New Roman', Times, serif;
	letter-spacing: 0.16em;
	margin: 0;
	padding: 15px 10px 15px 60px;
	color:white;
   }
 </style>
</head>
 <body>
  <div id="heade" style="width:100%;height=10%">University Management System<br>Administrator Account</div>
   <div id="container" style="width:100%">
	   <div style="width:100%;height=3%">
		  <h2><i>
		    <?php 
		       echo "<br>&nbsp &nbsp Welcome  Mr.".$_SESSION['roll'];
		    ?>
		  </i></h2>
      </div>
      <div style="width:100%;height:2%;margin-left:60%">	  
		<a href="logout.php" id="signoutlink"><b>SIGN-OUT</b></a>
	  </div>
	  <div style="height:100%;width:20%;float:left">
      </div>
	  <div id="menu" style="width:25%;float:left;">
      <br><br><h2>&nbsp &nbsp &nbsp &nbsp HOME</h2><br>
      <a href="admin_stud_registration.php" id="reg"><b>Register Students</b></a><br>
      <a href="admin_exam_schedule.php" id="exam"><b>Exam Scheduling</b></a><br>
      <a href="admin_fee_fixation.php" id="fee"><b>Student Fee Fixation</b></a><br>
	  <a href="admin_event_manage.php" id="event"><b>Add Events</b></a>
	  </div>
      <div id="content" style="width:40%;float:left;">
	  <br><br><br>
       <marquee onmouseover='this.stop();' onmouseout='this.start();' direction="right" behavior="slide"  scrollamount="15" >
		 			 
				<img src="1.jpg" width="500" height="300" />
				<img src="2.jpg" width="500" height="300" />
				<img src="3.jpg" width="500" height="300" />
				<img src="4.jpg" width="500" height="300" />
				<img src="5.jpg" width="500" height="300" />
				<img src="6.jpg" width="500" height="300" />
				<img src="7.jpg" width="500" height="300" />
				
       </marquee>
	  </div>
   </div> 
 </body>
</html>