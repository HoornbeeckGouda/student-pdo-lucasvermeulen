<?php
// include('../conn/database.php');
require_once '../function/functions.php';

// require '../Class/Gebruiker.php';
// require '../Class/Persoon.php';

$gebruiker = new Gebruiker($dbconn);
$student = new Student($dbconn);
$token = new Token($dbconn);


// $objGebruiker = new Gebruiker($dbconn);


?>