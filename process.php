<?php
		include 'testconnect.php';

		$Fname = $_POST['Fname'];
    	$Lname = $_POST['Lname'];
    	$idNumber = $_POST['idNumber'];
    	$Department = $_POST['Department'];
    	$Email = $_POST['Email'];
    	$Contact = $_POST['Contact'];
    	$Facilities = $_POST['Facilities'];
    	$Capacity = $_POST['Capacity'];
    	$Date = $_POST['Date'];
    	$startTime = $_POST['startTime'];
    	$stopTime = $_POST['stopTime'];
    	$ticketNumber = 'XYZ-' . rand(1, 9999); 

    	//echo $Fname,$Lname,$idNumber,$Department,$Email,$Contact,$Facilities,$Capacity,$Date,$startTime,$stopTime;

    	//mysqli_query($db_con,"INSERT INTO ticketrequest ('Facilities','Capacity','Date','startTime','stopTime') VALUES('$Facilities', $Capacity, '$Date', '$startTime', '$stopTime')");
    	$sql = "INSERT INTO `ticketrequest` (`ticketNumber`, `Fname`,`Lname`,`idNumber`,`Department`,`Email`,`Contact`,`Facilities`,`Capacity`,`Date`,`startTime`,`stopTime`) VALUES('$ticketNumber','$Fname','$Lname','$idNumber','$Department','$Email','$Contact','$Facilities',$Capacity,'$Date','$startTime','$stopTime')";
    	//echo $sql;
        if (!$db_con->query($sql)) {
        	print "Query failed";
        }
    echo "Your Ticket Has been Submitted";
?>