<?php
include('../view/header.php');   

?>
<div id="formContainer">
    <div id="InnerContainer">   
        <div id="FormLabel">Wachtwoord:</div>
        <form class="Form" method="post">
            <input type="text" name="Password" placeholder="Nieuw Wachtwoord">
            <input type="submit">
        </form> 
    </div>
</div>
<?php

if(isset($_POST['Password'])){//include ('registreren.html');
    
    $token->getToken($_GET["email"])->setFetchMode(PDO::FETCH_BOTH);
    foreach($token->getToken($_GET["email"]) as $row) {
        // echo $row['email'];
        // echo $row['token'];
    }
    echo htmlspecialchars($_GET["Token"]);
    echo $row['email'];

    echo "</br>";

    if(htmlspecialchars($_GET["Token"]) == $row['token']){
        echo $_GET["Token"];

    // if(htmlspecialchars($_GET["Token"])  == $row['token']){

        $gebruiker = new Gebruiker($dbconn);
        $hash = password_hash($_POST['Password'], PASSWORD_DEFAULT);

        $gebruiker->SetWachtwoord($_GET['rol'], $hash);
        header('Location: '.'../view/inlog.php');
        die();
    }
}
?>
<?php   
include('../view/footer.php')
?>
