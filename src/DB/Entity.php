<?php

namespace Dynamische\DB;

use \PDO;

abstract class Entity
{
	private $conn;

	public function __construct(\PDO $conn)
	{
		$this->conn = $conn;
	}

	public function findAll()
	{
		return 'SELECT * FROM products';
	}

	public function find()
	{
		return 'SELECT * FROM products WHERE id =10
		';
	}
}