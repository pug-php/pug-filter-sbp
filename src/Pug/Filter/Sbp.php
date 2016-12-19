<?php

namespace Pug\Filter;

use Sbp\Sbp as SbpParser;

class Sbp extends AbstractFilter
{
    public function parse($sbp)
    {
        if (!preg_match('`^\s*<\?`', $sbp)) {
            $sbp = "<?\n" . $sbp;
        }
        $php = SbpParser::parse($sbp);

        return $php . (preg_match('`\?>\s*$`', $php) ? '' : '?>');
    }
}
