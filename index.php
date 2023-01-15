<?php

require_once "Employee.php";

$emp = new Employee();

$emp->set_name("John");
$emp->surname = "Johnson";
echo $emp->get_name() . " " . $emp->get_surname();

//$emp->age = 23;

$emp->set_age(23);

echo $emp->get_age();
echo $emp->get_full_info();
echo $emp;

$emp1 = new Employee("Nicol", "Kidman");
$emp1->set_age(23);
echo $emp1;