# EvoliaV3\CandidateApi

All URIs are relative to *https://localhost:5001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3CandidateAddDPAEPut**](CandidateApi.md#apiv3candidateadddpaeput) | **PUT** /api/v3/Candidate/AddDPAE | Update the Candidate with DPAE information
[**apiV3CandidateImportPut**](CandidateApi.md#apiv3candidateimportput) | **PUT** /api/v3/Candidate/import | Import the Candidate
[**apiV3CandidateSearchPost**](CandidateApi.md#apiv3candidatesearchpost) | **POST** /api/v3/Candidate/Search | Test if the Candidate exists
[**apiV3CandidateUpdatePost**](CandidateApi.md#apiv3candidateupdatepost) | **POST** /api/v3/Candidate/update | Import the Candidate

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

# **apiV3CandidateImportPut**
> \EvoliaV3\Model\SuccessResponse apiV3CandidateImportPut($body)

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
    $result = $apiInstance->apiV3CandidateImportPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV3CandidateImportPut: ', $e->getMessage(), PHP_EOL;
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

Sample request:  POST {  \"Code_agence\": \"02\",  \"Num_SS\": \"27411475669\",  \"Num_SSCle\": 41  }

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
$body = new \EvoliaV3\Model\CandidateExists(); // \EvoliaV3\Model\CandidateExists | 

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
 **body** | [**\EvoliaV3\Model\CandidateExists**](../Model/CandidateExists.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\Candidate**](../Model/Candidate.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3CandidateUpdatePost**
> \EvoliaV3\Model\Candidate apiV3CandidateUpdatePost($body)

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
    $result = $apiInstance->apiV3CandidateUpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidateApi->apiV3CandidateUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\Candidate**](../Model/Candidate.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\Candidate**](../Model/Candidate.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

