<?php


class Student {
    public $dbconn;
    public $count_records;
    public $studentenResult;
    
    public function __construct($dbconn){
        $this->dbconn = $dbconn;
    }
    public function getStudenten(){
        $qry_studenten = "SELECT 
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
                                ORDER BY id";
        // gegevens query ophalen uit db student
        $this->studentenResult=$this->dbconn->prepare($qry_studenten);
        $this->studentenResult->execute();
    }
    public function getNumberStudenten(){
        $this->count_records = $this->studentenResult->rowCount();
        return $this->count_records;
    }
    
    
}

?>