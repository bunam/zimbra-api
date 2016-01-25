Zimbra-API
==========

This API A simple Object Oriented wrapper for the zimbra soap api (web service). It's written with PHP 5.4. It allows you to manage easily zimbra accounts, zimbra domains and zimbra servers.

## Requirement
* PHP >= 5.4.x with [cURL](http://php.net/manual/en/book.curl.php) extension,
* [Guzzle](https://github.com/guzzle/guzzle) library,
* [Evenement](https://github.com/igorw/evenement) library,
* [PhpCollection](https://github.com/schmittjoh/php-collection) library,
* (optional) PHPUnit to run tests,

## Autoload

The new version of `zimbra-api` using [Composer](http://getcomposer.org).
The first step to use `zimbra-api` is to download composer:

```bash
$ curl -s http://getcomposer.org/installer | php
```

Then we have to install our dependencies using:
```bash
$ php composer.phar install
```
Now we can use autoloader from Composer by:

```yaml
{
    "require": {
        "nguyennv/zimbra-api": "*"
    }
}
```

> `zimbra-api` follows the PSR-0 convention names for its classes, which means you can easily integrate `zimbra-api` classes loading in your own autoloader.

## Basic usage of `zimbra-api` admin client

```php
<?php

// This file is generated by Composer
require_once 'vendor/autoload.php';

$api = \Zimbra\AdminFactory::instance('https://localhost:7071/service/admin/soap');
$api->auth('username', 'password');
$account = new \Zimbra\Struct\AccountSelector(\Zimbra\Enum\AccountBy::NAME(), 'username');
$accountInfo = $api->getAccountInfo($account);
```

From `$api` object, you can access to all zimbra admin api.

##Licensing
[BSD 3-Clause](LICENSE)

    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.
