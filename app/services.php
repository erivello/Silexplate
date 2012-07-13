<?php

/** Silex Extensions */
use Silex\Provider\MonologServiceProvider;
use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;


if (!file_exists(__DIR__.'/config/config.php')) {
    throw new RuntimeException('You must create your own configuration file ("app/config/config.php"). See "app/config/config.php.dist" for an example config file.');
}

require __DIR__.'/config/config.php';

// Include Monolog to add application debug logging
$app->register(new MonologServiceProvider(), $app['monolog.config']);

// Include HttpCache component for store the HTTP cache data
$app->register(new HttpCacheServiceProvider(), $app['http_cache.config']);

// Include Session component to manage sessions
$app->register(new SessionServiceProvider());

// Include Twig component for template rendering
$app->register(new TwigServiceProvider(), $app['twig.config']);

// Include UrlGenerator component for generating URLs for named routes
$app->register(new UrlGeneratorServiceProvider());