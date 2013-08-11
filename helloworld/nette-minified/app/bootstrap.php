<?php

use Nette\Config\Configurator;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\SimpleRouter;

require __DIR__ . '/../libs/Nette/nette.min.php';

$configurator = new Configurator();
$configurator->setDebugMode(FALSE);
$configurator->setTempDirectory(__DIR__ . '/../temp');

$container = $configurator->createContainer();

$container->router[] = new SimpleRouter('Default:default');

$container->application->run();
