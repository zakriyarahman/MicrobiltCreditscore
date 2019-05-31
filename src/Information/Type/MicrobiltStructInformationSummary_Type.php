<?php

namespace Zakriyarahman\Microbilt\Information\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructInformationSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructInformationSummary_Type originally named InformationSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructInformationSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The InformationDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructInformationDetail_Type
     */
    public $InformationDetail;
    /**
     * Constructor method for InformationSummary_Type
     * @see parent::__construct()
     * @param MicrobiltStructInformationDetail_Type $_informationDetail
     * @return MicrobiltStructInformationSummary_Type
     */
    public function __construct($_informationDetail = NULL)
    {
        MicrobiltWsdlClass::__construct(array('InformationDetail'=>$_informationDetail),false);
    }
    /**
     * Get InformationDetail value
     * @return MicrobiltStructInformationDetail_Type|null
     */
    public function getInformationDetail()
    {
        return $this->InformationDetail;
    }
    /**
     * Set InformationDetail value
     * @param MicrobiltStructInformationDetail_Type $_informationDetail the InformationDetail
     * @return MicrobiltStructInformationDetail_Type
     */
    public function setInformationDetail($_informationDetail)
    {
        return ($this->InformationDetail = $_informationDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructInformationSummary_Type
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
