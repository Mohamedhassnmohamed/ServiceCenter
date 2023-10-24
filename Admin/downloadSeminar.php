<?php
									
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
	$filename=$_GET['file_name'];
	//echo $id.",,,,".$filename;
include_once("dbconec.php");

	
		$sql = "SELECT * FROM seminars,user WHERE user.id=seminars.id_user and seminars.id='$id' and Images_Committee='$filename'";

		$result = mysqli_query($conn,$sql);
    $file = mysqli_fetch_assoc($result);
		$faculty=$file["faculty"];
	$date=$file["date"];
	$title=$file["title"];
	
    $filepath = '../User/Seminars/'.$faculty.$title.$date.$filename;
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../User/Seminars/'.$faculty.$title.$date.$filename));
        
        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();
        
        readfile('../User/Seminars/'.$faculty.$title.$date.$filename);

    
       
    
}

}
?>