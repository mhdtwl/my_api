<?php

namespace  API\Management;
/**
 * Compare employees
 */
class Compare  
{

	function __construct($employees=[])
	{
	
	}

	private function cmp($a, $b) {
	    return strcmp($a->employee_salary, $b->employee_salary);
	}


	public function sortBySalary($employees=[])
	{
		usort($employees,function($first,$second){
		    return (int)($first->employee_salary) < (int)($second->employee_salary);
		});
		return json_encode($employees);
	}
}