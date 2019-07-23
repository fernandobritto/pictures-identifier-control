<?php

namespace Dynamische\Controller;

use Dynamische\View\View;

class HomeController
{
	public function index()
	{
		$products = new Product();

		$view = new View('site/index.phtml');
		$view->products = $products->findAll();
		return $view->render();
	}
}
