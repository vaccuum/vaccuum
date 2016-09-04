<?php require('./../vendor/autoload.php');

define('DIR_ROOT', dirname(__DIR__));

use Vaccuum\Config\Config;
use Vaccuum\Container\Container;
use Vaccuum\Contracts\Config\IConfig;
use Vaccuum\Contracts\Container\IContainer;
use Vaccuum\Contracts\Foundation\IApplication;

/* --------------------------------------------------- */
// Create configuration.
/* --------------------------------------------------- */

/** @var IConfig $config */
$config = new Config();
$config->loadDirectory('/config');
$config->loadBundles();

/* --------------------------------------------------- */
// Create dependency container.
/* --------------------------------------------------- */

/** @var IContainer $container */
$container = new Container($config);

/* --------------------------------------------------- */
// Create vaccuum application.
/* --------------------------------------------------- */

/** @var IApplication $application */
$application = $container->make(IApplication::class);

/* --------------------------------------------------- */
// Handle the request.
/* --------------------------------------------------- */

$application->start();
