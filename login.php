<?php
session_start();
if(isset($_SESSION['roll']) && isset($_SESSION['pswd']) &&isset($_SESSION['user_account']))
  header("Location: /sad_project/login.php");

?>

<html>
 <head>
   <script>
     function myFunction()
      {
		var y=document.myform.user_account.selectedIndex;
		if(y>=1)
	          return true; 			 
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
    <title>Login </title>
	<style>
	  #login , #reset
	   {
	     font-size:2em;
		 box-shadow:3px 3px 3px 3px #000;
		 border-radius:7px
	   }
	 #roll , #pwd
       {
	     font-size:2em;
		 border-radius:7px
	   }	 
	   
	  #user_account {
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
   <center>
     <form method="post" id="myform" name="myform" action="logincheck.php" onsubmit="return myFunction()">
       <br><br><br><br><br><br>
       <table>
         <tr><td><span id="roll">Username:</span></td><td><input type="text" name="roll" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></td></tr>
         <tr><td><span id="pwd">Password:</span></td><td><input type="password" name="pswd" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></td></tr>
         <tr><td>
	     <select id="user_account" name='user_account' style="margin-left:20%">
			<option name="none" value=0>----SELECT----</option>
			<option name="sem1" value=1>Student</option>
			<option name="sem2" value=2>Administrator</option> 	
		 </select>
		 </td></tr>
		 <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
		 <tr><td><input type="submit" name="login" id="login" value="Login" style="margin-left:20%"></td>
         <td><input type="reset" name="reset" id="reset" value="Reset" style="margin-left:20%"></td></tr>
       </table>
     </form>
   </center>
 </body>
</html>