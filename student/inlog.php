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
        header('Location: '.'./studenten.php');
        die();
    }else{ 

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
    <form  method="POST" >
        <div class="inlog">
            <div id="loginLabel">Login:</div>
            <div class="action">
                <label for="html" >Rol:</label>
                <input type="text" id="rol" name="rol">

                <label for="html" >PASSWORD:</label>
                <input type="PASSWORD" id="PASSWORD" name="password" >

                <input type="submit" value="Submit">
            </div>
        </div>
    </form> 
</div>

<?php   
include('footer.php')
?>
