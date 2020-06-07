<?php
$servername = "localhost";
$username = "adas";
$password = "password";
$dbname = "raspberry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$temp_inside = "SELECT * FROM `Measurements` WHERE sensor_id = 1 ORDER BY measure_id DESC LIMIT 12";

$data_full = array();

$result = mysqli_query($conn, $temp_inside);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}

echo json_encode($data);

$conn->close();
?>