<?php
session_start();
if(!isset($_SESSION['roll']))
    header("location:/sad_project/login.php");
if($con=mysql_connect('localhost','root',''));
else
{
	header("Location: /sad_project/login.php");
}

mysql_select_db('SAD_project');
$pwd=$_POST['pswd'];
$user=$_POST['roll'];
$result= mysql_query("select * from student_login_details where Pass_word='$pwd' and Roll='$user'");
$row=mysql_fetch_array($result);
if(mysql_num_rows($result)==1)
{
  $_SESSION['roll']=$_POST['roll'];
  if($_POST['user_account']==1)
   {
     if($row['Type']=="student")    header("location:/sad_project/homepage.php");
	 else    echo"You are an admin, Please login into admin account";
   } 
  if($_POST['user_account']==2)
   {
     if($row['Type']=="admin")     header("location:/sad_project/admin_homepage.php");
     else    echo"You are a student, Please login into student account";	 
   }
}
else
{
  echo "<br><h3><i>Incorrect Data</i></h3>";
  $url="/sad_project/login.php";
  echo "<br><br><a href=$url><h1>BACK<h1></a>";
}
?>