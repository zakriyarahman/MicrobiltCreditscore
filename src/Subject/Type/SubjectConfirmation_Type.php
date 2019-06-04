<?php

namespace Zakriyarahman\Microbilt\Subject\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class SubjectConfirmation_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for SubjectConfirmation_Type originally named SubjectConfirmation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class SubjectConfirmation_Type extends Aggregate
{
    /**
     * The ByName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByName;
    /**
     * The ByFamilyName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByFamilyName;
    /**
     * The ByGivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByGivenName;
    /**
     * The ByPrefGivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByPrefGivenName;
    /**
     * The ByMiddleName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByMiddleName;
    /**
     * The ByDOB
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByDOB;
    /**
     * The ByGovernmentId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByGovernmentId;
    /**
     * The ByOtherId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $ByOtherId;
    /**
     * The BySex
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $BySex;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for SubjectConfirmation_Type
     * @see parent::__construct()
     * @param Boolean $_byName
     * @param Boolean $_byFamilyName
     * @param Boolean $_byGivenName
     * @param Boolean $_byPrefGivenName
     * @param Boolean $_byMiddleName
     * @param Boolean $_byDOB
     * @param Boolean $_byGovernmentId
     * @param Boolean $_byOtherId
     * @param Boolean $_bySex
     * @param Message_Type $_message
     * @return SubjectConfirmation_Type
     */
    public function __construct($_byName = NULL,$_byFamilyName = NULL,$_byGivenName = NULL,$_byPrefGivenName = NULL,$_byMiddleName = NULL,$_byDOB = NULL,$_byGovernmentId = NULL,$_byOtherId = NULL,$_bySex = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ByName'=>$_byName,'ByFamilyName'=>$_byFamilyName,'ByGivenName'=>$_byGivenName,'ByPrefGivenName'=>$_byPrefGivenName,'ByMiddleName'=>$_byMiddleName,'ByDOB'=>$_byDOB,'ByGovernmentId'=>$_byGovernmentId,'ByOtherId'=>$_byOtherId,'BySex'=>$_bySex,'Message'=>$_message),false);
    }
    /**
     * Get ByName value
     * @return Boolean|null
     */
    public function getByName()
    {
        return $this->ByName;
    }
    /**
     * Set ByName value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byName the ByName
     * @return Boolean
     */
    public function setByName($_byName)
    {
        if(!Boolean::valueIsValid($_byName))
        {
            return false;
        }
        return ($this->ByName = $_byName);
    }
    /**
     * Get ByFamilyName value
     * @return Boolean|null
     */
    public function getByFamilyName()
    {
        return $this->ByFamilyName;
    }
    /**
     * Set ByFamilyName value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byFamilyName the ByFamilyName
     * @return Boolean
     */
    public function setByFamilyName($_byFamilyName)
    {
        if(!Boolean::valueIsValid($_byFamilyName))
        {
            return false;
        }
        return ($this->ByFamilyName = $_byFamilyName);
    }
    /**
     * Get ByGivenName value
     * @return Boolean|null
     */
    public function getByGivenName()
    {
        return $this->ByGivenName;
    }
    /**
     * Set ByGivenName value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byGivenName the ByGivenName
     * @return Boolean
     */
    public function setByGivenName($_byGivenName)
    {
        if(!Boolean::valueIsValid($_byGivenName))
        {
            return false;
        }
        return ($this->ByGivenName = $_byGivenName);
    }
    /**
     * Get ByPrefGivenName value
     * @return Boolean|null
     */
    public function getByPrefGivenName()
    {
        return $this->ByPrefGivenName;
    }
    /**
     * Set ByPrefGivenName value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byPrefGivenName the ByPrefGivenName
     * @return Boolean
     */
    public function setByPrefGivenName($_byPrefGivenName)
    {
        if(!Boolean::valueIsValid($_byPrefGivenName))
        {
            return false;
        }
        return ($this->ByPrefGivenName = $_byPrefGivenName);
    }
    /**
     * Get ByMiddleName value
     * @return Boolean|null
     */
    public function getByMiddleName()
    {
        return $this->ByMiddleName;
    }
    /**
     * Set ByMiddleName value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byMiddleName the ByMiddleName
     * @return Boolean
     */
    public function setByMiddleName($_byMiddleName)
    {
        if(!Boolean::valueIsValid($_byMiddleName))
        {
            return false;
        }
        return ($this->ByMiddleName = $_byMiddleName);
    }
    /**
     * Get ByDOB value
     * @return Boolean|null
     */
    public function getByDOB()
    {
        return $this->ByDOB;
    }
    /**
     * Set ByDOB value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byDOB the ByDOB
     * @return Boolean
     */
    public function setByDOB($_byDOB)
    {
        if(!Boolean::valueIsValid($_byDOB))
        {
            return false;
        }
        return ($this->ByDOB = $_byDOB);
    }
    /**
     * Get ByGovernmentId value
     * @return Boolean|null
     */
    public function getByGovernmentId()
    {
        return $this->ByGovernmentId;
    }
    /**
     * Set ByGovernmentId value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byGovernmentId the ByGovernmentId
     * @return Boolean
     */
    public function setByGovernmentId($_byGovernmentId)
    {
        if(!Boolean::valueIsValid($_byGovernmentId))
        {
            return false;
        }
        return ($this->ByGovernmentId = $_byGovernmentId);
    }
    /**
     * Get ByOtherId value
     * @return Boolean|null
     */
    public function getByOtherId()
    {
        return $this->ByOtherId;
    }
    /**
     * Set ByOtherId value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_byOtherId the ByOtherId
     * @return Boolean
     */
    public function setByOtherId($_byOtherId)
    {
        if(!Boolean::valueIsValid($_byOtherId))
        {
            return false;
        }
        return ($this->ByOtherId = $_byOtherId);
    }
    /**
     * Get BySex value
     * @return Boolean|null
     */
    public function getBySex()
    {
        return $this->BySex;
    }
    /**
     * Set BySex value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_bySex the BySex
     * @return Boolean
     */
    public function setBySex($_bySex)
    {
        if(!Boolean::valueIsValid($_bySex))
        {
            return false;
        }
        return ($this->BySex = $_bySex);
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
     * @return SubjectConfirmation_Type
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
