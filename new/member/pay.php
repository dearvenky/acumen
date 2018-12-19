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
     $e=$_SESSION['member'];


      $sql="SELECT first_name,last_name,mobile,email,paystatus FROM members where email='$e'";

        if ($result=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
            
            if($_SESSION['member']==$row[3])
            {
                    $firstname=$row[0];
                    $lastname=$row[1];
                    $mobile=$row[2];
                    $email=$row[3];
                    $status=$row[4];
            
            }
             }
            }
            mysqli_close($db);
      ?>



    <head>
    <title>Payment</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
        <h2>Payment</h2>

        </div>

            <form class="form-horizontal" method="post" action="PayUMoney_form.php" id="p1">

        <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">

        <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">

        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

            <!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Applying For</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="-0">
      <input type="radio" name="totalCost" value="5" required/>
      Mega(5 Rs)
    </label>
    </div>
  <div class="radio">
    <label for="-1">
      <input type="radio" name="totalCost" value="3" required/>
      Mini(3 Rs)
    </label>
    </div>
    <div class="radio">
    <label for="-0">
      <input type="radio" name="totalCost" value="1" required/>
      Micro(1 Rs)
    </label>
    </div>
  </div>
</div>
            
        </div>
        <div class="form-group">
  <label class="col-md-4 control-label" for="payment"></label>
  <div class="col-md-4">
    <button type="submit" id="payment" name="pay" class="btn btn-primary">Pay</button>
  </div>
</div>
    </form>
     </body>
