# jade-filter-sbp
SBP filter for Jade-php

## Example
```jade
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
composer require kylekatarnls/jade-php
composer require kylekatarnls/jade-filter-sbp
```

See how to use Jade-php here: https://github.com/kylekatarnls/jade-php
