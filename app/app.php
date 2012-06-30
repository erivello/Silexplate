<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\HttpCacheServiceProvider;

$app = new Silex\Application();

require __DIR__.'/config/config.php';

$app->register(new HttpCacheServiceProvider());

return $app;