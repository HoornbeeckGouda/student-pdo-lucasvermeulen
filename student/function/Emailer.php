<?php
include('../view/header.php');   


?>
<div id="formContainer">
    <div id="InnerContainer">   
    <div id="FormLabel">Wachtwoord Vergeten:</div>
        <form class="Form"  method="post">
            <input type="text" name="rol" placeholder="rol">
            <input type="email" name="email" placeholder="email">
            <?php include './Recaptcha.php'?>
            <input type="submit">
        </form> 
    </div>
</div>
<?php
if(isset($_POST['email'])){
    //include ('registreren.html');
    include ('../Class/mailer.php');
    include ('../Class/Token.php');
    include('../conn/database.php');
    $token = new Token($dbconn);
    
    $klant = 'Klant B';
    $email = $_POST['email'];
    $TempToken = bin2hex(random_bytes(15));
    $token->SetToken($TempToken, $email);
    $melding='Testmail';
    echo '<div id="melding">'.$melding."</div>";
    $onderwerp = "Watchwoord vergeten";
    $bericht = "Geachte $klant, Bent u uw email vergeten.
     http://localhost/2024/PGB/PHP/student/student-pdo-lucasvermeulen/student/function/ResetWachtwoord.php?rol=".$_POST['rol']."&Token=" . $TempToken ."";
    //mailen...
    mailen($email, $klant, $onderwerp, $bericht );
    header("Location: ../inlog.php");

}

?>


<?php   
include('../view/footer.php')
?>
