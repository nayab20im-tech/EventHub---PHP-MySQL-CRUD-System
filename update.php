<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <style>
        body {
            background: url('event111.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }
        .main {
            background-color: #b37700;
            opacity: 0.9;
            width: 50%;
            height: 60vh;
            font-size: 20px;
            margin-left: 25%;
            margin-right: 25%;
            margin-bottom: 5%;
            text-align: center;
        }
        input, textarea {
            width: 90%;
            margin-top: 10px;
            margin-bottom: 5px;
            padding: 5px;
        }
        textarea {
            height: 100px;
        }
        h2 {
            padding-top: 10px;
        }
        .div1{
    height:7vh;
    width:100%;
    padding-top: 1%;
    font-size: 1.2rem;
}
.li1{
    flex-basis: 65%;
    flex-shrink: 2px;
}
.li2{
    flex-basis: 10%;
}
.div1 a{
    text-decoration: none;
    color:white;
}
.div1 a:hover {
  background-color: #ddd;
  color: black;
}
.div1 a.active {
  background-color: #04AA6D;
  color: white;
}
ul{
    display:flex;
    list-style-type: none;
    justify-content: space-evenly;
    align-items: stretch;
    flex-direction: row;
    flex-wrap: wrap;
    background-color: #b37700;
    border:transparent;
    padding:1.2% 0% 1.2% 4%;
    padding-left: 5%;
    color:white;
}
    </style>
</head>
<body>
    <div class="div1">
        <ul>
            <li class="li1"><a href="ajk.html">Home</a></li>
            <li class='li2'><a href ='Organizer.php'>Organizer</a></li>
        </ul>";
    <div class='main'>
        <h2>Update Record</h2>
        <form action="" method="POST">
            <label>Event Location:</label><br>
            <input type='text' name='location' placeholder='Update Event Location'><br>
            <label>No Of Attendees:</label><br>
            <input type='number' name='noOfAttendees' placeholder='Update Number Of Attendees'><br>
            <label>Event Information:</label><br>
            <textarea name='Message' placeholder='Enter any additional message or requirements'></textarea><br><br>
            <input type='submit' name='submit' value='submit'><br><br>
        </form>
    </div>
</body>
</html>
<?php

include "connection.php";

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $location = $_POST['location'];
    $noOfAttendees = $_POST['noOfAttendees'];
    $message = $_POST['Message'];

    if (!empty($location)) {
        $sql = "UPDATE register SET EventLocation='$location' WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
    if (!empty($noOfAttendees)) {
        $sql = "UPDATE register SET noOfAttendees=$noOfAttendees WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
    if (!empty($message)) {
        $sql = "UPDATE register SET Message='$message' WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
    if (!empty($location) && !empty($noOfAttendees)) {
        $sql = "UPDATE register SET EventLocation='$location', noOfAttendees=$noOfAttendees WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
    if (!empty($location) && !empty($message)) {
        $sql = "UPDATE register SET EventLocation='$location', Message='$message' WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
    if (!empty($noOfAttendees) && !empty($message)) {
        $sql = "UPDATE register SET noOfAttendees=$noOfAttendees, Message='$message' WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
    if (!empty($location) && !empty($noOfAttendees) && !empty($message)) {
        $sql = "UPDATE register SET EventLocation='$location', noOfAttendees=$noOfAttendees, Message='$message' WHERE EventId=$id";
        $result = mysqli_query($conn, $sql);
        header('Location: Organizer.php');
    }
}
?>


