<?php

require('./Person.php');

$person = new Person();
$salary = $person->getSalary();

print($salary);
