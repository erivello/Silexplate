<?php

require_once __DIR__ . '/../app/bootstrap.php';

if ($app['debug']) {
    return $app->run();
}

$app['http_cache']->run();