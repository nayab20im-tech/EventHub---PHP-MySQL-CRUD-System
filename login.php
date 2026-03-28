<?php

include "connection.php";

if(isset($_POST['register']))
{
	$name = $_POST['fname'];
	$password = $_POST['password'];

	$checkUser = "Select * from login where password='$password'";
	$result = mysqli_query($conn,$checkUser);
	$count = mysqli_num_rows($result);

	if($count==0)
	{
		header('Location:forth.html');
	}
}

if(isset($_POST['submit']))
{
	$name = $_POST['fname'];
	$password = $_POST['password'];

	$checkUser = "Select * from login where password='$password'";
	$result = mysqli_query($conn,$checkUser);
	$count = mysqli_num_rows($result);

	if($count>0)
	{
		header('Location:forth.html');
	}
	else 
	{
		header('Location:register.html');
	}


}
if(isset($_POST['login']))
{
	$name = $_POST['fname'];
	$password = $_POST['password'];

	$checkUser = "Select * from login where password='$password'";
	$result = mysqli_query($conn,$checkUser);
	$count = mysqli_num_rows($result);

	if($count==1)
	{
		header('Location:Organizer.php');
	}
	else 
	{
		echo"Invalid UserName or Password";
	}


}

?>