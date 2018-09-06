<?php
session_start();
if(!isset($_SESSION['roll'])){
  header("Location: login.php");
  }
if($con=mysql_connect("localhost","root",""));
else
	die('error');
mysql_select_db("sad_project",$con);
$result= mysql_query("select * from event_entry_by_admin");
?>
<html>
<head>
 <style>
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
 <body style="width=100%" >
 <div id="main_UpdatePanel2" style="width:100%"><br><br>
	<h3 class="headertext" id="heade">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Events this Week</h3><br><br>
         <div style="width:20%;float:left;height:100%"></div>
                    <div style="width:50%;;float:left">
				      <table class="gridstyle" cellspacing="0" cellpadding="0" rules="all" border="1" id="main_gvEvents" style="border-width:5px;width:100%;border-bottom: solid 5px;">
						<tr class="gridheader" align="center" style="height:35px;background-color:#A5A1A0">
						  <th scope="col" style="width:100px;text-align:center">Date</th>
						  <th scope="col" style="width:360px;">Title</th>
						  <th scope="col" style="width:140px;text-align:center;">Event Type</th>
						</tr>
						
						<?php
						while($row=mysql_fetch_array($result))
						 {
						   echo "<tr style='height:35px;text-align:center'><td>" . $row['Date'] . "</td>
									                     <td>" . $row['Event'] . "</td>
			                                             <td>" . $row['Type'] . "</td>
			                     </tr>";
						 }
						 ?>
		              </table>
	                </div>
                    <div id="content" style="width:20%;float:right;"><br><br><br>
					   <a href="homepage.php" style="float:center" id="homelink"><h1>HOME</h1></a><br><br>
					   <a href="logout.php" style="float:left" id="signoutlink"><h1>SIGN-OUT</h1></a><br>
	                </div>
    </div>
 </body>
</html> 