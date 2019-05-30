<?php

namespace Zakriyarahman\Microbilt\Score_\Type;

/**
 * File for class MicrobiltStructScore_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructScore_Type originally named Score_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructScore_Type extends MicrobiltStructAggregate
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $Value;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Model;
    /**
     * The Alert
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $Alert;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $Factor;
    /**
     * The ModelNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ModelNumber;
    /**
     * The ScoreNumberInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ScoreNumberInd;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * The ModelDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ModelDesc;
    /**
     * The ModelRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMinMaxRange_Type
     */
    public $ModelRange;
    /**
     * The Percentile
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Percentile;
    /**
     * Constructor method for Score_Type
     * @see parent::__construct()
     * @param int $_value
     * @param string $_model
     * @param MicrobiltStructCodeDescription_Type $_alert
     * @param MicrobiltStructCodeDescription_Type $_factor
     * @param string $_modelNumber
     * @param string $_scoreNumberInd
     * @param MicrobiltStructMessage_Type $_message
     * @param string $_modelDesc
     * @param MicrobiltStructMinMaxRange_Type $_modelRange
     * @param int $_percentile
     * @return MicrobiltStructScore_Type
     */
    public function __construct($_value,$_model = NULL,$_alert = NULL,$_factor = NULL,$_modelNumber = NULL,$_scoreNumberInd = NULL,$_message = NULL,$_modelDesc = NULL,$_modelRange = NULL,$_percentile = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Value'=>$_value,'Model'=>$_model,'Alert'=>$_alert,'Factor'=>$_factor,'ModelNumber'=>$_modelNumber,'ScoreNumberInd'=>$_scoreNumberInd,'Message'=>$_message,'ModelDesc'=>$_modelDesc,'ModelRange'=>$_modelRange,'Percentile'=>$_percentile),false);
    }
    /**
     * Get Value value
     * @return int
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $_value the Value
     * @return int
     */
    public function setValue($_value)
    {
        return ($this->Value = $_value);
    }
    /**
     * Get Model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->Model;
    }
    /**
     * Set Model value
     * @param string $_model the Model
     * @return string
     */
    public function setModel($_model)
    {
        return ($this->Model = $_model);
    }
    /**
     * Get Alert value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @param MicrobiltStructCodeDescription_Type $_alert the Alert
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setAlert($_alert)
    {
        return ($this->Alert = $_alert);
    }
    /**
     * Get Factor value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getFactor()
    {
        return $this->Factor;
    }
    /**
     * Set Factor value
     * @param MicrobiltStructCodeDescription_Type $_factor the Factor
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setFactor($_factor)
    {
        return ($this->Factor = $_factor);
    }
    /**
     * Get ModelNumber value
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->ModelNumber;
    }
    /**
     * Set ModelNumber value
     * @param string $_modelNumber the ModelNumber
     * @return string
     */
    public function setModelNumber($_modelNumber)
    {
        return ($this->ModelNumber = $_modelNumber);
    }
    /**
     * Get ScoreNumberInd value
     * @return string|null
     */
    public function getScoreNumberInd()
    {
        return $this->ScoreNumberInd;
    }
    /**
     * Set ScoreNumberInd value
     * @param string $_scoreNumberInd the ScoreNumberInd
     * @return string
     */
    public function setScoreNumberInd($_scoreNumberInd)
    {
        return ($this->ScoreNumberInd = $_scoreNumberInd);
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
     * Get ModelDesc value
     * @return string|null
     */
    public function getModelDesc()
    {
        return $this->ModelDesc;
    }
    /**
     * Set ModelDesc value
     * @param string $_modelDesc the ModelDesc
     * @return string
     */
    public function setModelDesc($_modelDesc)
    {
        return ($this->ModelDesc = $_modelDesc);
    }
    /**
     * Get ModelRange value
     * @return MicrobiltStructMinMaxRange_Type|null
     */
    public function getModelRange()
    {
        return $this->ModelRange;
    }
    /**
     * Set ModelRange value
     * @param MicrobiltStructMinMaxRange_Type $_modelRange the ModelRange
     * @return MicrobiltStructMinMaxRange_Type
     */
    public function setModelRange($_modelRange)
    {
        return ($this->ModelRange = $_modelRange);
    }
    /**
     * Get Percentile value
     * @return int|null
     */
    public function getPercentile()
    {
        return $this->Percentile;
    }
    /**
     * Set Percentile value
     * @param int $_percentile the Percentile
     * @return int
     */
    public function setPercentile($_percentile)
    {
        return ($this->Percentile = $_percentile);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructScore_Type
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
