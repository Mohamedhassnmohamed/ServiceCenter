<?php
include_once("dbconec.php");
$fullname = $_POST["fullname"];

$national_number = $_POST["national_number"];
$email = $_POST["email"];
$password =$_POST["password"];

  $sql = "SELECT * FROM user WHERE email ='$email' or password ='$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
        
      $count = mysqli_num_rows($result);
       
		
      if($count >= 1)
	  {
		  $first_name="خطأ في الايميل أو الرقم السري الرجاء  إختيار ايميل جديد أو رقم سري جديد";
		  header("location:../signup.php?first_name={$first_name}");

		
		  
	  }
	  else
	  {

$t="student";
$sql = "INSERT INTO user (full_name, national_number,email,password,type)
VALUES ('$fullname','$national_number','$email','$password','$t')";

if ($conn->query($sql) === TRUE) {
  echo "<script>  alert('تم التسجيل بنجاح');   </script>";
     header("location:../login.php");
} 
	  }
$conn->close();
?>


