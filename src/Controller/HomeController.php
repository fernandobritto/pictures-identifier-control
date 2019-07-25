<?php

namespace Dynamische\Controller;

use Dynamische\View\View;
use Dynamische\Entity\Product;

class HomeController
{
	public function index()
	{
		$pdo = new \PDO('mysql:dbname=db_produktkatalog; host=localhost', 'root', '');

		$view = new View('site/index.phtml');

		$view->products = (new Product($pdo))->findAll();
		return $view->render();
	}
}
