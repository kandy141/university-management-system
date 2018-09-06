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
	    var p=document.getElementById('event_date');
        var q=document.getElementById('type');
		if(p.value!='' && p.value!=null && q.value!='' && q.value!=null)
		  { 
		    if(alphabet(q) && datechk(p))
			     return true;
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
	  
	  	  
	  function alphabet(p)
	  {
	    var letters = /^[a-zA-Z]+$/;  
		if(p.value.match(letters))  
			return true;  
        else  
         {  
			alert('Event type must be Alphabetic !!');  
		    p.focus();  
			return false;  
		 }  
	  }
	  
	function datechk(input)
	 {
		var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
		var returnval=false
		if (!validformat.test(input.value))
		   alert("Invalid Date Format !!")
		else
		 { //Detailed check for valid date ranges
		   var monthfield=input.value.split("/")[0]
		   var dayfield=input.value.split("/")[1]
		   var yearfield=input.value.split("/")[2]
		   var dayobj = new Date(yearfield, monthfield-1, dayfield)
		   if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
		         alert("Invalid Day, Month, or Year range detected !!")
		   else
		         returnval=true
         }
        if (returnval==false) 
		   input.select()
        return returnval
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
 <form method="post" action="admin_event_manage_update.php" onsubmit="return myFunction()">
   <div id="container" style="width:100%">
	 <div id="heade">
		<i>&nbsp Please enter upcoming events here !!</i><br>
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
      <dt><label for='name' ><h3>Date of Event:</h3> </label></dt>
	  <dd><input type='text' name='event_date' id='event_date' maxlength="10" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
	  <dt><label for='name' ><h3>Event Name:</h3> </label></dt>
	  <dd><input type='text' name='event' id='event' maxlength="100" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
      <dt><label for='name' ><h3>Event Type:</h3> </label></dt>
	  <dd><input type='text' name='type' id='type' maxlength="25" style="box-shadow:3px 3px 3px 3px #000;border-radius:7px"/></dd>
      
	  </div>
	  <div id="updatebt" style="width:25%;float:left">
	  <br><br><br><br><br><br><br><br><br><br><br>
	  <input type="SUBMIT" value="Update" id="update" />
	  </dl>
	  </div>
      <div id="content" style="width:30%;float:left;">
	    <br><br>
		<br></br><a href="admin_homepage.php" style="float:center" id="homelink"><h1>HOME</h1></a>	<br>
		<br>
        <a href="logout.php" style="float:left" id="signoutlink"><h1>SIGN-OUT</h1></a><br>
	  </div>
   </div> 
   </form>
 </body>
</html> 