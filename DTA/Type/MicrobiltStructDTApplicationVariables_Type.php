<?php
/**
 * File for class MicrobiltStructDTApplicationVariables_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDTApplicationVariables_Type originally named DTApplicationVariables_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDTApplicationVariables_Type extends MicrobiltStructAggregate
{
    /**
     * The AppVarID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AppVarID;
    /**
     * The AppVarValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AppVarValue;
    /**
     * Constructor method for DTApplicationVariables_Type
     * @see parent::__construct()
     * @param string $_appVarID
     * @param string $_appVarValue
     * @return MicrobiltStructDTApplicationVariables_Type
     */
    public function __construct($_appVarID = NULL,$_appVarValue = NULL)
    {
        MicrobiltWsdlClass::__construct(array('AppVarID'=>$_appVarID,'AppVarValue'=>$_appVarValue),false);
    }
    /**
     * Get AppVarID value
     * @return string|null
     */
    public function getAppVarID()
    {
        return $this->AppVarID;
    }
    /**
     * Set AppVarID value
     * @param string $_appVarID the AppVarID
     * @return string
     */
    public function setAppVarID($_appVarID)
    {
        return ($this->AppVarID = $_appVarID);
    }
    /**
     * Get AppVarValue value
     * @return string|null
     */
    public function getAppVarValue()
    {
        return $this->AppVarValue;
    }
    /**
     * Set AppVarValue value
     * @param string $_appVarValue the AppVarValue
     * @return string
     */
    public function setAppVarValue($_appVarValue)
    {
        return ($this->AppVarValue = $_appVarValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructDTApplicationVariables_Type
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
