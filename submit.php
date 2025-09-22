<?php
$formName = $_POST["fName"];
$formEmail = $_POST["fEmail"];
$formLevel = $_POST["fLevel"];
$formFeedback = $_POST["fFeedback"];

$servername = "localhost";
$username = "feedbacks_user_22092025";
$password = "password";
$dbname = "feedbacks_22092025";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "INSERT INTO feedbacks (name, email, level, content)
VALUES ('$formName', '$formEmail',$formLevel, '$formFeedback')";
if ($conn->query($sql) === TRUE) {
  echo "<h1>Content inserted successfully</h1>";
} else {
  echo "<h1>Error inserting content: " . $conn->error . "</h1>";
}

$conn->close();
?>