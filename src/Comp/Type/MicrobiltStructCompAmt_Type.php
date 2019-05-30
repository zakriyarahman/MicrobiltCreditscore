<?php

namespace Zakriyarahman\Microbilt\Comp\Type;

/**
 * File for class MicrobiltStructCompAmt_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCompAmt_Type originally named CompAmt_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCompAmt_Type extends MicrobiltWsdlClass
{
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $TotalAmt;
    /**
     * The InstAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $InstAmt;
    /**
     * The RevAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $RevAmt;
    /**
     * The ClosedWithBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ClosedWithBalAmt;
    /**
     * The AvailableAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $AvailableAmt;
    /**
     * The CurrentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $CurrentAmt;
    /**
     * Constructor method for CompAmt_Type
     * @see parent::__construct()
     * @param MicrobiltStructCurrencyAmount $_totalAmt
     * @param MicrobiltStructCurrencyAmount $_instAmt
     * @param MicrobiltStructCurrencyAmount $_revAmt
     * @param MicrobiltStructCurrencyAmount $_closedWithBalAmt
     * @param MicrobiltStructCurrencyAmount $_availableAmt
     * @param MicrobiltStructCurrencyAmount $_currentAmt
     * @return MicrobiltStructCompAmt_Type
     */
    public function __construct($_totalAmt = NULL,$_instAmt = NULL,$_revAmt = NULL,$_closedWithBalAmt = NULL,$_availableAmt = NULL,$_currentAmt = NULL)
    {
        parent::__construct(array('TotalAmt'=>$_totalAmt,'InstAmt'=>$_instAmt,'RevAmt'=>$_revAmt,'ClosedWithBalAmt'=>$_closedWithBalAmt,'AvailableAmt'=>$_availableAmt,'CurrentAmt'=>$_currentAmt),false);
    }
    /**
     * Get TotalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }
    /**
     * Set TotalAmt value
     * @param MicrobiltStructCurrencyAmount $_totalAmt the TotalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setTotalAmt($_totalAmt)
    {
        return ($this->TotalAmt = $_totalAmt);
    }
    /**
     * Get InstAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getInstAmt()
    {
        return $this->InstAmt;
    }
    /**
     * Set InstAmt value
     * @param MicrobiltStructCurrencyAmount $_instAmt the InstAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setInstAmt($_instAmt)
    {
        return ($this->InstAmt = $_instAmt);
    }
    /**
     * Get RevAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getRevAmt()
    {
        return $this->RevAmt;
    }
    /**
     * Set RevAmt value
     * @param MicrobiltStructCurrencyAmount $_revAmt the RevAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setRevAmt($_revAmt)
    {
        return ($this->RevAmt = $_revAmt);
    }
    /**
     * Get ClosedWithBalAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getClosedWithBalAmt()
    {
        return $this->ClosedWithBalAmt;
    }
    /**
     * Set ClosedWithBalAmt value
     * @param MicrobiltStructCurrencyAmount $_closedWithBalAmt the ClosedWithBalAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setClosedWithBalAmt($_closedWithBalAmt)
    {
        return ($this->ClosedWithBalAmt = $_closedWithBalAmt);
    }
    /**
     * Get AvailableAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getAvailableAmt()
    {
        return $this->AvailableAmt;
    }
    /**
     * Set AvailableAmt value
     * @param MicrobiltStructCurrencyAmount $_availableAmt the AvailableAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setAvailableAmt($_availableAmt)
    {
        return ($this->AvailableAmt = $_availableAmt);
    }
    /**
     * Get CurrentAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getCurrentAmt()
    {
        return $this->CurrentAmt;
    }
    /**
     * Set CurrentAmt value
     * @param MicrobiltStructCurrencyAmount $_currentAmt the CurrentAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setCurrentAmt($_currentAmt)
    {
        return ($this->CurrentAmt = $_currentAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCompAmt_Type
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
