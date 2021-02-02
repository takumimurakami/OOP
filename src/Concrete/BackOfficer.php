<?php

namespace App\Concrete;

use App\Abstracts\Employee;


class BackOfficer extends Employee
{

    public function getSalary(): int
    {
        return $this->baseSalary + $this->allowance;
    }
}