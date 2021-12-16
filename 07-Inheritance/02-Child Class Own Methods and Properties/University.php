<?php

class University{
    public $universityName;
    public $universityAddress;
    public $licenceNo;

    function __construct($universityName, $universityAddress, $licenceNo){

        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenceNo = $licenceNo;
    }

    function printUniversityDetails(){
        echo "University Name : $this->universityName" . PHP_EOL;
        echo "University Address : $this->universityAddress" . PHP_EOL;
        echo "Licence No :  $this->licenceNo" . PHP_EOL; 
    }
}

?>