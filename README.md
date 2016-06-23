# pug-filter-sbp
SBP filter for Pug-php

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
