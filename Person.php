<?php
abstract class Person{
    private $firstName;
    private $lastName;
    private $yearOfBirth;

    public function setFirstName($name){
        $this->firstName=$name;
    }
    public function setLastName($name){
        $this->lastName=$name;
    } 
    public function setYearOfBirth($year){
        $this->yearOfBirth=$year;
    }

    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getYearOfBirth(){
        return $this->yearOfBirth;
    }
    public function getAge()
    {
        $number1 = date('Y');
        $number2 = $this->yearOfBirth;
        $res = bcsub($number1, $number2); 
        return $res;
    }
    
}
?>