<?php
	$status = $_POST["status"];
	$firstname = $_POST["firstname"];
	$amount = $_POST["amount"];
	$txnid = $_POST["txnid"];
	$posted_hash = $_POST["hash"];
	$key = $_POST["key"];
	$productinfo = $_POST["productinfo"];
	$email = $_POST["email"];
	$salt = "X42vitOlPS";
	include('data.php');
	if($db === false){
	          die("ERROR: Could not connect. " . mysqli_connect_error());
	        }
		$sql = "UPDATE presentation SET paystatus='$status',amount='$amount',txnid='$txnid' WHERE email='$email'";
	    if(mysqli_query($db, $sql))
	    {
	        echo "Records were updated successfully.";
	        echo "<script> alert('Sucessfully payed for the event'); </script>";
	     }	
		


	If (isset($_POST["additionalCharges"]))
		 {
	    $additionalCharges = $_POST["additionalCharges"];
	    $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
		} 
	else 
		{

	    	$retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid 	. '|' . $key;
		}
	$hash = hash("sha512", $retHashSeq);
	 

	if ($hash != $posted_hash) 
		{
		    echo "Invalid Transaction. Please try again";
		} 
	else 
		{

			echo "<h3>Dear " . $firstname . ".</h3>";
	    echo "<h3>Thank You. Your order status is " . $status . ".</h3>";
	    echo "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
	    echo "<h4>We have received a payment of Rs. " . $amount;

}

?>
<link rel="stylesheet" type="text/css" href="style.css">
            <p> <br> <a href="/member/" class="btn">Back</a> </p>