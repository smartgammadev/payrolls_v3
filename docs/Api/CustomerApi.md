# EvoliaV3\CustomerApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3CustomerIdRefPost**](CustomerApi.md#apiv3customeridrefpost) | **POST** /api/v3/Customer/{idRef} | update the Customer
[**apiV3CustomerPut**](CustomerApi.md#apiv3customerput) | **PUT** /api/v3/Customer | Import the Customer

# **apiV3CustomerIdRefPost**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerIdRefPost($id_ref, $body)

update the Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_ref = 56; // int | 
$body = new \EvoliaV3\Model\CustomerRequest(); // \EvoliaV3\Model\CustomerRequest | 

try {
    $result = $apiInstance->apiV3CustomerIdRefPost($id_ref, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerIdRefPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ref** | **int**|  |
 **body** | [**\EvoliaV3\Model\CustomerRequest**](../Model/CustomerRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CustomerPut**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerPut($body)

Import the Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\CustomerRequest(); // \EvoliaV3\Model\CustomerRequest | 

try {
    $result = $apiInstance->apiV3CustomerPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\CustomerRequest**](../Model/CustomerRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

