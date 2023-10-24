<?php
include_once("dbconec.php");
session_start();
$id=$_SESSION["id_user"];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$national_number=$row["national_number"];
	  

$na=$_POST["na"];
$pa=$_POST["pa"];
$ma=$_POST["ma"];
if(!isset($ma))
$ma="";
$ta=$_POST["ta"];
$ga=$_POST["ga"];
$full_a=$_POST["full_a"];
//if (!mkdir("../uploads/".$national_number, 0, true)) {
//die('Failed to create folders...');
//}
$ne=$_POST["ne"];
$pe=$_POST["pe"];
$ge=$_POST["ge"];
$te=$_POST["te"];

$full_e=$_POST["full_e"];
$charasitic_type=$_POST["charasitic_type"];
$charasitic_number=$_POST["charasitic_number"];
$charasitic_date=$_POST["charasitic_date"];
$charasitic_region=$_POST["charasitic_region"];
$status=$_POST["status"];
$job_status=$_POST["job_status"];
$job_address=$_POST["job_address"];
if($job_status=="لا يعمل")
$job_address="";
$nationality=$_POST["nationality"];
$miliraty_status=$_POST["miliraty_status"];
$datebirth=$_POST["datebirth"];
$house_number=$_POST["house_number"];
$street=$_POST["street"];
$mohafza=$_POST["mohafza"];
$quesm=$_POST["quesm"];
$contact_type=$_POST["contact_type"];
$contact_value=$_POST["contact_value"];
$degree_country=$_POST["degree_country"];
$degree_university=$_POST["degree_university"];
$degree_faculty=$_POST["degree_faculty"];
$qualified_type=$_POST["qualified_type"];
$qualified=$_POST["qualified"];
$speciality=$_POST["speciality"];
$degree_year=$_POST["degree_year"];
$degrree_date=$_POST["degree_date"];
$study_type=$_POST["study_type"];
$gpa=$_POST["gpa"];
$percentage=$_POST["percentage"];
$faculty=$_POST["faculty"];
$regulation=$_POST["regulation"];
$diploma_type=$_POST["diploma_type"];
$type=$_POST["type"];
$nomination=$_POST["nomination"];
$diploma_department=$_POST["diploma_department"];
$diploma_department_type=$_POST["diploma_department_type"];
$certificate_degree="";
$experience_certificate="";
$qualified_degree="";
if(isset($_FILES['qualified_degree']))
{
	
	$filename = $_FILES['qualified_degree']['name'];

    // destination of the file on the server
    $destination = '../uploads/'.$national_number.'/'. $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $qualified_degree = $_FILES['qualified_degree']['tmp_name'];
	move_uploaded_file($qualified_degree, $destination);
	
}
if(isset($_FILES['certificate_degree']))
{
	
	$filename = $_FILES['certificate_degree']['name'];

    // destination of the file on the server
    $destination = '../uploads/'.$national_number.'/'. $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $certificate_degree = $_FILES['certificate_degree']['tmp_name'];
	move_uploaded_file($certificate_degree, $destination);
	
}
if(isset($_FILES['experience_certificate']))
{
	
	$filename = $_FILES['experience_certificate']['name'];

    // destination of the file on the server
    $destination = '../uploads/'.$national_number.'/'. $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $experience_certificate = $_FILES['experience_certificate']['tmp_name'];
	move_uploaded_file($experience_certificate, $destination);
	
}



$sql = "INSERT INTO registeration (national_number,na,pa,ma,ta,ga,full_a,ne,pe,ge,te,full_e,type,charasitic_type,charasitic_number,charasitic_date,charasitic_region,status,job_status,job_address,nationality,miliraty_status,datebirth,house_number,street,mohafza,quesm,contact_type,contact_value,degree_country,degree_university,degree_faculty,qualified_type,qualified,speciality,degree_year,degrree_date,study_type,gpa,percentage,nomination,faculty,regulation,diploma_type,diploma_department,diploma_department_type,qualified_degree,certificate_degree,experience_certificate)VALUES ('$national_number','$na','$pa','$ma','$ta','$ga','$full_a','$ne','$pe','$ge','$te','$full_e','$type','$charasitic_type','$charasitic_number','$charasitic_date','$charasitic_region','$status','$job_status','$job_address','$nationality','$miliraty_status','$datebirth','$house_number','$street','$mohafza','$quesm','$contact_type','$contact_value','$degree_country','$degree_university','$degree_faculty','$qualified_type','$qualified','$speciality','$degree_year','$degrree_date','$study_type','$gpa','$percentage','$nomination','$faculty','$regulation','$diploma_type','$diploma_department','$diploma_department_type','$qualified_degree','$certificate_degree','$experience_certificate')";
//$sql = "INSERT INTO registeration (national_number)VALUES ('$national_number')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('تم التسجيل بنجاح');</script>";
     header("location:../index1.php");
} 

$conn->close();
?>


