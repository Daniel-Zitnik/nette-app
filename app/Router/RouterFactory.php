<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router->addRoute('/nette-test/www/signin', 'Sign:in');
		$router->addRoute('/nette-test/www/signout', 'Sign:out');
		$router->addRoute('/nette-test/www/post/edit/<id=>', 'Edit:edit');
		$router->addRoute('/nette-test/www/post/create', 'Edit:create');
		$router->addRoute('/nette-test/www/post/<id=>', 'Post:show');
		$router->addRoute('/nette-test/www/', 'Home:default');
		return $router;
	}
}
