<?php 
include 'testconnect.php';
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
  
 		 	<script>
  				$(document).ready(function() {
    			$("#datepicker").datepicker();
 			 	});
 		 	</script>
	</head>

	<body>
		<div class="container">
			<div class="form-bg">
				<div class="top-of-page">
					<h1 class="form-title" dir="ltr" style="text-align:center">Ticket Search</h1>
					<hr>
				</div>
				<p>Please Enter your Unique ticket number in the search field below: </p>
				<form action="search.php" method="get" name="clientInteface">
					<div>
						<table elname="formTable" class border="0" cellspacing="0" cellpadding="0" style>
							<tbody>
								<tr id="requestFrom">
									<td class="labelField" style="text-align: left; width: 107px; white-space: normal;">
										<label>Search:</label>
									</td>
									<td class="inputFeild">
										<input type="text" name="searchq" placeholder="Search for Ticket"/>
									</td>
								</tr>


								<tr>
									<td>									
										<a href=""><input type="Submit" onclick=""name="button" value="Search" /></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
		<div class="leftside4">
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
			<div class="rightside4">
				<form>
					
	`			</form>
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
		</div>
				
	</body>
</html>