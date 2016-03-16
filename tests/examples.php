<?php

use Jade\Jade;

class ExamplesTest extends \PHPUnit_Framework_TestCase {

    public function caseProvider() {

        $cases = array();

        $examples = __DIR__ . '/../examples';
        foreach (scandir($examples) as $file) {
            if (substr($file, -5) === '.jade') {
                $cases[] = array($examples . '/' . substr($file, 0, -5) . '.html', $examples . '/' . $file);
            }
        }

        return $cases;
    }

    /**
     * @dataProvider caseProvider
     */
    public function testJadeGeneration($htmlFile, $jadeFile) {

        $jade = new Jade();
        $actual = str_replace(array("\r", "\n", "\t"), '', preg_replace('`^\s+`', '', $jade->render($jadeFile)));
        $expected = str_replace(array("\r", "\n", "\t"), '', preg_replace('`^\s+`', '', file_get_contents($htmlFile)));

        $this->assertSame($expected, $actual, $jadeFile . ' should match ' . $htmlFile);
    }
}
