<?php

namespace Zakriyarahman\Microbilt\Physical\Type;

/**
 * File for class MicrobiltStructPhysicalCharacteristics_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructPhysicalCharacteristics_Type originally named PhysicalCharacteristics_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructPhysicalCharacteristics_Type extends MicrobiltStructAggregate
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Age;
    /**
     * The Race
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Race;
    /**
     * The Ethnicity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Ethnicity;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Gender;
    /**
     * The HairColor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HairColor;
    /**
     * The EyeColor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EyeColor;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Height;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Weight;
    /**
     * The SkinTone
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SkinTone;
    /**
     * The BuildType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BuildType;
    /**
     * The IdentifyingMarks
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IdentifyingMarks;
    /**
     * The ShoeSize
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ShoeSize;
    /**
     * The CorrectiveLenses
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $CorrectiveLenses;
    /**
     * Constructor method for PhysicalCharacteristics_Type
     * @see parent::__construct()
     * @param string $_age
     * @param string $_race
     * @param string $_ethnicity
     * @param string $_gender
     * @param string $_hairColor
     * @param string $_eyeColor
     * @param string $_height
     * @param string $_weight
     * @param string $_skinTone
     * @param string $_buildType
     * @param string $_identifyingMarks
     * @param string $_shoeSize
     * @param MicrobiltEnumBoolean $_correctiveLenses
     * @return MicrobiltStructPhysicalCharacteristics_Type
     */
    public function __construct($_age = NULL,$_race = NULL,$_ethnicity = NULL,$_gender = NULL,$_hairColor = NULL,$_eyeColor = NULL,$_height = NULL,$_weight = NULL,$_skinTone = NULL,$_buildType = NULL,$_identifyingMarks = NULL,$_shoeSize = NULL,$_correctiveLenses = NULL)
    {
        MicrobiltWsdlClass::__construct(array('Age'=>$_age,'Race'=>$_race,'Ethnicity'=>$_ethnicity,'Gender'=>$_gender,'HairColor'=>$_hairColor,'EyeColor'=>$_eyeColor,'Height'=>$_height,'Weight'=>$_weight,'SkinTone'=>$_skinTone,'BuildType'=>$_buildType,'IdentifyingMarks'=>$_identifyingMarks,'ShoeSize'=>$_shoeSize,'CorrectiveLenses'=>$_correctiveLenses),false);
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $_age the Age
     * @return string
     */
    public function setAge($_age)
    {
        return ($this->Age = $_age);
    }
    /**
     * Get Race value
     * @return string|null
     */
    public function getRace()
    {
        return $this->Race;
    }
    /**
     * Set Race value
     * @param string $_race the Race
     * @return string
     */
    public function setRace($_race)
    {
        return ($this->Race = $_race);
    }
    /**
     * Get Ethnicity value
     * @return string|null
     */
    public function getEthnicity()
    {
        return $this->Ethnicity;
    }
    /**
     * Set Ethnicity value
     * @param string $_ethnicity the Ethnicity
     * @return string
     */
    public function setEthnicity($_ethnicity)
    {
        return ($this->Ethnicity = $_ethnicity);
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $_gender the Gender
     * @return string
     */
    public function setGender($_gender)
    {
        return ($this->Gender = $_gender);
    }
    /**
     * Get HairColor value
     * @return string|null
     */
    public function getHairColor()
    {
        return $this->HairColor;
    }
    /**
     * Set HairColor value
     * @param string $_hairColor the HairColor
     * @return string
     */
    public function setHairColor($_hairColor)
    {
        return ($this->HairColor = $_hairColor);
    }
    /**
     * Get EyeColor value
     * @return string|null
     */
    public function getEyeColor()
    {
        return $this->EyeColor;
    }
    /**
     * Set EyeColor value
     * @param string $_eyeColor the EyeColor
     * @return string
     */
    public function setEyeColor($_eyeColor)
    {
        return ($this->EyeColor = $_eyeColor);
    }
    /**
     * Get Height value
     * @return string|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param string $_height the Height
     * @return string
     */
    public function setHeight($_height)
    {
        return ($this->Height = $_height);
    }
    /**
     * Get Weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param string $_weight the Weight
     * @return string
     */
    public function setWeight($_weight)
    {
        return ($this->Weight = $_weight);
    }
    /**
     * Get SkinTone value
     * @return string|null
     */
    public function getSkinTone()
    {
        return $this->SkinTone;
    }
    /**
     * Set SkinTone value
     * @param string $_skinTone the SkinTone
     * @return string
     */
    public function setSkinTone($_skinTone)
    {
        return ($this->SkinTone = $_skinTone);
    }
    /**
     * Get BuildType value
     * @return string|null
     */
    public function getBuildType()
    {
        return $this->BuildType;
    }
    /**
     * Set BuildType value
     * @param string $_buildType the BuildType
     * @return string
     */
    public function setBuildType($_buildType)
    {
        return ($this->BuildType = $_buildType);
    }
    /**
     * Get IdentifyingMarks value
     * @return string|null
     */
    public function getIdentifyingMarks()
    {
        return $this->IdentifyingMarks;
    }
    /**
     * Set IdentifyingMarks value
     * @param string $_identifyingMarks the IdentifyingMarks
     * @return string
     */
    public function setIdentifyingMarks($_identifyingMarks)
    {
        return ($this->IdentifyingMarks = $_identifyingMarks);
    }
    /**
     * Get ShoeSize value
     * @return string|null
     */
    public function getShoeSize()
    {
        return $this->ShoeSize;
    }
    /**
     * Set ShoeSize value
     * @param string $_shoeSize the ShoeSize
     * @return string
     */
    public function setShoeSize($_shoeSize)
    {
        return ($this->ShoeSize = $_shoeSize);
    }
    /**
     * Get CorrectiveLenses value
     * @return MicrobiltEnumBoolean|null
     */
    public function getCorrectiveLenses()
    {
        return $this->CorrectiveLenses;
    }
    /**
     * Set CorrectiveLenses value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_correctiveLenses the CorrectiveLenses
     * @return MicrobiltEnumBoolean
     */
    public function setCorrectiveLenses($_correctiveLenses)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_correctiveLenses))
        {
            return false;
        }
        return ($this->CorrectiveLenses = $_correctiveLenses);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructPhysicalCharacteristics_Type
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
