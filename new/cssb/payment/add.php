<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php
session_start(); 

if (isset($_POST['add'])) 
{
        $payemail= $_POST['payemail'];
        $uemail= $_POST['uemail'];
        $amount=$_POST['totalCost'];
        $pack=$amount/10;
        $sess=$_SESSION['payadmin'];
		include('data.php');
        $sess=$_SESSION['payadmin'];
		$sql="SELECT amount FROM adpay where email='$sess'";
		if ($result=mysqli_query($db,$sql))
		  {
  			// Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
    		{
			
    			$update=$row[0];
    			
   			 }

 		 mysqli_free_result($result);
			}

		$modi=$update+$amount;
        $query="INSERT INTO payment (uemail, aemail, amount) VALUES ('$uemail','$payemail','$amount')";
 	     mysqli_query($db, $query);
        echo '<script> alert("Sucessfully added");</script>';
        $status="success";
         $first=$a=$p=0;
         $sql="SELECT first_name,amount, package FROM `members` WHERE  email='$uemail'";
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
		sendmail($first,$uemail,$amount);
		$uamount=$amount+$a;
		$upack=$pack+$p;
        $query="UPDATE `members` SET `paystatus`='$status',`amount`='$uamount',`package`='$upack' WHERE email='$uemail'";
        mysqli_query($db, $query);
        $query="UPDATE `adpay` SET `amount`='$modi' WHERE email='$sess'";
        mysqli_query($db, $query);
        
       
			
       
        mysqli_close($db);
      

}
function sendmail($name, $email,$amount)
 {
    
    date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.zoho.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "admin@acumenece.info"; // Your Gmail address.
$mail->Password = "maheshrko"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->setFrom('admin@acumenece.info', 'ACUMEN ECE'); // Set the sender of the message.
$mail->addAddress($email, $name); // Set the recipient of the message.
$mail->Subject = 'Payment sucessful'; // The subject of the message.
$mail->IsHTML(true);
/*
 * Message Content - Choose simple text or HTML email
 */
$msg='<h4> Dear '.$name.'</h4><br>'.'Thank you <br> Your payment has received';
$msg=$msg."<br> Amount Paid: ".$amount;

// Choose to send either a simple text email...
$mail->Body = $msg; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

// Optional: attach a file
//$mail->addAttachment('images/phpmailer_mini.png');

if ($mail->send()) {
    echo "Your message was sent successfully!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}
?>


<body>
	<div class="header">
		<h2>Members Registered </h2>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</div>
	<table class="data-table">
		<caption class="title"></caption>
		<thead>
			<tr>
				<th>S.NO</th>
				<th>NAME</th>
				<th>AMOUNT</th>
				

			</tr>
		</thead>
		<tbody>
		<?php
		$no=0;
		include('data.php');
		$sess=$_SESSION['payadmin'];
		$sql="SELECT uemail,amount FROM payment where aemail='$sess'";

		if ($result=mysqli_query($db,$sql))
		  {
  			// Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
    		{
    		$no++;
    		echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row[0].'</td>
					<td>'.$row[1].'</td>
				</tr>';
			

   			 }
  		
 		 mysqli_free_result($result);
			}

		mysqli_close($db);
		?>
</tbody>
		<tfoot>
			<tr>
				<th colspan="1">TOTAL</th>
				<th><?php echo $no;?></th><br>


		
			</tr>


    

		</tfoot>
	</table>
	<br><br><br>
  <label class="col-md-2 control-label""></label>

    <a href="index.php" class="btn btn-primary">Home</a>
</div>
</body>


<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 10;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td 
		{
			background-color: #f4fbfe;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			
			text-align: center;
		}
		.data-table tfoot th:first-child 
		{
			background-color:#lightpink;
			text-align: center;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>