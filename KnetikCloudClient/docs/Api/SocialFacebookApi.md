# KnetikCloud\SocialFacebookApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkAccounts**](SocialFacebookApi.md#linkAccounts) | **POST** /social/facebook/users | Link facebook account


# **linkAccounts**
> linkAccounts($facebook_token)

Link facebook account

Links the current user account to a facebook account, using the acccess token from facebook. Can also be used to update the access token after it has expired.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SocialFacebookApi();
$facebook_token = new \KnetikCloud\Model\FacebookToken(); // \KnetikCloud\Model\FacebookToken | The token from facebook

try {
    $api_instance->linkAccounts($facebook_token);
} catch (Exception $e) {
    echo 'Exception when calling SocialFacebookApi->linkAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facebook_token** | [**\KnetikCloud\Model\FacebookToken**](../Model/\KnetikCloud\Model\FacebookToken.md)| The token from facebook | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
