<?php

namespace Zakriyarahman\Microbilt\School\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class SchoolInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for SchoolInfo_Type originally named SchoolInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class SchoolInfo_Type extends Aggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var OrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The StartDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StartDt;
    /**
     * The EndDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EndDt;
    /**
     * The GraduationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GraduationDt;
    /**
     * The Diploma
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Diploma;
    /**
     * The DegreeMajor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DegreeMajor;
    /**
     * The DegreeMinor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DegreeMinor;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for SchoolInfo_Type
     * @see parent::__construct()
     * @param OrgInfo_Type $_orgInfo
     * @param string $_startDt
     * @param string $_endDt
     * @param string $_graduationDt
     * @param string $_diploma
     * @param string $_degreeMajor
     * @param string $_degreeMinor
     * @param Message_Type $_message
     * @return SchoolInfo_Type
     */
    public function __construct($_orgInfo = NULL,$_startDt = NULL,$_endDt = NULL,$_graduationDt = NULL,$_diploma = NULL,$_degreeMajor = NULL,$_degreeMinor = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'StartDt'=>$_startDt,'EndDt'=>$_endDt,'GraduationDt'=>$_graduationDt,'Diploma'=>$_diploma,'DegreeMajor'=>$_degreeMajor,'DegreeMinor'=>$_degreeMinor,'Message'=>$_message),false);
    }
    /**
     * Get OrgInfo value
     * @return OrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param OrgInfo_Type $_orgInfo the OrgInfo
     * @return OrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
    }
    /**
     * Get StartDt value
     * @return string|null
     */
    public function getStartDt()
    {
        return $this->StartDt;
    }
    /**
     * Set StartDt value
     * @param string $_startDt the StartDt
     * @return string
     */
    public function setStartDt($_startDt)
    {
        return ($this->StartDt = $_startDt);
    }
    /**
     * Get EndDt value
     * @return string|null
     */
    public function getEndDt()
    {
        return $this->EndDt;
    }
    /**
     * Set EndDt value
     * @param string $_endDt the EndDt
     * @return string
     */
    public function setEndDt($_endDt)
    {
        return ($this->EndDt = $_endDt);
    }
    /**
     * Get GraduationDt value
     * @return string|null
     */
    public function getGraduationDt()
    {
        return $this->GraduationDt;
    }
    /**
     * Set GraduationDt value
     * @param string $_graduationDt the GraduationDt
     * @return string
     */
    public function setGraduationDt($_graduationDt)
    {
        return ($this->GraduationDt = $_graduationDt);
    }
    /**
     * Get Diploma value
     * @return string|null
     */
    public function getDiploma()
    {
        return $this->Diploma;
    }
    /**
     * Set Diploma value
     * @param string $_diploma the Diploma
     * @return string
     */
    public function setDiploma($_diploma)
    {
        return ($this->Diploma = $_diploma);
    }
    /**
     * Get DegreeMajor value
     * @return string|null
     */
    public function getDegreeMajor()
    {
        return $this->DegreeMajor;
    }
    /**
     * Set DegreeMajor value
     * @param string $_degreeMajor the DegreeMajor
     * @return string
     */
    public function setDegreeMajor($_degreeMajor)
    {
        return ($this->DegreeMajor = $_degreeMajor);
    }
    /**
     * Get DegreeMinor value
     * @return string|null
     */
    public function getDegreeMinor()
    {
        return $this->DegreeMinor;
    }
    /**
     * Set DegreeMinor value
     * @param string $_degreeMinor the DegreeMinor
     * @return string
     */
    public function setDegreeMinor($_degreeMinor)
    {
        return ($this->DegreeMinor = $_degreeMinor);
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
     * @return SchoolInfo_Type
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
