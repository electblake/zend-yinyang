<?php
/**
 * Unit test for the YinYang_Filter_SentenceLength class.
 *
 * @category    YinYang
 * @package     YinYang_View_Helper_SentenceLength
 * @subpackage  UnitTest
 * @since       Monday, 06 June 2011
 * @version     $Id$
 */
class YinYang_View_Helper_SentenceLength_Test extends PHPUnit_Framework_TestCase
{
    /**
     * This is a test for the sentence length view helper that
     * extends the sentence length filter unit test.
     *
     * @dataProvider provider
     */
    public function testYinYangViewHelperSentenceLength($value, $result, $maxLength)
    {
        $obj = new YinYang_View_Helper_SentenceLength();

        $this->assertSame($result, $obj->sentenceLength($value, $maxLength));
    }

    /**
     * This is the data provider for the above Unit-test.
     */
    public function provider()
    {
        return array(
            array('One Two Three Four Five Six Seven Eight',
                'One Two Three Four Five Six Seven Eight', 128),
            array('One, two three, four five',
                'One, two three, four', 20),
            array('One two three four five',
                'One two three four', 20),
            array('One two, three three2, five',
                'One two, three three2, five', 27),
            // Google meta title test
            array(
                'Remarks on the Quantum-Gravity effects of "Bean ' .
                'Pole" diversification in Mononucleosis patients in Developing ' .
                'Countries under Economic Conditions Prevalent during ' .
                'the Second half of the Twentieth Century, and Related Papers: ' .
                'a Summary',
                'Remarks on the Quantum-Gravity effects of "Bean Pole" diversification',
                70
            ),
        );
    }
}