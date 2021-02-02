<?php

namespace App\Concrete;


use App\Abstracts\Employee;

class Designer extends Employee
{

    public function getSalary(): int
    {
        return $this->baseSalary + $this->allowance * 1.5;
    }
}