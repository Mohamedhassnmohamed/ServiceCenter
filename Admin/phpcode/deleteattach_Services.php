<?php
include_once("dbconec.php");
$id = $_GET["eid"];

		$sql = "SELECT *  FROM message_attachments_services where id='$id' ";
	$result = mysqli_query($conn,$sql);
    $file = mysqli_fetch_assoc($result);
		$message_id=$file["message_id"];
	$description=$file["description"];
	$filename=$file["file_path"];
	
    $filepath = 'MessageAttachments/'.$message_id.$services_id.$description.$filename;

if (!unlink($filepath)) { 
    echo ("$filepath cannot be deleted due to an error"); 
} 
else { 
    echo ("$filepath has been deleted"); 
} 

	
	
	

$sql = "delete from message_attachments_services where id='$id' ";
if ($conn->query($sql) === TRUE) {
 echo "<script>alert('تم الحذف بنجاح')</script>;";
 echo "<script>window.history.back();</script>;";
} 

$conn->close();
?>


