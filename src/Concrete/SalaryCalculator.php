<?php


namespace App\Concrete;


class SalaryCalculator
{
    private $engineer;
    private float $salary = 200000;


    public function __construct($engineer)
    {
        $this->engineer = $engineer;
    }

    public function calculate()
    {
        //TODO: implement calculate method
    }


    public function show()
    {
        echo $this->salary.PHP_EOL;
    }
}