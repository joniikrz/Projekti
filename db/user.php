<?php

class User{
    private $id;
    private $emri;
    private $mbiemri;
    private $diteLindja;
    private $email;
    private $password;


    function __construct($id,$emri,$mbiemri,$diteLindja,$email,$password){
            $this->id = $id;
            $this->emri = $emri;
            $this->mbiemri = $mbiemri;
            $this->diteLindja = $diteLindja;
            $this->email = $email;
            $this->password = $password;
    }
    function getId(){
        return $this->id;
    }
    function getEmri(){
        return $this->emri;
    }
    function getMbiemri(){
        return $this->mbiemri;
    }
    function getDitelindja(){
        return $this->diteLindja;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
}

?>
