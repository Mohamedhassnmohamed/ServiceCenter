<?php
session_start();
include_once("dbconec.php");

$id=$_POST["sid"];
$name = $_POST["name"];
$national_number=$_POST["national_number"];

$password=$_POST["password"];
$email=$_POST["email"];
$type=$_POST["type"];

$query = "UPDATE `user` SET `full_name` = '".$name."',`national_number` = '".$national_number."',`password` = '".$password."' , `email` = '".$email."' ,type= '".$type."' WHERE `id` = '".$id."' ;";

if ($conn->query($query ) === TRUE) {
	
  echo "<script>alert('تم تعديل بياناتك بنجاح')</script>;";
  echo "<script>window.location='../index1.php';</script>;";
} 

$conn->close();
?>


