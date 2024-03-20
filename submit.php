<?php
$servername = "localhost";
$username = "sem6d1";
$password = "semd1@1234";
$dbname = "feedback_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$usn = $_POST['usn'];
$sem = $_POST['sem'];
$branch = $_POST['branch'];
$feedback = $_POST['feedback'];

// Insert data into database
$sql = "INSERT INTO feedback (name, email, usn, sem, branch, feedback) VALUES ('$name', '$email', '$usn', '$sem', '$branch', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>". $conn->error;
}

// Close connection
$conn->close();
?>
