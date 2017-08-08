# KnetikCloud\CategoriesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategory**](CategoriesApi.md#createCategory) | **POST** /categories | Create a new category
[**createCategoryTemplate**](CategoriesApi.md#createCategoryTemplate) | **POST** /categories/templates | Create a category template
[**deleteCategory**](CategoriesApi.md#deleteCategory) | **DELETE** /categories/{id} | Delete an existing category
[**deleteCategoryTemplate**](CategoriesApi.md#deleteCategoryTemplate) | **DELETE** /categories/templates/{id} | Delete a category template
[**getCategories**](CategoriesApi.md#getCategories) | **GET** /categories | List and search categories with optional filters
[**getCategory**](CategoriesApi.md#getCategory) | **GET** /categories/{id} | Get a single category
[**getCategoryTemplate**](CategoriesApi.md#getCategoryTemplate) | **GET** /categories/templates/{id} | Get a single category template
[**getCategoryTemplates**](CategoriesApi.md#getCategoryTemplates) | **GET** /categories/templates | List and search category templates
[**getTags**](CategoriesApi.md#getTags) | **GET** /tags | List all trivia tags in the system
[**updateCategory**](CategoriesApi.md#updateCategory) | **PUT** /categories/{id} | Update an existing category
[**updateCategoryTemplate**](CategoriesApi.md#updateCategoryTemplate) | **PUT** /categories/templates/{id} | Update a category template


# **createCategory**
> \KnetikCloud\Model\CategoryResource createCategory($category)

Create a new category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$category = new \KnetikCloud\Model\CategoryResource(); // \KnetikCloud\Model\CategoryResource | The category to create

try {
    $result = $api_instance->createCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\KnetikCloud\Model\CategoryResource**](../Model/CategoryResource.md)| The category to create | [optional]

### Return type

[**\KnetikCloud\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCategoryTemplate**
> \KnetikCloud\Model\TemplateResource createCategoryTemplate($template)

Create a category template

Templates define a type of category and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The template to create

try {
    $result = $api_instance->createCategoryTemplate($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->createCategoryTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The template to create | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategory**
> deleteCategory($id)

Delete an existing category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the category to be deleted

try {
    $api_instance->deleteCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the category to be deleted |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategoryTemplate**
> deleteCategoryTemplate($id, $cascade)

Delete a category template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteCategoryTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->deleteCategoryTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategories**
> \KnetikCloud\Model\PageResourceCategoryResource_ getCategories($filter_search, $filter_active, $size, $page, $order)

List and search categories with optional filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$filter_search = "filter_search_example"; // string | Filter for categories whose names begin with provided string
$filter_active = true; // bool | Filter for categories that are specifically active or inactive
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCategories($filter_search, $filter_active, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Filter for categories whose names begin with provided string | [optional]
 **filter_active** | **bool**| Filter for categories that are specifically active or inactive | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceCategoryResource_**](../Model/PageResourceCategoryResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategory**
> \KnetikCloud\Model\CategoryResource getCategory($id)

Get a single category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the category to retrieve

try {
    $result = $api_instance->getCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the category to retrieve |

### Return type

[**\KnetikCloud\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryTemplate**
> \KnetikCloud\Model\TemplateResource getCategoryTemplate($id)

Get a single category template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getCategoryTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getCategoryTemplates($size, $page, $order)

List and search category templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCategoryTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryTemplates: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTags**
> \KnetikCloud\Model\PageResourceString_ getTags($size, $page)

List all trivia tags in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getTags($size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceString_**](../Model/PageResourceString_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategory**
> \KnetikCloud\Model\CategoryResource updateCategory($id, $category)

Update an existing category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the category
$category = new \KnetikCloud\Model\CategoryResource(); // \KnetikCloud\Model\CategoryResource | The category to update

try {
    $result = $api_instance->updateCategory($id, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the category |
 **category** | [**\KnetikCloud\Model\CategoryResource**](../Model/CategoryResource.md)| The category to update | [optional]

### Return type

[**\KnetikCloud\Model\CategoryResource**](../Model/CategoryResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategoryTemplate**
> \KnetikCloud\Model\TemplateResource updateCategoryTemplate($id, $template)

Update a category template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The updated template information

try {
    $result = $api_instance->updateCategoryTemplate($id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateCategoryTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The updated template information | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

