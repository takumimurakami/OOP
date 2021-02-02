<?php

namespace App\Abstracts;

use App\Concrete\Engineer;

abstract class Employee extends Human
{
    public $baseSalary;
    public $allowance;


    public function __construct(string $name = '', int $age = 30, int $baseSalary = 200000, int $allowance = 20000)
    {
        parent::__construct($name, $age);

        $this->baseSalary = $baseSalary;
        $this->allowance = $allowance;
    }


    // 各職種で個別に設定するため、抽象化しておく
    abstract public function getSalary(): int;
}