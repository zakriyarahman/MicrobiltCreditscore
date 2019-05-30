<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructDocumentInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructDocumentInfo_Type originally named DocumentInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructDocumentInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The CategoryType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CategoryType;
    /**
     * The DocSource
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DocSource;
    /**
     * The DocType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DocType;
    /**
     * The DtOfDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtOfDocument;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for DocumentInfo_Type
     * @see parent::__construct()
     * @param string $_categoryType
     * @param string $_docSource
     * @param string $_docType
     * @param string $_dtOfDocument
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructDocumentInfo_Type
     */
    public function __construct($_categoryType = NULL,$_docSource = NULL,$_docType = NULL,$_dtOfDocument = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('CategoryType'=>$_categoryType,'DocSource'=>$_docSource,'DocType'=>$_docType,'DtOfDocument'=>$_dtOfDocument,'Message'=>$_message),false);
    }
    /**
     * Get CategoryType value
     * @return string|null
     */
    public function getCategoryType()
    {
        return $this->CategoryType;
    }
    /**
     * Set CategoryType value
     * @param string $_categoryType the CategoryType
     * @return string
     */
    public function setCategoryType($_categoryType)
    {
        return ($this->CategoryType = $_categoryType);
    }
    /**
     * Get DocSource value
     * @return string|null
     */
    public function getDocSource()
    {
        return $this->DocSource;
    }
    /**
     * Set DocSource value
     * @param string $_docSource the DocSource
     * @return string
     */
    public function setDocSource($_docSource)
    {
        return ($this->DocSource = $_docSource);
    }
    /**
     * Get DocType value
     * @return string|null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param string $_docType the DocType
     * @return string
     */
    public function setDocType($_docType)
    {
        return ($this->DocType = $_docType);
    }
    /**
     * Get DtOfDocument value
     * @return string|null
     */
    public function getDtOfDocument()
    {
        return $this->DtOfDocument;
    }
    /**
     * Set DtOfDocument value
     * @param string $_dtOfDocument the DtOfDocument
     * @return string
     */
    public function setDtOfDocument($_dtOfDocument)
    {
        return ($this->DtOfDocument = $_dtOfDocument);
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
     * @return MicrobiltStructDocumentInfo_Type
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
