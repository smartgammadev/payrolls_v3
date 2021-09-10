# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v3
- Package version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/smartgammadev/payrolls_v3.git"
    }
  ],
  "require": {
    "smartgammadev/payrolls_v3": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new EvoliaV3\SDK\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->initProject();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->initProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/PayrollV3/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**initProject**](docs/Api/AdminApi.md#initproject) | **POST** /api/v3/admin/initialization | Used to create (if needed) the local SQLite Database  And create the default appID/appSecret
*CandidatesApi* | [**importCandidate**](docs/Api/CandidatesApi.md#importcandidate) | **POST** /api/v3/candidates | Import the Candidate
*CandidatesApi* | [**searchCandidate**](docs/Api/CandidatesApi.md#searchcandidate) | **POST** /api/v3/candidates/{idAgency}/{numSecu}/{numSecuCle} | Test if the Candidate exists
*CandidatesApi* | [**updateCandidate**](docs/Api/CandidatesApi.md#updatecandidate) | **PUT** /api/v3/candidates | Update the Candidate
*CandidatesApi* | [**updateDpaes**](docs/Api/CandidatesApi.md#updatedpaes) | **PUT** /api/v3/candidates/dpaes | Update the Candidate with DPAE information
*ClientApi* | [**findClientsBySiret**](docs/Api/ClientApi.md#findclientsbysiret) | **GET** /api/v3/client/{registrationNumber}/{agencyId} | This endpoint is used to search the siret in the DB from the NIC and the Siret
*ClientApi* | [**importClient**](docs/Api/ClientApi.md#importclient) | **POST** /api/v3/client | Import the Customer
*ClientApi* | [**updateClient**](docs/Api/ClientApi.md#updateclient) | **PUT** /api/v3/client/{idRef} | update the Customer
*ContractApi* | [**importContract**](docs/Api/ContractApi.md#importcontract) | **PUT** /api/v3/contract | Import the Contract
*ContractApi* | [**updateContract**](docs/Api/ContractApi.md#updatecontract) | **PUT** /api/v3/contract/{contractId} | Update the Contract information
*HomeApi* | [**getHealth**](docs/Api/HomeApi.md#gethealth) | **GET** /health | This endpoint is used to test the server&#x27;s health
*ReferencesApi* | [**getReferences**](docs/Api/ReferencesApi.md#getreferences) | **GET** /api/v3/references | Get all the references from the database
*TokenApi* | [**refreshToken**](docs/Api/TokenApi.md#refreshtoken) | **POST** /api/v3/token/refresh | 
*TokenApi* | [**revokeToken**](docs/Api/TokenApi.md#revoketoken) | **DELETE** /api/v3/token/{refreshToken} | 
*UserApi* | [**login**](docs/Api/UserApi.md#login) | **POST** /api/v3/user/login | 
*UserApi* | [**registerUser**](docs/Api/UserApi.md#registeruser) | **POST** /api/v3/user/registeruser | 
*UserApi* | [**revokeUser**](docs/Api/UserApi.md#revokeuser) | **DELETE** /api/v3/user/{userName} | 

## Documentation For Models

 - [AppErrorResponse](docs/Model/AppErrorResponse.md)
 - [AuthenticationResponse](docs/Model/AuthenticationResponse.md)
 - [Candidate](docs/Model/Candidate.md)
 - [CandidateDpae](docs/Model/CandidateDpae.md)
 - [CandidateResult](docs/Model/CandidateResult.md)
 - [ClientRequest](docs/Model/ClientRequest.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractChanges](docs/Model/ContractChanges.md)
 - [ContractualData](docs/Model/ContractualData.md)
 - [ErrorDetails](docs/Model/ErrorDetails.md)
 - [HealthCheck](docs/Model/HealthCheck.md)
 - [MissionPlace](docs/Model/MissionPlace.md)
 - [ProblemDetails](docs/Model/ProblemDetails.md)
 - [ReferenceItem](docs/Model/ReferenceItem.md)
 - [ReferencesResponse](docs/Model/ReferencesResponse.md)
 - [RefreshTokenRequest](docs/Model/RefreshTokenRequest.md)
 - [SiretQueryResult](docs/Model/SiretQueryResult.md)
 - [SuccessResponse](docs/Model/SuccessResponse.md)
 - [User](docs/Model/User.md)
 - [UserLoginRequest](docs/Model/UserLoginRequest.md)
 - [UserRegistrationRequest](docs/Model/UserRegistrationRequest.md)

## Documentation For Authorization


## JWT_Bearer_Token

- **Type**: HTTP bearer authentication


## Author



