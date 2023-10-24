<?php
session_start();

include_once("dbconec.php");

$id=$_POST["user_id"];

$fullname = $_POST["fullname"];

$national_number = $_POST["national_number"];
$contact_value = $_POST["contact_value"];
$house_number=$_POST["house_number"];
$street=$_POST["street"];
$mohafza=$_POST["mohafza"];
$job_address=$_POST["job_address"];
$status=$_POST["status"];


$query = "UPDATE `user` SET  `national_number` = '".$national_number."'  WHERE `id` = '".$id."' ;";
$query2 = "UPDATE `registeration` SET `contact_value` = '".$contact_value."' , `house_number` = '".$house_number."' ,street= '".$street."' ,mohafza= '".$mohafza."' ,`national_number` = '".$national_number."',`job_address` = '".$job_address."',`status` = '".$status."' WHERE `user_id` = '".$id."' ;";

if ($conn->query($query ) === TRUE&&$conn->query($query2) === TRUE) {
  echo "<script>alert('تم تعديل بياناتك بنجاح')</script>;";
   echo "<script>window.history.back();</script>;";
} 

$conn->close();
?>


