<?php

namespace Zakriyarahman\Microbilt\Charter\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class CharterInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CharterInfo_Type originally named CharterInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CharterInfo_Type extends Aggregate
{
    /**
     * The CharterNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CharterNum;
    /**
     * The CharterTermYears
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CharterTermYears;
    /**
     * The CharterTermDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CharterTermDt;
    /**
     * Constructor method for CharterInfo_Type
     * @see parent::__construct()
     * @param string $_charterNum
     * @param int $_charterTermYears
     * @param string $_charterTermDt
     * @return CharterInfo_Type
     */
    public function __construct($_charterNum = NULL,$_charterTermYears = NULL,$_charterTermDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CharterNum'=>$_charterNum,'CharterTermYears'=>$_charterTermYears,'CharterTermDt'=>$_charterTermDt),false);
    }
    /**
     * Get CharterNum value
     * @return string|null
     */
    public function getCharterNum()
    {
        return $this->CharterNum;
    }
    /**
     * Set CharterNum value
     * @param string $_charterNum the CharterNum
     * @return string
     */
    public function setCharterNum($_charterNum)
    {
        return ($this->CharterNum = $_charterNum);
    }
    /**
     * Get CharterTermYears value
     * @return int|null
     */
    public function getCharterTermYears()
    {
        return $this->CharterTermYears;
    }
    /**
     * Set CharterTermYears value
     * @param int $_charterTermYears the CharterTermYears
     * @return int
     */
    public function setCharterTermYears($_charterTermYears)
    {
        return ($this->CharterTermYears = $_charterTermYears);
    }
    /**
     * Get CharterTermDt value
     * @return string|null
     */
    public function getCharterTermDt()
    {
        return $this->CharterTermDt;
    }
    /**
     * Set CharterTermDt value
     * @param string $_charterTermDt the CharterTermDt
     * @return string
     */
    public function setCharterTermDt($_charterTermDt)
    {
        return ($this->CharterTermDt = $_charterTermDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CharterInfo_Type
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
