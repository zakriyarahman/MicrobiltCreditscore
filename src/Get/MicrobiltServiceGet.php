<?php

namespace Zakriyarahman\Microbilt\Get;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Get\Report\GetReport;
use Zakriyarahman\Microbilt\Get\Report\GetRawReport;
use Zakriyarahman\Microbilt\Get\Report\GetArchiveReport;

/**
 * File for class MicrobiltServiceGet
 * @package Microbilt
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltServiceGet originally named Get
 * @package Microbilt
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltServiceGet extends MicrobiltWsdlClass
{
    /**
     * Method to call the operation originally named GetReport
     * @uses MicrobiltWsdlClass::getSoapClient()
     * @uses MicrobiltWsdlClass::setResult()
     * @uses MicrobiltWsdlClass::saveLastError()
     * @param GetReport $_microbiltStructGetReport
     * @return GetReportResponse
     */
    public function GetReport(GetReport $_microbiltStructGetReport)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetReport($_microbiltStructGetReport));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetRawReport
     * @uses MicrobiltWsdlClass::getSoapClient()
     * @uses MicrobiltWsdlClass::setResult()
     * @uses MicrobiltWsdlClass::saveLastError()
     * @param GetRawReport $_microbiltStructGetRawReport
     * @return GetRawReportResponse
     */
    public function GetRawReport(GetRawReport $_microbiltStructGetRawReport)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetRawReport($_microbiltStructGetRawReport));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetArchiveReport
     * @uses MicrobiltWsdlClass::getSoapClient()
     * @uses MicrobiltWsdlClass::setResult()
     * @uses MicrobiltWsdlClass::saveLastError()
     * @param GetArchiveReport $_microbiltStructGetArchiveReport
     * @return GetArchiveReportResponse
     */
    public function GetArchiveReport(GetArchiveReport $_microbiltStructGetArchiveReport)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetArchiveReport($_microbiltStructGetArchiveReport));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MicrobiltWsdlClass::getResult()
     * @return GetArchiveReportResponse|GetRawReportResponse|GetReportResponse
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
