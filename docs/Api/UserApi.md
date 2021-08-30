# EvoliaV3\UserApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3UserLoginPost**](UserApi.md#apiv3userloginpost) | **POST** /api/v3/User/Login | 
[**apiV3UserRegisterPost**](UserApi.md#apiv3userregisterpost) | **POST** /api/v3/User/Register | 
[**apiV3UserUserNameDelete**](UserApi.md#apiv3userusernamedelete) | **DELETE** /api/v3/User/{userName} | 

# **apiV3UserLoginPost**
> \EvoliaV3\Model\AuthenticationResponse apiV3UserLoginPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\UserLoginRequest(); // \EvoliaV3\Model\UserLoginRequest | 

try {
    $result = $apiInstance->apiV3UserLoginPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV3UserLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\UserLoginRequest**](../Model/UserLoginRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3UserRegisterPost**
> \EvoliaV3\Model\AuthenticationResponse apiV3UserRegisterPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\UserRegistrationRequest(); // \EvoliaV3\Model\UserRegistrationRequest | 

try {
    $result = $apiInstance->apiV3UserRegisterPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV3UserRegisterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\UserRegistrationRequest**](../Model/UserRegistrationRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3UserUserNameDelete**
> apiV3UserUserNameDelete($user_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_name = "user_name_example"; // string | 

try {
    $apiInstance->apiV3UserUserNameDelete($user_name);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV3UserUserNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

