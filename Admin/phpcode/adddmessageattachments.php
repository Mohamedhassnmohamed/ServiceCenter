<?php
include_once("dbconec.php");
session_start();

$message_id=$_POST["message_id"];
$description=$_POST["description"];

$Images_Committee=0;



if(isset($_FILES['file_name'])&&file_exists($_FILES['file_name']['tmp_name'])&&is_uploaded_file($_FILES['file_name']['tmp_name']))
{
	
	$filename = $_FILES['file_name']['name'];

    // destination of the file on the server
    $destination = '../MessageAttachments/'.$message_id.$description.$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $Images_Committee = $_FILES['file_name']['tmp_name'];
	move_uploaded_file($Images_Committee, $destination);
		$Images_Committee = $_FILES['file_name']['name'];

}
else
{
	$Images_Committee=-1;
}
///////event//////////////
$employee_name=$_SESSION["name"];
$descriptionnew="تم  رفع ".$description;

$sql = "SELECT *  FROM check_form where id='$message_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$student_name=$row['name'];
$date=date("Y/m/d");
$sql2 = "INSERT INTO events (description,employee_name,student_name,date)VALUES ('$descriptionnew','$employee_name','$student_name','$date')";
$conn->query($sql2);



/////////////////////////////
$sql = "INSERT INTO message_attachments (file_path,description,message_id)VALUES ('$Images_Committee','$description','$message_id')";

if($conn->query($sql)){
  echo "<script>alert('تم التسجيل بنجاح');</script>";
   echo "<script>window.history.back();</script>;";
}

$conn->close();
?>


