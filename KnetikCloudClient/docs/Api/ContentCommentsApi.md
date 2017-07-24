# KnetikCloud\ContentCommentsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addComment**](ContentCommentsApi.md#addComment) | **POST** /comments | Add a new comment
[**deleteComment**](ContentCommentsApi.md#deleteComment) | **DELETE** /comments/{id} | Delete a comment
[**getComment**](ContentCommentsApi.md#getComment) | **GET** /comments/{id} | Return a comment
[**getComments**](ContentCommentsApi.md#getComments) | **GET** /comments | Returns a page of comments
[**searchComments**](ContentCommentsApi.md#searchComments) | **POST** /comments/search | Search the comment index
[**updateComment**](ContentCommentsApi.md#updateComment) | **PUT** /comments/{id}/content | Update a comment


# **addComment**
> \KnetikCloud\Model\CommentResource addComment($comment_resource)

Add a new comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentCommentsApi();
$comment_resource = new \KnetikCloud\Model\CommentResource(); // \KnetikCloud\Model\CommentResource | The comment to be added

try {
    $result = $api_instance->addComment($comment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentCommentsApi->addComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_resource** | [**\KnetikCloud\Model\CommentResource**](../Model/CommentResource.md)| The comment to be added | [optional]

### Return type

[**\KnetikCloud\Model\CommentResource**](../Model/CommentResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteComment**
> deleteComment($id)

Delete a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentCommentsApi();
$id = 789; // int | The comment id

try {
    $api_instance->deleteComment($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentCommentsApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The comment id |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComment**
> \KnetikCloud\Model\CommentResource getComment($id)

Return a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ContentCommentsApi();
$id = 789; // int | The comment id

try {
    $result = $api_instance->getComment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentCommentsApi->getComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The comment id |

### Return type

[**\KnetikCloud\Model\CommentResource**](../Model/CommentResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComments**
> \KnetikCloud\Model\PageResourceCommentResource_ getComments($context, $context_id, $size, $page)

Returns a page of comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ContentCommentsApi();
$context = "context_example"; // string | Get comments by context type
$context_id = 56; // int | Get comments by context id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getComments($context, $context_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentCommentsApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| Get comments by context type |
 **context_id** | **int**| Get comments by context id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceCommentResource_**](../Model/PageResourceCommentResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchComments**
> \KnetikCloud\Model\CommentSearch searchComments($query, $size, $page)

Search the comment index

The body is an ElasticSearch query json. Please see their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/index.html'>documentation</a> for details on the format and search options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ContentCommentsApi();
$query = NULL; // object | The search query
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->searchComments($query, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentCommentsApi->searchComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **object**| The search query | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\CommentSearch**](../Model/CommentSearch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateComment**
> updateComment($id, $content)

Update a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentCommentsApi();
$id = 789; // int | The comment id
$content = "content_example"; // string | The comment content

try {
    $api_instance->updateComment($id, $content);
} catch (Exception $e) {
    echo 'Exception when calling ContentCommentsApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The comment id |
 **content** | **string**| The comment content | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

