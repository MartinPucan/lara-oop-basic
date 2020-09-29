<?php
declare(strict_types = 1);

class Team
{
	protected $name;

	/**
	 * Team constructor.
	 * @param $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}


	public function name()
	{

	}

	public function members()
	{

	}

	public function add()
	{

	}

	public function cancel()
	{

	}

	public function manager()
	{

	}

	$value = new Team('text');

	var_dump($value);
}
