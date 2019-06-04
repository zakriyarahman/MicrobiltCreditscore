<?php

namespace Zakriyarahman\Microbilt\Business\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class BusinessSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for BusinessSummary_Type originally named BusinessSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class BusinessSummary_Type extends Aggregate
{
    /**
     * The RiskCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CodeDescription_Type
     */
    public $RiskCategory;
    /**
     * The NumTradeLines
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumTradeLines;
    /**
     * The NumEmployees
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumEmployees;
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Option_Type
     */
    public $Option;
    /**
     * The FilingStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingStatus;
    /**
     * The IncorporationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IncorporationDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for BusinessSummary_Type
     * @see parent::__construct()
     * @param CodeDescription_Type $_riskCategory
     * @param int $_numTradeLines
     * @param int $_numEmployees
     * @param Option_Type $_option
     * @param string $_filingStatus
     * @param string $_incorporationDt
     * @param Message_Type $_message
     * @return BusinessSummary_Type
     */
    public function __construct($_riskCategory = NULL,$_numTradeLines = NULL,$_numEmployees = NULL,$_option = NULL,$_filingStatus = NULL,$_incorporationDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('RiskCategory'=>$_riskCategory,'NumTradeLines'=>$_numTradeLines,'NumEmployees'=>$_numEmployees,'Option'=>$_option,'FilingStatus'=>$_filingStatus,'IncorporationDt'=>$_incorporationDt,'Message'=>$_message),false);
    }
    /**
     * Get RiskCategory value
     * @return CodeDescription_Type|null
     */
    public function getRiskCategory()
    {
        return $this->RiskCategory;
    }
    /**
     * Set RiskCategory value
     * @param CodeDescription_Type $_riskCategory the RiskCategory
     * @return CodeDescription_Type
     */
    public function setRiskCategory($_riskCategory)
    {
        return ($this->RiskCategory = $_riskCategory);
    }
    /**
     * Get NumTradeLines value
     * @return int|null
     */
    public function getNumTradeLines()
    {
        return $this->NumTradeLines;
    }
    /**
     * Set NumTradeLines value
     * @param int $_numTradeLines the NumTradeLines
     * @return int
     */
    public function setNumTradeLines($_numTradeLines)
    {
        return ($this->NumTradeLines = $_numTradeLines);
    }
    /**
     * Get NumEmployees value
     * @return int|null
     */
    public function getNumEmployees()
    {
        return $this->NumEmployees;
    }
    /**
     * Set NumEmployees value
     * @param int $_numEmployees the NumEmployees
     * @return int
     */
    public function setNumEmployees($_numEmployees)
    {
        return ($this->NumEmployees = $_numEmployees);
    }
    /**
     * Get Option value
     * @return Option_Type|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @param Option_Type $_option the Option
     * @return Option_Type
     */
    public function setOption($_option)
    {
        return ($this->Option = $_option);
    }
    /**
     * Get FilingStatus value
     * @return string|null
     */
    public function getFilingStatus()
    {
        return $this->FilingStatus;
    }
    /**
     * Set FilingStatus value
     * @param string $_filingStatus the FilingStatus
     * @return string
     */
    public function setFilingStatus($_filingStatus)
    {
        return ($this->FilingStatus = $_filingStatus);
    }
    /**
     * Get IncorporationDt value
     * @return string|null
     */
    public function getIncorporationDt()
    {
        return $this->IncorporationDt;
    }
    /**
     * Set IncorporationDt value
     * @param string $_incorporationDt the IncorporationDt
     * @return string
     */
    public function setIncorporationDt($_incorporationDt)
    {
        return ($this->IncorporationDt = $_incorporationDt);
    }
    /**
     * Get Message value
     * @return Message_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param Message_Type $_message the Message
     * @return Message_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return BusinessSummary_Type
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
