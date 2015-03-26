<?php


    include_once ('config.inc.php'); 

    $serviceUrl = "https://mws.amazonservices.de";

    $config = array (
      'ServiceURL' => $serviceUrl,
      'ProxyHost' => null,
      'ProxyPort' => -1,
      'MaxErrorRetry' => 3,
    );

  function invokeGetFeedSubmissionResult(MarketplaceWebService_Interface $service, $request) 
  {
      try {
              $response = $service->getFeedSubmissionResult($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetFeedSubmissionResultResponse\n");
                if ($response->isSetGetFeedSubmissionResultResult()) {
                  $getFeedSubmissionResultResult = $response->getGetFeedSubmissionResultResult(); 
                  echo ("            GetFeedSubmissionResult");
                  
                  if ($getFeedSubmissionResultResult->isSetContentMd5()) {
                    echo ("                ContentMd5");
                    echo ("                " . $getFeedSubmissionResultResult->getContentMd5() . "\n");
                  }
                }
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

                echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
     } catch (MarketplaceWebService_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
         echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }
?>
                              
