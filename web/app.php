<?php

$app = require_once __DIR__ . '/../app/bootstrap.php';

// use the Symfony2 reverse proxy
$app['http_cache']->run();
