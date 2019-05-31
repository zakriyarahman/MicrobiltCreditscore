<?php

namespace Zakriyarahman\Microbilt\Msg\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructMsgRsHdr_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructMsgRsHdr_Type originally named MsgRsHdr_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructMsgRsHdr_Type extends MicrobiltWsdlClass
{
    /**
     * The RqUID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RqUID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructStatus_Type
     */
    public $Status;
    /**
     * Constructor method for MsgRsHdr_Type
     * @see parent::__construct()
     * @param string $_rqUID
     * @param MicrobiltStructStatus_Type $_status
     * @return MicrobiltStructMsgRsHdr_Type
     */
    public function __construct($_rqUID = NULL,$_status = NULL)
    {
        parent::__construct(array('RqUID'=>$_rqUID,'Status'=>$_status),false);
    }
    /**
     * Get RqUID value
     * @return string|null
     */
    public function getRqUID()
    {
        return $this->RqUID;
    }
    /**
     * Set RqUID value
     * @param string $_rqUID the RqUID
     * @return string
     */
    public function setRqUID($_rqUID)
    {
        return ($this->RqUID = $_rqUID);
    }
    /**
     * Get Status value
     * @return MicrobiltStructStatus_Type|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param MicrobiltStructStatus_Type $_status the Status
     * @return MicrobiltStructStatus_Type
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructMsgRsHdr_Type
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
