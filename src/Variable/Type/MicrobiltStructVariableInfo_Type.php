<?php

namespace Zakriyarahman\Microbilt\Variable\Type;

/**
 * File for class MicrobiltStructVariableInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructVariableInfo_Type originally named VariableInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructVariableInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The Node
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Node;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Name;
    /**
     * The VariableValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VariableValue;
    /**
     * Constructor method for VariableInfo_Type
     * @see parent::__construct()
     * @param string $_node
     * @param string $_name
     * @param string $_variableValue
     * @return MicrobiltStructVariableInfo_Type
     */
    public function __construct($_node = NULL,$_name = NULL,$_variableValue = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Node'=>$_node,'Name'=>$_name,'VariableValue'=>$_variableValue),false);
    }
    /**
     * Get Node value
     * @return string|null
     */
    public function getNode()
    {
        return $this->Node;
    }
    /**
     * Set Node value
     * @param string $_node the Node
     * @return string
     */
    public function setNode($_node)
    {
        return ($this->Node = $_node);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get VariableValue value
     * @return string|null
     */
    public function getVariableValue()
    {
        return $this->VariableValue;
    }
    /**
     * Set VariableValue value
     * @param string $_variableValue the VariableValue
     * @return string
     */
    public function setVariableValue($_variableValue)
    {
        return ($this->VariableValue = $_variableValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructVariableInfo_Type
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
