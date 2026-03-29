<?php 

$server = "localhost";

$username = "root";

$password = "";

$databasename = "Assignment3";

$conn = mysqli_connect($server,$username,$password,$databasename);

if($conn)
{
	echo"Database connected Successfully";
}

else
{
	echo " Error ";
}


?>