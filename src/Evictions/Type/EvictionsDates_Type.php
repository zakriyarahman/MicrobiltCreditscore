<?php

namespace Zakriyarahman\Microbilt\Evictions\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class EvictionsDates_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for EvictionsDates_Type originally named EvictionsDates_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class EvictionsDates_Type extends Aggregate
{
    /**
     * The OrigDtFiled
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigDtFiled;
    /**
     * The JudgeSatisfiedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $JudgeSatisfiedDt;
    /**
     * The JudgeVacatedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $JudgeVacatedDt;
    /**
     * The SuitDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SuitDt;
    /**
     * The ReleaseDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReleaseDt;
    /**
     * Constructor method for EvictionsDates_Type
     * @see parent::__construct()
     * @param string $_origDtFiled
     * @param string $_judgeSatisfiedDt
     * @param string $_judgeVacatedDt
     * @param string $_suitDt
     * @param string $_releaseDt
     * @return EvictionsDates_Type
     */
    public function __construct($_origDtFiled = NULL,$_judgeSatisfiedDt = NULL,$_judgeVacatedDt = NULL,$_suitDt = NULL,$_releaseDt = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OrigDtFiled'=>$_origDtFiled,'JudgeSatisfiedDt'=>$_judgeSatisfiedDt,'JudgeVacatedDt'=>$_judgeVacatedDt,'SuitDt'=>$_suitDt,'ReleaseDt'=>$_releaseDt),false);
    }
    /**
     * Get OrigDtFiled value
     * @return string|null
     */
    public function getOrigDtFiled()
    {
        return $this->OrigDtFiled;
    }
    /**
     * Set OrigDtFiled value
     * @param string $_origDtFiled the OrigDtFiled
     * @return string
     */
    public function setOrigDtFiled($_origDtFiled)
    {
        return ($this->OrigDtFiled = $_origDtFiled);
    }
    /**
     * Get JudgeSatisfiedDt value
     * @return string|null
     */
    public function getJudgeSatisfiedDt()
    {
        return $this->JudgeSatisfiedDt;
    }
    /**
     * Set JudgeSatisfiedDt value
     * @param string $_judgeSatisfiedDt the JudgeSatisfiedDt
     * @return string
     */
    public function setJudgeSatisfiedDt($_judgeSatisfiedDt)
    {
        return ($this->JudgeSatisfiedDt = $_judgeSatisfiedDt);
    }
    /**
     * Get JudgeVacatedDt value
     * @return string|null
     */
    public function getJudgeVacatedDt()
    {
        return $this->JudgeVacatedDt;
    }
    /**
     * Set JudgeVacatedDt value
     * @param string $_judgeVacatedDt the JudgeVacatedDt
     * @return string
     */
    public function setJudgeVacatedDt($_judgeVacatedDt)
    {
        return ($this->JudgeVacatedDt = $_judgeVacatedDt);
    }
    /**
     * Get SuitDt value
     * @return string|null
     */
    public function getSuitDt()
    {
        return $this->SuitDt;
    }
    /**
     * Set SuitDt value
     * @param string $_suitDt the SuitDt
     * @return string
     */
    public function setSuitDt($_suitDt)
    {
        return ($this->SuitDt = $_suitDt);
    }
    /**
     * Get ReleaseDt value
     * @return string|null
     */
    public function getReleaseDt()
    {
        return $this->ReleaseDt;
    }
    /**
     * Set ReleaseDt value
     * @param string $_releaseDt the ReleaseDt
     * @return string
     */
    public function setReleaseDt($_releaseDt)
    {
        return ($this->ReleaseDt = $_releaseDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EvictionsDates_Type
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
