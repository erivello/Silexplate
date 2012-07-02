<?php

use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\MonologServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\SessionServiceProvider;

// Cache dir
$app['cache.path'] = __DIR__ . '/../cache';

// Cache dir
$app['logs.path'] = __DIR__ . '/../logs';

// Debug
$app['debug'] = true;

// Include HttpCache component for store the HTTP cache data
$app->register(new HttpCacheServiceProvider(), array(
    'http_cache.cache_dir' => $app['cache.path'] . DIRECTORY_SEPARATOR . 'http'
));

// Include Twig component for template rendering
$app->register(new TwigServiceProvider(), array(
    'twig.options' => array(
        'cache' => $app['cache.path'] . DIRECTORY_SEPARATOR . 'twig'
    ),
    'twig.path' => array(__DIR__ . '/../../src/views')
));

// Include Monolog to add application debug logging
$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => $app['logs.path'] . DIRECTORY_SEPARATOR . 'app.log',
    'monolog.name' => 'app',
    'monolog.level' => 300 // = Logger::WARNING
));

// Include UrlGenerator component for generating URLs for named routes
$app->register(new UrlGeneratorServiceProvider());

// Include Session component to manage sessions
$app->register(new SessionServiceProvider());

