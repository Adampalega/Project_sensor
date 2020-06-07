<?php
$conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
//
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 1 AND DATE(measure_date) = CURDATE() ';
  $result = $conn->query($sql);

  $max_temp = null;
  $min_temp = null;
  $avg_temp = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_temp .= $row['maxi'];
        $min_temp .= $row['mini'];
        $avg_temp .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 2 AND DATE(measure_date) = CURDATE() ';
  $result = $conn->query($sql);

  $max_hum = null;
  $min_hum = null;
  $avg_hum = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_hum .= $row['maxi'];
        $min_hum .= $row['mini'];
        $avg_hum .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 9 AND DATE(measure_date) = CURDATE() ';
  $result = $conn->query($sql);

  $max_temp_o = null;
  $min_temp_o = null;
  $avg_temp_o = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_temp_o .= $row['maxi'];
        $min_temp_o .= $row['mini'];
        $avg_temp_o .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 8 AND DATE(measure_date) = CURDATE() ';
  $result = $conn->query($sql);

  $max_hum_o = null;
  $min_hum_o = null;
  $avg_hum_o = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_hum_o .= $row['maxi'];
        $min_hum_o .= $row['mini'];
        $avg_hum_o .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }


  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 1 AND DATE(measure_date) >= DATE(NOW()) - INTERVAL 7 DAY ';
  $result = $conn->query($sql);

  $max_temp_7 = null;
  $min_temp_7 = null;
  $avg_temp_7 = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_temp_7 .= $row['maxi'];
        $min_temp_7 .= $row['mini'];
        $avg_temp_7 .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 9 AND DATE(measure_date) >= DATE(NOW()) - INTERVAL 7 DAY ';
  $result = $conn->query($sql);

  $max_temp_o_7 = null;
  $min_temp_o_7 = null;
  $avg_temp_o_7 = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_temp_o_7 .= $row['maxi'];
        $min_temp_o_7 .= $row['mini'];
        $avg_temp_o_7 .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 2 AND DATE(measure_date) >= DATE(NOW()) - INTERVAL 7 DAY ';
  $result = $conn->query($sql);

  $max_hum_7 = null;
  $min_hum_7 = null;
  $avg_hum_7 = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_hum_7 .= $row['maxi'];
        $min_hum_7 .= $row['mini'];
        $avg_hum_7 .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 8 AND DATE(measure_date) >= DATE(NOW()) - INTERVAL 7 DAY ';
  $result = $conn->query($sql);

  $max_hum_o_7 = null;
  $min_hum_o_7 = null;
  $avg_hum_o_7 = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_hum_o_7 .= $row['maxi'];
        $min_hum_o_7 .= $row['mini'];
        $avg_hum_o_7 .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }


  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 5 AND DATE(measure_date) >= DATE(NOW()) - INTERVAL 7 DAY ';
  $result = $conn->query($sql);

  $max_pm25_7 = null;
  $min_pm25_7 = null;
  $avg_pm25_7 = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_pm25_7 .= $row['maxi'];
        $min_pm25_7 .= $row['mini'];
        $avg_pm25_7 .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }

  $sql = 'SELECT MAX(measure) as maxi, MIN(measure) as mini, AVG(measure) as avgi from Measurements WHERE  sensor_id = 6 AND DATE(measure_date) >= DATE(NOW()) - INTERVAL 7 DAY ';
  $result = $conn->query($sql);

  $max_pm10_7 = null;
  $min_pm10_7 = null;
  $avg_pm10_7 = null;
   
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
        $max_pm10_7 .= $row['maxi'];
        $min_pm10_7 .= $row['mini'];
        $avg_pm10_7 .= $row['avgi'];  
    }
  } else {
    echo "brak wynikow z bazy danych"; 
  }



$conn->close();
?>

