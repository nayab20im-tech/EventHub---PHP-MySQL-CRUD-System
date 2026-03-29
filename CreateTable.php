<?php

include "connection.php" ;

$sql = "create table Register(
		EventId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		EventName varchar(255),
		EventDate date,
		EventLocation varchar(255),
		Message varchar(20000),
		CustomerName varchar(255),
		Email varchar(255),
		PhoneNumber varchar(255),
		noOfAttendees int
		)";

if($conn->query($sql)==true)
{
	echo "<br>Table created Successfully";
}
else
{
	echo"Error";
}



?>