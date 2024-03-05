<?php
$channel = curl_init();
$url="http://localhost/2024/PGB/PHP/student/student-pdo-lucasvermeulen/student/API/Student/Student_API.php";

curl_setopt($channel, CURLOPT_URL, $url);
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