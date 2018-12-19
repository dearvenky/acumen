<?php include('server-members.php') ?>
<html>
<head>
	<title>Participants</title>
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
</head>
<body>
	<div class="header">
		<h2>Members Registered </h2>
		
	</div>
	<form method="post" action="display.php">
	
	
	<table class="data-table">
		<caption class="title"></caption>
		<thead>
			<tr>
				<th>SELECT</th>
				<th>S.NO</th>
				<th>NAME</th>
				<th>BRANCH</th>
				<th>GENDER</th>
				<th>STATUS</th>
				<th>AMOUNT</th>
				<th>MOBILE NO</th>
				<th>E-MAIL</th>
				<th>COLLEGE</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no=0;
		include('data.php');
		$sql="SELECT first_name,branch,gender,paystatus,amount,mobile,email,college FROM members";

		if ($result=mysqli_query($db,$sql))
		  {
  			// Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
    		{
    		$no++;
    		echo '<tr>
    			  <td><input type="radio" name="update" value="$row[5]" /></td>
					<td>'.$no.'</td>
					<td>'.$row[0].'</td>
					<td>'.$row[1].'</td>
					<td>'.$row[2].'</td>
					<td>'.$row[3].'</td>
					<td>'.$row[4].'</td>
					<td>'.$row[5].'</td>
					<td>'.$row[6].'</td>
					<td>'.$row[7].'</td>
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
		<php
		<div class="input-group">
		<button type="submit" class="btn" name="update_member">Submit</button>
		
			<button type="submit" class="btn" name="Home">Home</button>
		<link rel="stylesheet" type="text/css" href="style.css">
		</div>
   <?php //header('Refresh: 4; display.php');?>
   </form>
</body>
</html>