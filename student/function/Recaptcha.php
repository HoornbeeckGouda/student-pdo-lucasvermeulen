<?php
if (isset($_POST['submit'])) {
    //als het formulier gepost is:
    $username = $_POST['username'];
    $secretKey = "6LeO2t8UAAAAAOaAHqGHGGwJX96Gru-0nBFuaBy2";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP= $_SERVER['REMOTE_ADDR'];
    //aanroepen api:
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    //echo $response.'<br>';
    $response = json_decode($response);
    echo $response.'<br>';
    if ($response->success) {
        echo "Verification success. Your name is: $username";
    }
    else {
        echo "Verification failed!";
    }
}

?>
<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <!-- let op: in de header zet je deze regel: -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="g-recaptcha" data-sitekey="6LeO2t8UAAAAAK0gINkFqbadTIvsPoSVTVDuGeVw"></div>

</body>
</html>
