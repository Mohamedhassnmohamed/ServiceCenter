<?php
$messsage_id=$_POST["mid"];
$papertype=$_POST["papertype"];
include_once("dbconec.php");

	$sql = "SELECT * from check_form where id='$messsage_id'";

$result=mysqli_query($conn,$sql);



										$row = mysqli_fetch_array($result);
										
										$name=$row["name"];
$job=$row["job"];
$job_place=$row["job_place"];
$phone=$row["phone"];
$faculty=$row["faculty"];
$quesm=$row["quesm"];
$shoaba=$row["shoaba"];
$specilisation=$row["specilisation"];
$email=$row["email"];
$academic_year=$row["academic_year"];
$supervisor=$row["supervisor"];
$Co_supervisor=$row["Co_supervisor"];
$message_title=$row["message_title"];
$Broad_topic=$row["Broad_topic"];
$keyWords=$row["keyWords"];
$date=strval($row["date"]);
$reserach_type=$row["reserach_type"];
$nationalid=$row["nationalid"];

if($papertype==1){
	$template_file_name = 'Receiver_Paper.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "Receiver_Paper" .$rand_no. ".docx";
 

 $full_path = $fileName;
try
{
	
	
    	
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = 2153443542123;
         
        // this data Replace the placeholders with actual values
		 $message = str_replace("N",$name,  $message);
        $message = str_replace("FA",$faculty,       $message);
      
		  $message = str_replace("TT",$message_title,  $message);
		   $message = str_replace("BM",$Broad_topic,  $message);
			    $message = str_replace("PL",$reserach_type,  $message);
        
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
if(isset($full_path))
    {

        $file = $full_path;
        echo $file;

        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename='.$file.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit(); 
    }

	}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
}



else if($papertype==2){
	$template_file_name = 'Research_Result.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "Research_Result" . $rand_no . ".docx";
 

 $full_path = $fileName;
try
{
	
	
    	
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = 2153443542123;
         
        // this data Replace the placeholders with actual values
        $message = str_replace("FAC",$faculty,       $message);
        $message = str_replace("NAME",$name,  $message);
		  $message = str_replace("ME",$message_title,  $message);
		    $message = str_replace("QU",$quesm,  $message);
			     //$message = str_replace("D",$date,  $message);
        
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
if(isset($full_path))
    {

        $file = $full_path;
        echo $file;

        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename='.$file.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit(); 
    }

	}
	catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}

}
	else if($papertype==3){
	$template_file_name = 'AbstractMessage.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "AbstractMessage" . $rand_no . ".docx";
 

 $full_path = $fileName;
try
{
	
	



         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = 2153443542123;
         
        // this data Replace the placeholders with actual values
		$message = str_replace("SN",$name,  $message);
        $message = str_replace("FA",$faculty,       $message);
        
		    $message = str_replace("QU",$quesm,  $message);
			 $message = str_replace("DT",$reserach_type,  $message);
			  $message = str_replace("N",$nationalid,  $message);
				 $message = str_replace("PH",$phone,  $message);
        			    //$message = str_replace("DTT",$reserach_type,  $message);
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
if(isset($full_path))
    {

        $file = $full_path;
        echo $file;

        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename='.$file.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit(); 
    }

	}
	
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
}


	else if($papertype==4){
	$template_file_name = 'Message_Reveiver.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "Message_Reveiver" . $rand_no . ".docx";
 

 $full_path = $fileName;
try
{
	
	
    	
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = 2153443542123;
         
        // this data Replace the placeholders with actual values
        $message = str_replace("RN",$name,  $message);
		   
         $message = str_replace("RT",$reserach_type,  $message);
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
if(isset($full_path))
    {

        $file = $full_path;
        echo $file;

        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename='.$file.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit(); 
    }

	}
	
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
}
////////////////
	else if($papertype==5){
	$template_file_name = 'Message_Examine.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "Message_Examine" . $rand_no . ".docx";
 

 $full_path = $fileName;
try
{
	
	
    	
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = 2153443542123;
         
        // this data Replace the placeholders with actual values
		 $message = str_replace("RE",$name,$message);
  $message = str_replace("FA",$faculty, $message);
       
		    $message = str_replace("QU",$quesm,$message);
			   $message = str_replace("DE",$reserach_type,$message);
			   $message = str_replace("NA",$nationalid,  $message);
				 $message = str_replace("PH",$phone, $message);
        			  		   
           $message = str_replace("DF",$reserach_type,  $message); 
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
if(isset($full_path))
    {

        $file = $full_path;
        echo $file;

        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename='.$file.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit(); 
    }

	}
	
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
} 
else if($papertype==6){
	$template_file_name = 'Document_Received.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "Document_Received" . $rand_no . ".docx";
 

 $full_path = $fileName;
try
{
	
	



         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip_val = new ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip_val->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip_val->getFromName($key_file_name);                
                     
        $timestamp = 2153443542123;
         
        // this data Replace the placeholders with actual values
		$message = str_replace("RT",$reserach_type,  $message);
		$message = str_replace("RN",$name,  $message);
        $message = str_replace("FAC",$faculty,       $message);
        
		    $message = str_replace("QU",$quesm,  $message);
			 		//$message = str_replace("D",$name,  $message);

		
         
        //Replace the content with the new content created above.
        $zip_val->addFromString($key_file_name, $message);
        $zip_val->close();
    }
if(isset($full_path))
    {

        $file = $full_path;
      

        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename='.$file.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit(); 
    }

	}
	
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
}

?>