# KnetikCloud\StoreShippingApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingItem**](StoreShippingApi.md#createShippingItem) | **POST** /store/shipping | Create a shipping item
[**createShippingTemplate**](StoreShippingApi.md#createShippingTemplate) | **POST** /store/shipping/templates | Create a shipping template
[**deleteShippingItem**](StoreShippingApi.md#deleteShippingItem) | **DELETE** /store/shipping/{id} | Delete a shipping item
[**deleteShippingTemplate**](StoreShippingApi.md#deleteShippingTemplate) | **DELETE** /store/shipping/templates/{id} | Delete a shipping template
[**getShippingItem**](StoreShippingApi.md#getShippingItem) | **GET** /store/shipping/{id} | Get a single shipping item
[**getShippingTemplate**](StoreShippingApi.md#getShippingTemplate) | **GET** /store/shipping/templates/{id} | Get a single shipping template
[**getShippingTemplates**](StoreShippingApi.md#getShippingTemplates) | **GET** /store/shipping/templates | List and search shipping templates
[**updateShippingItem**](StoreShippingApi.md#updateShippingItem) | **PUT** /store/shipping/{id} | Update a shipping item
[**updateShippingTemplate**](StoreShippingApi.md#updateShippingTemplate) | **PUT** /store/shipping/templates/{id} | Update a shipping template


# **createShippingItem**
> \KnetikCloud\Model\ShippingItem createShippingItem($cascade, $shipping_item)

Create a shipping item

A shipping item represents a shipping option and cost. SKUs have to be unique in the entire store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$shipping_item = new \KnetikCloud\Model\ShippingItem(); // \KnetikCloud\Model\ShippingItem | The shipping item object

try {
    $result = $api_instance->createShippingItem($cascade, $shipping_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->createShippingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **shipping_item** | [**\KnetikCloud\Model\ShippingItem**](../Model/ShippingItem.md)| The shipping item object | [optional]

### Return type

[**\KnetikCloud\Model\ShippingItem**](../Model/ShippingItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShippingTemplate**
> \KnetikCloud\Model\ItemTemplateResource createShippingTemplate($shipping_template_resource)

Create a shipping template

Shipping Templates define a type of shipping and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$shipping_template_resource = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The new shipping template

try {
    $result = $api_instance->createShippingTemplate($shipping_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->createShippingTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_template_resource** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)| The new shipping template | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShippingItem**
> deleteShippingItem($id)

Delete a shipping item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the shipping item

try {
    $api_instance->deleteShippingItem($id);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->deleteShippingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the shipping item |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShippingTemplate**
> deleteShippingTemplate($id, $cascade)

Delete a shipping template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | force deleting the template if it's attached to other objects, cascade = detach

try {
    $api_instance->deleteShippingTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->deleteShippingTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **cascade** | **string**| force deleting the template if it&#39;s attached to other objects, cascade &#x3D; detach | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingItem**
> \KnetikCloud\Model\ShippingItem getShippingItem($id)

Get a single shipping item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the shipping item

try {
    $result = $api_instance->getShippingItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->getShippingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the shipping item |

### Return type

[**\KnetikCloud\Model\ShippingItem**](../Model/ShippingItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingTemplate**
> \KnetikCloud\Model\ItemTemplateResource getShippingTemplate($id)

Get a single shipping template

Shipping Templates define a type of shipping and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getShippingTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->getShippingTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getShippingTemplates**
> \KnetikCloud\Model\PageResourceItemTemplateResource_ getShippingTemplates($size, $page, $order)

List and search shipping templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getShippingTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->getShippingTemplates: ', $e->getMessage(), PHP_EOL;
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

# **updateShippingItem**
> \KnetikCloud\Model\ShippingItem updateShippingItem($id, $cascade, $shipping_item)

Update a shipping item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the shipping item
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$shipping_item = new \KnetikCloud\Model\ShippingItem(); // \KnetikCloud\Model\ShippingItem | The shipping item object

try {
    $result = $api_instance->updateShippingItem($id, $cascade, $shipping_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->updateShippingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the shipping item |
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **shipping_item** | [**\KnetikCloud\Model\ShippingItem**](../Model/ShippingItem.md)| The shipping item object | [optional]

### Return type

[**\KnetikCloud\Model\ShippingItem**](../Model/ShippingItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShippingTemplate**
> \KnetikCloud\Model\ItemTemplateResource updateShippingTemplate($id, $shipping_template_resource)

Update a shipping template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShippingApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$shipping_template_resource = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The shipping template resource object

try {
    $result = $api_instance->updateShippingTemplate($id, $shipping_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShippingApi->updateShippingTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **shipping_template_resource** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)| The shipping template resource object | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

