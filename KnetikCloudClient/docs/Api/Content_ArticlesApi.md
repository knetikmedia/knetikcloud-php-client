# KnetikCloud\Content_ArticlesApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createArticle**](Content_ArticlesApi.md#createArticle) | **POST** /content/articles | Create a new article
[**createArticleTemplate**](Content_ArticlesApi.md#createArticleTemplate) | **POST** /content/articles/templates | Create an article template
[**createTemplate**](Content_ArticlesApi.md#createTemplate) | **POST** /templates/{type_hint} | Create a template
[**deleteArticle**](Content_ArticlesApi.md#deleteArticle) | **DELETE** /content/articles/{id} | Delete an existing article
[**deleteArticleTemplate**](Content_ArticlesApi.md#deleteArticleTemplate) | **DELETE** /content/articles/templates/{id} | Delete an article template
[**deleteTemplate**](Content_ArticlesApi.md#deleteTemplate) | **DELETE** /templates/{type_hint}/{id} | Delete a template
[**getArticle**](Content_ArticlesApi.md#getArticle) | **GET** /content/articles/{id} | Get a single article
[**getArticleTemplate**](Content_ArticlesApi.md#getArticleTemplate) | **GET** /content/articles/templates/{id} | Get a single article template
[**getArticleTemplates**](Content_ArticlesApi.md#getArticleTemplates) | **GET** /content/articles/templates | List and search article templates
[**getArticles**](Content_ArticlesApi.md#getArticles) | **GET** /content/articles | List and search articles
[**getTemplate**](Content_ArticlesApi.md#getTemplate) | **GET** /templates/{type_hint}/{id} | Get a template
[**getTemplates**](Content_ArticlesApi.md#getTemplates) | **GET** /templates/{type_hint} | List and search templates
[**updateArticle**](Content_ArticlesApi.md#updateArticle) | **PUT** /content/articles/{id} | Update an existing article
[**updateArticleTemplate**](Content_ArticlesApi.md#updateArticleTemplate) | **PUT** /content/articles/templates/{id} | Update an article template
[**updateTemplate**](Content_ArticlesApi.md#updateTemplate) | **PUT** /templates/{type_hint}/{id} | Update a template
[**validate**](Content_ArticlesApi.md#validate) | **POST** /templates/{type_hint}/validate | Validate a templated resource


# **createArticle**
> \KnetikCloud\Model\ArticleResource createArticle($article_resource)

Create a new article

Articles are blobs of text with titles, a category and assets. Formatting and display of the text is in the hands of the front end.<br><br><b>Permissions:</b> ARTICLES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$article_resource = new \KnetikCloud\Model\ArticleResource(); // \KnetikCloud\Model\ArticleResource | The new article

try {
    $result = $api_instance->createArticle($article_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->createArticle: ', $e->getMessage(), PHP_EOL;
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

Article Templates define a type of article and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$article_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The article template resource object

try {
    $result = $api_instance->createArticleTemplate($article_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->createArticleTemplate: ', $e->getMessage(), PHP_EOL;
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

# **createTemplate**
> \KnetikCloud\Model\TemplateResource createTemplate($type_hint, $template)

Create a template

<b>Permissions Needed:</b> TEMPLATES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$type_hint = "type_hint_example"; // string | The type for the resource this template applies to
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The template

try {
    $result = $api_instance->createTemplate($type_hint, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_hint** | **string**| The type for the resource this template applies to |
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The template | [optional]

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

<b>Permissions Needed:</b> ARTICLES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The article id

try {
    $api_instance->deleteArticle($id);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->deleteArticle: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArticleTemplate**
> deleteArticleTemplate($id, $cascade)

Delete an article template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteArticleTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->deleteArticleTemplate: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplate**
> deleteTemplate($type_hint, $id, $cascade)

Delete a template

<b>Permissions Needed:</b> TEMPLATES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$type_hint = "type_hint_example"; // string | The type for the resource this template applies to
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | How to cascade the delete

try {
    $api_instance->deleteTemplate($type_hint, $id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_hint** | **string**| The type for the resource this template applies to |
 **id** | **string**| The id of the template |
 **cascade** | **string**| How to cascade the delete | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticle**
> \KnetikCloud\Model\ArticleResource getArticle($id)

Get a single article

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The article id

try {
    $result = $api_instance->getArticle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->getArticle: ', $e->getMessage(), PHP_EOL;
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleTemplate**
> \KnetikCloud\Model\TemplateResource getArticleTemplate($id)

Get a single article template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ARTICLES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getArticleTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->getArticleTemplate: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getArticleTemplates($size, $page, $order)

List and search article templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ARTICLES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getArticleTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->getArticleTemplates: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticles**
> \KnetikCloud\Model\PageResourceArticleResource_ getArticles($filter_active_only, $filter_category, $filter_tagset, $filter_tag_intersection, $filter_tag_exclusion, $filter_title, $size, $page, $order)

List and search articles

Get a list of articles with optional filtering. Assets will not be filled in on the resources returned. Use 'Get a single article' to retrieve the full resource with assets for a given item as needed. <br><br><b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling Content_ArticlesApi->getArticles: ', $e->getMessage(), PHP_EOL;
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \KnetikCloud\Model\TemplateResource getTemplate($type_hint, $id)

Get a template

<b>Permissions Needed:</b> TEMPLATES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$type_hint = "type_hint_example"; // string | The type for the resource this template applies to
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getTemplate($type_hint, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_hint** | **string**| The type for the resource this template applies to |
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getTemplates($type_hint, $size, $page, $order)

List and search templates

<b>Permissions Needed:</b> TEMPLATES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$type_hint = "type_hint_example"; // string | The type for the resource this template applies to
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getTemplates($type_hint, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_hint** | **string**| The type for the resource this template applies to |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceTemplateResource_**](../Model/PageResourceTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateArticle**
> \KnetikCloud\Model\ArticleResource updateArticle($id, $article_resource)

Update an existing article

<b>Permissions Needed:</b> ARTICLES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The article id
$article_resource = new \KnetikCloud\Model\ArticleResource(); // \KnetikCloud\Model\ArticleResource | The article object

try {
    $result = $api_instance->updateArticle($id, $article_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->updateArticle: ', $e->getMessage(), PHP_EOL;
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

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$article_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The article template resource object

try {
    $result = $api_instance->updateArticleTemplate($id, $article_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->updateArticleTemplate: ', $e->getMessage(), PHP_EOL;
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

# **updateTemplate**
> \KnetikCloud\Model\TemplateResource updateTemplate($type_hint, $id, $template)

Update a template

<b>Permissions Needed:</b> TEMPLATES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$type_hint = "type_hint_example"; // string | The type for the resource this template applies to
$id = "id_example"; // string | The id of the template
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The template

try {
    $result = $api_instance->updateTemplate($type_hint, $id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_hint** | **string**| The type for the resource this template applies to |
 **id** | **string**| The id of the template |
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The template | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validate**
> validate($type_hint, $resource)

Validate a templated resource

Error code thrown if invalid.<br><br><b>Permissions Needed:</b> TEMPLATES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Content_ArticlesApi(new \Http\Adapter\Guzzle6\Client());
$type_hint = "type_hint_example"; // string | The type for the resource this template applies to
$resource = new \KnetikCloud\Model\BasicTemplatedResource(); // \KnetikCloud\Model\BasicTemplatedResource | The resource to validate

try {
    $api_instance->validate($type_hint, $resource);
} catch (Exception $e) {
    echo 'Exception when calling Content_ArticlesApi->validate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_hint** | **string**| The type for the resource this template applies to |
 **resource** | [**\KnetikCloud\Model\BasicTemplatedResource**](../Model/BasicTemplatedResource.md)| The resource to validate | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

