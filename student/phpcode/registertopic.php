<?php
include_once("dbconec.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
$id_user=$_POST["id_user"];
$nationalid=$_POST["nationalid"];
$name=$_POST["name"];
$job=$_POST["job"];
$job_place=$_POST["job_place"];
$phone=$_POST["phone"];
$faculty=$_POST["faculty"];
$quesm=$_POST["quesm"];
$shoaba=$_POST["shoaba"];
$specilisation=$_POST["specilisation"];
$email=$_POST["email"];
$academic_year=$_POST["year"];
$supervisor=$_POST["supervisor"];
$Co_supervisor=$_POST["Co_supervisor"];
$message_title=$_POST["message_title"];
$Broad_topic=$_POST["Broad_topic"];
$keyWords=$_POST["keyWords"];
$date=date("Y/m/d");	
$research_type=$_POST["research_type"];
$sql = "INSERT INTO `check_form`(nationalid,`name`, `job`, `job_place`, `phone`, `faculty`, `quesm`, `shoaba`, `specilisation`, `email`, `academic_year`, `supervisor`, `Co_supervisor`, `message_title`, `Broad_topic`, `keyWords`, `date`, `id_user`,reserach_type) VALUES ('$nationalid','$name','$job','$job_place','$phone','$faculty','$quesm','$shoaba','$specilisation','$email','$academic_year','$supervisor','$Co_supervisor','$message_title','$Broad_topic','$keyWords','$date','$id_user','$research_type')";

if ($conn->query($sql) === TRUE) {

	
$reg_id = mysqli_insert_id($conn);
//code of word file
	  echo "<script>alert('تم الاضافه بنجاح')</script>;";
   //echo "<script>window.location='../messageR.php';</script>;";
   header("location:../ResponseToStudents/showpdf.php?name=".$name."&quesm=".$quesm."&faculty=".$faculty."&nationalid=".$nationalid."&message_title=".$message_title."&research_type=".$research_type."&nationalid=".$research_type."&code_id=".$reg_id."");
   
   }


$conn->close();
}
?>


