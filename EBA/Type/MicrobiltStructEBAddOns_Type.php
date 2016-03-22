<?php
/**
 * File for class MicrobiltStructEBAddOns_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructEBAddOns_Type originally named EBAddOns_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructEBAddOns_Type extends MicrobiltStructAggregate
{
    /**
     * The ReqAR
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqAR;
    /**
     * The ReqBOP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqBOP;
    /**
     * The ReqBP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqBP;
    /**
     * The ReqBSUM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqBSUM;
    /**
     * The ReqDS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReqDS;
    /**
     * The ReqIR
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqIR;
    /**
     * The ReqITP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqITP;
    /**
     * The ReqLOS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqLOS;
    /**
     * The ReqMC
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReqMC;
    /**
     * The ReqRLCD
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqRLCD;
    /**
     * The ReqSA
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqSA;
    /**
     * The ReqUCC
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqUCC;
    /**
     * The ReqDI
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ReqDI;
    /**
     * Constructor method for EBAddOns_Type
     * @see parent::__construct()
     * @param MicrobiltEnumBoolean $_reqAR
     * @param MicrobiltEnumBoolean $_reqBOP
     * @param MicrobiltEnumBoolean $_reqBP
     * @param MicrobiltEnumBoolean $_reqBSUM
     * @param string $_reqDS
     * @param MicrobiltEnumBoolean $_reqIR
     * @param MicrobiltEnumBoolean $_reqITP
     * @param MicrobiltEnumBoolean $_reqLOS
     * @param string $_reqMC
     * @param MicrobiltEnumBoolean $_reqRLCD
     * @param MicrobiltEnumBoolean $_reqSA
     * @param MicrobiltEnumBoolean $_reqUCC
     * @param MicrobiltEnumBoolean $_reqDI
     * @return MicrobiltStructEBAddOns_Type
     */
    public function __construct($_reqAR = NULL,$_reqBOP = NULL,$_reqBP = NULL,$_reqBSUM = NULL,$_reqDS = NULL,$_reqIR = NULL,$_reqITP = NULL,$_reqLOS = NULL,$_reqMC = NULL,$_reqRLCD = NULL,$_reqSA = NULL,$_reqUCC = NULL,$_reqDI = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ReqAR'=>$_reqAR,'ReqBOP'=>$_reqBOP,'ReqBP'=>$_reqBP,'ReqBSUM'=>$_reqBSUM,'ReqDS'=>$_reqDS,'ReqIR'=>$_reqIR,'ReqITP'=>$_reqITP,'ReqLOS'=>$_reqLOS,'ReqMC'=>$_reqMC,'ReqRLCD'=>$_reqRLCD,'ReqSA'=>$_reqSA,'ReqUCC'=>$_reqUCC,'ReqDI'=>$_reqDI),false);
    }
    /**
     * Get ReqAR value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqAR()
    {
        return $this->ReqAR;
    }
    /**
     * Set ReqAR value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqAR the ReqAR
     * @return MicrobiltEnumBoolean
     */
    public function setReqAR($_reqAR)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqAR))
        {
            return false;
        }
        return ($this->ReqAR = $_reqAR);
    }
    /**
     * Get ReqBOP value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqBOP()
    {
        return $this->ReqBOP;
    }
    /**
     * Set ReqBOP value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqBOP the ReqBOP
     * @return MicrobiltEnumBoolean
     */
    public function setReqBOP($_reqBOP)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqBOP))
        {
            return false;
        }
        return ($this->ReqBOP = $_reqBOP);
    }
    /**
     * Get ReqBP value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqBP()
    {
        return $this->ReqBP;
    }
    /**
     * Set ReqBP value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqBP the ReqBP
     * @return MicrobiltEnumBoolean
     */
    public function setReqBP($_reqBP)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqBP))
        {
            return false;
        }
        return ($this->ReqBP = $_reqBP);
    }
    /**
     * Get ReqBSUM value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqBSUM()
    {
        return $this->ReqBSUM;
    }
    /**
     * Set ReqBSUM value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqBSUM the ReqBSUM
     * @return MicrobiltEnumBoolean
     */
    public function setReqBSUM($_reqBSUM)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqBSUM))
        {
            return false;
        }
        return ($this->ReqBSUM = $_reqBSUM);
    }
    /**
     * Get ReqDS value
     * @return string|null
     */
    public function getReqDS()
    {
        return $this->ReqDS;
    }
    /**
     * Set ReqDS value
     * @param string $_reqDS the ReqDS
     * @return string
     */
    public function setReqDS($_reqDS)
    {
        return ($this->ReqDS = $_reqDS);
    }
    /**
     * Get ReqIR value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqIR()
    {
        return $this->ReqIR;
    }
    /**
     * Set ReqIR value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqIR the ReqIR
     * @return MicrobiltEnumBoolean
     */
    public function setReqIR($_reqIR)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqIR))
        {
            return false;
        }
        return ($this->ReqIR = $_reqIR);
    }
    /**
     * Get ReqITP value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqITP()
    {
        return $this->ReqITP;
    }
    /**
     * Set ReqITP value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqITP the ReqITP
     * @return MicrobiltEnumBoolean
     */
    public function setReqITP($_reqITP)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqITP))
        {
            return false;
        }
        return ($this->ReqITP = $_reqITP);
    }
    /**
     * Get ReqLOS value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqLOS()
    {
        return $this->ReqLOS;
    }
    /**
     * Set ReqLOS value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqLOS the ReqLOS
     * @return MicrobiltEnumBoolean
     */
    public function setReqLOS($_reqLOS)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqLOS))
        {
            return false;
        }
        return ($this->ReqLOS = $_reqLOS);
    }
    /**
     * Get ReqMC value
     * @return string|null
     */
    public function getReqMC()
    {
        return $this->ReqMC;
    }
    /**
     * Set ReqMC value
     * @param string $_reqMC the ReqMC
     * @return string
     */
    public function setReqMC($_reqMC)
    {
        return ($this->ReqMC = $_reqMC);
    }
    /**
     * Get ReqRLCD value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqRLCD()
    {
        return $this->ReqRLCD;
    }
    /**
     * Set ReqRLCD value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqRLCD the ReqRLCD
     * @return MicrobiltEnumBoolean
     */
    public function setReqRLCD($_reqRLCD)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqRLCD))
        {
            return false;
        }
        return ($this->ReqRLCD = $_reqRLCD);
    }
    /**
     * Get ReqSA value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqSA()
    {
        return $this->ReqSA;
    }
    /**
     * Set ReqSA value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqSA the ReqSA
     * @return MicrobiltEnumBoolean
     */
    public function setReqSA($_reqSA)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqSA))
        {
            return false;
        }
        return ($this->ReqSA = $_reqSA);
    }
    /**
     * Get ReqUCC value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqUCC()
    {
        return $this->ReqUCC;
    }
    /**
     * Set ReqUCC value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqUCC the ReqUCC
     * @return MicrobiltEnumBoolean
     */
    public function setReqUCC($_reqUCC)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqUCC))
        {
            return false;
        }
        return ($this->ReqUCC = $_reqUCC);
    }
    /**
     * Get ReqDI value
     * @return MicrobiltEnumBoolean|null
     */
    public function getReqDI()
    {
        return $this->ReqDI;
    }
    /**
     * Set ReqDI value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_reqDI the ReqDI
     * @return MicrobiltEnumBoolean
     */
    public function setReqDI($_reqDI)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_reqDI))
        {
            return false;
        }
        return ($this->ReqDI = $_reqDI);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructEBAddOns_Type
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
