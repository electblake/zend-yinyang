<?php
/**
 * Unit test for the Validate Url class.
 *
 * @category    YinYang
 * @package     YinYang_Validate_Url
 * @subpackage  UnitTest
 * @since       Monday, 06 June 2011
 * @version     $Id$
 */
class YinYang_Validate_Url_Test extends PHPUnit_Framework_TestCase
{
    /**
     * This test instatiates a YinYang_Validate_Url instance
     * and runs the tests from the data provider below.
     *
     * @dataProvider provider
     */
    public function testYinYangValidateUrl($value, $success = true)
    {
        $obj = new YinYang_Validate_Url();

        if (true === $success) {
            $this->assertTrue($obj->isValid($value));
        } else {
            $this->assertFalse($obj->isValid($value));
        }
    }

    /**
     * This is the data provider for the above Unit-test.
     */
    public function provider()
    {
        return array(
            array('http://www.google.com', true),
            array('https://www.google.com', true),
            array('ftp://uploads.google.com', true),
            array('shttp://www.google.com', false),
            array('sftp://uploads.google.com', false),
            array('http://hello.com', false),
        );
    }
}