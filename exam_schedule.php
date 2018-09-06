<?php
session_start();
if(!isset($_SESSION['roll'])){
  header("Location: login.php");
  }
  
   $con=mysql_connect("localhost","root","");
if(!$con)
{
   die("connection".mysql_error());
}
mysql_select_db("SAD_project",$con);

$res=mysql_query("select * from waste ");
while(($row=mysql_fetch_array($res))!=null)
    echo "<a style='font-size:35px' href='http://127.0.0.1/sad_project/pdfs/$row[0].pdf' target='_blank'>$row[0].pdf</a><br>";
	
                 echo "<a href=/sad_project/homepage.php><br><h1>HOME<h1></a>";		

?>