<?php
$call = strtoupper($_SERVER['REQUEST_METHOD']);
// afvangen GET/POST/PUT/DELETE
switch ($call){
    case 'GET':
        $response= array(
                'code'=>1,
                'message'=>'Get Method'
        );
        break;
    case 'POST':
        $resultMySQL = insertKlant($_POST['voornaam'], $_POST['achternaam'], $_POST['straat'], $_POST['postcode'], $_POST['woonplaats'], $_POST['email']);
        $response= array(
            'code'=>2,
            'message'=>'POST (create) Method',
            'POST'=>$_POST['voornaam'],
            'MySQL'=>$resultMySQL
        );

//php://input is not available with enctype="multipart/form-data".
    break;
    case 'PUT':
        parse_str(file_get_contents("php://input"), $output);
        $response= array(
            'code'=>3,
            'message'=>'PUT (update) Method',
            'POST'=>$_REQUEST,
            'TEST'=>$output['voornaam']
        );
        break;
    case 'DELETE':
        parse_str(file_get_contents("php://input"), $output);
        $response= array(
            'code'=>4,
            'message'=>'DELETE Method',
            'POST'=>$output['id']
        );
        break;
    default:
        $response= array(
            'code'=>5,
            'message'=>'Onbekende Method'
        );
        break;
}
echo json_encode($response);

// api info gebruiken
function insertKlant($voornaam, $achternaam, $straat, $postcode, $woonplaats, $email) {
    include '../../conn/database.php';
    $qry="INSERT INTO student 
          (voornaam, achternaam, straat, postcode, woonplaats, email)
          values('{$voornaam}', '{$achternaam}', '{$straat}', '{$postcode}', '{$woonplaats}', '{$email}');";
    echo $qry;
    $result=$dbconn->prepare($qry);
    $result->execute();

}
?>