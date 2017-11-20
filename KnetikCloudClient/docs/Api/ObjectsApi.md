# KnetikCloud\ObjectsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createObjectItem**](ObjectsApi.md#createObjectItem) | **POST** /objects/{template_id} | Create an object
[**createObjectTemplate**](ObjectsApi.md#createObjectTemplate) | **POST** /objects/templates | Create an object template
[**deleteObjectItem**](ObjectsApi.md#deleteObjectItem) | **DELETE** /objects/{template_id}/{object_id} | Delete an object
[**deleteObjectTemplate**](ObjectsApi.md#deleteObjectTemplate) | **DELETE** /objects/templates/{id} | Delete an entitlement template
[**getObjectItem**](ObjectsApi.md#getObjectItem) | **GET** /objects/{template_id}/{object_id} | Get a single object
[**getObjectItems**](ObjectsApi.md#getObjectItems) | **GET** /objects/{template_id} | List and search objects
[**getObjectTemplate**](ObjectsApi.md#getObjectTemplate) | **GET** /objects/templates/{id} | Get a single entitlement template
[**getObjectTemplates**](ObjectsApi.md#getObjectTemplates) | **GET** /objects/templates | List and search entitlement templates
[**updateObjectItem**](ObjectsApi.md#updateObjectItem) | **PUT** /objects/{template_id}/{object_id} | Update an object
[**updateObjectTemplate**](ObjectsApi.md#updateObjectTemplate) | **PUT** /objects/templates/{id} | Update an entitlement template


# **createObjectItem**
> \KnetikCloud\Model\ObjectResource createObjectItem($template_id, $cascade, $object_item)

Create an object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$template_id = "template_id_example"; // string | The id of the template this object is to be part of
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$object_item = new \KnetikCloud\Model\ObjectResource(); // \KnetikCloud\Model\ObjectResource | The object item object

try {
    $result = $api_instance->createObjectItem($template_id, $cascade, $object_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->createObjectItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| The id of the template this object is to be part of |
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **object_item** | [**\KnetikCloud\Model\ObjectResource**](../Model/ObjectResource.md)| The object item object | [optional]

### Return type

[**\KnetikCloud\Model\ObjectResource**](../Model/ObjectResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createObjectTemplate**
> \KnetikCloud\Model\ItemTemplateResource createObjectTemplate($template)

Create an object template

Object templates define a type of entitlement and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$template = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The entitlement template to be created

try {
    $result = $api_instance->createObjectTemplate($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->createObjectTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)| The entitlement template to be created | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteObjectItem**
> deleteObjectItem($template_id, $object_id)

Delete an object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$template_id = "template_id_example"; // string | The id of the template this object is part of
$object_id = 56; // int | The id of the object

try {
    $api_instance->deleteObjectItem($template_id, $object_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->deleteObjectItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| The id of the template this object is part of |
 **object_id** | **int**| The id of the object |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteObjectTemplate**
> deleteObjectTemplate($id, $cascade)

Delete an entitlement template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteObjectTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->deleteObjectTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getObjectItem**
> \KnetikCloud\Model\ObjectResource getObjectItem($template_id, $object_id)

Get a single object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$template_id = "template_id_example"; // string | The id of the template this object is part of
$object_id = 56; // int | The id of the object

try {
    $result = $api_instance->getObjectItem($template_id, $object_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getObjectItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| The id of the template this object is part of |
 **object_id** | **int**| The id of the object |

### Return type

[**\KnetikCloud\Model\ObjectResource**](../Model/ObjectResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectItems**
> \KnetikCloud\Model\PageResourceObjectResource_ getObjectItems($template_id, $size, $page, $order)

List and search objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$template_id = "template_id_example"; // string | The id of the template to get objects for
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getObjectItems($template_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getObjectItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| The id of the template to get objects for |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceObjectResource_**](../Model/PageResourceObjectResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectTemplate**
> \KnetikCloud\Model\ItemTemplateResource getObjectTemplate($id)

Get a single entitlement template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getObjectTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getObjectTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectTemplates**
> \KnetikCloud\Model\PageResourceItemTemplateResource_ getObjectTemplates($size, $page, $order)

List and search entitlement templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getObjectTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getObjectTemplates: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceItemTemplateResource_**](../Model/PageResourceItemTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateObjectItem**
> updateObjectItem($template_id, $entitlement_id, $cascade, $object_item)

Update an object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$template_id = "template_id_example"; // string | The id of the template this object is part of
$entitlement_id = 56; // int | The id of the entitlement
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$object_item = new \KnetikCloud\Model\EntitlementItem(); // \KnetikCloud\Model\EntitlementItem | The object item object

try {
    $api_instance->updateObjectItem($template_id, $entitlement_id, $cascade, $object_item);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->updateObjectItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**| The id of the template this object is part of |
 **entitlement_id** | **int**| The id of the entitlement |
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **object_item** | [**\KnetikCloud\Model\EntitlementItem**](../Model/EntitlementItem.md)| The object item object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateObjectTemplate**
> \KnetikCloud\Model\ItemTemplateResource updateObjectTemplate($id, $template)

Update an entitlement template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ObjectsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$template = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The updated template

try {
    $result = $api_instance->updateObjectTemplate($id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->updateObjectTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **template** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)| The updated template | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

