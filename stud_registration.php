<?php
session_start();
if(!isset($_SESSION['roll'])){
  header("Location: login.php");
  }
  $_SESSION['regchk']=0;
?>
<html>
 <head>
    <script>
     function myFunction()
      {
	    var p=document.getElementById('name');
        var q=document.getElementById('sem');
		var r=document.getElementById('phno');
		var s=document.getElementById('age');
		var t=document.getElementById('mail_id');
			 
		if(p.value!='' && p.value!=null && q.value!='' && q.value!=null && r.value!='' && r.value!=null && s.value!='' && s.value!=null && t.value!='' && t.value!=null)
		  { 
		    if(alphabet(p) && onlynum(q) && num(r) && agecheck(s) && mailcheck(t))
			  {
			     return true;
              }
			else
				 return false;
		  }
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
	  
	  function num(r)
	  {
	    var letters = /^[0-9]+$/;  
		if(r.value.match(letters))
		 {
         	if(r.value.length==10)  
			  return true;
            else
			 {
               alert('Phone Number must be 10 characters !!'); 			
			   r.focus();
			   return false;
			 }  
         }
		else  
         {  
			alert('Phone Number must be Numeric !!');  
		    r.focus();  
			return false;  
		 }  
	  }
	  
	  function alphabet(p)
	  {
	    var letters = /^[a-zA-Z]+$/;  
		if(p.value.match(letters))  
			return true;  
        else  
         {  
			alert('Name must be Alphabetic !!');  
		    p.focus();  
			return false;  
		 }  
	  }
	  
	  function onlynum(q)
	  {
	    var numbers = /^[1-8]+$/;  
		if(q.value.match(numbers))  
			return true;    
		else  
		 {  
			alert('Sem must be Numeric !!');  
			q.focus();  
			return false;  
		 }
	  }
	  
	  function agecheck(s)
	  {
	     var numbers = /^[0-9][0-9]+$/; 
	     if(s.value.match(numbers))
		   {
              if(s.value>=17 && s.value<=23)
			     return true;
              else
               {
			     alert('Sorry, You are not in the specified age limit !!');
				 s.focus();
				 return false;
			   }				
           }
		 else			
		   {  
  		      alert('Age must be numeric !!');
	          s.focus();
			  return false;
		   }
	  } 
	  
	  function mailcheck(t)
	  {
	    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(t.value.match(mailformat))  
		    return true;   
		else  
		 { 		 
		   alert("Valid Email-ID please !!");  
		   t.focus();  
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
	 #homelink, #signoutlink
	   {
         display: block;
		 height: 80px;
		 width: 110px;
		 box-shadow:3px 3px 3px 3px #000;
		 border: 1px solid #000;
		 padding: 5px 5px 5px 5px;
		 border-radius:7px;
		 background-color:#A5A1A0;
		 foreground-color:black;
		 text-decoration: none;
       } 
      #signoutlink
	   {
         width: 160px;
       }
     #homelink, #signoutlink:link { color: black; }
	 #homelink, #signoutlink:active { color: black; }
	 #homelink, #signoutlink:visited { color: black; }
	 #homelink, #signoutlink:hover { color: black; }  
 
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
 <body style="width:100%">
 <form method="post" action="register.php" onsubmit="return myFunction()">
   <div id="container" style="width:100%">
	 <div id="heade">
		<i>&nbsp Please register here !!</i><br>
	  </div>
	  <div>
		  <h1><i>
		    <?php 
		       echo "Welcome  Mr.".$_SESSION['roll'];
		    ?>
		  </i></h1>
      </div>
      
	  <div style="height:100%;width:25%;float:left">
	  </div>
	  <div id="menu" style="width:18%;float:left;">
	  <dl>
      <dt><label for='name' ><h3>Full Name:</h3> </label>
	  <dd><input type='text' name='name' id='name' maxlength="50" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
	  <dt><label for='name' ><h3>Sem No. you want to register:</h3> </label></dt>
	  <dd><input type='text' name='sem' id='sem' maxlength="1" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
	  <dt><label for='name' ><h3>Ph. No:</h3> </label></dt>
	  <dd><input type='text' name='phno' id='phno' maxlength="10" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
	  <dt><label for='name' ><h3>Age:</h3></label></dt>
	  <dd><input type='text' name='age' id='age' maxlength="2" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
	  <dt><label for='mail' ><h3>Email ID:</h3></label></dt>
      <dd><input type='text' name='mail_id' id='mail_id' maxlength="30"style="box-shadow:3px 3px 3px 3px #000;border-radius:7px" /></dd><br><br>
	  </div>
	  <div id="updatebt" style="width:25%;float:left">
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	  <input type="SUBMIT" value="Update" id="update" style="margin-left:90px;" />
	  </dl>
	  </div>
      <div id="content" style="width:30%;float:left;">
	    <br><br>
		<br></br><a href="homepage.php" style="float:center" id="homelink"><h1>HOME</h1></a>	<br>
		<br>
        <a href="logout.php" style="float:left" id="signoutlink"><h1>SIGN-OUT</h1></a><br>
	  </div>
   </div> 
   </form>
 </body>
</html> 