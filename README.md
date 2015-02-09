# The super-awesome good-time playground

[![Build Status](http://img.shields.io/travis/ChiPHP/good-time-playground.svg)](https://travis-ci.org/ChiPHP/good-time-playground)
[![Latest Stable Version](http://img.shields.io/packagist/v/chi-php-ug/good-time-playground.svg)](https://packagist.org/packages/chi-php-ug/good-time-playground)
[![License](http://img.shields.io/badge/license-MIT-lightgrey.svg)](https://github.com/ChiPHP/good-time-playground/blob/master/LICENSE)

Welcome to the super-awesome good-time playground for the Chicago PHP User Group!

This package is a great way to pratice contributing to open source. If you see soemthing misspelled in the README, or maybe a test isn't passing, or you want to add a new feature, feel free to submit your own PR!


## Into

The Silly Site Morpher is a library that takes a URL and returns the contents after it has undergone some sort of mutation.

The mutations are performed by "morpher providers" found under the `Morphers` folder.


## Installation

Add the following to your `composer.json` file.

```json
{
    "require": {
        "chi-php-ug/good-time-playground": "~0.0"
    }
}
```


## Usage

```php
use ChiPhp\Playground\SillySiteMorpher;
use ChiPhp\Playground\Morphers\BathroomMorpher;

$ssm = new SillySiteMorpher('http://example.com');
$morpher = new BathroomMorpher();
$content = $ssm->morph($morpher);

echo $content; // Now with some bathroom flare!
```

## Supported Morphers

There are a number of morphers you can use to make a silly site.

### Bathroom Morpher

Replaces random words with bathroom-related words.

```php
use ChiPhp\Playground\Morphers\Bathroom;

$morpher = new BathroomMorpher();
```

### Add your own!

We've love to add more silly morphers to the package. Code your morpher to the `MorpherInterface` and add documentation for it!


# Contributing

Please see [CONTRIBUTING](https://github.com/SammyK/package-skeleton/blob/master/CONTRIBUTING.md) for details.


# Credits

- [All Contributors](https://github.com/SammyK/package-skeleton/contributors)


# License

The MIT License (MIT). Please see [License File](https://github.com/SammyK/package-skeleton/blob/master/LICENSE) for more information.
