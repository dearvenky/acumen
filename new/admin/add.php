<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php
session_start(); 

if (isset($_POST['add'])) 
{
        $event=$_POST['event'];
        $eemail= $_POST['eemail'];
        $uemail= $_POST['uemail'];
        $uname=$_POST['uname'];
        $roll=$_POST['roll'];
        $branch=$_POST['branch'];
        $college=$_POST['college'];
        include('data.php');
        $sql="SELECT `package` FROM `members` WHERE email='$uemail'";
        if ($result=mysqli_query($db,$sql))
		  {
  			// Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
    		{
			
    			$package=$row[0];
    			
   			 }


 		 mysqli_free_result($result);
			}
		if($package>0)
		{

        $query="INSERT INTO played (`eemail`, `event`, `uemail`, `uname`, `roll`, `branch`, `college`) VALUES ('$eemail','$event','$uemail','$uname','$roll','$branch','$college')";
      mysqli_query($db, $query);
      echo '<script> alert("Sucessfully added");</script>';
      $pack=$package-1;
       $query="UPDATE `members` SET `package`='$pack' WHERE email='$uemail'";
        mysqli_query($db, $query);
       mysqli_close($db);
   }
   else
   echo '<script> alert("Insuffient!");</script>';

  

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
				<th>BRANCH</th>
				<th>ROLL NO</th>
				<th>COLLEGE</th>
				<th>EMAIL</th>
				<th>EVENT</th>

			</tr>
		</thead>
		<tbody>
		<?php
		$no=0;
		include('data.php');
		$sess=$_SESSION['admin'];
		$sql="SELECT uname,branch,roll,college,uemail,event FROM played where eemail='$sess'";

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
					<td>'.$row[2].'</td>
					<td>'.$row[3].'</td>
					<td>'.$row[4].'</td>
					<td>'.$row[5].'</td>
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