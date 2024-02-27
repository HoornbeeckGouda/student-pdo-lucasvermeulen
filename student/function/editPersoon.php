<?php
include '../view/header.php';


?>
<a type="button" href="../view/studenten.php">Back</a>
<?php

$id = $_POST['ID'];

$studentInfo = new Persoon($dbconn);

if(isset($_POST['voornaam'])){
    $studentInfo->updateStudent($id,$_POST['voornaam'],$_POST['tussenvoegsel'],$_POST['achternaam'],$_POST['straat'],$_POST['postcode'],$_POST['woonplaats'],$_POST['email'],$_POST['geboortedatum']);
}
$studentInfo->getStudent($id);
$student = $studentInfo->studentenResult->setFetchMode(PDO::FETCH_BOTH);
foreach($studentInfo->studentenResult as $row) {
    $inputPersoon = '
    <form  method="POST" >
        <input type="text" name="ID" value="'.$row["id"] .'" />
        <input type="text" name="voornaam" value="'.$row["voornaam"] .'" />
        <input type="text" name="tussenvoegsel" value="'.$row["tussenvoegsel"] .'" />
        <input type="text" name="achternaam" value="'.$row["achternaam"] .'" />
        <input type="text" name="straat" value="'.$row["straat"] .'" />
        <input type="text" name="postcode" value="'.$row["postcode"] .'" />
        <input type="text" name="woonplaats" value="'.$row["woonplaats"] .'" />
        <input type="text" name="email" value="'.$row["email"] .'" />
        <input type="text" name="geboortedatum" value="'.$row["geboortedatum"] .'" />

        <input type="submit" value="Submit">
    </form> 
    ';
}

echo $inputPersoon;
?>

<?php
include('../view/footer.php')

?>
