<?php
session_start();
if(!isset($_SESSION['roll']))
   header("location:/sad_project/login.php");
$con=mysql_connect("localhost","root","");
  if(!$con)
     die("connection".mysql_error());
mysql_select_db("SAD_project",$con);
$s=mysql_query("select Pass_word from student_login_details where Roll='$_SESSION[roll]'");
$rw=mysql_fetch_array($s);
if($rw['Pass_word']==$_POST['pwd']) 
{  
   
  $resulttt = mysql_query("select * from fee_payment_details where roll_no='$_SESSION[roll]'");   
  
  $row = mysql_fetch_array($resulttt); 
  if($row['Status']=='yes')
  {
    echo "<br><br><h2><i>You have already paid the fees !!</i></h2>";
    echo "<a href=/sad_project/homepage.php><br><h1>HOME<h1></a>";
  }
  else
  {
    $result = mysql_query("select * from student_registration_details where roll='$_SESSION[roll]'");  
	$row = mysql_fetch_array($result);
    if($row['sem']) 
    {
     ?>
     <html>
     <head>
       <style>
	      #main {margin-left:30%} 
		  #clickme
           {
		     display:block;
			 width: 200px;
			 box-shadow:3px 3px 3px 3px #000;
		     border-radius:7px;
			 padding: 0.01% 0.01% 0.01% 0.01%;
		     background-color:#A5A1A0;
		     foreground-color:black;
		   }	
          #clickme {width:320px;text-decoration: none;}	
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
	  </style>
     </head>
    <body>
    <div id="heade">
 	<?php
	echo "<br><i>YOUR DETAILS !!</i>";
	?>
	</div>
	<div id="main">
	<?php
	echo "<br><h3><i>Name :</i>".$row['full_name'] . "<br><h3><i>Roll No: </i>" .
    $row['roll'] ."<br><h3><i>Semester: </i>" . $row['sem'].
	"<br><h3><i>Ph. No: </i>" . $row['phno'] .	"<br><h3><i>Age: </i>" .
	$row['age'] . "<br><h3><i>EMail-ID: </i>" . $row['email_id']."<br>";
	echo "<br><br><br><a href=/sad_project/fee_payment.php id='clickme'><h1>Click here to pay !!<h1></a>";
    ?>
	</div>
	</body>
    </html>	
	<?php
   }
   else
   {
     echo "<br><br><h2><i>Please Register before Paying !!</i></h2>";
     echo "<a href=/sad_project/stud_registration.php><br><h1>REGISTER<h1></a>";
   }
  }
}
else
{
   echo "<br><br><h2><i>Incorrect Password !!</i></h2>";
   echo "<a href=/sad_project/fee_payment_pwd.php><br><h1>Click here to Re-enter<h1></a>";
}
?>