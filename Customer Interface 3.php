<?php
session_start();

if (isset($_POST['search']) && $_POST['search'] == 'Search') {
	include 'testconnect.php';

	$Fname = $_SESSION['Fname'];
	$Lname = $_SESSION['Lname'];
	$idNumber = $_SESSION['idNumber'];
	$Department = $_SESSION['Department'];
	$Email = $_SESSION['Email'];
	$Contact = $_SESSION['Contact'];

	$Facilities = $_POST['Facilities'];
	$Capacity = $_POST['Capacity'];
	$Date = $_POST['date'];
	$startTime = $_POST['starttime'];
	$stopTime = $_POST['stoptime'];
	$ticketNumber = 'XYZ-' . rand(1, 9999); 

	//echo $Fname,$Lname,$idNumber,$Department,$Email,$Contact,$Facilities,$Capacity,$Date,$startTime,$stopTime;

	//mysqli_query($db_con,"INSERT INTO ticketrequest ('Facilities','Capacity','Date','startTime','stopTime') VALUES('$Facilities', $Capacity, '$Date', '$startTime', '$stopTime')");
	$sql = "INSERT INTO `ticketrequest` (`ticketNumber`, `Fname`,`Lname`,`idNumber`,`Department`,`Email`,`Contact`,`Facilities`,`Capacity`,`Date`,`startTime`,`stopTime`) VALUES('$ticketNumber','$Fname','$Lname','$idNumber','$Department','$Email','$Contact','$Facilities',$Capacity,'$Date','$startTime','$stopTime')";
	//echo $sql;
    if (!$db_con->query($sql)) {
    	print "Query failed";
    }

    $sql2 = "SELECT * FROM facility WHERE facilityType = '$Facilities'";
    $results = $db_con->query($sql2);
    //echo "Your Ticket Has been Submitted";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Request Manager
		</title>
		<link rel="stylesheet" href="clientinterface.css">
		 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
 		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
 		 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
 		 <script>
  			$(document).ready(function() {
    		$("#datepicker").datepicker();
 			 });
 		 </script>
	</head>

	<body>
		<div class="container">
			<div class="form-bg2">
				<div class="top-of-page">
					<h1 class="form-title" dir="ltr" style="text-align:center">Search for Facility
					</h1>
					<hr>
				</div>
				<div class="test2" style="display:visible">
				<p>Please complete the following form before you are able to proceed with your request: <p>
			<div>
				<form>
					<table>
						<tbody class="resultsForm">
							<tr>
								<th>Room Name</th>
								<th>Room Type</th>
								<th>Capacity</th>
								<th>Status</th>		
							</tr>
							<?php while($row = $results->fetch_object()): ?>	
								<tr>

									<td><?php echo $row->FacilityName; ?></td>
									<td><?php echo $row->facilityType; ?></td>
									<td><?php echo $row->Capacity; ?></td>
									<td>
									<?php
										if ($row->Status == 1) {
											echo 'Available';
										} else {
											echo 'Unavailable';
										}
									?>
									</td>

								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</form>
			</div>
			<div class="leftside3">
					<div class="innerleftside">
								<h3 style="text-align:center">User Control Panel</h3>
								<hr>
								<br>
								<a href="Customer Interface.html"><input type="button" value="Create New Ticket" class="Create" onclick =""></a>
								<br>
								<br>
								<a href="Customer Interface 2.2.php"><input type="button" value="View  Ticket Information" class="View" onclick =""></a>
								<br>
								<br>
								<input type="button" value="Update Ticket Information" class="Update" onclick ="">
								<br>
								<br>
								<input type="button" value="Log Out" class="logOut" onclick ="">
								<br>
								<br>
								<br>
								<br>
								<br>
								<hr>
									<p style="text-align:center">Request Manager &#169; Version: 1.0</p>
								<hr>
					</div>
			</div>
			<div class="rightside3">
				<form>
					
				</form>
			<div class="banner"> 
				<div class="bannerLogo">
					<img src="logo.png">
				</div>
					
				<div class="bannerTitle">
					<h1>UNIVERSITY OF THE WEST INDIES MONA</h1>
					<h2>The Faculty Of Medical Sciences</h2>
					<h4>Request Manager System<h4>
				</div>
			</div>

	</body>
</html>