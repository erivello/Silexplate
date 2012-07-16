<?php

$app = require_once __DIR__ . '/../app/bootstrap.php';

if ($app['debug']) {
    return $app->run();
}

// use the Symfony2 reverse proxy
$app['http_cache']->run();