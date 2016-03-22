<?php
/**
 * File for class MicrobiltServiceMap
 * @package Microbilt
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltServiceMap originally named Map
 * @package Microbilt
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltServiceMap extends MicrobiltWsdlClass
{
    /**
     * Method to call the operation originally named Map
     * @uses MicrobiltWsdlClass::getSoapClient()
     * @uses MicrobiltWsdlClass::setResult()
     * @uses MicrobiltWsdlClass::saveLastError()
     * @param MicrobiltStructMap $_microbiltStructMap
     * @return MicrobiltStructMapResponse
     */
    public function Map(MicrobiltStructMap $_microbiltStructMap)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Map($_microbiltStructMap));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MicrobiltWsdlClass::getResult()
     * @return MicrobiltStructMapResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
