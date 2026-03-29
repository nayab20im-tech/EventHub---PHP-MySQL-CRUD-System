<?php 

include "connection.php";

if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
}


$sql = "delete from register where EventId=$id";

$result = mysqli_query($conn,$sql);

if($result)
{
	header('location:Organizer.php');
}
else{
	header('location:Organizer.php');
}

?>