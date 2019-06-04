<?php

namespace Zakriyarahman\Microbilt\Request\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class RequestType
 * @package Microbilt
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for RequestType originally named RequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class RequestType extends MicrobiltWsdlClass
{
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'J'
     * @return string 'J'
     */
    const VALUE_J = 'J';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Return true if value is allowed
     * @uses RequestType::VALUE_I
     * @uses RequestType::VALUE_J
     * @uses RequestType::VALUE_N
     * @uses RequestType::VALUE_A
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(RequestType::VALUE_I,RequestType::VALUE_J,RequestType::VALUE_N,RequestType::VALUE_A));
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
