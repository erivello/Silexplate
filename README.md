Silexplate
==========

A simple boilerplate for [Silex][1] PHP micro-framework based on the [Symfony2][2] Components.

Silex works with PHP 5.3.3 or later.

Installation
------------

Installation is very easy, it makes use of [Composer][3].

### Install Composer

Run this in your command line:

``` bash
$ curl -s http://getcomposer.org/installer | php
```

Or [download composer.phar][4] into the project root.

### Install Dependencies

All dependencies are stored on `composer.json` file.
Run the following command to install it:

``` bash
$ php composer.phar install
```

Configuration
-------------

Copy `app/config/config.php.dist` to `app/config/config.php` and customize it.


What's inside?
---------------

The Silexplate comes pre-configured with the following providers:

* **DoctrineServiceProvider** - Adds support for Doctrine DBAL
* **FacebookServiceProvider** - Adds support for Facebook PHP SDK
* **FormServiceProvider** - Adds functionality for building forms
* **MonologServiceProvider** - Add application debug logging
* **HttpCacheServiceProvider** - Adds support for storing HTTP cache data
* **SecurityServiceProvider** - Adds support for managing authentication and authorization
* **SessionServiceProvider** - Adds support for managing sessions
* **SwiftmailerServiceProvider** - Adds functionality for sending emails
* **TranslationServiceProvider** - Adds functionality for translating into different languages
* **TwigServiceProvider** - Adds support for the Twig templating engine
* **UrlGeneratorServiceProvider** - Adds functionality for generating URLs for named routes
* **ValidatorServiceProvider** - Adds functionality for validating data

[1]: http://silex.sensiolabs.org/
[2]: http://symfony.com/
[3]: http://getcomposer.org/
[4]: http://getcomposer.org/composer.phar