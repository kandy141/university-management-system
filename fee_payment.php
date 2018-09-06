<?php
session_start();
if(!isset($_SESSION['roll'])){
  header("Location: login.php");
  }
?>
<html>
 <head>
    <script>
     function myFunction()
      {
		var y=document.myform.sem_option.selectedIndex;
        if(y>=1)
		  { 		
	          return true; 			 
		  }
		else
		  {
			alert("No empty fields please !!");
			return false;
		  }    
		var texts=document.getElementsByTagName('input')
		for (var item=0; item<texts.length; item++)
		if (texts[item].type=='text')
			texts[item].value=''
      } 
	 	 
   </script>
   <style>
	  #update 
	   {
	     font-size:2em;
		 box-shadow:3px 3px 3px 3px #000;
		 border-radius:7px
	   }
	  #homelink, #signoutlink
	   {
         display: block;
		 height: 80px;
		 width: 110px;
		 box-shadow:3px 3px 3px 3px #000;
		 border: 1px solid #000;
		 padding: 5px 5px 5px 5px;
		 border-radius:7px;
		 background-color:#A5A1A0;
		 foreground-color:black;
		 text-decoration: none;
       } 
      #signoutlink {width: 160px;}
     #homelink, #signoutlink:link { color: black; }
	 #homelink, #signoutlink:active { color: black; }
	 #homelink, #signoutlink:visited { color: black; }
	 #homelink, #signoutlink:hover { color: black; } 
	 
   #heade {
	background-color: rgb(74,0,0);
	border-bottom: double 3px #aba;
	border-left: solid 1px #9a9;
	border-right: solid 1px #565;
	border-top: solid 1px #9a9;
	font: italic normal 230% 'Times New Roman', Times, serif;
	letter-spacing: 0.16em;
	margin: 0;
	padding: 15px 10px 15px 60px;
	color:white;
   }
   
   #sem_option {
    border: 3px solid #CCCCCC;
  font:15px sans-serif;
  font-weight:bold;
  background-color: #FFFFFF;
  width: 160px;
  height:40px;
  padding:5px;
  }
  
  </style>
 </head>
 
 <body>   
    <form name="myform" action="fee_update.php" method="post" onsubmit="return myFunction()">
   <div id="container" style="width:100%">
      <div id="header" >
		<br><br><h1 id="heade" style="margin-bottom:0;margin-left:5%"> Fee Payment !! </h1><br>
	  </div>
	  <div style="margin-left:8%">
		  <h2><i>
		    <?php 
		       echo "Welcome  ".$_SESSION['roll'];
		    ?>
		  </i></h2>
      </div>		  
	  <div style="width:25%;height:100%;float:left">
	  </div><br><br>
	  <div id="menu" style="width:40%;float:left;">
	  
	  <?php
       $con=mysql_connect("localhost","root","");
       if(!$con)
          die("connection".mysql_error());
       mysql_select_db("SAD_project",$con);
	   $rollno=$_SESSION[roll];
       $sql=mysql_query("select * from fee_payment_details where roll_no='$rollno'");
       $row=mysql_fetch_array($sql);
	   echo "<span style='font-weight:bold;font-size:130%'>Your Total Fee Amount : ".$row['fee']."</span>";
	  ?>
	  <br><br>
	  <select id="sem_option" name='sem_option' style="margin-left:10%">
		<option name="none" value=0>----SELECT----</option>
		<option name="sem1" value=1>Semester-1</option>
		<option name="sem2" value=2>Semester-2</option> 
		<option name="sem3" value=3>Semester-3</option> 
		<option name="sem4" value=4>Semester-4</option> 
		<option name="sem5" value=5>Semester-5</option>
		<option name="sem6" value=6>Semester-6</option> 
		<option name="sem7" value=7>Semester-7</option> 
		<option name="sem8" value=8>Semester-8</option> 		
	</select>
	  <br><br><br> 
	  <input type="submit" value="Pay" name="update" id="update" style="margin-left:17%;">
	  </div>
      <div id="content" style="width:30%;float:left;">
		<br><a href="homepage.php" style="float:center" id="homelink"><h1>HOME</h1></a>	<br>
		<br>
        <a href="logout.php" style="float:left" id="signoutlink"><h1>SIGN-OUT</h1></a><br>
	  </div>
   </div> 
   </form>
 </body>
</html> 
