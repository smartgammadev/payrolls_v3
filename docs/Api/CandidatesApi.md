# EvoliaV3\CandidatesApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importCandidate**](CandidatesApi.md#importcandidate) | **POST** /api/v3/candidates | Import the Candidate
[**searchCandidate**](CandidatesApi.md#searchcandidate) | **POST** /api/v3/candidates/{idAgency}/{numSecu}/{numSecuCle} | Test if the Candidate exists
[**updateCandidate**](CandidatesApi.md#updatecandidate) | **PUT** /api/v3/candidates | Update the Candidate
[**updateDpaes**](CandidatesApi.md#updatedpaes) | **PUT** /api/v3/candidates/dpaes | Update the Candidate with DPAE information

# **importCandidate**
> \EvoliaV3\Model\SuccessResponse importCandidate($body)

Import the Candidate

Sample request:  PUT {  {  \"Titre\": 2,  \"Nom\": \"Mile\",  \"PreNom\": \"Justine\",  \"IdRef\": \"d1709197-d169-36ac-8c86-d97c64f6864e\",  \"Qualification\": \"Assistant administratif (H/F)\",  \"Nationalite\": \"FRA\",  \"NomJF\": \"Mile\",  \"DateNaissance\": \"1979-04-10T02:00:00+02:00\",  \"TelephonePortable\": \"0033607270672\",  \"Email\": \"candidate0@troops.online\",  \"NomVoie\": \"5 Rue des Mimosas\",  \"CP\": \"69002\",  \"Commune\": \"LYON\",  \"Numsecu\": \"2741147566941\",  \"NumsecuCle\": \"55\",  \"Lieu_Naiss\": \"Lyon\",  \"PaysNaiss\": \"FRA\",  \"Pays\": \"FRA\",  \"ListeAgences\": [          \"02\"      ]  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\Candidate(); // \EvoliaV3\Model\Candidate | 

try {
    $result = $apiInstance->importCandidate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->importCandidate: ', $e->getMessage(), PHP_EOL;
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

# **searchCandidate**
> \EvoliaV3\Model\CandidateResult searchCandidate($id_agency, $num_secu, $num_secu_cle)

Test if the Candidate exists

Sample request:  POST {  \"IdAgency\": \"02\",  \"NumSecu\": \"27411475669\",  \"NumSecuCle\": \"41\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_agency = "id_agency_example"; // string | 
$num_secu = "num_secu_example"; // string | 
$num_secu_cle = 56; // int | 

try {
    $result = $apiInstance->searchCandidate($id_agency, $num_secu, $num_secu_cle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->searchCandidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_agency** | **string**|  |
 **num_secu** | **string**|  |
 **num_secu_cle** | **int**|  |

### Return type

[**\EvoliaV3\Model\CandidateResult**](../Model/CandidateResult.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCandidate**
> \EvoliaV3\Model\SuccessResponse updateCandidate($body)

Update the Candidate

Sample request:  PUT {  {  \"Titre\": 2,  \"Nom\": \"Mile\",  \"PreNom\": \"Justine\",  \"IdRef\": \"d1709197-d169-36ac-8c86-d97c64f6864e\",  \"Qualification\": \"Assistant administratif (H/F)\",  \"Nationalite\": \"FRA\",  \"NomJF\": \"Mile\",  \"DateNaissance\": \"1979-04-10T02:00:00+02:00\",  \"TelephonePortable\": \"0033607270672\",  \"Email\": \"candidate0@troops.online\",  \"NomVoie\": \"5 Rue des Mimosas\",  \"CP\": \"69002\",  \"Commune\": \"LYON\",  \"Numsecu\": \"2741147566941\",  \"NumsecuCle\": \"55\",  \"Lieu_Naiss\": \"Lyon\",  \"PaysNaiss\": \"FRA\",  \"Pays\": \"FRA\",  \"ListeAgences\": [          \"02\"      ]  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\Candidate(); // \EvoliaV3\Model\Candidate | 

try {
    $result = $apiInstance->updateCandidate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->updateCandidate: ', $e->getMessage(), PHP_EOL;
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

# **updateDpaes**
> \EvoliaV3\Model\SuccessResponse updateDpaes($body)

Update the Candidate with DPAE information

Sample request:  POST {  \"RefCandidate\": \"1234\",  \"RefMission\": \"1234\",  \"Agence\": \"02\",  \"DateHeurePrevueEmbauche\": \"2021-07-20T06:44:07.816Z\",  \"NumDPAE\": \"12\",  \"DateEnvoi\": \"2021-07-20T06:44:07.816Z\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: JWT_Bearer_Token
    $config = EvoliaV3\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EvoliaV3\SDK\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EvoliaV3\Model\CandidateDpae(); // \EvoliaV3\Model\CandidateDpae | 

try {
    $result = $apiInstance->updateDpaes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->updateDpaes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EvoliaV3\Model\CandidateDpae**](../Model/CandidateDpae.md)|  | [optional]

### Return type

[**\EvoliaV3\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[JWT_Bearer_Token](../../README.md#JWT_Bearer_Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

