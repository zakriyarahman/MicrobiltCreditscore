<?php

namespace Zakriyarahman\Microbilt\Original\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructOriginalUCCInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOriginalUCCInfo_Type originally named OriginalUCCInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOriginalUCCInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The PRStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PRStatus;
    /**
     * The FilingState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingState;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The FileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileDt;
    /**
     * The LegalActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $LegalActionCode;
    /**
     * Constructor method for OriginalUCCInfo_Type
     * @see parent::__construct()
     * @param string $_pRStatus
     * @param string $_filingState
     * @param string $_documentNumber
     * @param string $_fileDt
     * @param MicrobiltStructCodeDescription_Type $_legalActionCode
     * @return MicrobiltStructOriginalUCCInfo_Type
     */
    public function __construct($_pRStatus = NULL,$_filingState = NULL,$_documentNumber = NULL,$_fileDt = NULL,$_legalActionCode = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PRStatus'=>$_pRStatus,'FilingState'=>$_filingState,'DocumentNumber'=>$_documentNumber,'FileDt'=>$_fileDt,'LegalActionCode'=>$_legalActionCode),false);
    }
    /**
     * Get PRStatus value
     * @return string|null
     */
    public function getPRStatus()
    {
        return $this->PRStatus;
    }
    /**
     * Set PRStatus value
     * @param string $_pRStatus the PRStatus
     * @return string
     */
    public function setPRStatus($_pRStatus)
    {
        return ($this->PRStatus = $_pRStatus);
    }
    /**
     * Get FilingState value
     * @return string|null
     */
    public function getFilingState()
    {
        return $this->FilingState;
    }
    /**
     * Set FilingState value
     * @param string $_filingState the FilingState
     * @return string
     */
    public function setFilingState($_filingState)
    {
        return ($this->FilingState = $_filingState);
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $_documentNumber the DocumentNumber
     * @return string
     */
    public function setDocumentNumber($_documentNumber)
    {
        return ($this->DocumentNumber = $_documentNumber);
    }
    /**
     * Get FileDt value
     * @return string|null
     */
    public function getFileDt()
    {
        return $this->FileDt;
    }
    /**
     * Set FileDt value
     * @param string $_fileDt the FileDt
     * @return string
     */
    public function setFileDt($_fileDt)
    {
        return ($this->FileDt = $_fileDt);
    }
    /**
     * Get LegalActionCode value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getLegalActionCode()
    {
        return $this->LegalActionCode;
    }
    /**
     * Set LegalActionCode value
     * @param MicrobiltStructCodeDescription_Type $_legalActionCode the LegalActionCode
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setLegalActionCode($_legalActionCode)
    {
        return ($this->LegalActionCode = $_legalActionCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOriginalUCCInfo_Type
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
