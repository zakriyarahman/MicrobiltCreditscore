<?php

namespace Zakriyarahman\Microbilt\Trade\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class TradeReferenceSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for TradeReferenceSummary_Type originally named TradeReferenceSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class TradeReferenceSummary_Type extends Aggregate
{
    /**
     * The TradeReferenceDetailInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var TradeReferenceDetailInfo_Type
     */
    public $TradeReferenceDetailInfo;
    /**
     * The TradeReferenceElementInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var TradeReferenceElementInfo_Type
     */
    public $TradeReferenceElementInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for TradeReferenceSummary_Type
     * @see parent::__construct()
     * @param TradeReferenceDetailInfo_Type $_tradeReferenceDetailInfo
     * @param TradeReferenceElementInfo_Type $_tradeReferenceElementInfo
     * @param Message_Type $_message
     * @return TradeReferenceSummary_Type
     */
    public function __construct($_tradeReferenceDetailInfo = NULL,$_tradeReferenceElementInfo = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('TradeReferenceDetailInfo'=>$_tradeReferenceDetailInfo,'TradeReferenceElementInfo'=>$_tradeReferenceElementInfo,'Message'=>$_message),false);
    }
    /**
     * Get TradeReferenceDetailInfo value
     * @return TradeReferenceDetailInfo_Type|null
     */
    public function getTradeReferenceDetailInfo()
    {
        return $this->TradeReferenceDetailInfo;
    }
    /**
     * Set TradeReferenceDetailInfo value
     * @param TradeReferenceDetailInfo_Type $_tradeReferenceDetailInfo the TradeReferenceDetailInfo
     * @return TradeReferenceDetailInfo_Type
     */
    public function setTradeReferenceDetailInfo($_tradeReferenceDetailInfo)
    {
        return ($this->TradeReferenceDetailInfo = $_tradeReferenceDetailInfo);
    }
    /**
     * Get TradeReferenceElementInfo value
     * @return TradeReferenceElementInfo_Type|null
     */
    public function getTradeReferenceElementInfo()
    {
        return $this->TradeReferenceElementInfo;
    }
    /**
     * Set TradeReferenceElementInfo value
     * @param TradeReferenceElementInfo_Type $_tradeReferenceElementInfo the TradeReferenceElementInfo
     * @return TradeReferenceElementInfo_Type
     */
    public function setTradeReferenceElementInfo($_tradeReferenceElementInfo)
    {
        return ($this->TradeReferenceElementInfo = $_tradeReferenceElementInfo);
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
     * @return TradeReferenceSummary_Type
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
