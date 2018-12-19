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

include('data.php');
if (isset($_POST['payment'])) 
{
define('MERCHANT_KEY', 'MJniD3wU');
define('SALT', 'X42vitOlPS');
define('PAYU_BASE_URL', 'https://secure.payu.in');    //Testing url
//define('PAYU_BASE_URL', 'https://secure.payu.in');  //actual URL
define('SUCCESS_URL', 'https://www.acumenece.info/member/order-success.php');  //have complete url
define('FAIL_URL', 'https://www.acumenece.info/member/order-fail.php');    //add complete url 
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$firstName = $_POST['name'];
$lastName = $_POST['name'];
$college = $_POST['college'];
$topic= $_POST['topic'];
$pp = $_POST['apply'];
$branch = $_POST['branch'];
$roll = $_POST['roll'];
$totalCost = 1;
$hash         = '';
//Below is the required format need to hash it and send it across payumoney page. UDF means User Define Fields.
//$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hash_string = MERCHANT_KEY."|".$txnid."|".$totalCost."|"."productinfo|".$firstName."|".$email."|||||||||||".SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = PAYU_BASE_URL . '/_payment'; 

$e=$_SESSION['member'];
        $no=0;

        $sql="SELECT email FROM presentation where email='$e'";

        if ($result=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
              
              $demail=$row[0];
              $no++;
            }
          }

if($no>0)
{
    $query="UPDATE `presentation` SET `topic`='$topic',`pp`='$pp' WHERE email='$email'";   
    mysqli_query($db, $query);
}
else
{
  $query="INSERT INTO presentation (name, email, topic, pp, mobile, college,branch,roll) VALUES ('$firstName','$email','$topic','$pp','$mobile','$college','$branch','$roll')";
  mysqli_query($db, $query);
}

}


if (isset($_POST['pay'])) 
{
define('MERCHANT_KEY', 'MJniD3wU');
define('SALT', 'X42vitOlPS');
define('PAYU_BASE_URL', 'https://secure.payu.in');    //Testing url
//define('PAYU_BASE_URL', 'https://secure.payu.in');  //actual URL
define('SUCCESS_URL', 'https://www.acumenece.info/member/success.php');  //have complete url
define('FAIL_URL', 'https://www.acumenece.info/member/order-fail1.php');    //add complete url 
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$totalCost = $_POST['totalCost'];
$hash         = '';
//Below is the required format need to hash it and send it across payumoney page. UDF means User Define Fields.
//$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hash_string = MERCHANT_KEY."|".$txnid."|".$totalCost."|"."productinfo|".$firstName."|".$email."|||||||||||".SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = PAYU_BASE_URL . '/_payment'; 
}

?>



<form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm" style="display: none">
    <input type="hidden" name="key" value="<?php echo MERCHANT_KEY ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    <input name="amount" type="number" value="<?php echo $totalCost; ?>" />
    <input type="text" name="firstname" id="firstname" value="<?php echo $firstName; ?>" />
    <input type="email" name="email" id="email" value="<?php echo $email; ?>" />
    <input type="text" name="phone" value="<?php echo $mobile; ?>" />
    <textarea name="productinfo"><?php echo "productinfo"; ?></textarea>
    <input type="text" name="surl" value="<?php echo SUCCESS_URL; ?>" />
    <input type="text" name="furl" value="<?php echo  FAIL_URL?>"/>
    <input type="text" name="service_provider" value="payu_paisa"/>
    <input type="text" name="lastname" id="lastname" value="<?php echo $lastName ?>" />
</form>
<script type="text/javascript">
    var payuForm = document.forms.payuForm;
    payuForm.submit();
</script>