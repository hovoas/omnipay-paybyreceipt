# Omnipay: Manual

**Manual driver for the Omnipay PHP payment processing library**

[![Build Status](https://travis-ci.org/thephpleague/omnipay-manual.png?branch=master)](https://travis-ci.org/thephpleague/omnipay-manual)
[![Latest Stable Version](https://poser.pugx.org/omnipay/manual/version.png)](https://packagist.org/packages/omnipay/manual)
[![Total Downloads](https://poser.pugx.org/omnipay/manual/d/total.png)](https://packagist.org/packages/omnipay/manual)

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements Manual support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "omnipay-paybyreceipt": "dev-master"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* Manual

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.
