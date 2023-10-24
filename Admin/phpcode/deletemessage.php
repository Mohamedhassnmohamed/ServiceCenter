<?php

session_start();
include_once("dbconec.php");
$id = $_GET["eid"];


$sql = "delete from message_attachments where message_id='$id' ";

if($conn->query($sql) === TRUE) {
$sql = "delete from check_form where id='$id' ";



if ($conn->query($sql) === TRUE) {
  echo "<script>alert('تم الحذف بنجاح')</script>;";
   echo "<script>window.history.back();</script>;";
} 
}

$conn->close();
?>


