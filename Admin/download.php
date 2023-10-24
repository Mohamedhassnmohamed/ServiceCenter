<?php
									
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
	$filename=$_GET['file_name'];
include_once("dbconec.php");

	
		$sql = "SELECT * FROM reports,user WHERE user.id=reports.id_user and reports.id='$id' and (Health_Committee='$filename' or Power_Committee='$filename' or Water_Committee='$filename' or Smoking_Committee='$filename' or Reparing_Committee='$filename' or Cafatiria_Committee='$filename' or Waste_Committee='$filename' or Measures_Committee='$filename' or Others_Committee='$filename')";

		$result = mysqli_query($conn,$sql);
    $file = mysqli_fetch_assoc($result);
		$faculty=$file["faculty"];
	$date=$file["date"];
	
    $filepath = '../User/Reports/'.$faculty.$date.$filename;
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../User/Reports/'.$faculty.$date.$filename));
        
        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();
        
        readfile('../User/Reports/'.$faculty.$date.$filename);

    
       
    
}

}
?>