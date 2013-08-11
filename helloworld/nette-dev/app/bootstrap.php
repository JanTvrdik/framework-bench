<?php

use Nette\Configurator;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\SimpleRouter;

require __DIR__ . '/../vendor/nette/nette/Nette/loader.php';

if (is_file($cache = __DIR__ . '/../temp/classes.cache.php')) {
	require $cache;
} else {
	require __DIR__ . '/ClassCacheBuilder.php';
	ClassCacheBuilder::customBuild($cache);
}

$configurator = new Configurator();
$configurator->setDebugMode(FALSE);
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->addConfig(__DIR__ . '/config.neon', FALSE);

$container = $configurator->createContainer();

$container->router[] = new SimpleRouter('Micro:default');

$container->application->run();
