<?php

include_once("dbconec.php");
session_start();
$mid=$_POST["mid"];

$name=$_POST["name"];

$job=$_POST["job"];
$job_place=$_POST["job_place"];
$phone=$_POST["phone"];
$faculty=$_POST["faculty"];
$quesm=$_POST["quesm"];
$shoaba=$_POST["shoaba"];
$specilisation=$_POST["specilisation"];
$email=$_POST["email"];
$academic_year=$_POST["academic_year"];
$supervisor=$_POST["supervisor"];
$Co_supervisor=$_POST["Co_supervisor"];
$message_title=$_POST["message_title"];
$Broad_topic=$_POST["Broad_topic"];
$keyWords=$_POST["keyWords"];
$date=$_POST["date"];
$research_type=$_POST["research_type"];
$nationalid=$_POST["nationalid"];
///////event//////////////
$employee_name=$_SESSION["name"];
$descriptionnew="تم تعديل بيانات موضوع بحثي ";

$sql = "SELECT *  FROM check_form where id='$mid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$student_name=$row['name'];
$date=date("Y/m/d");
$sql2 = "INSERT INTO events (description,employee_name,student_name,date)VALUES ('$descriptionnew','$employee_name','$student_name','$date')";
$conn->query($sql2);



/////////////////////////////

$query = "UPDATE `check_form` SET nationalid='".$nationalid."',`name`='".$name."',`job`='".$job."',`job_place`='".$job_place."',`phone`='".$phone."',faculty='".$faculty."',quesm='".$quesm."',shoaba='".$shoaba."',specilisation='".$specilisation."',email='".$email."',academic_year='".$academic_year."',supervisor='".$supervisor."',Co_supervisor='".$Co_supervisor."',message_title='".$message_title."',Broad_topic='".$Broad_topic."',keyWords='".$keyWords."',date= '".$date."',reserach_type='".$research_type."' WHERE `id` = '".$mid."' ;";

if ($conn->query($query ) === TRUE) {
	
 echo "<script>alert('تم تعديل بياناتك بنجاح')</script>;";
  echo "<script>window.history.back();</script>;";
} 

$conn->close();
?>


