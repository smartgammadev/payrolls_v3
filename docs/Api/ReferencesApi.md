# EvoliaV3\ReferencesApi

All URIs are relative to *https://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3ReferencesListGet**](ReferencesApi.md#apiv3referenceslistget) | **GET** /api/v3/References/List | Get all the references from the database

# **apiV3ReferencesListGet**
> \EvoliaV3\Model\ReferencesResponse apiV3ReferencesListGet()

Get all the references from the database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV3ReferencesListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->apiV3ReferencesListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\EvoliaV3\Model\ReferencesResponse**](../Model/ReferencesResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

