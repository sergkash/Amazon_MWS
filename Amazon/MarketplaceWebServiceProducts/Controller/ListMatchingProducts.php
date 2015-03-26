<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebServiceProducts
 *  @copyright   Copyright 2008-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2011-10-01
 */
/******************************************************************************* 
 * 
 *  Marketplace Web Service Products PHP5 Library
 * 
 */

/**
 * List Matching Products  Sample
 */

include_once ('config.inc.php'); 


/************************************************************************
 * Instantiate Implementation of MarketplaceWebServiceProducts
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
// United States:
//$serviceUrl = "https://mws.amazonservices.com/Products/2011-10-01";
// Europe
$serviceUrl = "https://mws-eu.amazonservices.com/Products/2011-10-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/Products/2011-10-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/Products/2011-10-01";
// Canada
//$serviceUrl = "https://mws.amazonservices.ca/Products/2011-10-01";

 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'MaxErrorRetry' => 3,
 );

 /*
 $service = new MarketplaceWebServiceProducts_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);
 */
 
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates MarketplaceWebServiceProducts
 * responses without calling MarketplaceWebServiceProducts service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MarketplaceWebServiceProducts/Mock tree
 *
 ***********************************************************************/
 // $service = new MarketplaceWebServiceProducts_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for List Matching Products Action
 ***********************************************************************/
 //  Action can be passed as MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
 #$request = new MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest();
 #$request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 #invokeListMatchingProducts($service, $request);

                                            
/**
  * List Matching Products Action Sample
  * ListMatchingProducts can be used to
  * find products that match the given criteria.
  *   
  * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
  * @param mixed $request MarketplaceWebServiceProducts_Model_ListMatchingProducts or array of parameters
  */
function invokeListMatchingProducts(MarketplaceWebServiceProducts_Interface $service, $request)
{
    try {
      $response = $service->ListMatchingProducts($request);

      echo ("Service Response\n");
      echo ("=============================================================================\n");

      $dom = new DOMDocument();
      $dom->loadXML($response->toXML());
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      echo $dom->saveXML();
      echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

   } catch (MarketplaceWebServiceProducts_Exception $ex) {
      echo("Caught Exception: " . $ex->getMessage() . "\n");
      echo("Response Status Code: " . $ex->getStatusCode() . "\n");
      echo("Error Code: " . $ex->getErrorCode() . "\n");
      echo("Error Type: " . $ex->getErrorType() . "\n");
      echo("Request ID: " . $ex->getRequestId() . "\n");
      echo("XML: " . $ex->getXML() . "\n");
      echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
   }
}  
 
                            
