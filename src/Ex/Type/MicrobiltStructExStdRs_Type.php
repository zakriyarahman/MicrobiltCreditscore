<?php

namespace Zakriyarahman\Microbilt\Ex\Type;

/**
 * File for class MicrobiltStructExStdRs_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructExStdRs_Type originally named ExStdRs_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd1}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructExStdRs_Type extends MicrobiltWsdlClass
{
    /**
     * The MsgRsHdr
     * @var MicrobiltStructMsgRsHdr_Type
     */
    public $MsgRsHdr;
    /**
     * The Subject
     * @var MicrobiltStructSubject
     */
    public $Subject;
    /**
     * Constructor method for ExStdRs_Type
     * @see parent::__construct()
     * @param MicrobiltStructMsgRsHdr_Type $_msgRsHdr
     * @param MicrobiltStructSubject $_subject
     * @return MicrobiltStructExStdRs_Type
     */
    public function __construct($_msgRsHdr = NULL,$_subject = NULL)
    {
        parent::__construct(array('MsgRsHdr'=>$_msgRsHdr,'Subject'=>$_subject),false);
    }
    /**
     * Get MsgRsHdr value
     * @return MicrobiltStructMsgRsHdr_Type|null
     */
    public function getMsgRsHdr()
    {
        return $this->MsgRsHdr;
    }
    /**
     * Set MsgRsHdr value
     * @param MicrobiltStructMsgRsHdr_Type $_msgRsHdr the MsgRsHdr
     * @return MicrobiltStructMsgRsHdr_Type
     */
    public function setMsgRsHdr($_msgRsHdr)
    {
        return ($this->MsgRsHdr = $_msgRsHdr);
    }
    /**
     * Get Subject value
     * @return MicrobiltStructSubject|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param MicrobiltStructSubject $_subject the Subject
     * @return MicrobiltStructSubject
     */
    public function setSubject($_subject)
    {
        return ($this->Subject = $_subject);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructExStdRs_Type
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
