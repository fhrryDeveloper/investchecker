<?php
date_default_timezone_set('UTC');

file_put_contents('logs/cron-logs.txt', 'Yes I am coming '.PHP_EOL, FILE_APPEND);

$servername = "localhost";
$username = "admin_ppcadwords";
$password = "PPC$02312";
// $username = "root";
// $password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=admin_funnel_db", $username, $password);
//   $conn = new PDO("mysql:host=$servername;dbname=mercyvxi_cron_bot", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

$stmt = $conn->query("SELECT * FROM booking_data");
while ($row = $stmt->fetch()) {
    $now = new DateTime();
    $date = new DateTime($row['run_at']);
    print_r($row['run_at']);
    if ($now > $date && $row['run_at'] != "0000-00-00 00:00:01") {
        echo "Run==== ";
        senddata($row);
        $stmt_update = $conn->prepare('UPDATE `booking_data` SET `run_at` = "0000-00-00 00:00:01" WHERE `booking_data`.`id` = :id;');
        $stmt_update->bindParam(':id', $row['id']); 
        $stmt_update->execute();
    } else {
        echo "Die==== ";
        continue;
    }
}
    
    
// error_log(print_r($data, true));




function senddata($json) {
    $curl = curl_init();
    $keyword = "keyword";
    $Howoldareyou = 25;
    $Doyouhaveanypreviewsonlineinvestmentsexperience = "NO";
    $Doyouhaveanexistingtradingorinvestmentaccount = "NO";
    $Whatsyourannualincome = "36000$";
    $Whichofthefollowinginvestmentproductsinterestsyou = "30000$";
    curl_setopt_array($curl, array(
                CURLOPT_URL => "https://platform.mangotraffic.net/api/signup/procform",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>
                    " {" .
                        "\n     \"ai\"  :  \"2958046\" ," .
                        "\n     \"ci\"  :  \"1\" ," .
                        "\n     \"gi\"  :  \"31\" ," .
                        "\n     \"userip\"  :  \"" . $json['user_ip'] . "\" ," .
                        "\n     \"firstname\"  :  \"" . $json['invitee_first_name'] . "\" ," .
                        "\n     \"lastname\"  :  \"" . $json['invitee_last_name'] . "\" ," .
                        "\n     \"email\"  :  \"" . $json['invitee_email'] . "\" ," .
                        "\n     \"password\"  :  \"GSpBcZvMj4\" ," .
                        "\n     \"phone\"  :  \"" . $json['text_reminder_number'] . "\" ," .
                        "\n     \"so\"  :  \"5QISV\" ," .
        				"\n     \"sub\"  :  \"Keyword Searched In Google?-".$keyword." 1.How old are you? ".$Howoldareyou." 2.Do you have Any previews Online Investments Experience? ".$Doyouhaveanypreviewsonlineinvestmentsexperience." 3.Do you have an existing trading / investment account? -".$Doyouhaveanexistingtradingorinvestmentaccount." 4.Whats your annual income? ".$Whatsyourannualincome." 5.Which of the following investment products interests you? ".$Whichofthefollowinginvestmentproductsinterestsyou. "\" ," .
                        "\n     \"MPC_1\"  :  \"\" ," .
                        "\n     \"MPC_2\"  :  \"\" ," .
                        "\n     \"MPC_3\"  :  \"\" ," .
                        "\n     \"MPC_4\"  :  \"\" ," .
                        "\n     \"MPC_5\"  :  \"\" ," .
                        "\n     \"MPC_6\"  :  \"\" ," .
                        "\n     \"MPC_7\"  :  \"\" ," .
                        "\n     \"MPC_8\"  :  \"\" \n" .
                "}",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "content-type: application/json",
                    "postman-token: 9671724c-0e50-e31b-7870-33ea650ff332",
                    "x-api-key: 2643889w34df345676ssdas323tgc738",
                    "x-trackbox-password: XWmMNyY3n6tXkgxk",
                    "x-trackbox-username: ppcadwords"
                ),
            ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // header("Location: success.php?vals=". urlencode(serialize($response)) );
        echo "Success";
    }
}