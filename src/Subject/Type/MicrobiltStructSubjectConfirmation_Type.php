<?php

namespace Zakriyarahman\Microbilt\Subject\Type;

use Zakriyarahman\Microbilt\Aggregate\MicrobiltStructAggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\MicrobiltEnumBoolean;

/**
 * File for class MicrobiltStructSubjectConfirmation_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructSubjectConfirmation_Type originally named SubjectConfirmation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructSubjectConfirmation_Type extends MicrobiltStructAggregate
{
    /**
     * The ByName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByName;
    /**
     * The ByFamilyName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByFamilyName;
    /**
     * The ByGivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByGivenName;
    /**
     * The ByPrefGivenName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByPrefGivenName;
    /**
     * The ByMiddleName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByMiddleName;
    /**
     * The ByDOB
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByDOB;
    /**
     * The ByGovernmentId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByGovernmentId;
    /**
     * The ByOtherId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $ByOtherId;
    /**
     * The BySex
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BySex;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for SubjectConfirmation_Type
     * @see parent::__construct()
     * @param MicrobiltEnumBoolean $_byName
     * @param MicrobiltEnumBoolean $_byFamilyName
     * @param MicrobiltEnumBoolean $_byGivenName
     * @param MicrobiltEnumBoolean $_byPrefGivenName
     * @param MicrobiltEnumBoolean $_byMiddleName
     * @param MicrobiltEnumBoolean $_byDOB
     * @param MicrobiltEnumBoolean $_byGovernmentId
     * @param MicrobiltEnumBoolean $_byOtherId
     * @param MicrobiltEnumBoolean $_bySex
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructSubjectConfirmation_Type
     */
    public function __construct($_byName = NULL,$_byFamilyName = NULL,$_byGivenName = NULL,$_byPrefGivenName = NULL,$_byMiddleName = NULL,$_byDOB = NULL,$_byGovernmentId = NULL,$_byOtherId = NULL,$_bySex = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ByName'=>$_byName,'ByFamilyName'=>$_byFamilyName,'ByGivenName'=>$_byGivenName,'ByPrefGivenName'=>$_byPrefGivenName,'ByMiddleName'=>$_byMiddleName,'ByDOB'=>$_byDOB,'ByGovernmentId'=>$_byGovernmentId,'ByOtherId'=>$_byOtherId,'BySex'=>$_bySex,'Message'=>$_message),false);
    }
    /**
     * Get ByName value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByName()
    {
        return $this->ByName;
    }
    /**
     * Set ByName value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byName the ByName
     * @return MicrobiltEnumBoolean
     */
    public function setByName($_byName)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byName))
        {
            return false;
        }
        return ($this->ByName = $_byName);
    }
    /**
     * Get ByFamilyName value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByFamilyName()
    {
        return $this->ByFamilyName;
    }
    /**
     * Set ByFamilyName value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byFamilyName the ByFamilyName
     * @return MicrobiltEnumBoolean
     */
    public function setByFamilyName($_byFamilyName)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byFamilyName))
        {
            return false;
        }
        return ($this->ByFamilyName = $_byFamilyName);
    }
    /**
     * Get ByGivenName value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByGivenName()
    {
        return $this->ByGivenName;
    }
    /**
     * Set ByGivenName value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byGivenName the ByGivenName
     * @return MicrobiltEnumBoolean
     */
    public function setByGivenName($_byGivenName)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byGivenName))
        {
            return false;
        }
        return ($this->ByGivenName = $_byGivenName);
    }
    /**
     * Get ByPrefGivenName value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByPrefGivenName()
    {
        return $this->ByPrefGivenName;
    }
    /**
     * Set ByPrefGivenName value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byPrefGivenName the ByPrefGivenName
     * @return MicrobiltEnumBoolean
     */
    public function setByPrefGivenName($_byPrefGivenName)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byPrefGivenName))
        {
            return false;
        }
        return ($this->ByPrefGivenName = $_byPrefGivenName);
    }
    /**
     * Get ByMiddleName value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByMiddleName()
    {
        return $this->ByMiddleName;
    }
    /**
     * Set ByMiddleName value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byMiddleName the ByMiddleName
     * @return MicrobiltEnumBoolean
     */
    public function setByMiddleName($_byMiddleName)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byMiddleName))
        {
            return false;
        }
        return ($this->ByMiddleName = $_byMiddleName);
    }
    /**
     * Get ByDOB value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByDOB()
    {
        return $this->ByDOB;
    }
    /**
     * Set ByDOB value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byDOB the ByDOB
     * @return MicrobiltEnumBoolean
     */
    public function setByDOB($_byDOB)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byDOB))
        {
            return false;
        }
        return ($this->ByDOB = $_byDOB);
    }
    /**
     * Get ByGovernmentId value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByGovernmentId()
    {
        return $this->ByGovernmentId;
    }
    /**
     * Set ByGovernmentId value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byGovernmentId the ByGovernmentId
     * @return MicrobiltEnumBoolean
     */
    public function setByGovernmentId($_byGovernmentId)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byGovernmentId))
        {
            return false;
        }
        return ($this->ByGovernmentId = $_byGovernmentId);
    }
    /**
     * Get ByOtherId value
     * @return MicrobiltEnumBoolean|null
     */
    public function getByOtherId()
    {
        return $this->ByOtherId;
    }
    /**
     * Set ByOtherId value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_byOtherId the ByOtherId
     * @return MicrobiltEnumBoolean
     */
    public function setByOtherId($_byOtherId)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_byOtherId))
        {
            return false;
        }
        return ($this->ByOtherId = $_byOtherId);
    }
    /**
     * Get BySex value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBySex()
    {
        return $this->BySex;
    }
    /**
     * Set BySex value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_bySex the BySex
     * @return MicrobiltEnumBoolean
     */
    public function setBySex($_bySex)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_bySex))
        {
            return false;
        }
        return ($this->BySex = $_bySex);
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
     * @return MicrobiltStructSubjectConfirmation_Type
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
