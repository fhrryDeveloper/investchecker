<?php

ini_set("error_reporting", E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$servername = "localhost";
$username = "admin_ppcadwords";
$password = "PPC$02312";
$db = "admin_funnel_db";

// $username = "root";
// $password = "";
// $db = "mercyvxi_cron_bot";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);


if (isset($_POST['button']) && $_POST['button']=='Enviar datos') {
    print("SingleLine2");
    print($_POST['SingleLine2']); exit();
    $css_achieve = addslashes($_POST['css_achieve']);
    $css_objectives = addslashes($_POST['css_objectives']);
    $css_country = addslashes($_POST['css_country']);
    $profit = addslashes($_POST['profit']);

    $SingleLine2 = addslashes($_POST['SingleLine2']);
    $SingleLine3 = addslashes($_POST['SingleLine3']);
    $Email = addslashes($_POST['Email']);
    $PhoneNumber_countrycode = addslashes($_POST['PhoneNumber_countrycode']);
    $Cualestuedad = "";
    $Doyouhaveanypreviewsonlineinvestmentsexperience = "";
    $Doyouhaveanexistingtradingorinvestmentaccount = "";
    $Cualessuobjetivodeinversion = "";
    $Decuantoseriasuinversioninicial = "";
    $Cualessonsusexpectativasdeganancias = "";
    $Cualessuobjetivodeinversion = "";
    $Cuandoprefeririarecibirpagosdebeneficios = "";
    $Cualessuingresoanual = "";

    $message = 'First Name: ' . $SingleLine2 . "<br/><br/>" .
            'Last Name: ' . $SingleLine3 . "<br/><br/>" .
            'Email: ' . $Email . "<br/><br/>" .
            'Phone: ' . $PhoneNumber_countrycode . "<br/><br/>" .			
            'Recibir pagos de beneficios: ' . $css_country . "<br/><br/>" .
            'Profit type: ' . $profit . "<br/><br/>" .
            'Mis expectativas de ganancias son: ' . $css_achieve . "<br/><br/>" .
            'Mi objetivo de inversión es: ' . $css_objectives . "<br/><br/>";

    //How old are you?
    if (isset($_POST['Radio1']) && !empty($_POST['Radio1'])) {
        $Howoldareyou = $_POST['Radio1'];
        $message .= 'How old are you?: ' . $Howoldareyou . "<br/><br/>";
    }

    //Do you have Any previews Online Investments Experience?
    if (isset($_POST['Radio2']) && !empty($_POST['Radio2'])) {
        $Doyouhaveanypreviewsonlineinvestmentsexperience = $_POST['Radio2'];
        $message .= 'Do you have Any previews Online Investments Experience?: ' . $Doyouhaveanypreviewsonlineinvestmentsexperience . "<br/><br/>";
    }

    //Do you have an existing trading or investment account?
    if (isset($_POST['Radio3']) && !empty($_POST['Radio3'])) {
        $Doyouhaveanexistingtradingorinvestmentaccount = $_POST['Radio3'];
        $message .= 'Do you have an existing trading or investment account?: ' . $Doyouhaveanexistingtradingorinvestmentaccount . "<br/><br/>";
    }

    //What’s your annual income?
    if (isset($_POST['Radio4']) && !empty($_POST['Radio4'])) {
        $Whatsyourannualincome = $_POST['Radio4'];
        $message .= 'What’s your annual income?: ' . $Whatsyourannualincome . "<br/><br/>";
    }

    //Which of the following investment products interests you?
    if (isset($_POST['Checkbox']) && !empty($_POST['Checkbox'])) {
        $Whichofthefollowinginvestmentproductsinterestsyou = implode(", ",$_POST['Checkbox']);
        $message .= 'Which of the following investment products interests you?: ' . $Whichofthefollowinginvestmentproductsinterestsyou . "<br/><br/>";
    }

    //When are you looking to make an investment?
    if (isset($_POST['Radio8']) && !empty($_POST['Radio8'])) {
        $Whenareyoulookingtomakeaninvestment = $_POST['Radio8'];
        $message .= 'When are you looking to make an investment: ' . $Whenareyoulookingtomakeaninvestment . "<br/><br/>";
    }

    if (isset($_POST['countrycode_use_me']) && !empty($_POST['countrycode_use_me'])) {
        $countrycode_use_me = $_POST['countrycode_use_me'];
    } else {
        $countrycode_use_me='';
    }


    if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $message .= 'keyword: ' . $keyword . ", ";
    } else {
        $keyword = '';
    }
    if (isset($_POST['campaignid']) && !empty($_POST['campaignid'])) {
        $campaignid = $_POST['campaignid'];
        $message .= 'campaignid: ' . $campaignid . ", ";
    } else {
        $campaignid = '';
    }

    if (isset($_POST['device']) && !empty($_POST['device'])) {
        $device = $_POST['device'];
        $message .= 'device: ' . $device . ", ";
    } else {
        $device = '';
    }

    if (isset($_POST['loc_physical_ms']) && !empty($_POST['loc_physical_ms'])) {
        $loc_physical_ms = $_POST['loc_physical_ms'];
        $message .= 'loc_physical_ms: ' . $loc_physical_ms . ", ";
    } else {
        $loc_physical_ms = '';
    }

    if (isset($_POST['creative']) && !empty($_POST['creative'])) {
        $creative = $_POST['creative'];
        $message .= 'creative: ' . $creative . ", ";
    } else {
        $creative = '';
    }

    if (isset($_POST['adgroupid']) && !empty($_POST['adgroupid'])) {
        $adgroupid = $_POST['adgroupid'];
        $message .= 'adgroupid: ' . $adgroupid . ", ";
    } else {
        $adgroupid = '';
    }

    if (isset($_POST['feeditemid']) && !empty($_POST['feeditemid'])) {
        $feeditemid = $_POST['feeditemid'];
        $message .= 'feeditemid: ' . $feeditemid . ", ";
    } else {
        $feeditemid = '';
    }

    if (isset($_POST['placement']) && !empty($_POST['placement'])) {
        $placement = $_POST['placement'];
        $message .= 'placement: ' . $placement . "<br/><br/>";
    } else {
        $placement = '';
    }

	$to = 'lead@roimail.co';
    $subject = 'CL '.$campaignid.' '.$keyword;
	$headers = "From: CL@roimail.co" . "\r\n" . 
    $headers   = "MIME-Version: 1.0\n";
    $headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";

    mail($to, $subject, $message, $headers);

    $curl = curl_init();

    $fields = [
      'email' => $Email,
      'fields' => [
          'name' => $SingleLine2,
          'last_name' => $SingleLine3,
          'phone' => $PhoneNumber_countrycode,
          'company' => ''
      ]
    ];

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mailerlite.com/api/v2/groups/107653462/subscribers",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($fields),
      CURLOPT_HTTPHEADER => array(
        "content-type: application/json",
        "x-mailerlite-apikey: ef60e9babe17e5c21fc21db04eab39ac"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $curl = curl_init();

    $name = $SingleLine2 . " " . $SingleLine3;
    $phone_num = $countrycode_use_me . $PhoneNumber_countrycode;
    $tmpKeyword = empty($keyword) ? "Online investment" : $keyword;

    $phone_body = "Hello " . $name . "! My name is Daniel from The Invest Checker. I got your investment comparisons request and I have few more questions to ask you to provide you the best Investments options in your area, When is the best time to contact you with the results?";

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.chat-api.com/instance205409/sendMessage?token=om7pxj1f2ys34gt6",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>
            "{" .
                "\"phone\"  :  \"" . $phone_num . "\" ," .
                "\"body\"  :  \"" . $phone_body . "\"" .
            "}",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/json",
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $ip = $_SERVER['REMOTE_ADDR'];
    $curl = curl_init();

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
                "\n     \"userip\"  :  \"" . $ip . "\" ," .
                "\n     \"firstname\"  :  \"" . $SingleLine2 . "\" ," .
                "\n     \"lastname\"  :  \"" . $SingleLine3 . "\" ," .
                "\n     \"email\"  :  \"" . $Email . "\" ," .
                "\n     \"password\"  :  \"GSpBcZvMj4\" ," .
                "\n     \"phone\"  :  \"" . $countrycode_use_me . $PhoneNumber_countrycode . "\" ," .
                "\n     \"so\"  :  \"5QISV\" ," .
				"\n     \"sub\"  :  \"Keyword Searched In Google?-".$keyword." 1.How old are you? ".$Howoldareyou." 2.Do you have Any previews Online Investments Experience? ".$Doyouhaveanypreviewsonlineinvestmentsexperience." 3.Do you have an existing trading / investment account? -".$Doyouhaveanexistingtradingorinvestmentaccount." 4.Whats your annual income? ".$Whatsyourannualincome." 5.Which of the following investment products interests you? ".$Whichofthefollowinginvestmentproductsinterestsyou. "\" ," .
                 "\n     \"MPC_1\"  :  \"" . $keyword . "\" ," .
                "\n     \"MPC_2\"  :  \"" . $campaignid . "\" ," .
                "\n     \"MPC_3\"  :  \"" . $device . "\" ," .
                "\n     \"MPC_4\"  :  \"" . $loc_physical_ms . "\" ," .
                "\n     \"MPC_5\"  :  \"" . $creative . "\" ," .
                "\n     \"MPC_6\"  :  \"" . $adgroupid . "\" ," .
                "\n     \"MPC_7\"  :  \"" . $feeditemid . "\" ," .
                "\n     \"MPC_8\"  :  \"" . $placement . "\" \n" .
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
        header("Location: success.php?vals=". urlencode(serialize($response)) );
    }

}

if(isset($_POST['save_mail']) == 'book_mail') {
        
    $table = "book_email";
    $error = "Same email already exists";
    if ($result = $conn->query("SHOW TABLES LIKE '".$table."'")->num_rows != 1) {
        $sql = "CREATE TABLE book_email (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(30) NOT NULL
            )";
        $conn->query($sql);
    }
    
    if($result1 = $conn->query("select * from book_email where email='".$_POST['email']."'")->num_rows < 1){
        $sql = "INSERT INTO book_email (email)
                VALUES ('".$_POST['email']."')";
        $conn->query($sql);
        header("Location: ./questionnaire.php");
    } else {
        header("Location: ./index.php?error=".$error);
    }
}

?>
