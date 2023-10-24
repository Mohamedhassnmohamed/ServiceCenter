<?php
include_once("dbconec.php");
$fullname = $_POST["fullname"];

$national_number = $_POST["national_number"];
$email = $_POST["email"];
$password =$_POST["password"];

  $sql = "SELECT * FROM user WHERE email ='$email' and password ='$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
        
      $count = mysqli_num_rows($result);
       
		
      if($count == 1)
	  {
		echo "<script>alert('الايميل او الرقم السري موجودين بالفعل اختر ايميل جديد ')</script>";
     header("location:../sign-up.php");  
		  
	  }
	  else
	  {
$image ="";
if(!Empty($_FILES["image"]["tmp_name"])){
$image9 = file_get_contents($_FILES["image"]["tmp_name"]); 
	$image = base64_encode($image9);
}
$t="student";
$sql = "INSERT INTO user (full_name, national_number,email,password,img,type)
VALUES ('$fullname','$national_number','$email','$password','$image','$t')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('تم التسجيل بنجاح');</script>";
     header("location:../index.php");
} 
	  }
$conn->close();
?>


