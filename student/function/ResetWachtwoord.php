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
    include ('../Class/Token.php');
    include ('../Class/Gebruiker.php');
    include('../conn/database.php');
    $token = new Token($dbconn);
    $token->getToken()->setFetchMode(PDO::FETCH_BOTH);
    foreach($token->getToken() as $row) {
        // echo $row['email'];
        // echo $row['token'];
    }
    echo $_GET["Token"];
    if(htmlspecialchars($_GET["Token"])  == $row['token']){
        $gebruiker = new Gebruiker($dbconn);
        $hash = password_hash($_POST['Password'], PASSWORD_DEFAULT);

        $gebruiker->SetWachtwoord($_GET['rol'], $hash);
        header('Location: '.'../inlog.php');
        die();
    }
}
?>
<?php   
include('../view/footer.php')
?>
