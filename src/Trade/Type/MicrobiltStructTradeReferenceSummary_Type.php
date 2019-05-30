<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructTradeReferenceSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructTradeReferenceSummary_Type originally named TradeReferenceSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructTradeReferenceSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The TradeReferenceDetailInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructTradeReferenceDetailInfo_Type
     */
    public $TradeReferenceDetailInfo;
    /**
     * The TradeReferenceElementInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructTradeReferenceElementInfo_Type
     */
    public $TradeReferenceElementInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for TradeReferenceSummary_Type
     * @see parent::__construct()
     * @param MicrobiltStructTradeReferenceDetailInfo_Type $_tradeReferenceDetailInfo
     * @param MicrobiltStructTradeReferenceElementInfo_Type $_tradeReferenceElementInfo
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructTradeReferenceSummary_Type
     */
    public function __construct($_tradeReferenceDetailInfo = NULL,$_tradeReferenceElementInfo = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('TradeReferenceDetailInfo'=>$_tradeReferenceDetailInfo,'TradeReferenceElementInfo'=>$_tradeReferenceElementInfo,'Message'=>$_message),false);
    }
    /**
     * Get TradeReferenceDetailInfo value
     * @return MicrobiltStructTradeReferenceDetailInfo_Type|null
     */
    public function getTradeReferenceDetailInfo()
    {
        return $this->TradeReferenceDetailInfo;
    }
    /**
     * Set TradeReferenceDetailInfo value
     * @param MicrobiltStructTradeReferenceDetailInfo_Type $_tradeReferenceDetailInfo the TradeReferenceDetailInfo
     * @return MicrobiltStructTradeReferenceDetailInfo_Type
     */
    public function setTradeReferenceDetailInfo($_tradeReferenceDetailInfo)
    {
        return ($this->TradeReferenceDetailInfo = $_tradeReferenceDetailInfo);
    }
    /**
     * Get TradeReferenceElementInfo value
     * @return MicrobiltStructTradeReferenceElementInfo_Type|null
     */
    public function getTradeReferenceElementInfo()
    {
        return $this->TradeReferenceElementInfo;
    }
    /**
     * Set TradeReferenceElementInfo value
     * @param MicrobiltStructTradeReferenceElementInfo_Type $_tradeReferenceElementInfo the TradeReferenceElementInfo
     * @return MicrobiltStructTradeReferenceElementInfo_Type
     */
    public function setTradeReferenceElementInfo($_tradeReferenceElementInfo)
    {
        return ($this->TradeReferenceElementInfo = $_tradeReferenceElementInfo);
    }
    /**
     * Get Message value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltStructMessage_Type $_message the Message
     * @return MicrobiltStructMessage_Type
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
     * @return MicrobiltStructTradeReferenceSummary_Type
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
