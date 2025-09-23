<?php
require_once 'feedback.php';

$servername = "localhost";
$username = "feedbacks_user_22092025";
$password = "password";
$dbname = "feedbacks_22092025";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, email, level, content FROM feedbacks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . "email: " . $row["email"]. " " . "Level: " . $row["level"]. " " . "content: " . $row["content"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>