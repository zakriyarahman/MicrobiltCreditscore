<?php

namespace Zakriyarahman\Microbilt\Comp\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class CompAmt_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CompAmt_Type originally named CompAmt_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CompAmt_Type extends MicrobiltWsdlClass
{
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $TotalAmt;
    /**
     * The InstAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $InstAmt;
    /**
     * The RevAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $RevAmt;
    /**
     * The ClosedWithBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $ClosedWithBalAmt;
    /**
     * The AvailableAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $AvailableAmt;
    /**
     * The CurrentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $CurrentAmt;
    /**
     * Constructor method for CompAmt_Type
     * @see parent::__construct()
     * @param CurrencyAmount $_totalAmt
     * @param CurrencyAmount $_instAmt
     * @param CurrencyAmount $_revAmt
     * @param CurrencyAmount $_closedWithBalAmt
     * @param CurrencyAmount $_availableAmt
     * @param CurrencyAmount $_currentAmt
     * @return CompAmt_Type
     */
    public function __construct($_totalAmt = NULL,$_instAmt = NULL,$_revAmt = NULL,$_closedWithBalAmt = NULL,$_availableAmt = NULL,$_currentAmt = NULL)
    {
        parent::__construct(array('TotalAmt'=>$_totalAmt,'InstAmt'=>$_instAmt,'RevAmt'=>$_revAmt,'ClosedWithBalAmt'=>$_closedWithBalAmt,'AvailableAmt'=>$_availableAmt,'CurrentAmt'=>$_currentAmt),false);
    }
    /**
     * Get TotalAmt value
     * @return CurrencyAmount|null
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }
    /**
     * Set TotalAmt value
     * @param CurrencyAmount $_totalAmt the TotalAmt
     * @return CurrencyAmount
     */
    public function setTotalAmt($_totalAmt)
    {
        return ($this->TotalAmt = $_totalAmt);
    }
    /**
     * Get InstAmt value
     * @return CurrencyAmount|null
     */
    public function getInstAmt()
    {
        return $this->InstAmt;
    }
    /**
     * Set InstAmt value
     * @param CurrencyAmount $_instAmt the InstAmt
     * @return CurrencyAmount
     */
    public function setInstAmt($_instAmt)
    {
        return ($this->InstAmt = $_instAmt);
    }
    /**
     * Get RevAmt value
     * @return CurrencyAmount|null
     */
    public function getRevAmt()
    {
        return $this->RevAmt;
    }
    /**
     * Set RevAmt value
     * @param CurrencyAmount $_revAmt the RevAmt
     * @return CurrencyAmount
     */
    public function setRevAmt($_revAmt)
    {
        return ($this->RevAmt = $_revAmt);
    }
    /**
     * Get ClosedWithBalAmt value
     * @return CurrencyAmount|null
     */
    public function getClosedWithBalAmt()
    {
        return $this->ClosedWithBalAmt;
    }
    /**
     * Set ClosedWithBalAmt value
     * @param CurrencyAmount $_closedWithBalAmt the ClosedWithBalAmt
     * @return CurrencyAmount
     */
    public function setClosedWithBalAmt($_closedWithBalAmt)
    {
        return ($this->ClosedWithBalAmt = $_closedWithBalAmt);
    }
    /**
     * Get AvailableAmt value
     * @return CurrencyAmount|null
     */
    public function getAvailableAmt()
    {
        return $this->AvailableAmt;
    }
    /**
     * Set AvailableAmt value
     * @param CurrencyAmount $_availableAmt the AvailableAmt
     * @return CurrencyAmount
     */
    public function setAvailableAmt($_availableAmt)
    {
        return ($this->AvailableAmt = $_availableAmt);
    }
    /**
     * Get CurrentAmt value
     * @return CurrencyAmount|null
     */
    public function getCurrentAmt()
    {
        return $this->CurrentAmt;
    }
    /**
     * Set CurrentAmt value
     * @param CurrencyAmount $_currentAmt the CurrentAmt
     * @return CurrencyAmount
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
     * @return CompAmt_Type
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
