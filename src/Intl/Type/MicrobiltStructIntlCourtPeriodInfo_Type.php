<?php

namespace Zakriyarahman\Microbilt\Intl\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructIntlCourtPeriodInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructIntlCourtPeriodInfo_Type originally named IntlCourtPeriodInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructIntlCourtPeriodInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Months;
    /**
     * The IntlCourtDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IntlCourtDt;
    /**
     * Constructor method for IntlCourtPeriodInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param int $_months
     * @param string $_intlCourtDt
     * @return MicrobiltStructIntlCourtPeriodInfo_Type
     */
    public function __construct($_msgClass = NULL,$_months = NULL,$_intlCourtDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'Months'=>$_months,'IntlCourtDt'=>$_intlCourtDt),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get Months value
     * @return int|null
     */
    public function getMonths()
    {
        return $this->Months;
    }
    /**
     * Set Months value
     * @param int $_months the Months
     * @return int
     */
    public function setMonths($_months)
    {
        return ($this->Months = $_months);
    }
    /**
     * Get IntlCourtDt value
     * @return string|null
     */
    public function getIntlCourtDt()
    {
        return $this->IntlCourtDt;
    }
    /**
     * Set IntlCourtDt value
     * @param string $_intlCourtDt the IntlCourtDt
     * @return string
     */
    public function setIntlCourtDt($_intlCourtDt)
    {
        return ($this->IntlCourtDt = $_intlCourtDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructIntlCourtPeriodInfo_Type
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
