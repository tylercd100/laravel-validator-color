# laravel-validator-color
[![Latest Version](https://img.shields.io/github/release/zenapply/laravel-validator-color.svg?style=flat-square)](https://github.com/zenapply/laravel-validator-color/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/zenapply/laravel-validator-color.svg?branch=master)](https://travis-ci.org/zenapply/laravel-validator-color)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zenapply/laravel-validator-color/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zenapply/laravel-validator-color/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/zenapply/laravel-validator-color/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/zenapply/laravel-validator-color/?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/56f3252c35630e0029db0187/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56f3252c35630e0029db0187)
[![Total Downloads](https://img.shields.io/packagist/dt/zenapply/laravel-validator-color.svg?style=flat-square)](https://packagist.org/packages/zenapply/laravel-validator-color)

## Installation

Install via [composer](https://getcomposer.org/) - In the terminal:
```bash
composer require zenapply/laravel-validator-color
```

Now add the following to the `providers` array in your `config/app.php`
```php
Zenapply\Validator\Providers\ColorValidatorServiceProvider::class
```