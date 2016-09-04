<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vaccuum\Config\Config;
use Vaccuum\Container\Container;
use Vaccuum\Contracts\Config\IConfig;
use Vaccuum\Contracts\Container\IContainer;
use Vaccuum\Contracts\Dispatcher\IDispatcher;
use Vaccuum\Contracts\Foundation\IApplication;
use Vaccuum\Contracts\Router\IRoute;
use Vaccuum\Contracts\Router\IRouteInfo;
use Vaccuum\Contracts\Router\IRouter;
use Vaccuum\Dispatcher\Dispatcher;
use Vaccuum\Foundation\Application;
use Vaccuum\Router\Route;
use Vaccuum\Router\RouteInfo;
use Vaccuum\Router\Router;

return [

    'parameters' => [

    ],

    'shared' => [

        Request::class,
        Response::class,
        Router::class,
        Dispatcher::class,

    ],

    'definitions' => [

    ],

    'aliases' => [

        IConfig::class      => Config::class,
        IContainer::class   => Container::class,
        IApplication::class => Application::class,
        IRoute::class       => Route::class,
        IRouteInfo::class   => RouteInfo::class,
        IRouter::class      => Router::class,
        IDispatcher::class  => Dispatcher::class,

    ],

    'factories' => [

        Request::class => function ()
        {
            return Request::createFromGlobals();
        },

        Response::class => function ()
        {
            return Response::create();
        },

    ],

];