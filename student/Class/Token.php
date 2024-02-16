<?php


Class Token{
    public $dbconn;
    public $Token;
    
    public function __construct($dbconn){
        $this->dbconn = $dbconn;
    }

    public function getToken(){
        $qry_Token = "SELECT  
                                email,
                                token
                                FROM token
                                ORDER BY email";
        // gegevens query ophalen uit db student
        $this->Token=$this->dbconn->prepare($qry_Token);
        $this->Token->execute();
        return $this->Token;
    }

    public function setToken($token, $email){
        $qry_SetToken = "INSERT INTO token (token, email)
            VALUES ('$token', '$email') ON DUPLICATE KEY UPDATE    
            token='$token', email='$email'";
        // gegevens query ophalen uit db student
        echo $qry_SetToken;
        $SetToken=$this->dbconn->prepare($qry_SetToken);
        $SetToken->execute();
        
    }
}

?>