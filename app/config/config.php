<?php

// Debug
$app['debug'] = true;

// Cache
$app['cache.path'] = __DIR__ . '/../cache';
$app['http_cache.cache_dir'] = $app['cache.path'] . DIRECTORY_SEPARATOR . 'http';