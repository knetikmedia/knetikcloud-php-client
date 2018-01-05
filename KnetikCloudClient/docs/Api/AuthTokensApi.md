# KnetikCloud\AuthTokensApi

All URIs are relative to *https://devsandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTokens**](AuthTokensApi.md#deleteTokens) | **DELETE** /auth/tokens | Delete tokens by username, client id, or both
[**getToken**](AuthTokensApi.md#getToken) | **GET** /auth/tokens/{username}/{client_id} | Get a single token by username and client id
[**getTokens**](AuthTokensApi.md#getTokens) | **GET** /auth/tokens | List usernames and client ids


# **deleteTokens**
> deleteTokens($username, $client_id)

Delete tokens by username, client id, or both

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthTokensApi(new \Http\Adapter\Guzzle6\Client());
$username = "username_example"; // string | The username of the user
$client_id = "client_id_example"; // string | The id of the client

try {
    $api_instance->deleteTokens($username, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthTokensApi->deleteTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The username of the user | [optional]
 **client_id** | **string**| The id of the client | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getToken**
> \KnetikCloud\Model\OauthAccessTokenResource getToken($username, $client_id)

Get a single token by username and client id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthTokensApi(new \Http\Adapter\Guzzle6\Client());
$username = "username_example"; // string | The username of the user
$client_id = "client_id_example"; // string | The id of the client

try {
    $result = $api_instance->getToken($username, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthTokensApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The username of the user |
 **client_id** | **string**| The id of the client |

### Return type

[**\KnetikCloud\Model\OauthAccessTokenResource**](../Model/OauthAccessTokenResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokens**
> \KnetikCloud\Model\PageResourceOauthAccessTokenResource_ getTokens($filter_client_id, $filter_username, $size, $page, $order)

List usernames and client ids

Token value not shown

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthTokensApi(new \Http\Adapter\Guzzle6\Client());
$filter_client_id = "filter_client_id_example"; // string | Filters for token whose client id matches provided string
$filter_username = "filter_username_example"; // string | Filters for token whose username matches provided string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getTokens($filter_client_id, $filter_username, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthTokensApi->getTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_client_id** | **string**| Filters for token whose client id matches provided string | [optional]
 **filter_username** | **string**| Filters for token whose username matches provided string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceOauthAccessTokenResource_**](../Model/PageResourceOauthAccessTokenResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

