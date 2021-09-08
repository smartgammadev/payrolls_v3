# EvoliaV3\ClientApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3ClientIdRefPut**](ClientApi.md#apiv3clientidrefput) | **PUT** /api/v3/client/{idRef} | update the Customer
[**apiV3ClientPost**](ClientApi.md#apiv3clientpost) | **POST** /api/v3/client | Import the Customer
[**apiV3ClientRegistrationNumberAgencyIdGet**](ClientApi.md#apiv3clientregistrationnumberagencyidget) | **GET** /api/v3/client/{registrationNumber}/{agencyId} | This endpoint is used to search the siret in the DB from the NIC and the Siret

# **apiV3ClientIdRefPut**
> \EvoliaV3\Model\SuccessResponse apiV3ClientIdRefPut($id_ref, $body)

update the Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_ref = 56; // int | 
$body = new \EvoliaV3\Model\ClientRequest(); // \EvoliaV3\Model\ClientRequest | 

try {
    $result = $apiInstance->apiV3ClientIdRefPut($id_ref, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiV3ClientIdRefPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ref** | **int**|  |
 **body** | [**\EvoliaV3\Model\ClientRequest**](../Model/ClientRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3ClientPost**
> \EvoliaV3\Model\SuccessResponse apiV3ClientPost($body)

Import the Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\ClientRequest(); // \EvoliaV3\Model\ClientRequest | 

try {
    $result = $apiInstance->apiV3ClientPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiV3ClientPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\ClientRequest**](../Model/ClientRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3ClientRegistrationNumberAgencyIdGet**
> \EvoliaV3\Model\SiretQueryResult[] apiV3ClientRegistrationNumberAgencyIdGet($registration_number, $agency_id)

This endpoint is used to search the siret in the DB from the NIC and the Siret

Sample request:  POST /GetAccessToken  {  \"siren\": \"00000\",  \"nic\": \"12345678\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registration_number = "registration_number_example"; // string | 
$agency_id = "agency_id_example"; // string | 

try {
    $result = $apiInstance->apiV3ClientRegistrationNumberAgencyIdGet($registration_number, $agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->apiV3ClientRegistrationNumberAgencyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_number** | **string**|  |
 **agency_id** | **string**|  |

### Return type

[**\EvoliaV3\Model\SiretQueryResult[]**](../Model/SiretQueryResult.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

