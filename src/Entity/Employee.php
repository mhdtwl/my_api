<?php

/**
 * entity
 */
class Employee
{
	private $id ;
	private $employee_name;
	private $employee_salary ;
	private $employee_age ;
	private $profile_image;

	function __construct($id , $employee_name, $employee_salary, $employee_age, $profile_image)
	{
		$this->$id  = $id ;
		$this->$employee_name = $employee_name;
		$this->$employee_salary = $employee_salary
		$this->$employee_age  = $employee_age ;
		$this->$profile_image = $profile_image;
	}

}