<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Application;

$app = new Application();

$app->router->get('/','home');

$app->router->get('/about','about');

$app->router->get('/contact','contact');

$app->run();
