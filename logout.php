<?php  
session_start(); //to ensure you are using same session
unset($_SESSION["type"]);
unset($_SESSION["name"]);
 unset($_SESSION["email"]);
  unset( $_SESSION["password"]);
   unset($_SESSION["id_user"]);
 
 
session_destroy(); //destroy the session
echo "<script>window.location='index.php';</script>";
?>