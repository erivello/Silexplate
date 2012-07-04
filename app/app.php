<?php

$app = new Silex\Application();

require __DIR__.'/config/config.php';

// Include Monolog to add application debug logging
$app->register(new Silex\Provider\MonologServiceProvider(), $app['monolog.config']);

// Include HttpCache component for store the HTTP cache data
$app->register(new Silex\Provider\HttpCacheServiceProvider(), $app['http_cache.config']);

// Include Session component to manage sessions
$app->register(new Silex\Provider\SessionServiceProvider());

// Include Twig component for template rendering
$app->register(new Silex\Provider\TwigServiceProvider(), $app['twig.config']);

// Include UrlGenerator component for generating URLs for named routes
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());


return $app;