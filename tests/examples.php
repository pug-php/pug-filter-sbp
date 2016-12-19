<?php

use Pug\Pug;

class ExamplesTest extends \PHPUnit_Framework_TestCase
{
    public function caseProvider()
    {
        $cases = array();

        $examples = __DIR__ . '/../examples';
        foreach (scandir($examples) as $file) {
            if (substr($file, -4) === '.pug') {
                $cases[] = array($examples . '/' . substr($file, 0, -4) . '.html', $examples . '/' . $file);
            }
        }

        return $cases;
    }

    /**
     * @dataProvider caseProvider
     */
    public function testJadeGeneration($htmlFile, $jadeFile)
    {
        $jade = new Pug();
        $actual = str_replace(array("\r", "\n", "\t"), '', preg_replace('`^\s+`', '', $jade->render($jadeFile)));
        $expected = str_replace(array("\r", "\n", "\t"), '', preg_replace('`^\s+`', '', file_get_contents($htmlFile)));

        $this->assertSame($expected, $actual, $jadeFile . ' should match ' . $htmlFile);
    }
}
