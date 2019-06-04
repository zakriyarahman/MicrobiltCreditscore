<?php

namespace Zakriyarahman\Microbilt\EBA\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class EBAddOns_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for EBAddOns_Type originally named EBAddOns_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class EBAddOns_Type extends Aggregate
{
    /**
     * The ReqAR
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqAR;
    /**
     * The ReqBOP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqBOP;
    /**
     * The ReqBP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqBP;
    /**
     * The ReqBSUM
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
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
     * @var Boolean
     */
    public $ReqIR;
    /**
     * The ReqITP
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqITP;
    /**
     * The ReqLOS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
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
     * @var Boolean
     */
    public $ReqRLCD;
    /**
     * The ReqSA
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqSA;
    /**
     * The ReqUCC
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqUCC;
    /**
     * The ReqDI
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ReqDI;
    /**
     * Constructor method for EBAddOns_Type
     * @see parent::__construct()
     * @param Boolean $_reqAR
     * @param Boolean $_reqBOP
     * @param Boolean $_reqBP
     * @param Boolean $_reqBSUM
     * @param string $_reqDS
     * @param Boolean $_reqIR
     * @param Boolean $_reqITP
     * @param Boolean $_reqLOS
     * @param string $_reqMC
     * @param Boolean $_reqRLCD
     * @param Boolean $_reqSA
     * @param Boolean $_reqUCC
     * @param Boolean $_reqDI
     * @return EBAddOns_Type
     */
    public function __construct($_reqAR = NULL,$_reqBOP = NULL,$_reqBP = NULL,$_reqBSUM = NULL,$_reqDS = NULL,$_reqIR = NULL,$_reqITP = NULL,$_reqLOS = NULL,$_reqMC = NULL,$_reqRLCD = NULL,$_reqSA = NULL,$_reqUCC = NULL,$_reqDI = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ReqAR'=>$_reqAR,'ReqBOP'=>$_reqBOP,'ReqBP'=>$_reqBP,'ReqBSUM'=>$_reqBSUM,'ReqDS'=>$_reqDS,'ReqIR'=>$_reqIR,'ReqITP'=>$_reqITP,'ReqLOS'=>$_reqLOS,'ReqMC'=>$_reqMC,'ReqRLCD'=>$_reqRLCD,'ReqSA'=>$_reqSA,'ReqUCC'=>$_reqUCC,'ReqDI'=>$_reqDI),false);
    }
    /**
     * Get ReqAR value
     * @return Boolean|null
     */
    public function getReqAR()
    {
        return $this->ReqAR;
    }
    /**
     * Set ReqAR value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqAR the ReqAR
     * @return Boolean
     */
    public function setReqAR($_reqAR)
    {
        if(!Boolean::valueIsValid($_reqAR))
        {
            return false;
        }
        return ($this->ReqAR = $_reqAR);
    }
    /**
     * Get ReqBOP value
     * @return Boolean|null
     */
    public function getReqBOP()
    {
        return $this->ReqBOP;
    }
    /**
     * Set ReqBOP value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqBOP the ReqBOP
     * @return Boolean
     */
    public function setReqBOP($_reqBOP)
    {
        if(!Boolean::valueIsValid($_reqBOP))
        {
            return false;
        }
        return ($this->ReqBOP = $_reqBOP);
    }
    /**
     * Get ReqBP value
     * @return Boolean|null
     */
    public function getReqBP()
    {
        return $this->ReqBP;
    }
    /**
     * Set ReqBP value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqBP the ReqBP
     * @return Boolean
     */
    public function setReqBP($_reqBP)
    {
        if(!Boolean::valueIsValid($_reqBP))
        {
            return false;
        }
        return ($this->ReqBP = $_reqBP);
    }
    /**
     * Get ReqBSUM value
     * @return Boolean|null
     */
    public function getReqBSUM()
    {
        return $this->ReqBSUM;
    }
    /**
     * Set ReqBSUM value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqBSUM the ReqBSUM
     * @return Boolean
     */
    public function setReqBSUM($_reqBSUM)
    {
        if(!Boolean::valueIsValid($_reqBSUM))
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
     * @return Boolean|null
     */
    public function getReqIR()
    {
        return $this->ReqIR;
    }
    /**
     * Set ReqIR value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqIR the ReqIR
     * @return Boolean
     */
    public function setReqIR($_reqIR)
    {
        if(!Boolean::valueIsValid($_reqIR))
        {
            return false;
        }
        return ($this->ReqIR = $_reqIR);
    }
    /**
     * Get ReqITP value
     * @return Boolean|null
     */
    public function getReqITP()
    {
        return $this->ReqITP;
    }
    /**
     * Set ReqITP value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqITP the ReqITP
     * @return Boolean
     */
    public function setReqITP($_reqITP)
    {
        if(!Boolean::valueIsValid($_reqITP))
        {
            return false;
        }
        return ($this->ReqITP = $_reqITP);
    }
    /**
     * Get ReqLOS value
     * @return Boolean|null
     */
    public function getReqLOS()
    {
        return $this->ReqLOS;
    }
    /**
     * Set ReqLOS value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqLOS the ReqLOS
     * @return Boolean
     */
    public function setReqLOS($_reqLOS)
    {
        if(!Boolean::valueIsValid($_reqLOS))
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
     * @return Boolean|null
     */
    public function getReqRLCD()
    {
        return $this->ReqRLCD;
    }
    /**
     * Set ReqRLCD value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqRLCD the ReqRLCD
     * @return Boolean
     */
    public function setReqRLCD($_reqRLCD)
    {
        if(!Boolean::valueIsValid($_reqRLCD))
        {
            return false;
        }
        return ($this->ReqRLCD = $_reqRLCD);
    }
    /**
     * Get ReqSA value
     * @return Boolean|null
     */
    public function getReqSA()
    {
        return $this->ReqSA;
    }
    /**
     * Set ReqSA value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqSA the ReqSA
     * @return Boolean
     */
    public function setReqSA($_reqSA)
    {
        if(!Boolean::valueIsValid($_reqSA))
        {
            return false;
        }
        return ($this->ReqSA = $_reqSA);
    }
    /**
     * Get ReqUCC value
     * @return Boolean|null
     */
    public function getReqUCC()
    {
        return $this->ReqUCC;
    }
    /**
     * Set ReqUCC value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqUCC the ReqUCC
     * @return Boolean
     */
    public function setReqUCC($_reqUCC)
    {
        if(!Boolean::valueIsValid($_reqUCC))
        {
            return false;
        }
        return ($this->ReqUCC = $_reqUCC);
    }
    /**
     * Get ReqDI value
     * @return Boolean|null
     */
    public function getReqDI()
    {
        return $this->ReqDI;
    }
    /**
     * Set ReqDI value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_reqDI the ReqDI
     * @return Boolean
     */
    public function setReqDI($_reqDI)
    {
        if(!Boolean::valueIsValid($_reqDI))
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
     * @return EBAddOns_Type
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
