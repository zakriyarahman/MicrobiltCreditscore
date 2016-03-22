<?php
/**
 * Test with Microbilt for 'https://creditserver.microbilt.com/WebServices/Ex/ExStd.svc?wsdl'
 * @package Microbilt
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MicrobiltAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a MicrobiltWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[MicrobiltWsdlClass::WSDL_URL] = 'https://creditserver.microbilt.com/WebServices/Ex/ExStd.svc?wsdl';
 * $wsdl[MicrobiltWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[MicrobiltWsdlClass::WSDL_TRACE] = true;
 * $wsdl[MicrobiltWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[MicrobiltWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new MicrobiltWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*********************************
 * Example for MicrobiltServiceGet
 */
$microbiltServiceGet = new MicrobiltServiceGet();
// sample call for MicrobiltServiceGet::GetReport()
if($microbiltServiceGet->GetReport(new MicrobiltStructGetReport(/*** update parameters list ***/)))
    print_r($microbiltServiceGet->getResult());
else
    print_r($microbiltServiceGet->getLastError());
// sample call for MicrobiltServiceGet::GetRawReport()
if($microbiltServiceGet->GetRawReport(new MicrobiltStructGetRawReport(/*** update parameters list ***/)))
    print_r($microbiltServiceGet->getResult());
else
    print_r($microbiltServiceGet->getLastError());
// sample call for MicrobiltServiceGet::GetArchiveReport()
if($microbiltServiceGet->GetArchiveReport(new MicrobiltStructGetArchiveReport(/*** update parameters list ***/)))
    print_r($microbiltServiceGet->getResult());
else
    print_r($microbiltServiceGet->getLastError());

/***************************************
 * Example for MicrobiltServiceTransform
 */
$microbiltServiceTransform = new MicrobiltServiceTransform();
// sample call for MicrobiltServiceTransform::Transform()
if($microbiltServiceTransform->Transform(new MicrobiltStructTransform(/*** update parameters list ***/)))
    print_r($microbiltServiceTransform->getResult());
else
    print_r($microbiltServiceTransform->getLastError());

/*********************************
 * Example for MicrobiltServiceMap
 */
$microbiltServiceMap = new MicrobiltServiceMap();
// sample call for MicrobiltServiceMap::Map()
if($microbiltServiceMap->Map(new MicrobiltStructMap(/*** update parameters list ***/)))
    print_r($microbiltServiceMap->getResult());
else
    print_r($microbiltServiceMap->getLastError());
