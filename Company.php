<?php

require_once "Employee.php";

class Company
{
    private $name;
    private $employees = [];

    public function __construct($name = "", array $employees = [])
    {
        $this->name = $name;
        $this->employees = $employees;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_employees()
    {
        return $this->employees;
    }
    public function set_employees(array $employees)
    {
        $this->employees = $employees;
    }
    public function set_employee($i, Employee $employee)
    {
        $this->employees[$i] = $employee;
    }
    public function get_employee($i)
    {
        return $this->employees[$i];
    }
    public function add_employee($employee)
    {
        $this->employees[] = $employee;
    }

    public function get_employees_info()
    {
        $emps = implode(",", $this->employees);
        return "$emps";
    }

    public function __toString()
    {
        return "{$this->get_name()}: {$this->get_employees_info()}";
    }
}