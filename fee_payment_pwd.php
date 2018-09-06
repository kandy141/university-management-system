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
       var x=document.getElementById('pwd');
	   if(x.value!='' & x.value!=null)
	       return true;
	   else
	     {
           alert("No empty fields please !!");
		   return false;	   
		 } 
    } 
</script>
  <style>
	  #update 
	   {
	     font-size:2em;
		 box-shadow:3px 3px 3px 3px #000;
		 border-radius:7px
	   }
	  #pwd {font-size:2em}
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
    <br><br><h1 id="heade"> Security Check </h1>  
   <form method="post" action="fee_payment_pwdverify.php" onsubmit="return myFunction">
   <span id="pwd">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Password Please: </span>
   <input type="password" name="pwd" id="pwd" maxlength="20" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px;margin-top:10%"/>
   <br><br><input type="submit" value="Proceed" name="update" id="update" style="margin-left:40%" />
   </form>
 </body>
</html>