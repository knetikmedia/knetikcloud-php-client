# KnetikCloud\DispositionsApi

All URIs are relative to *https://devsandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDisposition**](DispositionsApi.md#addDisposition) | **POST** /dispositions | Add a new disposition
[**deleteDisposition**](DispositionsApi.md#deleteDisposition) | **DELETE** /dispositions/{id} | Delete a disposition
[**getDisposition**](DispositionsApi.md#getDisposition) | **GET** /dispositions/{id} | Returns a disposition
[**getDispositionCounts**](DispositionsApi.md#getDispositionCounts) | **GET** /dispositions/count | Returns a list of disposition counts
[**getDispositions**](DispositionsApi.md#getDispositions) | **GET** /dispositions | Returns a page of dispositions


# **addDisposition**
> \KnetikCloud\Model\DispositionResource addDisposition($disposition)

Add a new disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DispositionsApi(new \Http\Adapter\Guzzle6\Client());
$disposition = new \KnetikCloud\Model\DispositionResource(); // \KnetikCloud\Model\DispositionResource | The new disposition record

try {
    $result = $api_instance->addDisposition($disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsApi->addDisposition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disposition** | [**\KnetikCloud\Model\DispositionResource**](../Model/DispositionResource.md)| The new disposition record | [optional]

### Return type

[**\KnetikCloud\Model\DispositionResource**](../Model/DispositionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDisposition**
> deleteDisposition($id)

Delete a disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DispositionsApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the disposition record

try {
    $api_instance->deleteDisposition($id);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsApi->deleteDisposition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the disposition record |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisposition**
> \KnetikCloud\Model\DispositionResource getDisposition($id)

Returns a disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DispositionsApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the disposition record

try {
    $result = $api_instance->getDisposition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsApi->getDisposition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the disposition record |

### Return type

[**\KnetikCloud\Model\DispositionResource**](../Model/DispositionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispositionCounts**
> \KnetikCloud\Model\DispositionCount[] getDispositionCounts($filter_context, $filter_owner)

Returns a list of disposition counts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DispositionsApi(new \Http\Adapter\Guzzle6\Client());
$filter_context = "filter_context_example"; // string | Filter for dispositions within a context type (games, articles, polls, etc). Optionally with a specific id like filter_context=video:47
$filter_owner = "filter_owner_example"; // string | Filter for dispositions from a specific user by id or 'me'

try {
    $result = $api_instance->getDispositionCounts($filter_context, $filter_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsApi->getDispositionCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_context** | **string**| Filter for dispositions within a context type (games, articles, polls, etc). Optionally with a specific id like filter_context&#x3D;video:47 | [optional]
 **filter_owner** | **string**| Filter for dispositions from a specific user by id or &#39;me&#39; | [optional]

### Return type

[**\KnetikCloud\Model\DispositionCount[]**](../Model/DispositionCount.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDispositions**
> \KnetikCloud\Model\PageResourceDispositionResource_ getDispositions($filter_context, $filter_owner, $size, $page, $order)

Returns a page of dispositions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DispositionsApi(new \Http\Adapter\Guzzle6\Client());
$filter_context = "filter_context_example"; // string | Filter for dispositions within a context type (games, articles, polls, etc). Optionally with a specific id like filter_context=video:47
$filter_owner = "filter_owner_example"; // string | Filter for dispositions from a specific user by id or 'me'
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getDispositions($filter_context, $filter_owner, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DispositionsApi->getDispositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_context** | **string**| Filter for dispositions within a context type (games, articles, polls, etc). Optionally with a specific id like filter_context&#x3D;video:47 | [optional]
 **filter_owner** | **string**| Filter for dispositions from a specific user by id or &#39;me&#39; | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceDispositionResource_**](../Model/PageResourceDispositionResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

