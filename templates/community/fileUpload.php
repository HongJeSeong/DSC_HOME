<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<!DOCTYPE html>
<html>
<body>

<form action="http://cic.hongik.ac.kr/home/templates/community/f_upload.php" method="post" enctype="multipart/form-data">

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="file" name="fileToUpload" id="fileToUpload">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
