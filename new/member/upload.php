<?php


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
$na=0;
include('data.php');

$loco=0;
if ( isset( $_FILES['docFile'] ) ) 
{
    if ($_FILES['docFile']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") 
    {

        $source_file = $_FILES['docFile']['tmp_name'];
        $dest_file = "uploads/".$_FILES['docFile']['name'];


            
        if (file_exists($dest_file)) {
            print "The file name already exists!!";
        }
        else 
        {
            move_uploaded_file( $source_file, $dest_file )
            or die ("Error!!");
            if($_FILES['docFile']['error'] == 0) 
            {
            print "File was successfully uploaded!! <br/><br/>";
            print "<b><u>Details : </u></b><br/>";
            print "File Name : ".$_FILES['docFile']['name']."<br.>"."<br/>";
            print "File Size : ".$_FILES['docFile']['size']." bytes"."<br/>";
            print "File location : uploads/".$_FILES['docFile']['name']."<br/>";
            $na=$_FILES['docFile']['name'];
            $name="uploads/".$_FILES['docFile']['name'];
            $loco="<a href='".$name."'>open</a>";
            echo $loco;
            echo $na;

            $e=$_SESSION['member'];
            $query="UPDATE `presentation` SET `fname`='$na' WHERE email='$e'";   
        
             
          if(mysqli_query($db, $query))
            {
               echo "upload successfully.";
              echo "<script> alert('Sucessfully uploaded'); </script>";
            } 
            else
               {
                 echo "sorry";
              } 
            }
        }
    }
    else {
        if ( $_FILES['docFile']['type'] != "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
            print "Error occured while uploading file : ".$_FILES['docFile']['name']."<br/>";
            print "Invalid  file extension, should be docx !!"."<br/>";
            print "Error Code : ".$_FILES['docFile']['error']."<br/>";
        }
    }
}
?>
