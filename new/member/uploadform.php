<?php
include('data.php');

 session_start(); 

    if (!isset($_SESSION['member'])) 
    {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['member']);
        header("location: login.php");
    }


?>
!DOCTYPE html>
<html>
<title>Upload document</title>
<body><br><br>
<form enctype="multipart/form-data"
    action="upload.php" method="post">
<p><input type="hidden" name="MAX_FILE_SIZE" value="1000000" /> 
    <input type="file" name="docFile" /><br />
<input type="submit" value="upload!" /></p>
</form>
</body>
</html>