<?php

namespace Zakriyarahman\Microbilt;

/**
 * File for class MicrobiltStructAttachment_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAttachment_Type originally named Attachment_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAttachment_Type extends MicrobiltStructAggregate
{
    /**
     * The ContentType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContentType;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var base64Binary
     */
    public $Content;
    /**
     * The ContentURL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContentURL;
    /**
     * The ContentSource
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContentSource;
    /**
     * The ImageCaption
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ImageCaption;
    /**
     * Constructor method for Attachment_Type
     * @see parent::__construct()
     * @param string $_contentType
     * @param base64Binary $_content
     * @param string $_contentURL
     * @param string $_contentSource
     * @param string $_imageCaption
     * @return MicrobiltStructAttachment_Type
     */
    public function __construct($_contentType = NULL,$_content = NULL,$_contentURL = NULL,$_contentSource = NULL,$_imageCaption = NULL)
    {
        MicrobiltWsdlClass::__construct(array('ContentType'=>$_contentType,'Content'=>$_content,'ContentURL'=>$_contentURL,'ContentSource'=>$_contentSource,'ImageCaption'=>$_imageCaption),false);
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $_contentType the ContentType
     * @return string
     */
    public function setContentType($_contentType)
    {
        return ($this->ContentType = $_contentType);
    }
    /**
     * Get Content value
     * @return base64Binary|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param base64Binary $_content the Content
     * @return base64Binary
     */
    public function setContent($_content)
    {
        return ($this->Content = $_content);
    }
    /**
     * Get ContentURL value
     * @return string|null
     */
    public function getContentURL()
    {
        return $this->ContentURL;
    }
    /**
     * Set ContentURL value
     * @param string $_contentURL the ContentURL
     * @return string
     */
    public function setContentURL($_contentURL)
    {
        return ($this->ContentURL = $_contentURL);
    }
    /**
     * Get ContentSource value
     * @return string|null
     */
    public function getContentSource()
    {
        return $this->ContentSource;
    }
    /**
     * Set ContentSource value
     * @param string $_contentSource the ContentSource
     * @return string
     */
    public function setContentSource($_contentSource)
    {
        return ($this->ContentSource = $_contentSource);
    }
    /**
     * Get ImageCaption value
     * @return string|null
     */
    public function getImageCaption()
    {
        return $this->ImageCaption;
    }
    /**
     * Set ImageCaption value
     * @param string $_imageCaption the ImageCaption
     * @return string
     */
    public function setImageCaption($_imageCaption)
    {
        return ($this->ImageCaption = $_imageCaption);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAttachment_Type
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
