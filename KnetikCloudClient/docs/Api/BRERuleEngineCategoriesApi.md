# KnetikCloud\BRERuleEngineCategoriesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBRECategoryTemplate**](BRERuleEngineCategoriesApi.md#createBRECategoryTemplate) | **POST** /bre/categories/templates | Create a BRE category template
[**deleteBRECategoryTemplate**](BRERuleEngineCategoriesApi.md#deleteBRECategoryTemplate) | **DELETE** /bre/categories/templates/{id} | Delete a BRE category template
[**getBRECategories**](BRERuleEngineCategoriesApi.md#getBRECategories) | **GET** /bre/categories | List categories
[**getBRECategory**](BRERuleEngineCategoriesApi.md#getBRECategory) | **GET** /bre/categories/{name} | Get a single category
[**getBRECategoryTemplate**](BRERuleEngineCategoriesApi.md#getBRECategoryTemplate) | **GET** /bre/categories/templates/{id} | Get a single BRE category template
[**getBRECategoryTemplates**](BRERuleEngineCategoriesApi.md#getBRECategoryTemplates) | **GET** /bre/categories/templates | List and search BRE category templates
[**updateBRECategory**](BRERuleEngineCategoriesApi.md#updateBRECategory) | **PUT** /bre/categories/{name} | Update a category
[**updateBRECategoryTemplate**](BRERuleEngineCategoriesApi.md#updateBRECategoryTemplate) | **PUT** /bre/categories/templates/{id} | Update a BRE category template


# **createBRECategoryTemplate**
> \KnetikCloud\Model\TemplateResource createBRECategoryTemplate($template)

Create a BRE category template

Templates define a type of BRE category and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The category template to create

try {
    $result = $api_instance->createBRECategoryTemplate($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->createBRECategoryTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The category template to create | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBRECategoryTemplate**
> deleteBRECategoryTemplate($id, $cascade)

Delete a BRE category template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteBRECategoryTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->deleteBRECategoryTemplate: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRECategories**
> \KnetikCloud\Model\PageResourceBreCategoryResource_ getBRECategories($size, $page)

List categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getBRECategories($size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->getBRECategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceBreCategoryResource_**](../Model/PageResourceBreCategoryResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRECategory**
> \KnetikCloud\Model\BreCategoryResource getBRECategory($name)

Get a single category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The category name

try {
    $result = $api_instance->getBRECategory($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->getBRECategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The category name |

### Return type

[**\KnetikCloud\Model\BreCategoryResource**](../Model/BreCategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRECategoryTemplate**
> \KnetikCloud\Model\TemplateResource getBRECategoryTemplate($id)

Get a single BRE category template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getBRECategoryTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->getBRECategoryTemplate: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRECategoryTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getBRECategoryTemplates($size, $page, $order)

List and search BRE category templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getBRECategoryTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->getBRECategoryTemplates: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBRECategory**
> \KnetikCloud\Model\BreCategoryResource updateBRECategory($name, $category)

Update a category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The category name
$category = new \KnetikCloud\Model\BreCategoryResource(); // \KnetikCloud\Model\BreCategoryResource | The updated BRE category information

try {
    $result = $api_instance->updateBRECategory($name, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->updateBRECategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The category name |
 **category** | [**\KnetikCloud\Model\BreCategoryResource**](../Model/BreCategoryResource.md)| The updated BRE category information | [optional]

### Return type

[**\KnetikCloud\Model\BreCategoryResource**](../Model/BreCategoryResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBRECategoryTemplate**
> \KnetikCloud\Model\TemplateResource updateBRECategoryTemplate($id, $template)

Update a BRE category template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\BRERuleEngineCategoriesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The updated category template definition

try {
    $result = $api_instance->updateBRECategoryTemplate($id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineCategoriesApi->updateBRECategoryTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The updated category template definition | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

