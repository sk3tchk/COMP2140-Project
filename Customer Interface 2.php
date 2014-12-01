<?php
session_start();

if (isset($_POST['nextButton']) && $_POST['nextButton'] == 'Next') {

	$_SESSION['Fname'] = $_POST['Fname'];
	$_SESSION['Lname'] = $_POST['Lname'];
	$_SESSION['idNumber'] = $_POST['idNumber'];
	$_SESSION['Department'] = $_POST['Department'];
	$_SESSION['Email'] = $_POST['Email'];
	$_SESSION['Contact'] = $_POST['Contact'];

}
?>
<!DOCTYPE html>
<html>
	<title>
		Request Manager
	</title>

	<head>
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
				<form action="Customer Interface 3.php" method="post" name="clientInteface">
					<div>
						<table elname="formTable" class border="0" cellspacing="0" cellpadding="0" style>
						 	<tbody>
								<tr id="requestFrom">

									<td class="labelFeild" style="text-align: left; width: 107px; white-space: normal;">
											<label style="">Facilities:&nbsp;<font color="#ec3e3e">*</font></label>
									</td>
									<td class="inputheader" elname="zc-fieldtd" style="">
										<select class="dropdown" tagfor="formComp" type="picklist" name="Facilities" title="" fieldtype="29" style="width:165px;width:165px;" delugetype="STRING" formcompid="2333007000000012081" isformulaexist="" onchangeexists="">
											<option value="-Select-">-Select-</option>


											<option value="Laboratories">Laboratories</option>


											<option value="Lecture Theatres">Lecture Theatres</option>


											<option value="Meeting Rooms">Meeting Rooms</option>


											<option value="Seminar Rooms">Seminar Rooms</option>


											<option value="Tutorial Rooms">Tutorial Rooms</option>


											<option value="-otherVal-">Other</option>
										</select>

									</td>
									<td>&nbsp;</td>

								</tr>
								<tr id="requestFrom">
									<td class="labelField" style="text-align: left; width: 107px; white-space: normal;">
										<label>Room Capacity:&nbsp;<font color="#ec3e3e">*</font></label>
									</td>
									<td>
										<input type="number" name="Capacity" />
									</td>
									<td>&nbsp;</td>
								</tr> 
								<tr id="requestFrom">
 
									<td class="labelFeild" style="text-align: left; width: 107px; white-space: normal;">
										<label for="requestFrom" style="">Date:&nbsp;<font color="#ec3e3e">*</font></label>
									</td>
									<td class="input" elname="zc-fieldtd" style="">
										<input type="date" name="date" value="" class="ss-q-date required" dir="auto" id="entry_803913588" aria-label="Date of Event  " aria-required="true" required="">
									</td>
									<td>&nbsp;</td>
 
								</tr>
								<tr id="requestFrom">
										<td class="labelField" style="text-align: left; width: 107px; white-space: normal;">
											<label>Start-Time:&nbsp;<font color="#ec3e3e">*</font></label>
										</td>
										<td>
											<input type="time" name="starttime" value="" class="ss-q-time required" dir="auto" id="entry_738950768" aria-label="Shift Start Time  " aria-required="true" required="">
										</td>
										<td>&nbsp;</td>								</tr>
								<tr id="requestFrom">
										<td class="labelField" style="text-align: left; width: 107px; white-space: normal;">
											<label>Stop-Time:&nbsp;<font color="#ec3e3e">*</font></label>
										</td>
										<td>
											<input type="time" name="stoptime" value="" class="ss-q-time required" dir="auto" id="entry_738950768" aria-label="Shift End Time  " aria-required="true" required="">
										</td>
										<td>&nbsp;</td>
								</tr>
								<tr>
									<td>
										<a href="Customer Interface.html"><input type="button" name="back" value="Back" /></a> 	
									</td>
									<td>
										<input type="button" name="cancel" value="Cancel" />
										<input id="searcher" type="submit" name="search" value="Search" onclick="searchFor()"/>
										<!-- <input id="searcher" type="submit" name="search" value="Search" onclick="searchFor()"/>-->
									</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
				</form>
			</div>
				<script type="text/javascript">
						$("#searcher").click(function(){
						$(".test").show(1000);
						$(".test").show(500);
					});
				</script>
				<script>
				//$( "#searcher" ).click(function() {
  						//$( ".test" ).show( 1000 );
						//});
				</script>
				<div class="test" style="display:none;">
				<hr>
				<p>Your search results will be displayed in the table below, please click in the link in the table for more information: <p>

				<form>
					<table>
						<tbody class="resultsForm">
							<tr>
								<th>Room Name</th>
								<th>Room Type</th>
								<th>Capacity</th>
								<th>Available Time</th>
								<th>Status</th>		
							</tr>
							<script>
								var rooms = [];

								for (var i = 0; i < rooms.length; i++) {
									document.write('<tr>');
									document.write('<td>' + rooms[i][0] + '</td>');
									document.write('<td>' + rooms[i][1]+ '</td>');
									document.write('<td>' + rooms[i][2] + '</td>');
									document.write('<td>' + rooms[i][3]+ '</td>');
									document.write('<td>' + rooms[i][4] + '</td>');
									document.write('</tr>');	
								}
								
								</script>
								<tr>

									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>

								</tr>

						</tbody>
					</table>
				</form>
			</div>
				<hr>	
			</div>
			</div>
			<div class="leftside">
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
			<div class="rightside">
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
		</div>
	</body>
</html>