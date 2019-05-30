<?php

namespace Zakriyarahman\Microbilt\Transform\Response;

/**
 * File for class MicrobiltStructTransformResponse
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructTransformResponse originally named TransformResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd0}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructTransformResponse extends MicrobiltWsdlClass
{
    /**
     * The TransformResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TransformResult;
    /**
     * Constructor method for TransformResponse
     * @see parent::__construct()
     * @param string $_transformResult
     * @return MicrobiltStructTransformResponse
     */
    public function __construct($_transformResult = NULL)
    {
        parent::__construct(array('TransformResult'=>$_transformResult),false);
    }
    /**
     * Get TransformResult value
     * @return string|null
     */
    public function getTransformResult()
    {
        return $this->TransformResult;
    }
    /**
     * Set TransformResult value
     * @param string $_transformResult the TransformResult
     * @return string
     */
    public function setTransformResult($_transformResult)
    {
        return ($this->TransformResult = $_transformResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructTransformResponse
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
