<?php

namespace Silexplate\Provider\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

/**
 * Project
 *
 * @author Edoardo Rivello <edoardo.rivello@gmail.com>
 */
class DemoController implements ControllerProviderInterface
{
    /**
     * @{inheritDoc}
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function () use ($app) {

            return 'Welcome to Silexplate';

        })->bind('silexplate_homepage');;

        return $controllers;
    }
}
