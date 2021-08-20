# EvoliaV3\SiretApi

All URIs are relative to *https://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3SiretSearchPost**](SiretApi.md#apiv3siretsearchpost) | **POST** /api/v3/Siret/Search | This endpoint is used to search the siret in the DB from the NIC and the Siret

# **apiV3SiretSearchPost**
> \EvoliaV3\Model\SiretQueryResult[] apiV3SiretSearchPost($body)

This endpoint is used to search the siret in the DB from the NIC and the Siret

Sample request:  POST /GetAccessToken  {  \"siren\": \"00000\",  \"nic\": \"12345678\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\SiretApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\SiretRequest(); // \EvoliaV3\Model\SiretRequest | 

try {
    $result = $apiInstance->apiV3SiretSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiretApi->apiV3SiretSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\SiretRequest**](../Model/SiretRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SiretQueryResult[]**](../Model/SiretQueryResult.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

