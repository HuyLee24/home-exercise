<?php 
class Student extends Person{
    function __construct($fname=null, $lname=null, $year=null){
        $this->setFirstName($fname);
        $this->setLastName($lname);
        $this->setYearOfBirth($year);
    }

    private $selectedCourses=array();
    private $greditPoints;

    public function setSelectedCourses($param){
        array_push($this->selectedCourses, $param);
    }
    public function setGreditPoints($point){
        $this->greditPoints=$point;
    }

    public function getSelectedCourses(){
        return $this->selectedCourses;
    }
    public function getGreditPoints(){
        return $this->greditPoints;
    }
}

?>