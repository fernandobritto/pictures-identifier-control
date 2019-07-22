<?php

namespace Dynamische\Controller;

use Dynamische\View\View;

class HomeController
{
	public function index()
	{
		$view = new View('site/index.phtml');
		return $view->render();
	}
}
