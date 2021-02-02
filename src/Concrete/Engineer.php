<?php

namespace App\Concrete;


use App\Abstracts\Employee;

class Engineer extends Employee
{

    public function getSalary(): int
    {
        return $this->baseSalary * 1.2;
    }
}