# Swagger\Client\UserApi

All URIs are relative to *https://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3UserLoginPost**](UserApi.md#apiv3userloginpost) | **POST** /api/v3/User/Login | 
[**apiV3UserRegisterPost**](UserApi.md#apiv3userregisterpost) | **POST** /api/v3/User/Register | 
[**apiV3UserUserNameDelete**](UserApi.md#apiv3userusernamedelete) | **DELETE** /api/v3/User/{userName} | 

# **apiV3UserLoginPost**
> \Swagger\Client\Model\AuthenticationResponse apiV3UserLoginPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserLoginRequest(); // \Swagger\Client\Model\UserLoginRequest | 

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
 **body** | [**\Swagger\Client\Model\UserLoginRequest**](../Model/UserLoginRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3UserRegisterPost**
> \Swagger\Client\Model\AuthenticationResponse apiV3UserRegisterPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserRegistrationRequest(); // \Swagger\Client\Model\UserRegistrationRequest | 

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
 **body** | [**\Swagger\Client\Model\UserRegistrationRequest**](../Model/UserRegistrationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3UserUserNameDelete**
> apiV3UserUserNameDelete($user_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_name = "user_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $apiInstance->apiV3UserUserNameDelete($user_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV3UserUserNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **string**|  |
 **body** | [**string**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

