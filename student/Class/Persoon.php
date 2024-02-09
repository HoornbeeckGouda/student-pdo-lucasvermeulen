<?php


class Persoon {
    public $dbconn;
    public $studentenResult;

    public function __construct($dbconn){
        $this->dbconn = $dbconn;
    }
    public function getStudent($id){
        $qry_student = "SELECT 
                                id, 
                                voornaam, 
                                tussenvoegsel, 
                                achternaam,
                                straat,
                                postcode,
                                woonplaats,
                                email,
                                klas,
                                geboortedatum
                                FROM student
                                WHERE id = $id";
        // gegevens query ophalen uit db student
        $this->studentenResult=$this->dbconn->prepare($qry_student);
        $this->studentenResult->execute();
        
    }
    public function updateStudent($id,$voornaam,$tussenvoegsel,$achternaam,$straat,$postcode,$woonplaats,$email,$geboortedatum){
        $qry_student = "UPDATE 
                            student
                            SET voornaam='$voornaam', tussenvoegsel='$tussenvoegsel', achternaam='$achternaam', straat='$straat', postcode='$postcode', woonplaats='$woonplaats', email='$email',geboortedatum='$geboortedatum'
                                WHERE id = $id";
        // gegevens query ophalen uit db student
        $updateStudent=$this->dbconn->prepare($qry_student);
        $updateStudent->execute();
    }
    
}

?>