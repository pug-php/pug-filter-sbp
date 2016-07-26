<?php

namespace Pug\Filter;

use Sbp\Sbp as SbpParser;

class Sbp extends AbstractFilter
{
    public function parse($sbp)
    {
        $php = SbpParser::parse($sbp);

        return $php . (preg_match('`\?>\s*$`', $php) ? '' : '?>');
    }
}
