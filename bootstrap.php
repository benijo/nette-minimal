<?php

require __DIR__ . '/vendor/autoload.php';

$configurator = new Nette\Configurator;

$configurator->enableTracy(__DIR__ . '/var');
$configurator->setDebugMode(TRUE);

$configurator->setTimeZone('Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/var');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	//	->addDirectory(__DIR__ . '/../src')
	->register();

$configurator->addConfig(__DIR__ . '/config.neon');

$container = $configurator->createContainer();

return $container;
