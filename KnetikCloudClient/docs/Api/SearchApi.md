# KnetikCloud\SearchApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSearchIndex**](SearchApi.md#addSearchIndex) | **POST** /search/index/{type}/{id} | Add a new object to an index
[**addSearchMappings**](SearchApi.md#addSearchMappings) | **POST** /search/mappings | Register reference mappings
[**deleteSearchIndex**](SearchApi.md#deleteSearchIndex) | **DELETE** /search/index/{type}/{id} | Delete an object
[**deleteSearchIndexes**](SearchApi.md#deleteSearchIndexes) | **DELETE** /search/index/{type} | Delete all objects in an index
[**searchIndex**](SearchApi.md#searchIndex) | **POST** /search/index/{type} | Search an index


# **addSearchIndex**
> addSearchIndex($type, $id, $object)

Add a new object to an index

Mainly intended for internal use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi();
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The ID of the object
$object = NULL; // object | The object to add

try {
    $api_instance->addSearchIndex($type, $id, $object);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->addSearchIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The ID of the object |
 **object** | **object**| The object to add | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSearchMappings**
> addSearchMappings($mappings)

Register reference mappings

Add a new type mapping to connect data from one index to another, or discover an exsting one. Mainly intended for internal use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi();
$mappings = array(new SearchReferenceMapping()); // \KnetikCloud\Model\SearchReferenceMapping[] | The mappings to add

try {
    $api_instance->addSearchMappings($mappings);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->addSearchMappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mappings** | [**\KnetikCloud\Model\SearchReferenceMapping[]**](../Model/SearchReferenceMapping.md)| The mappings to add | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSearchIndex**
> deleteSearchIndex($type, $id)

Delete an object

Mainly intended for internal use. Requires SEARCH_ADMIN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi();
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The ID of the object to delete

try {
    $api_instance->deleteSearchIndex($type, $id);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteSearchIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The ID of the object to delete |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSearchIndexes**
> deleteSearchIndexes($type)

Delete all objects in an index

Mainly intended for internal use

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi();
$type = "type_example"; // string | The index type

try {
    $api_instance->deleteSearchIndexes($type);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteSearchIndexes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIndex**
> \KnetikCloud\Model\PageResourceMapStringObject_ searchIndex($type, $query, $size, $page)

Search an index

The body is an ElasticSearch query in JSON format. Please see their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl.html'>documentation</a> for details on the format and search options. The searchable object's format depends on on the type. See individual search endpoints on other resources for details on their format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\SearchApi();
$type = "type_example"; // string | The index type
$query = NULL; // object | The query to be used for the search
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->searchIndex($type, $query, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **query** | **object**| The query to be used for the search | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceMapStringObject_**](../Model/PageResourceMapStringObject_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

