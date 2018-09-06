
<?php
session_start();
if(!isset($_SESSION['roll'])){
  header("Location: login.php");
  }


  if ((($_FILES["uploadjob"]["type"] == "application/pdf")))
            {
              if ($_FILES["uploadjob"]["error"] > 0)
              {
                echo "Return Code: " . $_FILES["uploadjob"]["error"] . "<br />";
              }
              else
              {
                  move_uploaded_file($_FILES["uploadjob"]["tmp_name"],
                  "jobuploads/" . $_FILES["uploadjob"]["name"]);
                 // echo $_FILES["file"]["tmp_name"];
                 $filename=$_FILES["uploadjob"]["name"];

              }
           }
           else
           {
                echo "<br><br><br><center><font size='3' color='red'>Invalid file. Please upload only pdfs.</font><br><br> This page will be redirected after 5 seconds, Please wait................</center>";
                echo "<meta HTTP-EQUIV='REFRESH' content='5; url=jobopening.php'>";
                exit;
           }
  
  
?>