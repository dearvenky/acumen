<?php include('server-members.php') ?>


	<head>
	<title>Registrations(payment)</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	<div class="header">
		<h1>Register(payment) for ACUMEN ECE 2K18</h1>
	</div>
	
	<form class="form-horizontal" method="post" action="add-details.php">
	
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name(organiser)</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" maxlength="15" class="form-control input-md" required="">
    
  </div>
</div>


	    
     <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Mobile</label>  
  <div class="col-md-4">
  <input id="name" name="Mobile_Number" type="text" placeholder="" maxlength="10" class="form-control input-md" required="">
    
  </div>
</div>
		

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">E-Mail</label>  
  <div class="col-md-4">
  <input id="name" name="email" type="text" placeholder="" maxlength="35" class="form-control input-md" required="">
    
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
    <button id="login" name="reg_member" class="btn btn-primary btn-block">Sign Up</button>
  </div>
</div>
	
</form>
			Already a member? <a href="memberlogin.php">Sign in</a><br><br>
		</p>

</form>

</body>
</html>