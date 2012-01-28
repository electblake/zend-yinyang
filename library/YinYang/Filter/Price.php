<?php
/**
 * Filters a price to just return digits and a decimal point.
 *
 * @category    YinYang
 * @package     YinYang_Price
 * @subpackage  Keywords
 * @copyright   Copyright (c) 2011 YinYang Library (http://code.google.com/p/yinyang/)
 * @license     http://www.opensource.org/licenses/bsd-license.php
 * @version     $Id$
 * @since       Saturday 28 January 2012
 */

/**
 * Filters a price to just return digits and a decimal point.
 *
 * @category    YinYang
 * @package     YinYang_Price
 * @subpackage  Keywords
 * @copyright   Copyright (c) 2011 YinYang Library (http://code.google.com/p/yinyang/)
 * @license     http://www.opensource.org/licenses/bsd-license.php
 * @since       Saturday 28 January 2012
*/
class YinYang_Filter_Price extends Zend_Filter_PregReplace
{
    /**
     * Contains the regula expression pattern to match against.
     * @var string
     */
    protected $_matchPattern = '/[^0-9\.]+/';

    /**
     * Contains the replacement string. In this instance, single white space.
     * @var string
     */
    protected $_replacement = '';
}