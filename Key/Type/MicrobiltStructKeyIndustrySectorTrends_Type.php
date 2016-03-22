<?php
/**
 * File for class MicrobiltStructKeyIndustrySectorTrends_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructKeyIndustrySectorTrends_Type originally named KeyIndustrySectorTrends_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructKeyIndustrySectorTrends_Type extends MicrobiltStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The SectorPeriodInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPeriodInfo_Type
     */
    public $SectorPeriodInfo;
    /**
     * The SectorElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructElementsInfo_Type
     */
    public $SectorElementsInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for KeyIndustrySectorTrends_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param MicrobiltStructPeriodInfo_Type $_sectorPeriodInfo
     * @param MicrobiltStructElementsInfo_Type $_sectorElementsInfo
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructKeyIndustrySectorTrends_Type
     */
    public function __construct($_msgClass = NULL,$_sectorPeriodInfo = NULL,$_sectorElementsInfo = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('MsgClass'=>$_msgClass,'SectorPeriodInfo'=>$_sectorPeriodInfo,'SectorElementsInfo'=>$_sectorElementsInfo,'Message'=>$_message),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get SectorPeriodInfo value
     * @return MicrobiltStructPeriodInfo_Type|null
     */
    public function getSectorPeriodInfo()
    {
        return $this->SectorPeriodInfo;
    }
    /**
     * Set SectorPeriodInfo value
     * @param MicrobiltStructPeriodInfo_Type $_sectorPeriodInfo the SectorPeriodInfo
     * @return MicrobiltStructPeriodInfo_Type
     */
    public function setSectorPeriodInfo($_sectorPeriodInfo)
    {
        return ($this->SectorPeriodInfo = $_sectorPeriodInfo);
    }
    /**
     * Get SectorElementsInfo value
     * @return MicrobiltStructElementsInfo_Type|null
     */
    public function getSectorElementsInfo()
    {
        return $this->SectorElementsInfo;
    }
    /**
     * Set SectorElementsInfo value
     * @param MicrobiltStructElementsInfo_Type $_sectorElementsInfo the SectorElementsInfo
     * @return MicrobiltStructElementsInfo_Type
     */
    public function setSectorElementsInfo($_sectorElementsInfo)
    {
        return ($this->SectorElementsInfo = $_sectorElementsInfo);
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
     * @return MicrobiltStructKeyIndustrySectorTrends_Type
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
