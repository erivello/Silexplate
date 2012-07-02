<?php

// Debug
$app['debug'] = true;

// Cache dir
$app['cache.path'] = __DIR__ . '/../cache';

// Logs dir
$app['logs.path'] = __DIR__ . '/../logs';


// HttpCache config
$app['http_cache.config'] = array(
    'http_cache.cache_dir' => $app['cache.path'] . DIRECTORY_SEPARATOR . 'http'
);

// Monolog config
$app['monolog.config'] = array(
    'monolog.logfile' => $app['logs.path'] . DIRECTORY_SEPARATOR . 'app.log',
    'monolog.name'    => 'app',
    'monolog.level'   => 300 // = Logger::WARNING
);

// Twig config
$app['twig.config'] = array(
    'twig.options' => array(
        'cache' => $app['cache.path'] . DIRECTORY_SEPARATOR . 'twig'
    ),
    'twig.path'    => __DIR__ . '/../Resources/views'
);