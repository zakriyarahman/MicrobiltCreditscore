<?php

namespace Zakriyarahman\Microbilt\Ineligibility\Type;

/**
 * File for class MicrobiltStructIneligibility_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructIneligibility_Type originally named Ineligibility_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructIneligibility_Type extends MicrobiltStructAggregate
{
    /**
     * The Grounds
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Grounds;
    /**
     * The DateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructDateRange_Type
     */
    public $DateRange;
    /**
     * Constructor method for Ineligibility_Type
     * @see parent::__construct()
     * @param string $_grounds
     * @param MicrobiltStructDateRange_Type $_dateRange
     * @return MicrobiltStructIneligibility_Type
     */
    public function __construct($_grounds = NULL,$_dateRange = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Grounds'=>$_grounds,'DateRange'=>$_dateRange),false);
    }
    /**
     * Get Grounds value
     * @return string|null
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }
    /**
     * Set Grounds value
     * @param string $_grounds the Grounds
     * @return string
     */
    public function setGrounds($_grounds)
    {
        return ($this->Grounds = $_grounds);
    }
    /**
     * Get DateRange value
     * @return MicrobiltStructDateRange_Type|null
     */
    public function getDateRange()
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param MicrobiltStructDateRange_Type $_dateRange the DateRange
     * @return MicrobiltStructDateRange_Type
     */
    public function setDateRange($_dateRange)
    {
        return ($this->DateRange = $_dateRange);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructIneligibility_Type
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
