<?php
include_once("dbconec.php");
session_start();


   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    
      $email = trim($_POST["email"]);
      $mypassword = trim($_POST["password"]); 
	    
      $sql = "SELECT * FROM user WHERE email ='$email' and password ='$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
       
      $count = mysqli_num_rows($result);
       
		
      if($count>=1)
	  {  
    $type1=$row["type"];
	 
	$_SESSION["name"]=$row["full_name"];
      
		    $_SESSION["type"]=$row["type"];
			 $_SESSION["id_user"]=$row["id"];
			
			 
			if($type1=='student'){  
			header("location:../student/index1.php");}
	  else if($type1=='admin'){ 
		header("location:../Admin/index1.php");	
  //header("location:../User/Reports.php");
	  }
   }
   }
?>


