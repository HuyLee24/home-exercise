<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

echo '<h2>Student</h2>';
$aStudent = new Student();
$aStudent->setFirstName('Captain');
$aStudent->setLastName('Teemo');
$aStudent->setYearOfBirth('2000');
$aStudent->setSelectedCourses('Math');
$aStudent->setSelectedCourses('Physic');
$aStudent->setGreditPoints('100');
$courseOfStudent=$aStudent->getSelectedCourses();

echo 'Student: '.$aStudent->getFirstName().' '.$aStudent->getLastName();
echo '<br>Year of birth: '.$aStudent->getYearOfBirth();
echo '<br>Age: '.$aStudent->getAge();
echo '<br>Courses: ';
foreach ($courseOfStudent as $row){
    echo $row .' ';
}
echo '<br>Gredit point of student is '.$aStudent->getGreditPoints();


echo '<h2>Teacher</h2>';
$aTeacher = new Teacher();
$aTeacher->setFirstName('Captain');
$aTeacher->setLastName('Yasuo');
$aTeacher->setYearOfBirth('1990');
$aTeacher->setTeachingSubjects('Math');
$aTeacher->setTeachingSubjects('Physic');
$aTeacher->setDepartment('University');
$SubjectOfTeacher=$aTeacher->getTeachingSubjects();

echo 'Teacher: '.$aTeacher->getFirstName().' '.$aTeacher->getLastName();
echo '<br>Year of birth: '.$aTeacher->getYearOfBirth();
echo '<br>Age: '.$aTeacher->getAge();
echo '<br>Subject: ';
foreach ($SubjectOfTeacher as $row2){
    echo $row2 .' ';
}
echo '<br>Department of teacher is '.$aTeacher->getDepartment();


echo '<h2>Staffs</h2>';
$staff1 = new Staff();
$staff1->setFirstName('Captain');
$staff1->setLastName('Jack');
$staff1->setYearOfBirth('1980');
$staff1->setVacancy('Cleaner');

echo 'Staff 1: '.$staff1->getFirstName().' '.$staff1->getLastName();
echo '<br>Year of birth: '.$staff1->getYearOfBirth();
echo '<br>Age: '.$staff1->getAge();
echo '<br>Vacancy: '.$staff1->getVacancy();

$staff2 = new Staff();
$staff2->setFirstName('Captain');
$staff2->setLastName('Sparrow');
$staff2->setYearOfBirth('1970');
$staff2->setVacancy('Caretaker');

echo '<br><br>Staff 2: '.$staff2->getFirstName().' '.$staff2->getLastName();
echo '<br>Year of birth: '.$staff2->getYearOfBirth();
echo '<br>Age: '.$staff2->getAge();
echo '<br>Vacancy: '.$staff2->getVacancy();

?>