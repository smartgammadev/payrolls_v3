# EvoliaV3\CandidateApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3CandidateAddDPAEPut**](CandidateApi.md#apiv3candidateadddpaeput) | **PUT** /api/v3/Candidate/AddDPAE | Update the Candidate with DPAE information
[**apiV3CandidatePost**](CandidateApi.md#apiv3candidatepost) | **POST** /api/v3/Candidate | Import the Candidate
[**apiV3CandidatePut**](CandidateApi.md#apiv3candidateput) | **PUT** /api/v3/Candidate | Import the Candidate
[**apiV3CandidateSearchPost**](CandidateApi.md#apiv3candidatesearchpost) | **POST** /api/v3/Candidate/Search | Test if the Candidate exists

# **apiV3CandidateAddDPAEPut**
> \EvoliaV3\Model\CandidateDpae apiV3CandidateAddDPAEPut($body)

Update the Candidate with DPAE information

Sample request:  POST {  \"RefCandidate\": \"1234\",  \"RefMission\": \"1234\",  \"Agence\": \"02\",  \"DateHeurePrevueEmbauche\": \"2021-07-20T06:44:07.816Z\",  \"NumDPAE\": \"12\",  \"DateEnvoi\": \"2021-07-20T06:44:07.816Z\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\CandidateDpae(); // \EvoliaV3\Model\CandidateDpae | 

try {
    $result = $apiInstance->apiV3CandidateAddDPAEPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV3CandidateAddDPAEPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\CandidateDpae**](../Model/CandidateDpae.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\CandidateDpae**](../Model/CandidateDpae.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CandidatePost**
> \EvoliaV3\Model\SuccessResponse apiV3CandidatePost($body)

Import the Candidate

Sample request:  PUT {  {  \"Titre\": 2,  \"Nom\": \"Mile\",  \"PreNom\": \"Justine\",  \"IdRef\": \"d1709197-d169-36ac-8c86-d97c64f6864e\",  \"Qualification\": \"Assistant administratif (H/F)\",  \"Nationalite\": \"FRA\",  \"NomJF\": \"Mile\",  \"DateNaissance\": \"1979-04-10T02:00:00+02:00\",  \"TelephonePortable\": \"0033607270672\",  \"Email\": \"candidate0@troops.online\",  \"NomVoie\": \"5 Rue des Mimosas\",  \"CP\": \"69002\",  \"Commune\": \"LYON\",  \"Numsecu\": \"2741147566941\",  \"NumsecuCle\": \"55\",  \"Lieu_Naiss\": \"Lyon\",  \"PaysNaiss\": \"FRA\",  \"Pays\": \"FRA\",  \"ListeAgences\": [          \"02\"      ]  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\Candidate(); // \EvoliaV3\Model\Candidate | 

try {
    $result = $apiInstance->apiV3CandidatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV3CandidatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\Candidate**](../Model/Candidate.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CandidatePut**
> \EvoliaV3\Model\SuccessResponse apiV3CandidatePut($body)

Import the Candidate

Sample request:  PUT {  {  \"Titre\": 2,  \"Nom\": \"Mile\",  \"PreNom\": \"Justine\",  \"IdRef\": \"d1709197-d169-36ac-8c86-d97c64f6864e\",  \"Qualification\": \"Assistant administratif (H/F)\",  \"Nationalite\": \"FRA\",  \"NomJF\": \"Mile\",  \"DateNaissance\": \"1979-04-10T02:00:00+02:00\",  \"TelephonePortable\": \"0033607270672\",  \"Email\": \"candidate0@troops.online\",  \"NomVoie\": \"5 Rue des Mimosas\",  \"CP\": \"69002\",  \"Commune\": \"LYON\",  \"Numsecu\": \"2741147566941\",  \"NumsecuCle\": \"55\",  \"Lieu_Naiss\": \"Lyon\",  \"PaysNaiss\": \"FRA\",  \"Pays\": \"FRA\",  \"ListeAgences\": [          \"02\"      ]  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\Candidate(); // \EvoliaV3\Model\Candidate | 

try {
    $result = $apiInstance->apiV3CandidatePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV3CandidatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\Candidate**](../Model/Candidate.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CandidateSearchPost**
> \EvoliaV3\Model\Candidate apiV3CandidateSearchPost($body)

Test if the Candidate exists

Sample request:  POST {  \"IdAgency\": \"02\",  \"NumSecu\": \"27411475669\",  \"NumSecuCle\": \"41\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\CandidateSearch(); // \EvoliaV3\Model\CandidateSearch | 

try {
    $result = $apiInstance->apiV3CandidateSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV3CandidateSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\CandidateSearch**](../Model/CandidateSearch.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\Candidate**](../Model/Candidate.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

