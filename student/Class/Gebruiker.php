<?php 
Class Gebruiker {
    public $dbconn;
    
    public function __construct($dbconn){
        $this->dbconn = $dbconn;
    }

    
    public function SetWachtwoord($rol, $wachtwoord){
        $qry_SetWachtwoord = "UPDATE 
            gebruiker
            SET wachtwoord='$wachtwoord'
            WHERE rol = '$rol'";
        // gegevens query ophalen uit db student

        $SetWachtwoord=$this->dbconn->prepare($qry_SetWachtwoord);
        $SetWachtwoord->execute();
        
    }
}

?>