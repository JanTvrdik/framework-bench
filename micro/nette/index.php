<?php
require __DIR__ . '/vendor/autoload.php';

use Nette\Configurator;
use Nette\Application\Routers\Route;

$configurator = new Configurator();
$configurator->setDebugMode(FALSE);
$configurator->setTempDirectory(__DIR__ . '/temp');

$container = $configurator->createContainer();

$container->router[] = new Route('say/hello/<name>', function ($name) {
	return new Nette\Application\Responses\TextResponse('Hello ' . htmlspecialchars($name) . '!');
	/*return [
		'Hello {$name}!',
		['name' => $name],
	];*/
});

$container->application->run();
