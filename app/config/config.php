<?php

use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\TwigServiceProvider;

// Cache dir
$app['cache.path'] = __DIR__ . '/../cache';

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

