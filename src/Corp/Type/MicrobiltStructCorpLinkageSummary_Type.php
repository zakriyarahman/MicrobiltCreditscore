<?php

namespace Zakriyarahman\Microbilt\Corp\Type;

/**
 * File for class MicrobiltStructCorpLinkageSummary_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructCorpLinkageSummary_Type originally named CorpLinkageSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructCorpLinkageSummary_Type extends MicrobiltStructAggregate
{
    /**
     * The BusType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusType;
    /**
     * The NumOfSubsidiaries
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfSubsidiaries;
    /**
     * The NumOfBranches
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NumOfBranches;
    /**
     * The BranchesInMidW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BranchesInMidW;
    /**
     * The BranchesInNE
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BranchesInNE;
    /**
     * The BranchesInNW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BranchesInNW;
    /**
     * The BranchesInS
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BranchesInS;
    /**
     * The BranchesInCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BranchesInCentral;
    /**
     * The BranchesInSW
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $BranchesInSW;
    /**
     * Constructor method for CorpLinkageSummary_Type
     * @see parent::__construct()
     * @param string $_busType
     * @param string $_numOfSubsidiaries
     * @param string $_numOfBranches
     * @param MicrobiltEnumBoolean $_branchesInMidW
     * @param MicrobiltEnumBoolean $_branchesInNE
     * @param MicrobiltEnumBoolean $_branchesInNW
     * @param MicrobiltEnumBoolean $_branchesInS
     * @param MicrobiltEnumBoolean $_branchesInCentral
     * @param MicrobiltEnumBoolean $_branchesInSW
     * @return MicrobiltStructCorpLinkageSummary_Type
     */
    public function __construct($_busType = NULL,$_numOfSubsidiaries = NULL,$_numOfBranches = NULL,$_branchesInMidW = NULL,$_branchesInNE = NULL,$_branchesInNW = NULL,$_branchesInS = NULL,$_branchesInCentral = NULL,$_branchesInSW = NULL)
    {
        MicrobiltWsdlClass::__construct(array('BusType'=>$_busType,'NumOfSubsidiaries'=>$_numOfSubsidiaries,'NumOfBranches'=>$_numOfBranches,'BranchesInMidW'=>$_branchesInMidW,'BranchesInNE'=>$_branchesInNE,'BranchesInNW'=>$_branchesInNW,'BranchesInS'=>$_branchesInS,'BranchesInCentral'=>$_branchesInCentral,'BranchesInSW'=>$_branchesInSW),false);
    }
    /**
     * Get BusType value
     * @return string|null
     */
    public function getBusType()
    {
        return $this->BusType;
    }
    /**
     * Set BusType value
     * @param string $_busType the BusType
     * @return string
     */
    public function setBusType($_busType)
    {
        return ($this->BusType = $_busType);
    }
    /**
     * Get NumOfSubsidiaries value
     * @return string|null
     */
    public function getNumOfSubsidiaries()
    {
        return $this->NumOfSubsidiaries;
    }
    /**
     * Set NumOfSubsidiaries value
     * @param string $_numOfSubsidiaries the NumOfSubsidiaries
     * @return string
     */
    public function setNumOfSubsidiaries($_numOfSubsidiaries)
    {
        return ($this->NumOfSubsidiaries = $_numOfSubsidiaries);
    }
    /**
     * Get NumOfBranches value
     * @return string|null
     */
    public function getNumOfBranches()
    {
        return $this->NumOfBranches;
    }
    /**
     * Set NumOfBranches value
     * @param string $_numOfBranches the NumOfBranches
     * @return string
     */
    public function setNumOfBranches($_numOfBranches)
    {
        return ($this->NumOfBranches = $_numOfBranches);
    }
    /**
     * Get BranchesInMidW value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBranchesInMidW()
    {
        return $this->BranchesInMidW;
    }
    /**
     * Set BranchesInMidW value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_branchesInMidW the BranchesInMidW
     * @return MicrobiltEnumBoolean
     */
    public function setBranchesInMidW($_branchesInMidW)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_branchesInMidW))
        {
            return false;
        }
        return ($this->BranchesInMidW = $_branchesInMidW);
    }
    /**
     * Get BranchesInNE value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBranchesInNE()
    {
        return $this->BranchesInNE;
    }
    /**
     * Set BranchesInNE value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_branchesInNE the BranchesInNE
     * @return MicrobiltEnumBoolean
     */
    public function setBranchesInNE($_branchesInNE)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_branchesInNE))
        {
            return false;
        }
        return ($this->BranchesInNE = $_branchesInNE);
    }
    /**
     * Get BranchesInNW value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBranchesInNW()
    {
        return $this->BranchesInNW;
    }
    /**
     * Set BranchesInNW value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_branchesInNW the BranchesInNW
     * @return MicrobiltEnumBoolean
     */
    public function setBranchesInNW($_branchesInNW)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_branchesInNW))
        {
            return false;
        }
        return ($this->BranchesInNW = $_branchesInNW);
    }
    /**
     * Get BranchesInS value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBranchesInS()
    {
        return $this->BranchesInS;
    }
    /**
     * Set BranchesInS value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_branchesInS the BranchesInS
     * @return MicrobiltEnumBoolean
     */
    public function setBranchesInS($_branchesInS)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_branchesInS))
        {
            return false;
        }
        return ($this->BranchesInS = $_branchesInS);
    }
    /**
     * Get BranchesInCentral value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBranchesInCentral()
    {
        return $this->BranchesInCentral;
    }
    /**
     * Set BranchesInCentral value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_branchesInCentral the BranchesInCentral
     * @return MicrobiltEnumBoolean
     */
    public function setBranchesInCentral($_branchesInCentral)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_branchesInCentral))
        {
            return false;
        }
        return ($this->BranchesInCentral = $_branchesInCentral);
    }
    /**
     * Get BranchesInSW value
     * @return MicrobiltEnumBoolean|null
     */
    public function getBranchesInSW()
    {
        return $this->BranchesInSW;
    }
    /**
     * Set BranchesInSW value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_branchesInSW the BranchesInSW
     * @return MicrobiltEnumBoolean
     */
    public function setBranchesInSW($_branchesInSW)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_branchesInSW))
        {
            return false;
        }
        return ($this->BranchesInSW = $_branchesInSW);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructCorpLinkageSummary_Type
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
