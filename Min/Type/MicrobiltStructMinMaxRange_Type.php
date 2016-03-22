<?php
/**
 * File for class MicrobiltStructMinMaxRange_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructMinMaxRange_Type originally named MinMaxRange_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructMinMaxRange_Type extends MicrobiltStructAggregate
{
    /**
     * The MinRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $MinRange;
    /**
     * The MaxRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $MaxRange;
    /**
     * Constructor method for MinMaxRange_Type
     * @see parent::__construct()
     * @param long $_minRange
     * @param long $_maxRange
     * @return MicrobiltStructMinMaxRange_Type
     */
    public function __construct($_minRange,$_maxRange)
    {
        MicrobiltWsdlClass::__construct(array('MinRange'=>$_minRange,'MaxRange'=>$_maxRange),false);
    }
    /**
     * Get MinRange value
     * @return long
     */
    public function getMinRange()
    {
        return $this->MinRange;
    }
    /**
     * Set MinRange value
     * @param long $_minRange the MinRange
     * @return long
     */
    public function setMinRange($_minRange)
    {
        return ($this->MinRange = $_minRange);
    }
    /**
     * Get MaxRange value
     * @return long
     */
    public function getMaxRange()
    {
        return $this->MaxRange;
    }
    /**
     * Set MaxRange value
     * @param long $_maxRange the MaxRange
     * @return long
     */
    public function setMaxRange($_maxRange)
    {
        return ($this->MaxRange = $_maxRange);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructMinMaxRange_Type
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
