# pug-filter-sbp
SBP filter for Pug-php

[![Latest Stable Version](https://poser.pugx.org/pug-php/pug-filter-sbp/v/stable.png)](https://packagist.org/packages/pug-php/pug-filter-sbp)
[![Build Status](https://travis-ci.org/pug-php/pug-filter-sbp.svg?branch=master)](https://travis-ci.org/pug-php/pug-filter-sbp)
[![Code Climate](https://codeclimate.com/github/pug-php/pug-filter-sbp/badges/gpa.svg)](https://codeclimate.com/github/pug-php/pug-filter-sbp)
[![Test Coverage](https://codeclimate.com/github/pug-php/pug-filter-sbp/badges/coverage.svg)](https://codeclimate.com/github/pug-php/pug-filter-sbp/coverage)
[![StyleCI](https://styleci.io/repos/61811545/shield?branch=master)](https://styleci.io/repos/61811545)

## Example
```pug
p
  :sbp
    Foo
      +answear
        < 6 * 7
    $foo = new Foo
    echo $foo->answear()
```

## Install

```shell
composer require pug-php/pug-filter-sbp
```

See how to use Pug-php here: https://github.com/pug-php/pug
