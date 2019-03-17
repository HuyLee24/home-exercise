<?php 
class Teacher extends Person{
    function __construct($fname=null, $lname=null, $year=null){
        $this->setFirstName($fname);
        $this->setLastName($lname);
        $this->setYearOfBirth($year);
    }

    private $teachingSubjects=array();
    private $department;

    public function setTeachingSubjects($param){
        array_push($this->teachingSubjects, $param);
    }
    public function setDepartment($department){
        $this->department=$department;
    }

    public function getTeachingSubjects(){
        return $this->teachingSubjects;
    }
    public function getDepartment(){
        return $this->department;
    }
}

?>