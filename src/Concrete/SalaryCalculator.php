<?php


namespace App\Concrete;


use App\Abstracts\Employee;

class SalaryCalculator
{
    public function calculate(Employee $employee): void
    {
        echo $employee->getSalary().PHP_EOL;
    }
}