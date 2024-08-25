<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Application;

$app = new Application();

$app->router->get('/',function() {
       return "<h1>Home Page</h1>";
});

$app->router->get('/about',function() {
       return "<h1>About Page</h1>";
});

$app->router->get('/contact',function() {
       return "<h1>Contact Page</h1>";
});

$app->run();
