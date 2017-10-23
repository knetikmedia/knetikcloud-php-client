# KnetikCloud\SearchApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchIndex**](SearchApi.md#searchIndex) | **POST** /search/index/{type} | Search an index


# **searchIndex**
> \KnetikCloud\Model\PageResourceMapStringObject_ searchIndex($type, $query, $size, $page)

Search an index

The body is an ElasticSearch query in JSON format. Please see their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl.html'>documentation</a> for details on the format and search options. The searchable object's format depends on on the type but mostly matches the resource from it's main endpoint. Exceptions include referenced objects (like user) being replaced with the full user resource to allow deeper searching.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$query = NULL; // object | The query to be used for the search
$size = 25; // int | The number of documents returned per page
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
 **size** | **int**| The number of documents returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceMapStringObject_**](../Model/PageResourceMapStringObject_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

