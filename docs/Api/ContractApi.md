# EvoliaV3\ContractApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3ContractIdContractPost**](ContractApi.md#apiv3contractidcontractpost) | **POST** /api/v3/Contract/{idContract} | update the Contract
[**apiV3ContractPut**](ContractApi.md#apiv3contractput) | **PUT** /api/v3/Contract | Import the Contract
[**apiV3ContractReturnSignaturePut**](ContractApi.md#apiv3contractreturnsignatureput) | **PUT** /api/v3/Contract/ReturnSignature | Update the Contract information

# **apiV3ContractIdContractPost**
> \EvoliaV3\Model\SuccessResponse apiV3ContractIdContractPost($id_contract, $body, $id_contract2)

update the Contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_contract = "id_contract_example"; // string | 
$body = new \EvoliaV3\Model\Contract(); // \EvoliaV3\Model\Contract | 
$id_contract2 = 56; // int | 

try {
    $result = $apiInstance->apiV3ContractIdContractPost($id_contract, $body, $id_contract2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->apiV3ContractIdContractPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_contract** | **string**|  |
 **body** | [**\EvoliaV3\Model\Contract**](../Model/Contract.md)|  | [optional]
 **id_contract2** | **int**|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3ContractPut**
> \EvoliaV3\Model\SuccessResponse apiV3ContractPut($body)

Import the Contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\Contract(); // \EvoliaV3\Model\Contract | 

try {
    $result = $apiInstance->apiV3ContractPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->apiV3ContractPut: ', $e->getMessage(), PHP_EOL;
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

# **apiV3ContractReturnSignaturePut**
> \EvoliaV3\Model\SuccessResponse apiV3ContractReturnSignaturePut($body)

Update the Contract information

Sample request:  POST {  \"IdContract\": \"1848\",  \"IdContractOrd\": 0,  \"IdPerson\": \"4069\",  \"SignDateCustomer\": \"2021-07-20T06:43:29.996Z\",  \"SignDateCandidate\": \"2021-07-20T06:43:29.996Z\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\ContractSignUpdate(); // \EvoliaV3\Model\ContractSignUpdate | 

try {
    $result = $apiInstance->apiV3ContractReturnSignaturePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->apiV3ContractReturnSignaturePut: ', $e->getMessage(), PHP_EOL;
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

