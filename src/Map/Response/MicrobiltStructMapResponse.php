<?php

namespace Zakriyarahman\Microbilt\Map\Response;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructMapResponse
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructMapResponse originally named MapResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd0}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructMapResponse extends MicrobiltWsdlClass
{
    /**
     * The MapResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructExStdRs_Type
     */
    public $MapResult;
    /**
     * Constructor method for MapResponse
     * @see parent::__construct()
     * @param MicrobiltStructExStdRs_Type $_mapResult
     * @return MicrobiltStructMapResponse
     */
    public function __construct($_mapResult = NULL)
    {
        parent::__construct(array('MapResult'=>$_mapResult),false);
    }
    /**
     * Get MapResult value
     * @return MicrobiltStructExStdRs_Type|null
     */
    public function getMapResult()
    {
        return $this->MapResult;
    }
    /**
     * Set MapResult value
     * @param MicrobiltStructExStdRs_Type $_mapResult the MapResult
     * @return MicrobiltStructExStdRs_Type
     */
    public function setMapResult($_mapResult)
    {
        return ($this->MapResult = $_mapResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructMapResponse
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
