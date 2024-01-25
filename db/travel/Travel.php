<?php

class Travel{
    private $id;
    private $emri;
    private $cmimi;
    private $koha;
    private $lokacioni;
    private $imgsrc;


    function __construct($id,$emri,$cmimi,$koha,$lokacioni,$imgsrc){
            $this->id = $id;
            $this->emri = $emri;
            $this->cmimi = $cmimi;
            $this->koha = $koha;
            $this->lokacioni = $lokacioni;
            $this->imgsrc = $imgsrc;
    }
    function getId(){
        return $this->id;
    }
    function getEmri(){
        return $this->emri;
    }
    function getCmimi(){
        return $this->cmimi;
    }
    function getKoha(){
        return $this->koha;
    }
    function getLokacioni(){
        return $this->lokacioni;
    }
    function getImgsrc(){
        return $this->imgsrc;
    }
}

?>
