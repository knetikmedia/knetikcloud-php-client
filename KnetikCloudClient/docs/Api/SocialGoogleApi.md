# KnetikCloud\SocialGoogleApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkAccounts1**](SocialGoogleApi.md#linkAccounts1) | **POST** /social/google/users | Link google account


# **linkAccounts1**
> linkAccounts1($google_token)

Link google account

Links the current user account to a google account, using the acccess token from google. Can also be used to update the access token after it has expired.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SocialGoogleApi(new \Http\Adapter\Guzzle6\Client());
$google_token = new \KnetikCloud\Model\GoogleToken(); // \KnetikCloud\Model\GoogleToken | The token from google

try {
    $api_instance->linkAccounts1($google_token);
} catch (Exception $e) {
    echo 'Exception when calling SocialGoogleApi->linkAccounts1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **google_token** | [**\KnetikCloud\Model\GoogleToken**](../Model/GoogleToken.md)| The token from google | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

