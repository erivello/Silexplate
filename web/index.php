<?php

require __DIR__.'/../app/bootstrap.php';
require __DIR__.'/../app/app.php';

if ($app['debug']) {
    return $app->run();
}

$app['http_cache']->run();