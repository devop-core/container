# Dependency injection library

## Description

> This library is just proof of concept. > We do **NOT** recommended the use of production environment.

Provide dependency injection

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Package is available on [Packagist](link-packagist), you can install it using [Composer](http://getcomposer.org).

``` bash
composer require devop-core/container
```

## Usage

``` php
<?php
use DevOp\Core\Container;

include_once './vendor/autoload.php';

$class = new \stdClass();
$container = new Container();
$container->add('class', $class);

var_dump($container->get('class'));
```

## Change log

Please see [CHANGELOG](.github/CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/devop-core/container.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/devop-core/container/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/devop-core/container.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/devop-core/container.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/devop-core/container.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/devop-core/container
[link-travis]: https://travis-ci.org/devop-core/container
[link-scrutinizer]: https://scrutinizer-ci.com/g/devop-core/container/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/devop-core/container
[link-downloads]: https://packagist.org/packages/devop-core/container
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
