<?php
 session_start();
 session_destroy();
 header("Location: /sad_project/login.php");
exit;
?>