<?php
session_start();
if(!isset($_SESSION['roll']))
   header("location:/sad_project/login.php");
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("connection".mysql_error());
}
mysql_select_db("SAD_project");
$roll= $_SESSION[roll];
$n=$_POST[roll];
$p=$_POST[name];
$s=$_POST[pwd];
$query1= "INSERT INTO student_login_details VALUES ('$n','$p','$s','student')";
$query2= "INSERT INTO student_registration_details VALUES ('','','$n','','','','')";
$query3= "INSERT INTO fee_payment_details VALUES ('$n','','','')";
if(mysql_query($query1) && mysql_query($query2) && mysql_query($query3))
  {
   echo "<br><br><h2><i>Your choice updated successfully</i></h2>";
   echo "<a href=/sad_project/admin_homepage.php><br><h1>HOME<h1></a>";	
  }
else
{
   echo "<br><br><h2><i>Updation Failed</i></h2>";
   echo "<a href=/sad_project/admin_stud_registration.php><br><h1>BACK<h1></a>";
}
?> 
