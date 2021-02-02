<?php

use App\Concrete\SalaryCalculator;

require "vendor/autoload.php";

$engineer = new \App\Concrete\Engineer('', 30, 300000);
$designer = new \App\Concrete\Designer();
$backOfficer = new \App\Concrete\BackOfficer();


$calculator = new SalaryCalculator();

$calculator->calculate($engineer);
$calculator->calculate($designer);
$calculator->calculate($backOfficer);