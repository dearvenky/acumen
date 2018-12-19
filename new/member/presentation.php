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
<head>
    <title>Registrations</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<br><br><br>



<div class="container">

<form class="form-horizontal fv-form fv-form-bootstrap" method="post" action="PayUMoney_form.php">
<fieldset>

<!-- Form Name -->
<legend>Registration and payment for Paper/Poster presentation</legend>
















<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name(Topic)</label>  
  <div class="col-md-4">
  <input id="name" name="topic" type="text" placeholder="Name of the topic" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Applying For</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="-0">
      <input type="radio" name="apply" id="-0" value="paper" checked="checked" required="">
      Paper
    </label>
    </div>
  <div class="radio">
    <label for="-1">
      <input type="radio" name="apply" id="-1" value="poster" required="">
      Poster
    </label>
    </div>
  </div>
</div>
        <?php
        $e=$_SESSION['member'];

        $sql="SELECT first_name,branch,mobile,email,college,roll FROM members where email='$e'";

        if ($result=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
              $name=$row[0];
              $branch=$row[1];
              $mobile=$row[2];
              $email=$row[3];
              $college=$row[4];
              $roll=$row[5];
             }
           } 
           ?>
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="college" value="<?php echo $college; ?>">
        <input type="hidden" name="branch" value="<?php echo $branch; ?>">
         <input type="hidden" name="roll" value="<?php echo $roll; ?>">








    <div class="form-group">
        <label class="col-xs-3 control-label">Terms of use</label>
        <div class="col-xs-9">
            <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
              <strong>Rules for Paper Presentation:<br></strong>
                <ul>
                  <li>Maximum no of participants in a team is 2.</li>
                  <li>Document should not exceed 3 pages.</li>
                  <li>Soft-copy of submitted paper should be in .docx format.</li>
                  <li>Please upload your Document in your login page.(After sucessful Payment)</li>
                  <li>Document should contain:
                      <br>i.  Theme of paper
                       <br>ii. Name of participant(s)
                      <br>iii.  Phone no of participant(s)
                      <br>iv. E-mail ID 
                      </li>
                  <li><strong>Strictly use IEEE format for Document writing.</strong></li>
                  <li>Example for IEEE format is: <br> <a href="https://www.ieee.org/publications_standards/publications/conferences/20en14_04_msw_a4_format.doc">https://www.ieee.org/publications_standards/publications/conferences/20en14_04_msw_a4_format.doc</a> </li>
                  <li>After you have submitted the soft copy, a panel of judges will go through your material and if you are shortlisted to give presentation, you will be notified</li>
                  <li>For submitting Document a team should pay Rs 50/- (for registration).</li>
                  <li>Selected participants should pay additional Rs 150/-</li>
                  <li>Selected participants should present a power point presentation.</li>
                  <li>The decision of judges is final and no arguments or appeal will be entertained.</li>
                  <li>For any more queries contact:
                        <br>Manasa-9490852386
                        <br>Akshay-8985641996 
                    </li>
                </ul> 
               <strong>Rules for poster presentation:</strong><br>
               ●  Maximum no of participants in a team is 2.<br>
● Abstract should not exceed 1 page.<br>
● Soft-copy of submitted paper should be in .docx format.<br>
● Please upload your abstract in your login page.<br>
● Abstract should contain:<br>
v.  Theme of poster<br>
vi. Name of participant(s)<br>
vii.  Phone no of participant(s)<br>
viii. E-mail ID <br>
● There is no format to be followed for abstract writing.<br>
● After you have submitted the soft copy, a panel of judges will go through your material and if you are shortlisted to give poster<br> presentation, you will be notified.<br>
● For submitting abstract,  a team should pay Rs 50/- (for registration).<br>
● Selected participants should pay additional Rs 150/-<br>
● Selected participants should present their topic in a chart.<br>
● The decision of judges is final and no arguments or appeal will be entertained.<br>
● For any more queries contact:<br>
    Manasa-9490852386<br>
     Akshay-8985641996<br>


            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="agree" required /> Agree with the terms and conditions
                </label>
            </div>
        </div>
    </div>





<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="payment"></label>
  <div class="col-md-3">
    <button type="submit" id="payment" name="payment" class="btn btn-primary">Pay</button>
  </div>
</div>

</fieldset>
</form>
</body>
</div>
<style type="text/css">
 
  
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('#registrationForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});
</script>