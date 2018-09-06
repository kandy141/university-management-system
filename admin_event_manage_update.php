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
$n=$_POST[event_date];
$p=$_POST[event];
$s=$_POST[type];
$query= "INSERT INTO event_entry_by_admin VALUES ('$n','$p','$s')";
if(mysql_query($query))
  {
   echo "<br><br><h2><i>Your choice updated successfully</i></h2>";
   echo "<a href=/sad_project/admin_homepage.php><br><h1>HOME<h1></a>";
   echo "<a href=/sad_project/admin_event_manage.php><br><h1>BACK<h1></a>";    
  }
else
{
   echo "<br><br><h2><i>Updation Failed</i></h2>";
   echo "<a href=/sad_project/admin_event_manage.php><br><h1>BACK<h1></a>";
}
?> 