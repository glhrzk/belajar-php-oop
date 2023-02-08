<?php

require_once "data/Programmer.php";

// polimorphisme adalah kemampuan untuk berubah bentuk class turunannya.

$company = new Company();
$company->programmer = new Programmer("galih");
var_dump($company);
$company->programmer = new BackendProgrammer("galih");
var_dump($company);
$company->programmer = new FrontendProgrammer("galih");
var_dump($company);


// bisa juga digunakan di fungsi
sayHElloProgrammer(new Programmer("galih"));
sayHElloProgrammer(new BackendProgrammer("galih"));
sayHElloProgrammer(new FrontendProgrammer("galih"));
