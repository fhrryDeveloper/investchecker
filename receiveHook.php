<?php
date_default_timezone_set('UTC');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    
    // error_log(print_r($_POST, true));
    $json = file_get_contents('php://input');
    
    // Converts it into a PHP object
    $data = json_decode($json);
    
    
    $servername = "localhost";
    $username = "mercyvxi_cron_bot";
    $password = "cron_bot123";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=mercyvxi_cron_bot", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully"; 
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      die();
    }
    
    if (!isset($data->payload)) {
        die();
    }

    $start_time = (new DateTime($data->payload->event->start_time))->getTimestamp();
    $start_time = $start_time - 5 * 60;
    
    
    
    $stmt = $conn->prepare('INSERT INTO jobs (id, json_data, run_at) VALUES (:id, :value, :time)');
    // either bind each parameter explicitly 
    $stmt->bindParam(':id', $id); // PDOStatement::bindValue() is also possibly
    $stmt->bindParam(':value', $json);
    $stmt->bindParam(':time', date("Y-m-d H:i:s", $start_time));
    $stmt->execute();
    
    // error_log(print_r($data, true));
    
}