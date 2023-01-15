<?php

// require_once "Employee.php";
// require_once "Company.php";
include "autoload.php";

$emp = new Employee();

$emp->set_name("John");
$emp->surname = "Johnson";
//echo $emp->get_name() . " " . $emp->get_surname();

//$emp->age = 23;

$emp->set_age(23);

// echo $emp->get_age();
// echo $emp->get_full_info();
//echo $emp;

$emp1 = new Employee("Nicol", "Kidman");
$emp1->set_age(23);
//echo $emp1;
$arr = [$emp, $emp1];
$company = new Company("Kit", $arr);

echo $company."\n";

echo $company->get_employees_info()."\n";
$employee = new Employee("Ilone","Mask");
$company->set_employee(1, $employee);
echo $company->get_employees_info();
$company->add_employee($emp1);

echo $company."\n";