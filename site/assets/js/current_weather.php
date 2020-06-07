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
$humidity_inside = "SELECT * FROM `Measurements` WHERE sensor_id = 2 ORDER BY measure_id DESC LIMIT 12";
$soil_watering = "SELECT * FROM `Measurements` WHERE sensor_id = 3 ORDER BY measure_id DESC LIMIT 12";
$pressure_outside = "SELECT * FROM `Measurements` WHERE sensor_id = 7 ORDER BY measure_id DESC LIMIT 12";
$humidity_outisde = "SELECT * FROM `Measurements` WHERE sensor_id = 8 ORDER BY measure_id DESC LIMIT 12";
$temp_outside = "SELECT * FROM `Measurements` WHERE sensor_id = 9 ORDER BY measure_id DESC LIMIT 12";

$data_full = array();

$result = mysqli_query($conn, $temp_inside);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}
$data_full[] = $data;

$result = mysqli_query($conn, $humidity_inside);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}
$data_full[] = $data;

$result = mysqli_query($conn, $soil_watering);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}
$data_full[] = $data;

$result = mysqli_query($conn, $pressure_outside);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}
$data_full[] = $data;

$result = mysqli_query($conn, $humidity_outisde);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}
$data_full[] = $data;

$result = mysqli_query($conn, $temp_outside);
$data = array();
while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row["measure"];
}
$data_full[] = $data;


echo json_encode($data_full);

$conn->close();
?>