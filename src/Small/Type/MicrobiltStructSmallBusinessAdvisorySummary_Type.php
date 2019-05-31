<?php

namespace Zakriyarahman\Microbilt\Small\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructSmallBusinessAdvisorySummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSmallBusinessAdvisorySummary_Type originally named SmallBusinessAdvisorySummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSmallBusinessAdvisorySummary_Type extends MicrobiltStructAggregate
{
    /**
     * The BirthDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BirthDt;
    /**
     * The DwellingStructureType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DwellingStructureType;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructScore_Type
     */
    public $Score;
    /**
     * Constructor method for SmallBusinessAdvisorySummary_Type
     * @see parent::__construct()
     * @param string $_birthDt
     * @param string $_dwellingStructureType
     * @param MicrobiltStructScore_Type $_score
     * @return MicrobiltStructSmallBusinessAdvisorySummary_Type
     */
    public function __construct($_birthDt = NULL,$_dwellingStructureType = NULL,$_score = NULL)
    {
        MicrobiltWsdlClass::__construct(array('BirthDt'=>$_birthDt,'DwellingStructureType'=>$_dwellingStructureType,'Score'=>$_score),false);
    }
    /**
     * Get BirthDt value
     * @return string|null
     */
    public function getBirthDt()
    {
        return $this->BirthDt;
    }
    /**
     * Set BirthDt value
     * @param string $_birthDt the BirthDt
     * @return string
     */
    public function setBirthDt($_birthDt)
    {
        return ($this->BirthDt = $_birthDt);
    }
    /**
     * Get DwellingStructureType value
     * @return string|null
     */
    public function getDwellingStructureType()
    {
        return $this->DwellingStructureType;
    }
    /**
     * Set DwellingStructureType value
     * @param string $_dwellingStructureType the DwellingStructureType
     * @return string
     */
    public function setDwellingStructureType($_dwellingStructureType)
    {
        return ($this->DwellingStructureType = $_dwellingStructureType);
    }
    /**
     * Get Score value
     * @return MicrobiltStructScore_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param MicrobiltStructScore_Type $_score the Score
     * @return MicrobiltStructScore_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructSmallBusinessAdvisorySummary_Type
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
