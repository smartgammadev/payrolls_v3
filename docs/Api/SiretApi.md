# EvoliaV3\SiretApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3SiretSirenNicPost**](SiretApi.md#apiv3siretsirennicpost) | **POST** /api/v3/siret/{siren}/{nic} | This endpoint is used to search the siret in the DB from the NIC and the Siret

# **apiV3SiretSirenNicPost**
> \EvoliaV3\Model\SiretQueryResult[] apiV3SiretSirenNicPost($siren, $nic)

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
$siren = "siren_example"; // string | 
$nic = "nic_example"; // string | 

try {
    $result = $apiInstance->apiV3SiretSirenNicPost($siren, $nic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiretApi->apiV3SiretSirenNicPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siren** | **string**|  |
 **nic** | **string**|  |

### Return type

[**\EvoliaV3\Model\SiretQueryResult[]**](../Model/SiretQueryResult.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

