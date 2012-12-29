<?php

$app = require_once __DIR__ . '/../app/bootstrap.php';

// Debug
$app['debug'] = true;

$app->run();

