<?php

namespace Zakriyarahman\Microbilt\Commercial\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class CommercialPmtTotals_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CommercialPmtTotals_Type originally named CommercialPmtTotals_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CommercialPmtTotals_Type extends Aggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The TotalTrades
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalTrades;
    /**
     * The BusinessDBT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusinessDBT;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var CommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for CommercialPmtTotals_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param int $_totalTrades
     * @param string $_businessDBT
     * @param CommercialAmounts_Type $_commercialAmounts
     * @param Message_Type $_message
     * @return CommercialPmtTotals_Type
     */
    public function __construct($_msgClass = NULL,$_totalTrades = NULL,$_businessDBT = NULL,$_commercialAmounts = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'TotalTrades'=>$_totalTrades,'BusinessDBT'=>$_businessDBT,'CommercialAmounts'=>$_commercialAmounts,'Message'=>$_message),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get TotalTrades value
     * @return int|null
     */
    public function getTotalTrades()
    {
        return $this->TotalTrades;
    }
    /**
     * Set TotalTrades value
     * @param int $_totalTrades the TotalTrades
     * @return int
     */
    public function setTotalTrades($_totalTrades)
    {
        return ($this->TotalTrades = $_totalTrades);
    }
    /**
     * Get BusinessDBT value
     * @return string|null
     */
    public function getBusinessDBT()
    {
        return $this->BusinessDBT;
    }
    /**
     * Set BusinessDBT value
     * @param string $_businessDBT the BusinessDBT
     * @return string
     */
    public function setBusinessDBT($_businessDBT)
    {
        return ($this->BusinessDBT = $_businessDBT);
    }
    /**
     * Get CommercialAmounts value
     * @return CommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param CommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return CommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
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
     * @return CommercialPmtTotals_Type
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
