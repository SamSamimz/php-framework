<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Commands\HelloCommand;
use App\Commands\MakeViewCommand;

$consoleApp = new Application();

$consoleApp->add(new HelloCommand());
$consoleApp->add(new MakeViewCommand());

$consoleApp->run();
