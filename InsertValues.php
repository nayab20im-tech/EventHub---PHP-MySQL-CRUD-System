<?php
echo"
<div class='div1'>
        <ul>
            <li class='li1'><a href='ajk.html'>Home</a></li>
            <li class='li2'><a href ='Admin.html'>Organizer</a></li>
        </ul>
      </div>";

include "connection.php";

$name = $_REQUEST['Name'];

$email = $_REQUEST['Email'];

$phoneNum = $_REQUEST['PhoneNumber'];

$eventName = $_REQUEST['EventName'];

$eventDate = $_REQUEST['EventDate'];

$location = $_REQUEST['Location'];

$message = $_REQUEST['Messageh'];

$noOfAttendees = $_REQUEST['noOfAttendees'];

$sql ="INSERT INTO Register (EventName, EventDate, EventLocation, Message, CustomerName, Email, PhoneNumber, noOfAttendees) VALUES ('$eventName','$eventDate','$location','$message','$name','$email','$phoneNum','$noOfAttendees')";

if($conn->query($sql)==true)
{
	echo "<div class='main'><div class='child'><br><h2>Values inserted successfully</h2><br><br>
	<button><a href='forth.html'>Back</a></button></div>
	</div>";
}

else 
{
	echo "<br>Error";
}

echo"
	<style>
	body{
		text-align:center;
		background-color:lightpink;
	}
	.main{
		width:100%;
		height:98vh;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	.child{
		width:20%;
		height:15vh;
		border:10px solid white;
		border-radius:25px 0px; 
	}
	h2{
		color:#990000;
	}
	.div1{
    height:7vh;
    width:100%;
    padding-top: 1%;
    font-size: 1.2rem;
}
.dropbutton{
    font-size: 20px;
    color:white;
    border:transparent;
    background-color: transparent;
}
.dropdown{
    position: relative;
    display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#2980B9}


.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
ul{
    display:flex;
    list-style-type: none;
    justify-content: space-evenly;
    align-items: stretch;
    flex-direction: row;
    flex-wrap: wrap;
    background-color: #4E1511;
    border:transparent;
     padding:1.2% 0% 1.2% 4%;
    color:white;
}
.li1{
    flex-basis: 15%;
    flex-shrink: 2px;
}
.li2{
    flex-basis: 10%;
}
li a{
    text-decoration: none;
    color:white;
}
li a:hover{
    text-decoration: underline;
}
.div1 a {
/*  float: left;*/
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
button
{
	padding:10px;
	background-color:white;
	color:#04AA6D;
	margin-top:2%;
	width:90%;
}

	</style>";




?>