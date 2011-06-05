<?php
/**
 * Unit test for the YinYang_Filter_SentenceLength class.
 *
 * @category    YinYang
 * @package     YinYang_Filter_SentenceLength
 * @subpackage  UnitTest
 * @since       Sunday, 05 June 2011
 * @version     $Id$
 */
class YinYang_Filter_SentenceLength_UnitTest extends PHPUnit_Framework_TestCase
{
    /**
     * This test instatiates a YinYang_Filter_Url_Slug instance
     * and runs the tests from the data provider below.
     *
     * @dataProvider provider
     */
    public function testYinYangFilterSentenceLength($value, $result, $maxLength)
    {
        $obj = new YinYang_Filter_SentenceLength($maxLength);

        $this->assertSame($result, $obj->filter($value));
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