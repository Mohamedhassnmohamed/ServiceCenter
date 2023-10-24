<?php
session_start();

include_once("dbconec.php");

$id=$_SESSION["id_user"];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
	  
include_once("dbconec.php");
$fullname = $_POST["fullname"];

$national_number = $_POST["national_number"];
$job = $_POST["job"];
$email = $_POST["email"];
$password = $_POST["password"];
$image ="";
if(!Empty($_FILES["image"]["tmp_name"])){
$image9 = file_get_contents($_FILES["image"]["tmp_name"]); 
	$image = base64_encode($image9);
}
else{
$image =$row["img"];
}
$query = "UPDATE `user` SET `full_name` = '".$fullname."' , `national_number` = '".$national_number."' ,`job` = '".$job."' ,email= '".$email."' ,password= '".$password."' ,img='".$image."' WHERE `id` = '".$id."' ;";

if ($conn->query($query ) === TRUE) {
  echo "<script>alert('تم تعديل بياناتك بنجاح')</script>;";
   echo "<script>window.location='../index1.php';</script>;";
} 

$conn->close();
?>


