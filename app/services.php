<?php

/** Silex Extensions */
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\MonologServiceProvider;
use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\SwiftmailerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;


// Include Doctrine component to add integration with Doctrine DBAL for easy database acccess
$app->register(new DoctrineServiceProvider(), $app['doctrine.config']);

// Include Form component for building forms
$app->register(new FormServiceProvider());

// Include Monolog component to add application debug logging
$app->register(new MonologServiceProvider(), $app['monolog.config']);

// Include HttpCache component for store the HTTP cache data
$app->register(new HttpCacheServiceProvider(), $app['http_cache.config']);

// Include Session component to manage sessions
$app->register(new SessionServiceProvider());

// Include Swiftmailer component for sending emails
$app->register(new SwiftmailerServiceProvider());

// Include Twig component for template rendering
$app->register(new TwigServiceProvider(), $app['twig.config']);

// Include UrlGenerator component for generating URLs for named routes
$app->register(new UrlGeneratorServiceProvider());