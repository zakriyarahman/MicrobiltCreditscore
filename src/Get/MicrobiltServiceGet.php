<?php

namespace Zakriyarahman\Microbilt\Get;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Get\Report\MicrobiltStructGetReport;
use Zakriyarahman\Microbilt\Get\Report\MicrobiltStructGetRawReport;
use Zakriyarahman\Microbilt\Get\Report\MicrobiltStructGetArchiveReport;

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
     * @param MicrobiltStructGetReport $_microbiltStructGetReport
     * @return MicrobiltStructGetReportResponse
     */
    public function GetReport(MicrobiltStructGetReport $_microbiltStructGetReport)
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
     * @param MicrobiltStructGetRawReport $_microbiltStructGetRawReport
     * @return MicrobiltStructGetRawReportResponse
     */
    public function GetRawReport(MicrobiltStructGetRawReport $_microbiltStructGetRawReport)
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
     * @param MicrobiltStructGetArchiveReport $_microbiltStructGetArchiveReport
     * @return MicrobiltStructGetArchiveReportResponse
     */
    public function GetArchiveReport(MicrobiltStructGetArchiveReport $_microbiltStructGetArchiveReport)
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
     * @return MicrobiltStructGetArchiveReportResponse|MicrobiltStructGetRawReportResponse|MicrobiltStructGetReportResponse
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
