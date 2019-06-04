<?php

namespace Zakriyarahman\Microbilt\Key\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class KeyIndustrySectorTrends_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for KeyIndustrySectorTrends_Type originally named KeyIndustrySectorTrends_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class KeyIndustrySectorTrends_Type extends Aggregate
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
     * @var PeriodInfo_Type
     */
    public $SectorPeriodInfo;
    /**
     * The SectorElementsInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var ElementsInfo_Type
     */
    public $SectorElementsInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Message_Type
     */
    public $Message;
    /**
     * Constructor method for KeyIndustrySectorTrends_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param PeriodInfo_Type $_sectorPeriodInfo
     * @param ElementsInfo_Type $_sectorElementsInfo
     * @param Message_Type $_message
     * @return KeyIndustrySectorTrends_Type
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
     * @return PeriodInfo_Type|null
     */
    public function getSectorPeriodInfo()
    {
        return $this->SectorPeriodInfo;
    }
    /**
     * Set SectorPeriodInfo value
     * @param PeriodInfo_Type $_sectorPeriodInfo the SectorPeriodInfo
     * @return PeriodInfo_Type
     */
    public function setSectorPeriodInfo($_sectorPeriodInfo)
    {
        return ($this->SectorPeriodInfo = $_sectorPeriodInfo);
    }
    /**
     * Get SectorElementsInfo value
     * @return ElementsInfo_Type|null
     */
    public function getSectorElementsInfo()
    {
        return $this->SectorElementsInfo;
    }
    /**
     * Set SectorElementsInfo value
     * @param ElementsInfo_Type $_sectorElementsInfo the SectorElementsInfo
     * @return ElementsInfo_Type
     */
    public function setSectorElementsInfo($_sectorElementsInfo)
    {
        return ($this->SectorElementsInfo = $_sectorElementsInfo);
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
     * @return KeyIndustrySectorTrends_Type
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
