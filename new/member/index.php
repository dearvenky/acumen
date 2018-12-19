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

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
<script src="https://code.responsivevoice.org/responsivevoice.js"></script>
  <title>Profile</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab+bold' rel='stylesheet'  type='text/css'>

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=VT323);
  
@keyframes blink-empty {
  50% { border-left: 20px solid #00dd00; }
}

@keyframes scroll {
  0% { height: 0 }
  100% { height: 100%; }
}

@keyframes type { 
  from { width: 0; } 
} 

@keyframes type2 {
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink {
  to{opacity: .0;}
}

@keyframes scan {
  from { top: 0 }
  to { top: 100% }
}

@keyframes flicker {
    0% { opacity: 0.15795 }
    5% { opacity: 0.31511 }
    10% { opacity: 0.94554 }
    15% { opacity: 0.2469 }
    20% { opacity: 0.62031 }
    25% { opacity: 0.0293 }
    30% { opacity: 0.00899 }
    35% { opacity: 0.5344 }
    40% { opacity: 0.12778 }
    45% { opacity: 0.52042 }
    50% { opacity: 0.3823 }
    55% { opacity: 0.2198 }
    60% { opacity: 0.9383 }
    65% { opacity: 0.86615 }
    70% { opacity: 0.68695 }
    75% { opacity: 0.55749 }
    80% { opacity: 0.96984 }
    85% { opacity: 0.0361 }
    90% { opacity: 0.24467 }
    95% { opacity: 0.08351 }
    100% { opacity: 0.54813 }
  }

* {
  box-sizing: border-box;
  }
  
html,
body {
  background: #383838;
  color: #00dd00;
  font-size: 64.5%;
  font-size: 1.4em;
  font-family: 'VT323', Courier;
  height: 100%;
  margin: 0;
  padding: 0;
}

h1, h2, h3 h4, h5, h6 { 
  font-weight: normal;
  margin: 0;
  text-transform: uppercase;
}

a {
  color: white; 
  text-decoration: none;  
}

a:hover {
  color: #47B8DE;
}

p { 
  line-height: 100%;
  margin: 0; 
}
  
span { animation: blink 1s infinite }

ul {
  list-style: none;
}

ul a:before,
p a:before {
  color: #00dd00;
  content: ' [ ';
}

ul a:after,
p a:after {
  color: #00dd00;
  content: ' ] '; 
}

header.site {
  margin: 0 0 40px 0;
  text-transform: uppercase;
}

nav,site { 
  margin: 0 0 40px 0;
}

nav.site ul {
  padding: 0;
}

nav.site ul li {
  display: inline-block;
}

.overlay {
  height: 1px;
  position: absolute;
  top: 0;
  left: 0;
  width: 1px;
}

.overlay:before {
  background: linear-gradient(#101010 50%, rgba(16, 16, 16, 0.2) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.03));
  background-size: 100% 3px, 6px 100%;
  content: "";
  display: block;
  pointer-events: none;
  position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  z-index: 2;
}
  
.overlay:after {
  animation: flicker 0.30s infinite;
  background: rgba(16, 16, 16, 0.2);
  content: "";
  display: block;
  pointer-events: none;
  position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  z-index: 2;
}

.col {
  float: left;
  padding: 0 20px;
}

.col.two { width: auto; }

.wrapper {
  animation: scroll 5s 1;
  margin: 0;
  overflow: hidden;
  padding: 0;
}

.content { 
  animation: scroll 3s 1;
  overflow: hidden;
  padding: 40px; 
  position: relative;
  width: 95%;
}

#logo-v {
  display: block;
  height: auto;
  margin: 0 auto;
  width: 200px;
}

img.pip-hero {
  display: block;
  float: left;
  height: auto;
  margin: 5px 10px 5px 0;
  width: 120px;
}

form {}

label {
  clear: left;
  display: block;
  float: left;
  margin-right: 10px;
  padding-top: 5px;
}

input[type=text],
textarea {
  background: transparent;
  border: none;
  color: #00dd00;
  display: block;
  float: left;
  font-family: 'VT323', Courier;
  font-size: 1.2em;
  position: relative;
  width: 80%;
  z-index: 10
}

textarea {
  margin-bottom: 20px
  overflow: auto;
  resize: none;
}

input[type=text]:focus,
textarea:focus,
input[type=submit]:focus,
a.button:focus {
  outline: 0;
}

input[type=submit],
a.button {
  background: transparent;
  border: 1px solid #00dd00;
  clear: both;
  color: #00dd00;
  cursor: hand;
  display: inline-block;
  font-family: 'VT323', Courier;
  font-size: 1em;
  margin-bottom: 20px;
  opacity: 0.25;
  padding: 10px 100px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  z-index: 10;
}

input[type=submit]:hover,
a.button:hover {
  background: #00dd00;
  color: #383838;
  opacity: 0.8;
}

.expandingArea { position: relative }
  
.scanline {
  animation: scroll 10s 5s infinite;
  background: -moz-linear-gradient(top,  rgba(0,221,0,0) 0%, rgba(0,221,0,1) 50%, rgba(0,221,0,0) 100%);
  background: -webkit-linear-gradient(top,  rgba(0,221,0,0) 0%,rgba(0,221,0,1) 50%,rgba(0,221,0,0) 100%);
  background: linear-gradient(to bottom,  rgba(0,221,0,0) 0%,rgba(0,221,0,1) 50%,rgba(0,221,0,0) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0000dd00', endColorstr='#0000dd00',GradientType=0 );
  display: block;
  height: 20px;
  opacity: 0.05;
  position: absolute;
    left: 0;
    right: 0;
    top: -5%;
  z-index: 2;
}

.clear {
  clear: both;
}

.clearfix {
  overflow: auto;
  zoom: 1;
}

.upper { text-transform: uppercase; }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

    <div class="overlay"></div>
  <div class="scanline"></div>
<div class="wrapper"> 
<div class="content clearfix">
    
    <header class="site clearfix">
    <
      <div class="col two">
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
        <?php  if (isset($_SESSION['member'])) : ?>
        <h4>Welcome <strong><?php echo $_SESSION['member']; ?></strong> </h4>
        <p>---------------------------------------------------------------</p>
        <?php
        $no=0;
        $e=$_SESSION['member'];

        $sql="SELECT first_name,branch,paystatus,amount,reg_by,mobile,email,college,roll,package FROM members where email='$e'";



        if ($result=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
            $no++;
            $sess=$_SESSION['member'];
            $sess=strtolower($sess);
            if($sess==$row[6])
            {
                echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">First Name :'; echo $row[0];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 

$name=$row[0];
        

                            

            if($row[2]=="success")
                {
                    echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Payment Status :'; echo $row[2];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 
echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Upgrade pack : <a class="button" alt="" href="pay.php">PAY</a>';
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 

                }
            else                
            {
                
                    echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Payment status : <a class="button" alt="" href="pay.php">PAY</a>';
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 
                }
            echo '<div class="form-group">
  <label class="col-md-9 control-label" for="Name">Amount :'; echo $row[3];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 
echo '<div class="form-group">
  <label class="col-md-9 control-label" for="Name">Events Remaining :'; echo $row[9];
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>';
$pau=0;
$sql="SELECT paystatus FROM presentation where email='$e'";

        if ($resultn=mysqli_query($db,$sql))
          {
            // Fetch one and one row
          while ($rown=mysqli_fetch_row($resultn))
            {
              
              $pay=$rown[0];
              $no++;
            }
          } 
if($pay=="success")
{
    echo'<div class="form-group">
  <label class="col-md-4 control-label" >You have registered for presentation';
  echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Upload paper docx : <a class="button" alt="" href="uploadform.php">upload</a>';
}
else
{
  echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Paper/Poster presentation : <a class="button" alt="" href="presentation.php">APPLY</a>';
  echo '</label>  
  <div class="col-md-4">
    
  </div>
</div>'; 
}
echo '<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Mobile :'; echo $row[5];
  echo '</label>  
</div>'; 
echo '<div class="form-group">
  <label class="col-md-9 control-label" for="Name">Email :'; echo $row[6];
  echo '</label>  
  
</div>'; 
                  
echo '<div class="form-group">
  <label class="col-lg-6" for="Name">College :'; echo $row[7];
  echo '</label>  
 
</div>'; 
echo '<div class="form-group">
  <label class="col-lg-4" for="Name">Roll No :'; echo $row[8];
  echo '</label>  
 
</div>';

            }

             }
        mysqli_free_result($result);
            }
    
        ?>

<table class="data-table">
    <caption class="title"></caption>
    <thead>
      <tr>
        <th>S.NO</th>
        <th>EVENTS(played)</th>

      </tr>
    </thead>
    <tbody>
      <?php
    $no=0;
    
    $sess=$_SESSION['member'];
    $sql="SELECT event FROM played where uemail='$sess'";

    if ($result=mysqli_query($db,$sql))
      {
        // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
        $no++;
        echo '<tr>
          <td>'.$no.'</td>
          <td>'.$row[0].'</td>
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

<script>
setTimeout(responsiveVoice.speak(" Welcome <?php echo $name ;?> , you have played <?php echo $no;?> events","Hindi Female"),15000);

</script>
    
      </tr>


        </tfoot>
  </table>
  </tbody>
 </table>
            <br>


       
     


        <?php endif ?>
</div>
      </div>
    </header>
    
    <nav class="site clear">
      <ul>
        <li><a href="https://www.acumenece.info" title="">Return Home</a></li>
        <li><a href="#" title="">Events</a></li>
        <li><a href="#" title="">Contact Us</a></li>

      </ul>
    </nav>
        

    <p class="clear"><br /></p>

  
      
                        <a class="button" alt="" href="index.php?logout='1'">LOGOUT</a>
      <a class="button" alt="" href="https://www.acumenece.info">HOME</a>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://static.tumblr.com/maopbtg/oimmiw86r/jquery.autosize-min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>