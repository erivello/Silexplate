<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

if (!file_exists(__DIR__.'/config/config.php')) {
    throw new RuntimeException('You must create your own configuration file ("app/config/config.php"). See "app/config/config.php.dist" for an example config file.');
}

require __DIR__.'/config/config.php';
require __DIR__.'/services.php';
require __DIR__.'/config/controllers.php';

return $app;