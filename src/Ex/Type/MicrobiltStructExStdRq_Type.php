<?php

namespace Zakriyarahman\Microbilt\Ex\Type;

/**
 * File for class MicrobiltStructExStdRq_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructExStdRq_Type originally named ExStdRq_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd1}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructExStdRq_Type extends MicrobiltWsdlClass
{
    /**
     * The MsgRqHdr
     * @var MicrobiltStructMsgRqHdr_Type
     */
    public $MsgRqHdr;
    /**
     * The PersonInfo
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The LoanRequestInfo
     * @var MicrobiltStructLoanRequestInfo_Type
     */
    public $LoanRequestInfo;
    /**
     * The Option
     * @var MicrobiltStructOption_Type
     */
    public $Option;
    /**
     * The Keyword
     * @var string
     */
    public $Keyword;
    /**
     * The ScoreCard
     * @var string
     */
    public $ScoreCard;
    /**
     * Constructor method for ExStdRq_Type
     * @see parent::__construct()
     * @param MicrobiltStructMsgRqHdr_Type $_msgRqHdr
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructLoanRequestInfo_Type $_loanRequestInfo
     * @param MicrobiltStructOption_Type $_option
     * @param string $_keyword
     * @param string $_scoreCard
     * @return MicrobiltStructExStdRq_Type
     */
    public function __construct($_msgRqHdr = NULL,$_personInfo = NULL,$_loanRequestInfo = NULL,$_option = NULL,$_keyword = NULL,$_scoreCard = NULL)
    {
        parent::__construct(array('MsgRqHdr'=>$_msgRqHdr,'PersonInfo'=>$_personInfo,'LoanRequestInfo'=>$_loanRequestInfo,'Option'=>$_option,'Keyword'=>$_keyword,'ScoreCard'=>$_scoreCard),false);
    }
    /**
     * Get MsgRqHdr value
     * @return MicrobiltStructMsgRqHdr_Type|null
     */
    public function getMsgRqHdr()
    {
        return $this->MsgRqHdr;
    }
    /**
     * Set MsgRqHdr value
     * @param MicrobiltStructMsgRqHdr_Type $_msgRqHdr the MsgRqHdr
     * @return MicrobiltStructMsgRqHdr_Type
     */
    public function setMsgRqHdr($_msgRqHdr)
    {
        return ($this->MsgRqHdr = $_msgRqHdr);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Get LoanRequestInfo value
     * @return MicrobiltStructLoanRequestInfo_Type|null
     */
    public function getLoanRequestInfo()
    {
        return $this->LoanRequestInfo;
    }
    /**
     * Set LoanRequestInfo value
     * @param MicrobiltStructLoanRequestInfo_Type $_loanRequestInfo the LoanRequestInfo
     * @return MicrobiltStructLoanRequestInfo_Type
     */
    public function setLoanRequestInfo($_loanRequestInfo)
    {
        return ($this->LoanRequestInfo = $_loanRequestInfo);
    }
    /**
     * Get Option value
     * @return MicrobiltStructOption_Type|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @param MicrobiltStructOption_Type $_option the Option
     * @return MicrobiltStructOption_Type
     */
    public function setOption($_option)
    {
        return ($this->Option = $_option);
    }
    /**
     * Get Keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $_keyword the Keyword
     * @return string
     */
    public function setKeyword($_keyword)
    {
        return ($this->Keyword = $_keyword);
    }
    /**
     * Get ScoreCard value
     * @return string|null
     */
    public function getScoreCard()
    {
        return $this->ScoreCard;
    }
    /**
     * Set ScoreCard value
     * @param string $_scoreCard the ScoreCard
     * @return string
     */
    public function setScoreCard($_scoreCard)
    {
        return ($this->ScoreCard = $_scoreCard);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructExStdRq_Type
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
