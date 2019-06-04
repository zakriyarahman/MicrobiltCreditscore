<?php

namespace Zakriyarahman\Microbilt\Credit\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class CreditRating_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for CreditRating_Type originally named CreditRating_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class CreditRating_Type extends Aggregate
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
     * The Period
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Period;
    /**
     * The TimeScale
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TimeScale;
    /**
     * The RatingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RatingType;
    /**
     * The RatingAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var CurrencyAmount
     */
    public $RatingAmt;
    /**
     * The RatingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RatingDt;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Score_Type
     */
    public $Score;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for CreditRating_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_period
     * @param string $_timeScale
     * @param string $_ratingType
     * @param CurrencyAmount $_ratingAmt
     * @param string $_ratingDt
     * @param Score_Type $_score
     * @param Message_Type $_message
     * @return CreditRating_Type
     */
    public function __construct($_msgClass = NULL,$_period = NULL,$_timeScale = NULL,$_ratingType = NULL,$_ratingAmt = NULL,$_ratingDt = NULL,$_score = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'Period'=>$_period,'TimeScale'=>$_timeScale,'RatingType'=>$_ratingType,'RatingAmt'=>$_ratingAmt,'RatingDt'=>$_ratingDt,'Score'=>$_score,'Message'=>$_message),false);
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
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param string $_period the Period
     * @return string
     */
    public function setPeriod($_period)
    {
        return ($this->Period = $_period);
    }
    /**
     * Get TimeScale value
     * @return string|null
     */
    public function getTimeScale()
    {
        return $this->TimeScale;
    }
    /**
     * Set TimeScale value
     * @param string $_timeScale the TimeScale
     * @return string
     */
    public function setTimeScale($_timeScale)
    {
        return ($this->TimeScale = $_timeScale);
    }
    /**
     * Get RatingType value
     * @return string|null
     */
    public function getRatingType()
    {
        return $this->RatingType;
    }
    /**
     * Set RatingType value
     * @param string $_ratingType the RatingType
     * @return string
     */
    public function setRatingType($_ratingType)
    {
        return ($this->RatingType = $_ratingType);
    }
    /**
     * Get RatingAmt value
     * @return CurrencyAmount|null
     */
    public function getRatingAmt()
    {
        return $this->RatingAmt;
    }
    /**
     * Set RatingAmt value
     * @param CurrencyAmount $_ratingAmt the RatingAmt
     * @return CurrencyAmount
     */
    public function setRatingAmt($_ratingAmt)
    {
        return ($this->RatingAmt = $_ratingAmt);
    }
    /**
     * Get RatingDt value
     * @return string|null
     */
    public function getRatingDt()
    {
        return $this->RatingDt;
    }
    /**
     * Set RatingDt value
     * @param string $_ratingDt the RatingDt
     * @return string
     */
    public function setRatingDt($_ratingDt)
    {
        return ($this->RatingDt = $_ratingDt);
    }
    /**
     * Get Score value
     * @return Score_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param Score_Type $_score the Score
     * @return Score_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
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
     * @return CreditRating_Type
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
