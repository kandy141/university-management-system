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
$n=$_POST[name];
$s=$_POST[sem];
$p=$_POST[phno];
$a=$_POST[age];
$m=$_POST[mail_id];
$que= mysql_query("select * from student_registration_details where roll='$_SESSION[roll]'");

$row = mysql_fetch_array($que); 
if($row['Status']=='yes')
{
    echo "<br><br><h2><i>Sorry, You have already registered !!</i></h2>";
    echo "<a href=/sad_project/homepage.php><br><h1>HOME<h1></a>";
}
else
{
  $query ="UPDATE student_registration_details SET full_name='$n',sem='$s',phno='$p',age='$a',email_id='$m',Status='yes' WHERE roll = '$roll'";
  if(mysql_query($query))
  {
   echo "<br><br><h2><i>Your choice updated successfully</i></h2>";    
   echo "<a href=/sad_project/homepage.php><br><h1>HOME<h1></a>";	
  }
  else
  {
   echo "<br><br><h2><i>Updation Failed</i></h2>";
   echo "<a href=/sad_project/stud_registration.php><br><h1>BACK<h1></a>";
  }
}
?> 
