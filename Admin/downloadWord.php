<?php
$eid=$_GET["eid"];
$template_file_name = 'register.docx';
 
$rand_no = rand(111111, 999999);
$fileName = "results_" . $eid . ".docx";
 

 $full_path = $fileName;

try
{
    	include_once("dbconec.php");

	$sql = "SELECT * from check_form where id='$eid'";

if($result=mysqli_query($conn,$sql)){



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
$date=$row["date"];    
         
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
        $message = str_replace("ST",$name,       $message);
        $message = str_replace("JOB",$job,  $message);
		  $message = str_replace("JP",$job_place,  $message);
		    $message = str_replace("PH",$phone,  $message);
			  $message = str_replace("FAC",$faculty,  $message);
			    $message = str_replace("QU",$quesm,  $message);
				  $message = str_replace("SH",$shoaba,  $message);
				    $message = str_replace("SPE",$specilisation,  $message);
					  $message = str_replace("EM",$email,  $message);
					    $message = str_replace("YE",$academic_year,  $message);
						
						 $message = str_replace("SUP",$supervisor,  $message);
				  $message = str_replace("CSUP",$Co_supervisor,  $message);
				    $message = str_replace("TITLE",$message_title,  $message);
					  $message = str_replace("BROAD",$Broad_topic,  $message);
					    $message = str_replace("KEY",$keyWords,  $message);
						 $message = str_replace("DATE",$date,  $message);
         $message = str_replace("NN",$name,       $message);
         
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
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}


 
?>