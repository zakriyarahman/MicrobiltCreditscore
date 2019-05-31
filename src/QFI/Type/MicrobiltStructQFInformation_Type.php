<?php

namespace Zakriyarahman\Microbilt\QFI\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class MicrobiltStructQFInformation_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructQFInformation_Type originally named QFInformation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructQFInformation_Type extends MicrobiltStructAggregate
{
    /**
     * The QFAcctAction
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $QFAcctAction;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructScore_Type
     */
    public $Score;
    /**
     * The QFProdOffer
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructQFProdOffer_Type
     */
    public $QFProdOffer;
    /**
     * The QFScore
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructScore_Type
     */
    public $QFScore;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for QFInformation_Type
     * @see parent::__construct()
     * @param MicrobiltStructMessage_Type $_qFAcctAction
     * @param MicrobiltStructScore_Type $_score
     * @param MicrobiltStructQFProdOffer_Type $_qFProdOffer
     * @param MicrobiltStructScore_Type $_qFScore
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructQFInformation_Type
     */
    public function __construct($_qFAcctAction = NULL,$_score = NULL,$_qFProdOffer = NULL,$_qFScore = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('QFAcctAction'=>$_qFAcctAction,'Score'=>$_score,'QFProdOffer'=>$_qFProdOffer,'QFScore'=>$_qFScore,'Message'=>$_message),false);
    }
    /**
     * Get QFAcctAction value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getQFAcctAction()
    {
        return $this->QFAcctAction;
    }
    /**
     * Set QFAcctAction value
     * @param MicrobiltStructMessage_Type $_qFAcctAction the QFAcctAction
     * @return MicrobiltStructMessage_Type
     */
    public function setQFAcctAction($_qFAcctAction)
    {
        return ($this->QFAcctAction = $_qFAcctAction);
    }
    /**
     * Get Score value
     * @return MicrobiltStructScore_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param MicrobiltStructScore_Type $_score the Score
     * @return MicrobiltStructScore_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
    }
    /**
     * Get QFProdOffer value
     * @return MicrobiltStructQFProdOffer_Type|null
     */
    public function getQFProdOffer()
    {
        return $this->QFProdOffer;
    }
    /**
     * Set QFProdOffer value
     * @param MicrobiltStructQFProdOffer_Type $_qFProdOffer the QFProdOffer
     * @return MicrobiltStructQFProdOffer_Type
     */
    public function setQFProdOffer($_qFProdOffer)
    {
        return ($this->QFProdOffer = $_qFProdOffer);
    }
    /**
     * Get QFScore value
     * @return MicrobiltStructScore_Type|null
     */
    public function getQFScore()
    {
        return $this->QFScore;
    }
    /**
     * Set QFScore value
     * @param MicrobiltStructScore_Type $_qFScore the QFScore
     * @return MicrobiltStructScore_Type
     */
    public function setQFScore($_qFScore)
    {
        return ($this->QFScore = $_qFScore);
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
     * @return MicrobiltStructQFInformation_Type
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
