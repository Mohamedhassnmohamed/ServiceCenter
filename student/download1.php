<?php
$f="su.pdf";   

       $file = ("uploads/$f");

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