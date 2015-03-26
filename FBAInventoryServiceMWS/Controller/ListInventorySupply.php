<?php
include_once ('config.inc.php'); 

$serviceUrl = "https://mws-eu.amazonservices.com/FulfillmentInventory/2010-10-01";

 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

    
?>
