<?php
include('../header.php');

$inputRol = $_POST['rol'];
$password = $_POST['password'];

$qry_gebruiker = "SELECT 
                        rol,
                        wachtwoord
                        FROM gebruiker
                        WHERE rol = :rol";
// gegevens query ophalen uit db student
$resultGebruiker=$dbconn->prepare($qry_gebruiker);

$resultGebruiker->bindParam(':rol',$rol);
$rol=$inputRol;

$resultGebruiker->execute();

//docent123
//admin123
$hash = password_hash($password, PASSWORD_DEFAULT);

$resultGebruiker->setFetchMode(PDO::FETCH_ASSOC);
foreach($resultGebruiker as $row) { 
    $correctPass = password_verify($password, $row['wachtwoord']);
}

if($correctPass){
    header('Location: '.'../studenten.php');
    die();

}


// echo $resultGebruiker;
?>

<?php   
include('../footer.php');
?>
