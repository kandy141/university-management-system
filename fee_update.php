<?php
session_start();
if(!isset($_SESSION['roll']))
   header("location:/sad_project/login.php");
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("connection".mysql_error());
}
mysql_select_db("SAD_project",$con);
$rollno=$_SESSION[roll];
$semester=$_POST['sem_option'];
$sql=mysql_query("update fee_payment_details set sem=$semester,Status='yes' where roll_no='$rollno'");
if($sql)
{
   echo "<br><br><h2><i>Payment Successfully Completed !!</i></h2>";
   echo "<a href=/sad_project/homepage.php><br><h1>HOME<h1></a>";	
}
else
{
   echo "<br><br><h2><i>Payment Failed</i></h2>";
   echo "<a href=/sad_project/fee_payment_pwd.php><br><h1>Restart Process<h1></a>";
}
?> 