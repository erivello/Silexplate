<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/services.php';
require __DIR__.'/config/controllers.php';

return $app;