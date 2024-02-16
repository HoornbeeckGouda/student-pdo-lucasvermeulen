<?php
include('header.php');
?>

<?php
if(isset($_POST['rol'])){
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
    // $hash = password_hash('admin123', PASSWORD_DEFAULT);
    $resultGebruiker->setFetchMode(PDO::FETCH_ASSOC);
    $correctPass = null;
    foreach($resultGebruiker as $row) { 
        $correctPass = password_verify($password, $row['wachtwoord']);
    }
    if($correctPass){
        $_SESSION["rol"] = $_POST['rol'];
        header('Location: '.'./studenten.php');
        die();
    }
}
?>

<div>
    <?php
    if(isset($_POST['rol'])){
        if(!$correctPass){
            echo 'nee dit is fout!';
        }
    }
    ?>
</div>

<div id="formContainer">
    <div id="InnerContainer">
    <div id="FormLabel">Login:</div>

        <form class="Form" method="POST" >
            
                <input type="text" id="rol" name="rol"  placeholder="Wachtwoord" >

                <input type="PASSWORD" id="PASSWORD" name="password" placeholder="Wachtwoord" >

                <input type="submit" value="Submit">       
        </form> 
        <form class="Form" action="./function/Emailer.php"  method="post" >  
            <input type="submit" name="WachtVergeten"  value="Wachtwoord vergeten?" 
                    class="button" /> 
        </form> 
    </div>
</div>

<?php   
include('footer.php')
?>
