<?php

require_once 'bootstrap.php';


use API\ReadAPI;
use API\Management\Compare;


$r  = new ReadAPI();
$employees = $r->read_api();

#print_r($data);

$c = new Compare();
$result = $c->sortBySalary($employees);

print_r($result);