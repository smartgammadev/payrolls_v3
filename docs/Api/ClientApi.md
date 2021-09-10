# EvoliaV3\ClientApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findClientsBySiret**](ClientApi.md#findclientsbysiret) | **GET** /api/v3/client/{registrationNumber}/{agencyId} | This endpoint is used to search the siret in the DB from the NIC and the Siret
[**importClient**](ClientApi.md#importclient) | **POST** /api/v3/client | Import the Customer
[**updateClient**](ClientApi.md#updateclient) | **PUT** /api/v3/client/{idRef} | update the Customer

# **findClientsBySiret**
> \EvoliaV3\Model\SiretQueryResult[] findClientsBySiret($registration_number, $agency_id)

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
    $result = $apiInstance->findClientsBySiret($registration_number, $agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->findClientsBySiret: ', $e->getMessage(), PHP_EOL;
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

# **importClient**
> \EvoliaV3\Model\SuccessResponse importClient($body)

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
    $result = $apiInstance->importClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->importClient: ', $e->getMessage(), PHP_EOL;
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

# **updateClient**
> \EvoliaV3\Model\SuccessResponse updateClient($id_ref, $body)

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
    $result = $apiInstance->updateClient($id_ref, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->updateClient: ', $e->getMessage(), PHP_EOL;
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

