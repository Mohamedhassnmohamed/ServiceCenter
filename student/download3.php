<?php
include_once("phpcode/dbconec.php");

							$id=$_GET["file_id"];
$sql = "SELECT * FROM adverstiment where id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$f=$row["file1"];   

      

       $file = ("../employee/phpcode/upload/$f");

       $filetype=filetype($file);
    if (file_exists($file)) {
        
        $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);
ob_clean();
        flush();
       readfile($file);
        //This part of code prevents files from being corrupted after download
        
        

    
	}
    
?>