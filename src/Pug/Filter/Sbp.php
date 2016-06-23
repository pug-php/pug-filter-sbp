<?php

namespace Pug\Filter;

use Jade\Compiler;;
use Jade\Filter\AbstractFilter;
use Jade\Nodes\Filter;
use Sbp\Sbp as SbpParser;

class Sbp extends AbstractFilter
{
    public function __invoke(Filter $node, Compiler $compiler)
    {
        $nodes = $node->block->nodes;
        $indent = strlen($nodes[0]->value) - strlen(ltrim($nodes[0]->value));
        $sbp = '<?';
        foreach ($nodes as $line) {
            $sbp .= "\n" . substr($line->value, $indent);
        }
        $php = SbpParser::parse($sbp);

        return $php . (preg_match('`\?>\s*$`', $php) ? '' : '?>');
    }
}
