# KnetikCloud\ContentArticlesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createArticle**](ContentArticlesApi.md#createArticle) | **POST** /content/articles | Create a new article
[**createArticleTemplate**](ContentArticlesApi.md#createArticleTemplate) | **POST** /content/articles/templates | Create an article template
[**deleteArticle**](ContentArticlesApi.md#deleteArticle) | **DELETE** /content/articles/{id} | Delete an existing article
[**deleteArticleTemplate**](ContentArticlesApi.md#deleteArticleTemplate) | **DELETE** /content/articles/templates/{id} | Delete an article template
[**getArticle**](ContentArticlesApi.md#getArticle) | **GET** /content/articles/{id} | Get a single article
[**getArticleTemplate**](ContentArticlesApi.md#getArticleTemplate) | **GET** /content/articles/templates/{id} | Get a single article template
[**getArticleTemplates**](ContentArticlesApi.md#getArticleTemplates) | **GET** /content/articles/templates | List and search article templates
[**getArticles**](ContentArticlesApi.md#getArticles) | **GET** /content/articles | List and search articles
[**updateArticle**](ContentArticlesApi.md#updateArticle) | **PUT** /content/articles/{id} | Update an existing article
[**updateArticleTemplate**](ContentArticlesApi.md#updateArticleTemplate) | **PUT** /content/articles/templates/{id} | Update an article template


# **createArticle**
> \KnetikCloud\Model\ArticleResource createArticle($article_resource)

Create a new article

Articles are blobs of text with titles, a category and assets. Formatting and display of the text is in the hands of the front end.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$article_resource = new \KnetikCloud\Model\ArticleResource(); // \KnetikCloud\Model\ArticleResource | The new article

try {
    $result = $api_instance->createArticle($article_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->createArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_resource** | [**\KnetikCloud\Model\ArticleResource**](../Model/ArticleResource.md)| The new article | [optional]

### Return type

[**\KnetikCloud\Model\ArticleResource**](../Model/ArticleResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createArticleTemplate**
> \KnetikCloud\Model\TemplateResource createArticleTemplate($article_template_resource)

Create an article template

Article Templates define a type of article and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$article_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The article template resource object

try {
    $result = $api_instance->createArticleTemplate($article_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->createArticleTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The article template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArticle**
> deleteArticle($id)

Delete an existing article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The article id

try {
    $api_instance->deleteArticle($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->deleteArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The article id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArticleTemplate**
> deleteArticleTemplate($id, $cascade)

Delete an article template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteArticleTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->deleteArticleTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **cascade** | **string**| The value needed to delete used templates | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticle**
> \KnetikCloud\Model\ArticleResource getArticle($id)

Get a single article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The article id

try {
    $result = $api_instance->getArticle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->getArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The article id |

### Return type

[**\KnetikCloud\Model\ArticleResource**](../Model/ArticleResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleTemplate**
> \KnetikCloud\Model\TemplateResource getArticleTemplate($id)

Get a single article template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getArticleTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->getArticleTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getArticleTemplates($size, $page, $order)

List and search article templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getArticleTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->getArticleTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceTemplateResource_**](../Model/PageResourceTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticles**
> \KnetikCloud\Model\PageResourceArticleResource_ getArticles($filter_active_only, $filter_category, $filter_tagset, $filter_tag_intersection, $filter_tag_exclusion, $filter_title, $size, $page, $order)

List and search articles

Get a list of articles with optional filtering. Assets will not be filled in on the resources returned. Use 'Get a single article' to retrieve the full resource with assets for a given item as needed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$filter_active_only = true; // bool | Filter for articles that are active (true) or inactive (false)
$filter_category = "filter_category_example"; // string | Filter for articles from a specific category by id
$filter_tagset = "filter_tagset_example"; // string | Filter for articles with at least one of a specified set of tags (separated by comma)
$filter_tag_intersection = "filter_tag_intersection_example"; // string | Filter for articles with all of a specified set of tags (separated by comma)
$filter_tag_exclusion = "filter_tag_exclusion_example"; // string | Filter for articles with none of a specified set of tags (separated by comma)
$filter_title = "filter_title_example"; // string | Filter for articles whose title contains a string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getArticles($filter_active_only, $filter_category, $filter_tagset, $filter_tag_intersection, $filter_tag_exclusion, $filter_title, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->getArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_active_only** | **bool**| Filter for articles that are active (true) or inactive (false) | [optional]
 **filter_category** | **string**| Filter for articles from a specific category by id | [optional]
 **filter_tagset** | **string**| Filter for articles with at least one of a specified set of tags (separated by comma) | [optional]
 **filter_tag_intersection** | **string**| Filter for articles with all of a specified set of tags (separated by comma) | [optional]
 **filter_tag_exclusion** | **string**| Filter for articles with none of a specified set of tags (separated by comma) | [optional]
 **filter_title** | **string**| Filter for articles whose title contains a string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceArticleResource_**](../Model/PageResourceArticleResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateArticle**
> \KnetikCloud\Model\ArticleResource updateArticle($id, $article_resource)

Update an existing article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The article id
$article_resource = new \KnetikCloud\Model\ArticleResource(); // \KnetikCloud\Model\ArticleResource | The article object

try {
    $result = $api_instance->updateArticle($id, $article_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->updateArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The article id |
 **article_resource** | [**\KnetikCloud\Model\ArticleResource**](../Model/ArticleResource.md)| The article object | [optional]

### Return type

[**\KnetikCloud\Model\ArticleResource**](../Model/ArticleResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateArticleTemplate**
> \KnetikCloud\Model\TemplateResource updateArticleTemplate($id, $article_template_resource)

Update an article template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$article_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The article template resource object

try {
    $result = $api_instance->updateArticleTemplate($id, $article_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentArticlesApi->updateArticleTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **article_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The article template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

