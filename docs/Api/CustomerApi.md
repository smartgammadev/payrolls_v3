# EvoliaV3\CustomerApi

All URIs are relative to *https://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3CustomerImportPut**](CustomerApi.md#apiv3customerimportput) | **PUT** /api/v3/Customer/import | Import the Customer
[**apiV3CustomerReturnSignaturePut**](CustomerApi.md#apiv3customerreturnsignatureput) | **PUT** /api/v3/Customer/ReturnSignature | Update the Candidate with ReturnSignature information
[**apiV3CustomerUpdatePost**](CustomerApi.md#apiv3customerupdatepost) | **POST** /api/v3/Customer/update | update the Customer

# **apiV3CustomerImportPut**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerImportPut($body)

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
$body = new \EvoliaV3\Model\Customer(); // \EvoliaV3\Model\Customer | 

try {
    $result = $apiInstance->apiV3CustomerImportPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerImportPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CustomerReturnSignaturePut**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerReturnSignaturePut($body)

Update the Candidate with ReturnSignature information

Sample request:  POST {  \"IdContract\": \"1848\",  \"IdContractOrd\": 0,  \"IdPerson\": \"4069\",  \"SignDateCustomer\": \"2021-07-20T06:43:29.996Z\",  \"SignDateCandidate\": \"2021-07-20T06:43:29.996Z\"  }

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
$body = new \EvoliaV3\Model\ContractSignUpdate(); // \EvoliaV3\Model\ContractSignUpdate | 

try {
    $result = $apiInstance->apiV3CustomerReturnSignaturePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerReturnSignaturePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\ContractSignUpdate**](../Model/ContractSignUpdate.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CustomerUpdatePost**
> \EvoliaV3\Model\SuccessResponse apiV3CustomerUpdatePost($body)

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
$body = new \EvoliaV3\Model\Customer(); // \EvoliaV3\Model\Customer | 

try {
    $result = $apiInstance->apiV3CustomerUpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiV3CustomerUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

