<?php

echo"<link rel='stylesheet' type='text/css' href='stylingorganizer.css'>";

echo"<div class='div1'>
        <ul>
            <li class='li1'><a href='ajk.html'>Home</a></li>
            <div class='dropdown'>
                <button class='dropbutton'>Event</button>
                <div class='dropdown-content'>
                    <a href = 'third.html'>View</a>
                    <a href='forth.html'>Register</a>
                </div>
            </div>
            </li>
            <li class='li2'><a href ='#'>Organizer</a></li>
        </ul>";

include 'connection.php';

echo"<button style='padding:10px; width:20%;margin-top:2%;'><a href='forth.html'>Add Event</a></button>";

$sql = "SELECT * FROM Register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border=1 class='table1' style='margin-top:2%;margin-left:8%;margin-right:8%;'>
<thead>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Event Date</th>
<th>Event Location</th>
<th>Customer Name</th>
<th>Customer Email</th>
<th>Customer Phone Number</th>
<th>No Of Attendees</th>
<th>Event Info</th>
<th>Update Record</th>
<th>Delete Record</th>
</tr>
</thead>";

while($row = $result->fetch_assoc()){
	$id = $row['EventId'];
echo "<tbody><tr>
<td>".$row['EventId']."</td>
<td>".$row['EventName']."</td>
<td>".$row['EventDate']."</td>
<td>".$row['EventLocation']."</td>
<td>".$row['CustomerName']."</td>
<td>".$row['Email']."</td>
<td>".$row['PhoneNumber']."</td>
<td>".$row['noOfAttendees']."</td>
<td>".$row['Message']."</td>
<td><button class='btn' id='btn1'><a href = 'update.php?updateid=$id' class='a1'>Update</a></button></td>
<td><button class='btn' id='btn2'><a href = 'delete.php? deleteid=$id' class='a2'>Delete</a></button></td>
</tr></tbody>";

}

echo "</table>";
}else{
echo "No Result Found.";
}


?>