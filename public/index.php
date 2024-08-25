<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Application;

$app = new Application();

$app->router->get('/',function() {
       
});

$app->run();
