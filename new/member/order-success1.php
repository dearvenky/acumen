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
	if($db === false)
		{
	          die("ERROR: Could not connect. " . mysqli_connect_error());
	    }

	     $sql="SELECT first_name,amount, package FROM `members` WHERE  email='$email'";
		if ($result=mysqli_query($db,$sql))
		  {
  			// Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
    		{
				
    			$first=$row[0];
    			$a=$row[1];
    			$p=$row[2];
    			
   			 }
 		// mysqli_free_result($result);
			}
		$amount=$amount*10;
		$pack=$amount/10;
		$uamount=$amount+$a;
		$upack=$pack+$p;
        $query="UPDATE `members` SET `paystatus`='$status',`amount`='$uamount',`package`='$upack' WHERE email='$email'";
        


		//$sql = "UPDATE members SET paystatus=Paid,amount=$amount WHERE email='$email'";
	    if(mysqli_query($db, $query))
	    {
	        echo "Records were updated successfully.";
	        echo "<script> alert('Sucessfully payed for the event!'); </script>";
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
	echo "<h3>Dear " . $firstname . ".</h3>";
	    echo "<h3>Thank You. Your order status is " . $status . ".</h3>";
	    echo "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
	    echo "<h4>We have received a payment of Rs. " . $amount;

?>
<link rel="stylesheet" type="text/css" href="style.css">
            <p> <br> <a href="/member/" class="btn">Back</a> </p>