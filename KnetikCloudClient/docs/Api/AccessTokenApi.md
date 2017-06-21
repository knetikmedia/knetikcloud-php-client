# KnetikCloud\AccessTokenApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOAuthToken**](AccessTokenApi.md#getOAuthToken) | **POST** /oauth/token | Get access token


# **getOAuthToken**
> \KnetikCloud\Model\OAuth2Resource getOAuthToken($grant_type, $client_id, $client_secret, $username, $password)

Get access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\AccessTokenApi();
$grant_type = "client_credentials"; // string | Grant type
$client_id = "knetik"; // string | The id of the client
$client_secret = "client_secret_example"; // string | The secret key of the client.  Used only with a grant_type of client_credentials
$username = "username_example"; // string | The username of the client.  Used only with a grant_type of password
$password = "password_example"; // string | The password of the client.  Used only with a grant_type of password

try {
    $result = $api_instance->getOAuthToken($grant_type, $client_id, $client_secret, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->getOAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Grant type | [default to client_credentials]
 **client_id** | **string**| The id of the client | [default to knetik]
 **client_secret** | **string**| The secret key of the client.  Used only with a grant_type of client_credentials | [optional]
 **username** | **string**| The username of the client.  Used only with a grant_type of password | [optional]
 **password** | **string**| The password of the client.  Used only with a grant_type of password | [optional]

### Return type

[**\KnetikCloud\Model\OAuth2Resource**](../Model/OAuth2Resource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
