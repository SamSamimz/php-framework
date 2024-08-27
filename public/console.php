<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Commands\HelloCommand;

$consoleApp = new Application();

$consoleApp->add(new HelloCommand());

$consoleApp->run();