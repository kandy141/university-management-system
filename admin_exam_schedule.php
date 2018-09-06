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

?>
<html>
<head>
  <style>
	  #Update 
	   {
	     font-size:2em;
		 box-shadow:3px 3px 3px 3px #000;
		 border-radius:7px
	   }
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
<p id="heade" style='font-size:20px;color:red;position:absolute;top:200px;'>Upload files here !!</p>
							   <form action='' method='post'  enctype='multipart/form-data'>
			                    <label for='file'>Assignment : </label><input type='file' name='file' id='file'> <br/><br/>&emsp;&emsp;&emsp;
                                <input type='submit' name='Upload' id='Update' value='Upload'>
								</form>
<?php
	if(isset($_POST['Upload']))
	   {
	        $f=$_FILES['file']['name'];
			$result=mysql_query("insert into waste values('$f')");
			if($result!=null)
			 {
			     move_uploaded_file($_FILES["file"]["tmp_name"],"pdfs/".$_FILES['file']['name']);
			     $url="admin_exam_schedule.php";
	             echo "File Uploaded Successfully";
				 echo "<a href=/sad_project/admin_exam_schedule.php><br><h1>BACK<h1></a>";
                 echo "<a href=/sad_project/admin_homepage.php><br><h1>HOME<h1></a>";				 
				 
			 }
	   }
?>
</body>
</html>