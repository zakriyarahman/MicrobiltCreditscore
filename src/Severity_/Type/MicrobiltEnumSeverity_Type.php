<?php

namespace Zakriyarahman\Microbilt\Severity_\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltEnumSeverity_Type
 * @package Microbilt
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltEnumSeverity_Type originally named Severity_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltEnumSeverity_Type extends MicrobiltWsdlClass
{
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Warn'
     * @return string 'Warn'
     */
    const VALUE_WARN = 'Warn';
    /**
     * Constant for value 'Info'
     * @return string 'Info'
     */
    const VALUE_INFO = 'Info';
    /**
     * Return true if value is allowed
     * @uses MicrobiltEnumSeverity_Type::VALUE_ERROR
     * @uses MicrobiltEnumSeverity_Type::VALUE_WARN
     * @uses MicrobiltEnumSeverity_Type::VALUE_INFO
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(MicrobiltEnumSeverity_Type::VALUE_ERROR,MicrobiltEnumSeverity_Type::VALUE_WARN,MicrobiltEnumSeverity_Type::VALUE_INFO));
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
