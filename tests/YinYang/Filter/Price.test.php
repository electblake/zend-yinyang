<?php

/**
 * Unit test for the YinYang_Filter_Price class.
 *
 * @category    YinYang
 * @package     YinYang_Filter_Price
 * @subpackage  UnitTest
 * @since       Saturday, 28 January 2012
 * @version     $Id$
 */
class YinYang_Filter_PriceTest extends PHPUnit_Framework_TestCase
{
    /**
     * This test ensures that the value is correctly filtered.
     *
     * @dataProvider provider
     */
    public function testPrice($value, $expected)
    {
        $filter = new YinYang_Filter_Price();
        $this->assertInstanceOf('YinYang_Filter_Price', $filter);

        $this->assertEquals($expected, $filter->filter($value));
    }

    /**
     * This is a data provider for the above Unit-test.
     */
    public function provider()
    {
        return array(
            array('£3.99', '3.99'),
            array('$2.99 USD', '2.99'),
            array('€4,999,999.00', '4999999.00'),
        );
    }
}