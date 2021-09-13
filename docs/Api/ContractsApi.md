# EvoliaV3\ContractsApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importContract**](ContractsApi.md#importcontract) | **POST** /api/v3/contracts | Import the Contract
[**updateContract**](ContractsApi.md#updatecontract) | **PUT** /api/v3/contracts/{contractId} | Update the Contract information

# **importContract**
> \EvoliaV3\Model\SuccessResponse importContract($body)

Import the Contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\Contract(); // \EvoliaV3\Model\Contract | 

try {
    $result = $apiInstance->importContract($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->importContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\Contract**](../Model/Contract.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContract**
> \EvoliaV3\Model\SuccessResponse updateContract($contract_id, $body)

Update the Contract information

Sample request:  POST {  \"IdContract\": \"1848\",  \"IdContractOrd\": 0,  \"IdPerson\": \"4069\",  \"SignDateCustomer\": \"2021-07-20T06:43:29.996Z\",  \"SignDateCandidate\": \"2021-07-20T06:43:29.996Z\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = "contract_id_example"; // string | 
$body = new \EvoliaV3\Model\ContractChanges(); // \EvoliaV3\Model\ContractChanges | 

try {
    $result = $apiInstance->updateContract($contract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->updateContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**|  |
 **body** | [**\EvoliaV3\Model\ContractChanges**](../Model/ContractChanges.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

