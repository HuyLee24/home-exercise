<?php
class Staff extends Person{
    function __construct($fname=null, $lname=null, $year=null, $vac=null){
        $this->setFirstName($fname);
        $this->setLastName($lname);
        $this->setYearOfBirth($year);
        $this->vacancy=$vac;
    }

    private $vacancy;

    public function setVacancy($vacancy){
        $this->vacancy=$vacancy;
    }

    public function getvacancy(){
        return $this->vacancy;
    }
}    
?>