{"filter":false,"title":"process.php","tooltip":"/process.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":25,"column":2},"action":"insert","lines":["<?php","\t\tinclude 'testconnect.php';","","\t\t$Fname = $_POST['Fname'];","    \t$Lname = $_POST['Lname'];","    \t$idNumber = $_POST['idNumber'];","    \t$Department = $_POST['Department'];","    \t$Email = $_POST['Email'];","    \t$Contact = $_POST['Contact'];","    \t$Facilities = $_POST['Facilities'];","    \t$Capacity = $_POST['Capacity'];","    \t$Date = $_POST['Date'];","    \t$startTime = $_POST['startTime'];","    \t$stopTime = $_POST['stopTime'];","    \t$ticketNumber = 'XYZ-' . rand(1, 9999); ","","    \t//echo $Fname,$Lname,$idNumber,$Department,$Email,$Contact,$Facilities,$Capacity,$Date,$startTime,$stopTime;","","    \t//mysqli_query($db_con,\"INSERT INTO ticketrequest ('Facilities','Capacity','Date','startTime','stopTime') VALUES('$Facilities', $Capacity, '$Date', '$startTime', '$stopTime')\");","    \t$sql = \"INSERT INTO `ticketrequest` (`ticketNumber`, `Fname`,`Lname`,`idNumber`,`Department`,`Email`,`Contact`,`Facilities`,`Capacity`,`Date`,`startTime`,`stopTime`) VALUES('$ticketNumber','$Fname','$Lname','$idNumber','$Department','$Email','$Contact','$Facilities',$Capacity,'$Date','$startTime','$stopTime')\";","    \t//echo $sql;","        if (!$db_con->query($sql)) {","        \tprint \"Query failed\";","        }","    echo \"Your Ticket Has been Submitted\";","?>"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":0},"end":{"row":15,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1417402586335,"hash":"f93cfdb1e813d3bcc2f4a36ef0008757df165bc6"}