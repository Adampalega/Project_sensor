<?php
// W tym miejscu mamy caly plik z wykresami...
// Create connection
$conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
 
if ($conn->connect_error) { // Ta funkcja sprawdza nam polaczenie z baza danych...
  die("Connection failed: " . $conn->connect_error);
}
 

 
 # --- SENSOR 1 TEMP INSIDE
// Zapytanie do MYSQL
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "1" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
 
$labels = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data = null;

$timezone = 3600;
 
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}
 
 # --- SENSOR 2 HUMIDITY INSIDE
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "2" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
 
$labels2 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data2 = null;
 
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels2 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data2 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}
 
 # --- SENSOR 3 PM10
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "6" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
 
$labels3 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data3 = null;
 
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels3 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data3 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}
 
 
 # --- SENSOR 4 PM1
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "4" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
 
$labels4 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data4 = null;
 
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels4 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data4 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}
 
 
 # --- SENSOR 5 PM25
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "5" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
 
$labels5 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data5 = null;
 
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels5 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data5 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}

# --- SENSOR 6 PRESSURE OUTSIDE
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "7" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
  
$labels6 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data6 = null;
  
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels6 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data6 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}

# --- SENSOR 7 HUMIDITY OUTSIDE
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "8" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
  
$labels7 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data7 = null;
  
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels7 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data7 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}


# --- SENSOR 8 TEMP OUTSIDE
$sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "9" ORDER BY `measure_date` DESC LIMIT 24)z ORDER BY z.measure_id';
$result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
  
$labels8 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
$data8 = null;
  
if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
      $labels8 .= '"' . date("H:i", strtotime($row['measure_date']) + $timezone) . '",';
      $data8 .= $row['measure'] . ',';  
  }
} else {
  echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
}




 
 
 
 
 
 
 
$conn->close(); // Konczymy polaczenei z baza danych....
 
 
?>
<script>
$(function() {
  "use strict";
  var data = {
    labels: [<?php echo $labels; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(233, 212, 96, 1)"
      ],
      borderWidth: 5,
      fill: false
    }]
  };
 
   var data2 = {
    labels: [<?php echo $labels2; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data2; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(245, 171, 53, 1)"
      ],
      borderWidth: 5,
      fill: false
    }]
  };
 
     var data3 = {
    labels: [<?php echo $labels3; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data3; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(35, 203, 167, 1)"
      ],
      borderWidth: 5,
      fill: false
    }]
  };
 
       var data4 = {
    labels: [<?php echo $labels4; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data4; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(35, 203, 167, 1)"      
	],
      borderWidth: 5,
      fill: false
    }]
  };
 
         var data5 = {
    labels: [<?php echo $labels5; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data5; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(35, 203, 167, 1)"],
      borderWidth: 5,
      fill: false
    }]
  };

  var data6 = {
    labels: [<?php echo $labels6; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data6; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(240, 52, 52, 1)"
      ],
      borderWidth: 5,
      fill: false
    }]
  }; 

  var data7 = {
    labels: [<?php echo $labels7; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data7; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(240, 52, 52, 1)"
      ],
      borderWidth: 5,
      fill: false
    }]
  };

  var data8 = {
    labels: [<?php echo $labels8; ?>],
    datasets: [{
      label: "",
      data: [<?php echo $data8; ?>],
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)"
      ],
      borderColor: [
        "rgba(233, 212, 96, 1)"
      ],
      borderWidth: 5,
      fill: false
    }]
  };


  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }
 
  };
  var options2 = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: false
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }
 
  };
// TEMP INSIDE
  if ($("#tempIn").length) {
    var lineChartCanvas = $("#tempIn").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data,
      options: options
    });
  }
 // HUMIDITY INSIDE
   if ($("#humIn").length) {
    var lineChartCanvas = $("#humIn").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data2,
      options: options
    });
  }
 
 // PM10
    if ($("#pm10").length) {
    var lineChartCanvas = $("#pm10").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data3,
      options: options
    });
  }
 
   // PM 1
    if ($("#pm1").length) {
    var lineChartCanvas = $("#pm1").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data4,
      options: options
    });
  }
 
   // PM 25
    if ($("#pm25").length) {
    var lineChartCanvas = $("#pm25").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data5,
      options: options
    });
  }

     // PRESSURE OUTSIDE
    if ($("#pressOut").length) {
    var lineChartCanvas = $("#pressOut").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data6,
      options: options2
    });
  }

    // HUMIDITY OUTSIDE
     if ($("#humOut").length) {
    var lineChartCanvas = $("#humOut").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data7,
      options: options
    });
  }

     // TEMPERATURE OUTSIDE
     if ($("#tempOut").length) {
    var lineChartCanvas = $("#tempOut").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: "line",
      data: data8,
      options: options
    });
  }
 
 
});
</script>
 
 
<div class="content">
  <div class="container-fluid">
    <h3>Charts</h3>
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Temperature inside [°C]</h4>
            <canvas id="tempIn"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Temperature outside [°C]</h4>
            <canvas id="tempOut"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Humidity inside [%]</h4>
            <canvas id="humIn"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">atmospheric pressure [hPa]</h4>
            <canvas id="pressOut"></canvas>
          </div>
        </div>
      </div>
      
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Humidity outside [%]</h4>
            <canvas id="humOut"></canvas>
          </div>
        </div>
      </div>
      
        <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">PM10 [µg/m³]</h4>
            <canvas id="pm10"></canvas>
          </div>
        </div>
      </div>

      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">PM1 [µg/m³]</h4>
            <canvas id="pm1"></canvas>
          </div>
        </div>
      </div>

      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">PM2.5 [µg/m³]</h4>
            <canvas id="pm25"></canvas>
          </div>
        </div>
      </div>
    </div>
              
          </div>
      </div>