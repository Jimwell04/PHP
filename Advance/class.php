<?php 

include_once("person.php");

$person = new person;

$person->set_name("Jimwell");
$person->set_age(17);
$person->set_gender('M');
echo $person->get_name();
echo $person->get_age();
echo $person->get_gender();

$person1 = new person;

$person1->set_data("Jimwell",17,'M');
echo  $person1->get_data();

include_once("student.php");

$student = new student;

$student->set_name("Jimwell");
$student->set_age(17);
$student->set_gender('M');
$student->set_degree("Senior Highschool");
$student->set_year(1);
$student->set_school('Masantol Highschool');
echo $student->get_name();
echo $student->get_age();
echo $student->get_gender();
echo $student->get_degree();
echo $student->get_year();
echo $student->get_school();

$student1 = new student;

$student1->set_school_data("Jimwell",17,'M',"Senior Highschool",1,"Masantol Highschool");
echo  $student1->get_school_data();


?>
