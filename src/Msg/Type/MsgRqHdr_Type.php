<?php

namespace Zakriyarahman\Microbilt\Msg\Type;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Request\Type\RequestType;

/**
 * File for class MsgRqHdr_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MsgRqHdr_Type originally named MsgRqHdr_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MsgRqHdr_Type extends MicrobiltWsdlClass
{
    /**
     * The MemberId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MemberId;
    /**
     * The MemberPwd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MemberPwd;
    /**
     * The RequestType
     * @var RequestType
     */
    public $RequestType;
    /**
     * The ReasonCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReasonCode;
    /**
     * The GLBPurpose
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GLBPurpose;
    /**
     * The DLPurpose
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DLPurpose;
    /**
     * The RefNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RefNum;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserName;
    /**
     * The Timeout
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Timeout;
    /**
     * The FrozenFilePIN
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FrozenFilePIN;
    /**
     * The OutputFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OutputFormat;
    /**
     * Constructor method for MsgRqHdr_Type
     * @see parent::__construct()
     * @param string $_memberId
     * @param string $_memberPwd
     * @param RequestType $_requestType
     * @param string $_reasonCode
     * @param string $_gLBPurpose
     * @param string $_dLPurpose
     * @param string $_refNum
     * @param string $_userName
     * @param int $_timeout
     * @param string $_frozenFilePIN
     * @param string $_outputFormat
     * @return MsgRqHdr_Type
     */
    public function __construct($_memberId = NULL,$_memberPwd = NULL,$_requestType = NULL,$_reasonCode = NULL,$_gLBPurpose = NULL,$_dLPurpose = NULL,$_refNum = NULL,$_userName = NULL,$_timeout = NULL,$_frozenFilePIN = NULL,$_outputFormat = NULL)
    {
        parent::__construct(array('MemberId'=>$_memberId,'MemberPwd'=>$_memberPwd,'RequestType'=>$_requestType,'ReasonCode'=>$_reasonCode,'GLBPurpose'=>$_gLBPurpose,'DLPurpose'=>$_dLPurpose,'RefNum'=>$_refNum,'UserName'=>$_userName,'Timeout'=>$_timeout,'FrozenFilePIN'=>$_frozenFilePIN,'OutputFormat'=>$_outputFormat),false);
    }
    /**
     * Get MemberId value
     * @return string|null
     */
    public function getMemberId()
    {
        return $this->MemberId;
    }
    /**
     * Set MemberId value
     * @param string $_memberId the MemberId
     * @return string
     */
    public function setMemberId($_memberId)
    {
        return ($this->MemberId = $_memberId);
    }
    /**
     * Get MemberPwd value
     * @return string|null
     */
    public function getMemberPwd()
    {
        return $this->MemberPwd;
    }
    /**
     * Set MemberPwd value
     * @param string $_memberPwd the MemberPwd
     * @return string
     */
    public function setMemberPwd($_memberPwd)
    {
        return ($this->MemberPwd = $_memberPwd);
    }
    /**
     * Get RequestType value
     * @return RequestType|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses RequestType::valueIsValid()
     * @param RequestType $_requestType the RequestType
     * @return RequestType
     */
    public function setRequestType($_requestType)
    {
        if(!RequestType::valueIsValid($_requestType))
        {
            return false;
        }
        return ($this->RequestType = $_requestType);
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $_reasonCode the ReasonCode
     * @return string
     */
    public function setReasonCode($_reasonCode)
    {
        return ($this->ReasonCode = $_reasonCode);
    }
    /**
     * Get GLBPurpose value
     * @return string|null
     */
    public function getGLBPurpose()
    {
        return $this->GLBPurpose;
    }
    /**
     * Set GLBPurpose value
     * @param string $_gLBPurpose the GLBPurpose
     * @return string
     */
    public function setGLBPurpose($_gLBPurpose)
    {
        return ($this->GLBPurpose = $_gLBPurpose);
    }
    /**
     * Get DLPurpose value
     * @return string|null
     */
    public function getDLPurpose()
    {
        return $this->DLPurpose;
    }
    /**
     * Set DLPurpose value
     * @param string $_dLPurpose the DLPurpose
     * @return string
     */
    public function setDLPurpose($_dLPurpose)
    {
        return ($this->DLPurpose = $_dLPurpose);
    }
    /**
     * Get RefNum value
     * @return string|null
     */
    public function getRefNum()
    {
        return $this->RefNum;
    }
    /**
     * Set RefNum value
     * @param string $_refNum the RefNum
     * @return string
     */
    public function setRefNum($_refNum)
    {
        return ($this->RefNum = $_refNum);
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $_userName the UserName
     * @return string
     */
    public function setUserName($_userName)
    {
        return ($this->UserName = $_userName);
    }
    /**
     * Get Timeout value
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->Timeout;
    }
    /**
     * Set Timeout value
     * @param int $_timeout the Timeout
     * @return int
     */
    public function setTimeout($_timeout)
    {
        return ($this->Timeout = $_timeout);
    }
    /**
     * Get FrozenFilePIN value
     * @return string|null
     */
    public function getFrozenFilePIN()
    {
        return $this->FrozenFilePIN;
    }
    /**
     * Set FrozenFilePIN value
     * @param string $_frozenFilePIN the FrozenFilePIN
     * @return string
     */
    public function setFrozenFilePIN($_frozenFilePIN)
    {
        return ($this->FrozenFilePIN = $_frozenFilePIN);
    }
    /**
     * Get OutputFormat value
     * @return string|null
     */
    public function getOutputFormat()
    {
        return $this->OutputFormat;
    }
    /**
     * Set OutputFormat value
     * @param string $_outputFormat the OutputFormat
     * @return string
     */
    public function setOutputFormat($_outputFormat)
    {
        return ($this->OutputFormat = $_outputFormat);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MsgRqHdr_Type
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
