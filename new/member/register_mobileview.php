<?php include('server-members.php') ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>

  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


	<head>
    
	<title>Registrations</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	<div class="header">
		<h1><strong>Register for ACUMEN ECE 2K18</strong></h1>
	</div>
	
	<form class="form-horizontal" method="post" action="register.php">
    <?php include('errors.php'); ?>
	
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">First Name</label>  
  <div class="col-md-4">
  <input id="name" name="First_Name" type="text" placeholder="" maxlength="15"class="form-control input-md" required="">
    
  </div>
</div>
	    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Last Name</label>  
  <div class="col-md-4">
  <input id="name" name="Last_Name" type="text" placeholder="" maxlength="15"class="form-control input-md" required="">
    
  </div>
</div>

	    
     <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Mobile</label>  
  <div class="col-md-4">
  <input id="name" name="Mobile_Number" type="text" placeholder="" maxlength="10"class="form-control input-md" required="">
    
  </div>
</div>
		
		<!-- Select Basic Gender -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4">
    <select id="Gender" name="Gender" class="form-control">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
</div>

     <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">College</label>  
  <div class="col-md-4">
  <input id="name" name="college" type="text" placeholder="" maxlength="35"class="form-control input-md" required="">
    
  </div>
</div>

		

		<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch</label>
  <div class="col-md-4">
    <select id="branch" name="BRANCH" class="form-control">
      <option value="ECE">ECE</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="EEE">EEE</option>
      <option value="MECH">MECH</option>
      <option value="CIVIL">CIVIL</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Roll No</label>  
  <div class="col-md-4">
  <input id="name" name="rollno" type="text" placeholder="" maxlength="35"class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">E-Mail</label>  
  <div class="col-md-4">
  <input id="name" name="email" type="text" placeholder="" maxlength="35"class="form-control input-md" required="">
    
  </div>
</div>
	

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password_1" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Confirm Password</label>
  <div class="col-md-4">
    <input id="password" name="password_2" type="password"  placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-4">
    <button id="login" name="reg_member" class="btn btn-primary btn-block" >Sign Up</button>
  </div>
</div>
	
</form>
  <a href="https://www.acumenece.info" class="btn btn-primary" class="btn btn-primary">Home</a><br>
			Already a member? <a class="btn btn-primary btn-block" href="login.php">Sign in</a><br><br>

		</p></body>

</body>
</html>