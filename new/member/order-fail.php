<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];

$salt="X42vitOlPS";


 
If (isset($_POST["additionalCharges"])) {
    $additionalCharges=$_POST["additionalCharges"];
    $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;        
 } else {      
    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
$hash = hash("sha512", $retHashSeq);  
if ($hash != $posted_hash) {
    echo "Invalid Transaction. Please try again";
} else {
	echo "<h3>Your name is ". $firstname .".</h3>";
	echo "<h3>Your amount is ". $amount .".</h3>";
	
    echo "<h3>Your order status is ". $status .".</h3>";
    echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
	include('data.php');
	if($db === false){
	          die("ERROR: Could not connect. " . mysqli_connect_error());
	        }
		$sql = "UPDATE presentation SET paystatus='$status' WHERE email='$email'";
	    if(mysqli_query($link, $sql))
	    {
	  
	        echo "<script> alert('Failed'); </script>";
	     }	
		

} 
?>
<!--Please enter your website homepagge URL -->
<p><a href=/member/> Try Again <?php echo $firstname; ?></a></p>