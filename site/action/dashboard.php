<?php
// Create connection
$conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
if ($conn->connect_error) { // Ta funkcja sprawdza nam polaczenie z baza danych...
    die("Connection failed: " . $conn->connect_error);
  }
	// tworzymy zapytanie odnosnie czujnika pm2.5
	$zapytanie = "SELECT measure FROM Measurements WHERE sensor_id = 5 ORDER BY measure_date DESC LIMIT 1";
	$rezultat = mysqli_query($conn,$zapytanie);	
	$row = mysqli_fetch_array($rezultat);
	if($row[0] > 25){		// sprawdzamy czy pomiar jest wiekszy od normy, jesli tak to wyskakuje nam alert na dashboardzie		
		echo '<script language="javascript">';
		echo 'alert("PM2.5 above standard.")';
		echo '</script>';	
	}
   
   # --- SENSOR 1 TEMP INSIDE
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "1" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

    # --- SENSOR 2 HUM INSIDE
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "2" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels2 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data2 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels2 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data2 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

      # --- SENSOR 3 PRESSURE INSIDE
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "7" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels3 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data3 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels3 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data3 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }
 
    # --- SENSOR 4 TEMPERATURE OUTSIDE
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "9" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels4 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data4 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels4 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data4 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

   # --- SENSOR 5 HUMIDITY OUTSIDE
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "8" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels5 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data5 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels5 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data5 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

   # --- SENSOR 6 PLANT
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "3" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels6 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data6 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels6 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data6 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

     # --- SENSOR 6 PLANT
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "3" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels6 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data6 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels6 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data6 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

     # --- SENSOR 7 PM1
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "4" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels7 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data7 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels7 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data7 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

     # --- SENSOR 8 PM25
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "5" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
  
  $labels8 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data8 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels8 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data8 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }

     # --- SENSOR 9 PM10
  // Zapytanie do MYSQL
  $sql = 'SELECT * FROM (SELECT * FROM `Measurements` WHERE `sensor_id` = "6" ORDER BY `measure_date` DESC LIMIT 1)z ORDER BY z.measure_id';
  $result = $conn->query($sql); // < --- Ta funkcja wykonuje zapytanie
   
  $labels9 = null; // Musimy sobie stworzyc puste zmienne bo nie mozemy dopisywac do zmiennych danych jezeli nie istnieje zmienna znaczy mozemy ale beda bledy.. :)
  $data9 = null;
  
  $timezone = 3600;
   
  if ($result->num_rows > 0) { // Ten if sprawdza czy mamy jakies rekordy czy zapytanie cos zwraca...
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // Generujemy sobie zmienne labels oraz data pobrane z bazy danych... :)
        $labels9 .= date("H:i", strtotime($row['measure_date']) + $timezone);
        $data9 .= $row['measure'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; // Jesli Brak wynikow zwaracamy komunikat ze ich nie ma...
  }
 
  $conn->close(); // Konczymy polaczenei z baza danych....

    if(isset($_POST['button1'])) { 
        shell_exec('bash -c "exec nohup setsid sudo python /home/pi/projekt/measurements/measure_to_db.py > /dev/null 2>&1 &"');
        shell_exec('bash -c "exec nohup setsid sudo python /home/pi/projekt/measurements/rm_last_records.py > /dev/null 2>&1 &"');
        $page = $_SERVER['PHP_SELF'];
        $sec = "2";
        header("Refresh: $sec; url=$page");
      } 

?>

<div class="content">
    <div class="row" style="display: flex; justify-content: flex-end;">
            <div style="margin-right: auto; margin-left: 32px;">
                <h3>Dashboard</h3>
            </div>
            <div style="margin-left: auto; margin-right: 32px;">
                <form method="post"> 
                <input type="submit" name="button1" value="Fetch data" class="btn btn-square btn-dark mb-2"/> 
                </form>
            </div>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Temperature inside</p>
                                    <span class="number"><?php echo $data; ?> °C</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-water"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Humidity inside</p>
                                    <span class="number"><?php echo $data2; ?> %</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels2; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-weight-hanging"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Atmospheric pressure</p>
                                    <span class="number"><?php echo $data3; ?> hPa</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels3; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Temperature outside</p>
                                    <span class="number"><?php echo $data4; ?> °C </span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels4; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-water"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Humidity outside</p>
                                    <span class="number"><?php echo $data5; ?> %</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels5; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-seedling"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Plant watering</p>
                                    <span class="number"><?php if($data6 == 1){
                                        echo "NOT WATERED :(";
                                    }else{
                                        echo "PLANT IS HAPPY :)";
                                    }; ?> </span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels3; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-radiation"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>PM 1</p>
                                    <span class="number"><?php echo $data7; ?> µg/m³</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels7; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-radiation"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>PM2.5</p>
                                    <span class="number"><?php echo $data8 / 25 * 100; ?> %</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels8; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-radiation"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>PM10</p>
                                    <span class="number"><?php echo $data9 / 50 * 100; ?> %</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="fas fa-redo-alt"></i> last update: <?php echo $labels9; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
<div>
</div>
</div>