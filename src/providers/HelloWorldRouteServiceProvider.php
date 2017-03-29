<?php

namespace TestPasub\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
      $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
    }

    public function map(Router $router)
    {
      $router->get('hello','TestPasub\Controllers\ContentController@sayHello');
    }
}
