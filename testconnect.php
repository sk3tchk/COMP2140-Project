<?php
 $db_con = new mysqli("localhost","root","","ticket"); 
 //mysqli_select_db($db_con,"ticket")or die("cannot select DB");
 if($db_con->connect_errno) {
 	printf("Connect Falied: %s\n", $db_con->connect_error);
 	exit();
 }

 if ($db_con->ping()) {
 	printf ("Our connection is ok!\n");
 } else {
 	printf ("Error: %s\n", $db_con->error);
 }

?>