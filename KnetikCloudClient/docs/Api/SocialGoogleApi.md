# KnetikCloud\SocialGoogleApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkAccounts1**](SocialGoogleApi.md#linkAccounts1) | **POST** /social/google/users | Link facebook account


# **linkAccounts1**
> linkAccounts1($facebook_token)

Link facebook account

Links the current user account to a facebook account, using the acccess token from facebook. Can also be used to update the access token after it has expired.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SocialGoogleApi();
$facebook_token = new \KnetikCloud\Model\GoogleToken(); // \KnetikCloud\Model\GoogleToken | The token from facebook

try {
    $api_instance->linkAccounts1($facebook_token);
} catch (Exception $e) {
    echo 'Exception when calling SocialGoogleApi->linkAccounts1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facebook_token** | [**\KnetikCloud\Model\GoogleToken**](../Model/\KnetikCloud\Model\GoogleToken.md)| The token from facebook | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

