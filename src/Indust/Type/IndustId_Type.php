<?php

namespace Zakriyarahman\Microbilt\Indust\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class IndustId_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for IndustId_Type originally named IndustId_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class IndustId_Type extends MicrobiltWsdlClass
{
    /**
     * The Org
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Org;
    /**
     * The IndustNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IndustNum;
    /**
     * The IndustType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodeDescription_Type
     */
    public $IndustType;
    /**
     * Constructor method for IndustId_Type
     * @see parent::__construct()
     * @param string $_org
     * @param string $_industNum
     * @param CodeDescription_Type $_industType
     * @return IndustId_Type
     */
    public function __construct($_org = NULL,$_industNum = NULL,$_industType = NULL)
    {
        parent::__construct(array('Org'=>$_org,'IndustNum'=>$_industNum,'IndustType'=>$_industType),false);
    }
    /**
     * Get Org value
     * @return string|null
     */
    public function getOrg()
    {
        return $this->Org;
    }
    /**
     * Set Org value
     * @param string $_org the Org
     * @return string
     */
    public function setOrg($_org)
    {
        return ($this->Org = $_org);
    }
    /**
     * Get IndustNum value
     * @return string|null
     */
    public function getIndustNum()
    {
        return $this->IndustNum;
    }
    /**
     * Set IndustNum value
     * @param string $_industNum the IndustNum
     * @return string
     */
    public function setIndustNum($_industNum)
    {
        return ($this->IndustNum = $_industNum);
    }
    /**
     * Get IndustType value
     * @return CodeDescription_Type|null
     */
    public function getIndustType()
    {
        return $this->IndustType;
    }
    /**
     * Set IndustType value
     * @param CodeDescription_Type $_industType the IndustType
     * @return CodeDescription_Type
     */
    public function setIndustType($_industType)
    {
        return ($this->IndustType = $_industType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return IndustId_Type
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
