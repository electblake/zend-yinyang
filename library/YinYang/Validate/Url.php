<?php
/**
 * Url validator.
 *
 * @category    YinYang
 * @package     YinYang_Validate
 * @subpackage  Url
 * @copyright   Copyright (c) 2011 YinYang Library (http://code.google.com/p/yinyang/)
 * @license     http://www.opensource.org/licenses/bsd-license.php
 * @version     $Id$
 * @since       Monday, 06 June 2011
 */

/**
 * Url validator that validates against the schemes in
 * the $_schemes member variable.
 *
 * @category    YinYang
 * @package     YinYang_Validate
 * @subpackage  Url
 * @copyright   Copyright (c) 2011 YinYang Library (http://code.google.com/p/yinyang/)
 * @license     http://www.opensource.org/licenses/bsd-license.php
*/
class YinYang_Validate_Url extends Zend_Validate_Abstract
{
    protected $_schemes = array('http', 'https', 'ftp');

    /**
     * Default error message handle.
     *
     * @var string
     */
    const INVALID = 'invalid';

    /**
     * Array of error messages.
     *
     * @var string
     */
    protected $_messageTemplates = array(
        self::INVALID => "'%value%' does not appear to be a valid url"
    );

    /**
     * Checks if $value is valid based on whether it's symantically
     * correct and starts with a valid scheme, i.e. http, https or ftp.
     *
     * This should really be improved to check if the hostname
     * resolves etc. For backward compatibility, however, default behaviour
     * should always be to simply check if the url is symantically correct.
     *
     * @param   string  $value
     */
    public function isValid($value)
    {
        $this->_setValue($value);

        $uri            = explode(':', $this->value, 2);
        $scheme         = strtolower($uri[0]);

        if (in_array($scheme, $this->_schemes)) {

            return true;
        }

        $this->_error(self::INVALID);
        return false;
    }
}