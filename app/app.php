<?php

$app = new Silex\Application();

require __DIR__.'/AppServices.php';
require __DIR__.'/config/controllers.php';

return $app;