<div class="content">
  <div class="container-fluid">
    <h2>Today</h2>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-thermometer-full"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest temperature inside</p>
                                    <span class="number"><?php echo $max_temp; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-empty"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Minimal temperature inside</p>
                                    <span class="number"><?php echo $min_temp; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Avarage temperature inside</p>
                                    <span class="number"><?php echo  round($avg_temp, 2); ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-full"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest temperature outside</p>
                                    <span class="number"><?php echo $max_temp_o; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-empty"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Minimal temperature outside</p>
                                    <span class="number"><?php echo $min_temp_o; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Avarage temperature outside</p>
                                    <span class="number"><?php echo  round($avg_temp_o, 2); ?> °C </span>
                                </div>
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
                                <i class="fas fa-water"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest humidity inside</p>
                                    <span class="number"><?php echo $max_hum; ?> % </span>
                                </div>
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
                                    <p>Minimal humidity inside</p>
                                    <span class="number"><?php echo $min_hum; ?> % </span>
                                </div>
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
                                    <p>Avarage humidity inside</p>
                                    <span class="number"><?php echo  round($avg_hum, 2); ?> % </span>
                                </div>
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
                                <i class="fas fa-water"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest humidity outside</p>
                                    <span class="number"><?php echo $max_hum_o; ?> % </span>
                                </div>
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
                                    <p>Minimal humidity outside</p>
                                    <span class="number"><?php echo $min_hum_o; ?> % </span>
                                </div>
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
                                    <p>Avarage humidity outside</p>
                                    <span class="number"><?php echo  round($avg_hum_o, 2); ?> % </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2> Last 7 days </h2>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon-big text-center">
                                <i class="fas fa-thermometer-full"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest temperature inside</p>
                                    <span class="number"><?php echo $max_temp_7; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-empty"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Minimal temperature inside</p>
                                    <span class="number"><?php echo $min_temp_7; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Avarage temperature inside</p>
                                    <span class="number"><?php echo  round($avg_temp_7, 2); ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-full"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest temperature outside</p>
                                    <span class="number"><?php echo $max_temp_o_7; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-empty"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Minimal temperature outside</p>
                                    <span class="number"><?php echo $min_temp_o_7; ?> °C </span>
                                </div>
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
                                <i class="fas fa-thermometer-half"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Avarage temperature outside</p>
                                    <span class="number"><?php echo  round($avg_temp_o_7, 2); ?> °C </span>
                                </div>
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
                                <i class="fas fa-water"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest humidity inside</p>
                                    <span class="number"><?php echo $max_hum_7; ?> % </span>
                                </div>
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
                                    <p>Minimal humidity inside</p>
                                    <span class="number"><?php echo $min_hum_7; ?> % </span>
                                </div>
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
                                    <p>Avarage humidity inside</p>
                                    <span class="number"><?php echo  round($avg_hum_7, 2); ?> % </span>
                                </div>
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
                                <i class="fas fa-water"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="detail text-center">
                                    <p>Highest humidity outside</p>
                                    <span class="number"><?php echo $max_hum_o_7; ?> % </span>
                                </div>
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
                                    <p>Minimal humidity outside</p>
                                    <span class="number"><?php echo $min_hum_o_7; ?> % </span>
                                </div>
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
                                    <p>Avarage humidity outside</p>
                                    <span class="number"><?php echo  round($avg_hum_o_7, 2); ?> % </span>
                                </div>
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
                                    <p>Highest PM2.5</p>
                                    <span class="number"><?php echo $max_pm25_7 / 25 * 100; ?> % </span>
                                </div>
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
                                    <p>Minimal PM2.5</p>
                                    <span class="number"><?php echo $min_pm25_7 / 25 * 100; ?> % </span>
                                </div>
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
                                    <p>Avarage PM2.5</p>
                                    <span class="number"><?php echo  round($avg_pm25_7, 2) / 25 * 100; ?> % </span>
                                </div>
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
                                    <p>Highest PM10</p>
                                    <span class="number"><?php echo $max_pm10_7 / 50 * 100; ?> % </span>
                                </div>
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
                                    <p>Minimal PM10</p>
                                    <span class="number"><?php echo $min_pm10_7 / 50 * 100; ?> % </span>
                                </div>
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
                                    <p>Avarage PM10</p>
                                    <span class="number"><?php echo  round($avg_pm10_7, 2) / 50 * 100; ?> % </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    