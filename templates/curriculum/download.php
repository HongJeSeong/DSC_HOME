<?
$filename = "rules_2018.hwp";
$file = "../../assets/files/".$filename;  

if (preg_match("MSIE", $_SERVER['HTTP_USER_AGENT'])) { 
        header("Content-type: application/octet-stream"); 
        header("Content-Length: ".filesize("$file"));
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Transfer-Encoding: binary"); 
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Pragma: public"); 
        header("Expires: 0"); 
    }
    else { 
        header("Content-type: file/unknown"); 
        header("Content-Length: ".filesize("$file")); 
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Description: PHP3 Generated Data"); 
        header("Pragma: no-cache"); 
        header("Expires: 0"); 
    }
 
    $fp = fopen($file, "rb"); 
    fpassthru($fp);
    fclose($fp);

?>
