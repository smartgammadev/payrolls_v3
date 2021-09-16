# EvoliaV3\TokenApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refreshToken**](TokenApi.md#refreshtoken) | **POST** /api/v3/token/refresh | 
[**revokeToken**](TokenApi.md#revoketoken) | **DELETE** /api/v3/token/{refreshToken} | 
[**userLogin**](TokenApi.md#userlogin) | **POST** /api/v3/token | user authentication and token generation

# **refreshToken**
> \EvoliaV3\Model\AuthenticationResponse refreshToken($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\RefreshTokenRequest(); // \EvoliaV3\Model\RefreshTokenRequest | 

try {
    $result = $apiInstance->refreshToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\RefreshTokenRequest**](../Model/RefreshTokenRequest.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeToken**
> revokeToken($refresh_token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_token = "refresh_token_example"; // string | 

try {
    $apiInstance->revokeToken($refresh_token);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userLogin**
> \EvoliaV3\Model\AuthenticationResponse userLogin($body)

user authentication and token generation

Sample request:  POST /Token/Login  {  \"user\": \"login\",  \"password\": \"password\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\UserLoginRequest(); // \EvoliaV3\Model\UserLoginRequest | 

try {
    $result = $apiInstance->userLogin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->userLogin: ', $e->getMessage(), PHP_EOL;
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

