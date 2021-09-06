# EvoliaV3\CustomerApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3CustomerIdRefPut**](CustomerApi.md#apiv3customeridrefput) | **PUT** /api/v3/customer/{idRef} | update the Customer
[**apiV3CustomerPost**](CustomerApi.md#apiv3customerpost) | **POST** /api/v3/customer | Import the Customer

# **apiV3CustomerIdRefPut**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerIdRefPut($id_ref, $body)

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
    $result = $apiInstance->apiV3CustomerIdRefPut($id_ref, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerIdRefPut: ', $e->getMessage(), PHP_EOL;
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

# **apiV3CustomerPost**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerPost($body)

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
    $result = $apiInstance->apiV3CustomerPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerPost: ', $e->getMessage(), PHP_EOL;
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

