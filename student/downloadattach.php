<?php
									
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
include_once("dbconec.php");

	
		$sql = "SELECT *  FROM message_attachments where id='$id' ";

		$result = mysqli_query($conn,$sql);
    $file = mysqli_fetch_assoc($result);
		$message_id=$file["message_id"];
	$description=$file["description"];
	$filename=$file["file_path"];
	
    $filepath = '../Admin/MessageAttachments/'.$message_id.$description.$filename;
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../Admin/MessageAttachments/'.$message_id.$description.$filename));
        
        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();
        
        readfile('../Admin/MessageAttachments/'.$message_id.$description.$filename);

    
       
    
}

}
?>