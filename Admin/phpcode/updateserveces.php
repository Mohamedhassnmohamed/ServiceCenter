<?php

include_once("dbconec.php");
session_start();
$id_serveces=$_GET["eid"];

$notes="تم تنفيذ طلبكم،برجاء التوجه الي مقر المركز لإستلام نتائج طلبكم";


///////event//////////////
$employee_name=$_SESSION["name"];

	$sql = "SELECT * from check_form,services where check_form.id=services.id_message and services.id='$id_serveces'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$student_name=$row["name"];
$description=$row["description"];
$descriptionnew="تم تنفيذ طلب ";
if($description==1)
												$descriptionnew.="البحث عن المصادر";
											else if($description==2)
												$descriptionnew.="الكتابة والتنسيق";
											else if($description==3)
												$descriptionnew.="الجرافيك";
											else if($description==4)
												$descriptionnew.="التحليل الاحصائي";
											else if($description==5)
												$descriptionnew.="التجليد";
											else if($description==6)
												$descriptionnew.="الطباعه والنسخ";
											else if($description==7)
												$descriptionnew.="التصحيح والمراجعة اللغوية";
											else if($description==8)
												$descriptionnew.="المراجعة علي القواعد";
$date=date("Y/m/d");
$sql2 = "INSERT INTO events (description,employee_name,student_name,date)VALUES ('$descriptionnew','$employee_name','$student_name','$date')";
$conn->query($sql2);



/////////////////////////////

$query = "UPDATE `services` SET Notes='".$notes."',`is_finished`=1 WHERE `id` = '".$id_serveces."' ;";

if ($conn->query($query ) === TRUE) {
	
 echo "<script>alert('تم تعديل بياناتك بنجاح')</script>;";
  echo "<script>window.history.back();</script>;";
} 

$conn->close();
?>


