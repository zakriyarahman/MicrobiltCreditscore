<?php

namespace Zakriyarahman\Microbilt\Amt\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class AmtItems_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for AmtItems_Type originally named AmtItems_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class AmtItems_Type extends Aggregate
{
    /**
     * The PeriodIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $PeriodIndicator;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Format;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Priority;
    /**
     * The ElementAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $ElementAmt;
    /**
     * The PercentageRatio
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $PercentageRatio;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for AmtItems_Type
     * @see parent::__construct()
     * @param int $_periodIndicator
     * @param string $_format
     * @param string $_priority
     * @param CurrencyAmount $_elementAmt
     * @param float $_percentageRatio
     * @param Message_Type $_message
     * @return AmtItems_Type
     */
    public function __construct($_periodIndicator,$_format = NULL,$_priority = NULL,$_elementAmt = NULL,$_percentageRatio = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PeriodIndicator'=>$_periodIndicator,'Format'=>$_format,'Priority'=>$_priority,'ElementAmt'=>$_elementAmt,'PercentageRatio'=>$_percentageRatio,'Message'=>$_message),false);
    }
    /**
     * Get PeriodIndicator value
     * @return int
     */
    public function getPeriodIndicator()
    {
        return $this->PeriodIndicator;
    }
    /**
     * Set PeriodIndicator value
     * @param int $_periodIndicator the PeriodIndicator
     * @return int
     */
    public function setPeriodIndicator($_periodIndicator)
    {
        return ($this->PeriodIndicator = $_periodIndicator);
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param string $_format the Format
     * @return string
     */
    public function setFormat($_format)
    {
        return ($this->Format = $_format);
    }
    /**
     * Get Priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param string $_priority the Priority
     * @return string
     */
    public function setPriority($_priority)
    {
        return ($this->Priority = $_priority);
    }
    /**
     * Get ElementAmt value
     * @return CurrencyAmount|null
     */
    public function getElementAmt()
    {
        return $this->ElementAmt;
    }
    /**
     * Set ElementAmt value
     * @param CurrencyAmount $_elementAmt the ElementAmt
     * @return CurrencyAmount
     */
    public function setElementAmt($_elementAmt)
    {
        return ($this->ElementAmt = $_elementAmt);
    }
    /**
     * Get PercentageRatio value
     * @return float|null
     */
    public function getPercentageRatio()
    {
        return $this->PercentageRatio;
    }
    /**
     * Set PercentageRatio value
     * @param float $_percentageRatio the PercentageRatio
     * @return float
     */
    public function setPercentageRatio($_percentageRatio)
    {
        return ($this->PercentageRatio = $_percentageRatio);
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
     * @return AmtItems_Type
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
