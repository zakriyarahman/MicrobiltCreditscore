<?php

namespace Zakriyarahman\Microbilt\Decision\Type;

/**
 * File for class MicrobiltStructDecisionInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDecisionInfo_Type originally named DecisionInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDecisionInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The ProductType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProductType;
    /**
     * The ProductInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $ProductInfo;
    /**
     * The Decision
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructDecision_Type
     */
    public $Decision;
    /**
     * The VariableInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructVariableInfo_Type
     */
    public $VariableInfo;
    /**
     * The PathInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPathInfo_Type
     */
    public $PathInfo;
    /**
     * Constructor method for DecisionInfo_Type
     * @see parent::__construct()
     * @param string $_productType
     * @param MicrobiltStructCodeDescription_Type $_productInfo
     * @param MicrobiltStructDecision_Type $_decision
     * @param MicrobiltStructVariableInfo_Type $_variableInfo
     * @param MicrobiltStructPathInfo_Type $_pathInfo
     * @return MicrobiltStructDecisionInfo_Type
     */
    public function __construct($_productType = NULL,$_productInfo = NULL,$_decision = NULL,$_variableInfo = NULL,$_pathInfo = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ProductType'=>$_productType,'ProductInfo'=>$_productInfo,'Decision'=>$_decision,'VariableInfo'=>$_variableInfo,'PathInfo'=>$_pathInfo),false);
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $_productType the ProductType
     * @return string
     */
    public function setProductType($_productType)
    {
        return ($this->ProductType = $_productType);
    }
    /**
     * Get ProductInfo value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getProductInfo()
    {
        return $this->ProductInfo;
    }
    /**
     * Set ProductInfo value
     * @param MicrobiltStructCodeDescription_Type $_productInfo the ProductInfo
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setProductInfo($_productInfo)
    {
        return ($this->ProductInfo = $_productInfo);
    }
    /**
     * Get Decision value
     * @return MicrobiltStructDecision_Type|null
     */
    public function getDecision()
    {
        return $this->Decision;
    }
    /**
     * Set Decision value
     * @param MicrobiltStructDecision_Type $_decision the Decision
     * @return MicrobiltStructDecision_Type
     */
    public function setDecision($_decision)
    {
        return ($this->Decision = $_decision);
    }
    /**
     * Get VariableInfo value
     * @return MicrobiltStructVariableInfo_Type|null
     */
    public function getVariableInfo()
    {
        return $this->VariableInfo;
    }
    /**
     * Set VariableInfo value
     * @param MicrobiltStructVariableInfo_Type $_variableInfo the VariableInfo
     * @return MicrobiltStructVariableInfo_Type
     */
    public function setVariableInfo($_variableInfo)
    {
        return ($this->VariableInfo = $_variableInfo);
    }
    /**
     * Get PathInfo value
     * @return MicrobiltStructPathInfo_Type|null
     */
    public function getPathInfo()
    {
        return $this->PathInfo;
    }
    /**
     * Set PathInfo value
     * @param MicrobiltStructPathInfo_Type $_pathInfo the PathInfo
     * @return MicrobiltStructPathInfo_Type
     */
    public function setPathInfo($_pathInfo)
    {
        return ($this->PathInfo = $_pathInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructDecisionInfo_Type
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
