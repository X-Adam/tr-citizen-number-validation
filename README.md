# Tr Citizen Number Validation Class

<p align="center">
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-validation" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Adam/tr-citizen-number-validation" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-validation" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Adam/tr-citizen-number-validation" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-validation" rel="nofollow"><img src="https://poser.pugx.org/X-Adam/tr-citizen-number-validation/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Adam/tr-citizen-number-validation" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Adam/tr-citizen-number-validation" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Adam/tr-citizen-number-validation/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Adam/tr-citizen-number-validation/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/321765771" rel="nofollow"><img src="https://styleci.io/repos/321765771/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

Turkey citizen number (TC No) validation class.

## Requirements

PHP >=7.4. Other than that, this library has no requirements.

## Install

```bash
$ composer require x-adam/tr-citizen-number-validation:"~4"
```

## Example Usage

```php
include "./vendor/autoload.php";

$result = XAdam\TrCitizenNumberValidation::validate(12345678901);
var_dump($result);

# Result: bool(false)
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
