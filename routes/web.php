<?php

declare(strict_types=1);

use\Bramus\Router\Router;

$router = new Router();

$router->get('/', '\App\Controller\HomeController@index');

return $router;
