<?php
$channel = curl_init();
$url="http://localhost/2024/PGB/PHP/student/student-pdo-lucasvermeulen/student/API/Student/Student_API.php";
$headers = array ("Content-Type: application/json; charset=utf-8");
$data_array = array(
    'voornaam'=>'Pietje',
    'achternaam'=>'Puk',
    'straat'=>'dorpsstraat 121',
    'postcode'=>'1234AB',
    'woonplaats'=>'Keteldorp',
    'email'=>'pietjepuk@keteldorp.nl'
);
$data=http_build_query($data_array);
curl_setopt($channel, CURLOPT_URL, $url);
curl_setopt($channel, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($channel, CURLOPT_HTTPHEADER, $headers);
curl_setopt($channel, CURLOPT_POSTFIELDS, $data);
curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($channel);

if ($e=curl_error($channel)) {
    echo $e;
}
else {
    echo $result;
}
curl_close($channel);
?>
 