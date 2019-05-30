<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructQFProdOffer_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructQFProdOffer_Type originally named QFProdOffer_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructQFProdOffer_Type extends MicrobiltStructAggregate
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
     * The ProdOfferLmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCurrencyAmount
     */
    public $ProdOfferLmtAmt;
    /**
     * The ProdOfferTxt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProdOfferTxt;
    /**
     * The ProdOfferPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $ProdOfferPercent;
    /**
     * Constructor method for QFProdOffer_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltStructCurrencyAmount $_prodOfferLmtAmt
     * @param string $_prodOfferTxt
     * @param float $_prodOfferPercent
     * @return MicrobiltStructQFProdOffer_Type
     */
    public function __construct($_msgClass = NULL,$_prodOfferLmtAmt = NULL,$_prodOfferTxt = NULL,$_prodOfferPercent = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'ProdOfferLmtAmt'=>$_prodOfferLmtAmt,'ProdOfferTxt'=>$_prodOfferTxt,'ProdOfferPercent'=>$_prodOfferPercent),false);
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
     * Get ProdOfferLmtAmt value
     * @return MicrobiltStructCurrencyAmount|null
     */
    public function getProdOfferLmtAmt()
    {
        return $this->ProdOfferLmtAmt;
    }
    /**
     * Set ProdOfferLmtAmt value
     * @param MicrobiltStructCurrencyAmount $_prodOfferLmtAmt the ProdOfferLmtAmt
     * @return MicrobiltStructCurrencyAmount
     */
    public function setProdOfferLmtAmt($_prodOfferLmtAmt)
    {
        return ($this->ProdOfferLmtAmt = $_prodOfferLmtAmt);
    }
    /**
     * Get ProdOfferTxt value
     * @return string|null
     */
    public function getProdOfferTxt()
    {
        return $this->ProdOfferTxt;
    }
    /**
     * Set ProdOfferTxt value
     * @param string $_prodOfferTxt the ProdOfferTxt
     * @return string
     */
    public function setProdOfferTxt($_prodOfferTxt)
    {
        return ($this->ProdOfferTxt = $_prodOfferTxt);
    }
    /**
     * Get ProdOfferPercent value
     * @return float|null
     */
    public function getProdOfferPercent()
    {
        return $this->ProdOfferPercent;
    }
    /**
     * Set ProdOfferPercent value
     * @param float $_prodOfferPercent the ProdOfferPercent
     * @return float
     */
    public function setProdOfferPercent($_prodOfferPercent)
    {
        return ($this->ProdOfferPercent = $_prodOfferPercent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructQFProdOffer_Type
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
