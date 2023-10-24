<?php
include_once("dbconec.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
$id_message=$_POST["id_message"];
$Services=$_POST["Services"];
$extra=$_POST["extra"];
$SUP_Phone=$_POST["SUP_Phone"];
print_r($_POST["Services"]);
echo $id_message;
$date=date("Y/m/d");
$ServecesText="";

foreach ($_POST["Services"] as $Serve) {
if($Serve==1)
												$ServecesText.="البحث عن المصادر";
											else if($Serve==2)
												$ServecesText.="الكتابة والتنسيق";
											else if($Serve)
												$ServecesText.="الجرافيك";
											else if($Serve)
												$ServecesText.="التحليل الاحصائي";
											else if($Serve==5)
												$ServecesText.="التجليد";
											else if($Serve)
												$ServecesText.="الطباعه والنسخ";
											else if($Serve)
												$ServecesText.="التصحيح والمراجعة اللغوية";
											else if($Serve==8)
												$ServecesText.="المراجعة علي القواعد";
											$ServecesText.="-";
	
$sql = "INSERT INTO `services`(is_finished,description,`id_message`, `dateservices`, `extra_Services`, `SUP_Phone`) VALUES (0,'$Serve','$id_message','$date','$extra','$SUP_Phone')";

$conn->query($sql);
}
	

	 echo "<script>alert('تم الاضافه بنجاح')</script>;";
   //echo "<script>window.location='../messageR.php';</script>;";
   
   
   
   $sql = "SELECT * from check_form  where id='$id_message'";
$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);
										
										$name=$row["name"];
										$quesm=$row["quesm"];
											$message_title=$row["message_title"];
											$faculty=$row["faculty"];
											$reserach_type=$row["reserach_type"];
											$nationalid=$row["nationalid"];
											$research_type=$row["research_type"];
   header("location:../ResponseToStudents/showpdf2.php?name=".$name."&quesm=".$quesm."&faculty=".$faculty."&nationalid=".$nationalid."&message_title=".$message_title."&id_message=".$id_message."&Services=".$ServecesText."&serve=".$ServecesText."");
   
   


$conn->close();
}
?>


