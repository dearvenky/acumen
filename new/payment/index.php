<?php

 session_start(); 

    if (!isset($_SESSION['payadmin'])) 
    {
        $_SESSION['msg'] = "You must log in first";
        header('location: memberlogin.php');
    }

    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['payadmin']);
        header("location: memberlogin.php");
    }


?>
   

<!DOCTYPE html>
<html>

        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="http://acumen.rf.gd/apple-touch-icon.png" width="10" height="10">

        <link rel="stylesheet" href="./acumen.rf.gd_files/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="./acumen.rf.gd_files/plugins.css">

        <!--Theme custom css -->
        <link rel="stylesheet" href="./acumen.rf.gd_files/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="./acumen.rf.gd_files/responsive.css">

        <script src="./acumen.rf.gd_files/modernizr-2.8.3-respond-1.4.2.min.js.download"></script>
    </head>
    <body data-spy="scroll" data-target="#main-navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="preloader" style="display: none;"><div class="loaded" style="display: none;">&nbsp;</div></div>
        <div id="menubar" class="main-menu">  
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://acumen.rf.gd/index.html"><img src="./acumen.rf.gd_files/logo.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li ><a href="http://acumen.rf.gd/index.html">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="http://acumen.rf.gd/#our-team">About</a></li>
                            <li><a class="active" href="http://acumen.rf.gd/member.php">Login</a></li>
                            <li><a href="http://acumen.rf.gd/add-details.php">Register</a></li>
                            <li><a href="http://acumen.rf.gd/#our-feature">Blog</a></li>
                            <li><a href="http://acumen.rf.gd/#">Contact Us</a></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--Home page style-->
        <br><br><br><br><br><br><br><br>
<head>

    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link href='http://fonts.googleapis.com/css?family=Josefin+Slab+bold' rel='stylesheet'  type='text/css'>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<style type="text/css">
  body {
    background-color: lightblue;
   

}
body {
  font-family: 'Josefin Slab bold';
  font-size: 20px;
}
</style>
    <div class="content">

        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['payadmin'])) : ?>


            <h3>Welcome <strong><?php echo $_SESSION['payadmin']; ?></strong></h3>


            <form class="form-horizontal" method="post" action="">
    
        <?php
        include('data.php');
        $no=0;
        
        $sess=$_SESSION['payadmin'];

        $sql="SELECT name,mobile,email,amount FROM adpay where email='$sess'";



        if ($result=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
            
            $sess=strtolower($sess);
            if($sess==$row[2])
            {
                echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name :'; echo $row[0];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 

                            

           
            echo '<div class="form-group">
  <label class="col-md-9 control-label" for="Name">Mobile :'; echo $row[1];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 
echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">E-mail :'; echo $row[2];
  echo '</label>  
</div>'; 
        

            echo '<div class="form-group">
  <label class="col-md-9 control-label" for="Name">Amount :'; echo $row[3];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 

            }

             }
         mysqli_free_result($result);
            }
    


        mysqli_close($db);
        ?>
        </tbody>

    </table>
            <br>


       
                
 <p> <br> <a href="index.php?logout='1'" class="btn btn-primary btn-block">Logout</a> </p>
 <a href="add.php" class="btn btn-primary btn-block">Participants </a>


        <?php endif ?>
</div>

</body>

<div class="container">
  <div class="row">
<br /><br />
<form id="togglingForm" method="post" class="form-horizontal" >
    <div class="form-group">
        <div class="col-xs-9">
            <input type="text" class="form-control" name="key" /> <br />
                   
            <label class="radio-inline">Search User by </label>  
            <label class="radio-inline">
                <input type="radio" name="sby" value="roll" required /> Roll no
            </label>
            <label class="radio-inline">
                <input type="radio" name="sby" value="mobile" required /> Mobile
            </label>
            <label class="radio-inline">
                <input type="radio" name="sby" value="email" required/> Email
            </label>
            
    
                  
        </div>
     
        <div class="col-xs-2">
            <button type="submit" name="search" class="btn btn-success">Search</button>
        </div>
    </div>
</form>

</html>










<?php
include('data.php');

if (isset($_POST['search'])) 
{
        $key=$_POST['key'];
        $sby = $_POST['sby'];
      
        echo '<table class="data-table">
        <caption class="title"></caption>
        <thead>
            <tr>   
               <th>SELECT</th><br>           
               <th>NAME</th><br>
                <th>BRANCH</th><br>
                <th>MOBILE NO</th><br>
                <th>E-MAIL</th><br>
                <th>ROLL NO</th><br>
                <th>COLLEGE</th><br>
            </tr>
        </thead>
        <tbody>
    ';
    
  $sql="SELECT first_name,branch,mobile,email,roll,college FROM members where $sby like '$key'";
  echo '<form  method="post" action="add.php" >';

  if ($result=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {


        echo '<tr>
                    <td><input type="radio" name="uemail" value='.$row[3].' required/></td>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td>';
              $uname=$row[0];
              $branch=$row[1];
              $roll=$row[4];
              $college=$row[5];
              
            }
         mysqli_free_result($result);
            }
    


        mysqli_close($db);
        echo '</tbody>

    </table>
            <br>';
            $payemail=$_SESSION['payadmin'];
        echo '

        <input type="hidden" name="payemail" value='.$payemail.'>
        <input type="hidden" name="uname" value='.$uname.'>
        <div class="input-group">
            <label>Package:</label>
            </div>
            Mega(50 Rs)
            <input type="radio" name="totalCost" value="50" required/>
           <br> Mini(30 Rs)
            <input type="radio" name="totalCost" value="30" required/>
           <br> Micro(10 Rs)
            <input type="radio" name="totalCost" value="10" required/>
            </td>
            <link rel="stylesheet" type="text/css" href="style.css">
            </div>
                  
           <button type="submit" name="add" class="btn btn-primary btn-block ">Add</button>
    </div>
</form>

';

echo "<br><br><br>";
}
?>



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