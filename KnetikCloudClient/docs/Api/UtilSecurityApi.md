# KnetikCloud\UtilSecurityApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserLocationLog**](UtilSecurityApi.md#getUserLocationLog) | **GET** /security/country-log | Returns the authentication log for a user
[**getUserTokenDetails**](UtilSecurityApi.md#getUserTokenDetails) | **GET** /me | Returns the authentication token details. Use /users endpoint for detailed user&#39;s info


# **getUserLocationLog**
> \KnetikCloud\Model\PageResourceLocationLogResource_ getUserLocationLog($user_id)

Returns the authentication log for a user

A log entry is recorded everytime a user requests a new token. Standard pagination available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UtilSecurityApi();
$user_id = 56; // int | The user id

try {
    $result = $api_instance->getUserLocationLog($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilSecurityApi->getUserLocationLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceLocationLogResource_**](../Model/PageResourceLocationLogResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTokenDetails**
> \KnetikCloud\Model\TokenDetailsResource getUserTokenDetails()

Returns the authentication token details. Use /users endpoint for detailed user's info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UtilSecurityApi();

try {
    $result = $api_instance->getUserTokenDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilSecurityApi->getUserTokenDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\TokenDetailsResource**](../Model/TokenDetailsResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

