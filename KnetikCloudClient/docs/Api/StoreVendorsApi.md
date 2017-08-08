# KnetikCloud\StoreVendorsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVendor**](StoreVendorsApi.md#createVendor) | **POST** /vendors | Create a vendor
[**createVendorTemplate**](StoreVendorsApi.md#createVendorTemplate) | **POST** /vendors/templates | Create a vendor template
[**deleteVendor**](StoreVendorsApi.md#deleteVendor) | **DELETE** /vendors/{id} | Delete a vendor
[**deleteVendorTemplate**](StoreVendorsApi.md#deleteVendorTemplate) | **DELETE** /vendors/templates/{id} | Delete a vendor template
[**getVendor**](StoreVendorsApi.md#getVendor) | **GET** /vendors/{id} | Get a single vendor
[**getVendorTemplate**](StoreVendorsApi.md#getVendorTemplate) | **GET** /vendors/templates/{id} | Get a single vendor template
[**getVendorTemplates**](StoreVendorsApi.md#getVendorTemplates) | **GET** /vendors/templates | List and search vendor templates
[**getVendors**](StoreVendorsApi.md#getVendors) | **GET** /vendors | List and search vendors
[**updateVendor**](StoreVendorsApi.md#updateVendor) | **PUT** /vendors/{id} | Update a vendor
[**updateVendorTemplate**](StoreVendorsApi.md#updateVendorTemplate) | **PUT** /vendors/templates/{id} | Update a vendor template


# **createVendor**
> \KnetikCloud\Model\VendorResource createVendor($vendor)

Create a vendor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$vendor = new \KnetikCloud\Model\VendorResource(); // \KnetikCloud\Model\VendorResource | The vendor

try {
    $result = $api_instance->createVendor($vendor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->createVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor** | [**\KnetikCloud\Model\VendorResource**](../Model/VendorResource.md)| The vendor | [optional]

### Return type

[**\KnetikCloud\Model\VendorResource**](../Model/VendorResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVendorTemplate**
> \KnetikCloud\Model\ItemTemplateResource createVendorTemplate($vendor_template_resource)

Create a vendor template

Vendor Templates define a type of vendor and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$vendor_template_resource = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The new vendor template

try {
    $result = $api_instance->createVendorTemplate($vendor_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->createVendorTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_template_resource** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)| The new vendor template | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVendor**
> deleteVendor($id)

Delete a vendor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the vendor

try {
    $api_instance->deleteVendor($id);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->deleteVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the vendor |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVendorTemplate**
> deleteVendorTemplate($id, $cascade)

Delete a vendor template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | force deleting the template if it's attached to other objects, cascade = detach

try {
    $api_instance->deleteVendorTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->deleteVendorTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendor**
> \KnetikCloud\Model\VendorResource getVendor($id)

Get a single vendor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the vendor

try {
    $result = $api_instance->getVendor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->getVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the vendor |

### Return type

[**\KnetikCloud\Model\VendorResource**](../Model/VendorResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorTemplate**
> \KnetikCloud\Model\ItemTemplateResource getVendorTemplate($id)

Get a single vendor template

Vendor Templates define a type of vendor and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getVendorTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->getVendorTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorTemplates**
> \KnetikCloud\Model\PageResourceItemTemplateResource_ getVendorTemplates($size, $page, $order)

List and search vendor templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "1"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getVendorTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->getVendorTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceItemTemplateResource_**](../Model/PageResourceItemTemplateResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendors**
> \KnetikCloud\Model\PageResourceVendorResource_ getVendors($filter_name, $size, $page, $order)

List and search vendors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$filter_name = "filter_name_example"; // string | Filters vendors by name starting with the text provided in the filter
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getVendors($filter_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->getVendors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name** | **string**| Filters vendors by name starting with the text provided in the filter | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceVendorResource_**](../Model/PageResourceVendorResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVendor**
> \KnetikCloud\Model\VendorResource updateVendor($id, $vendor)

Update a vendor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the vendor
$vendor = new \KnetikCloud\Model\VendorResource(); // \KnetikCloud\Model\VendorResource | The vendor

try {
    $result = $api_instance->updateVendor($id, $vendor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->updateVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the vendor |
 **vendor** | [**\KnetikCloud\Model\VendorResource**](../Model/VendorResource.md)| The vendor | [optional]

### Return type

[**\KnetikCloud\Model\VendorResource**](../Model/VendorResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVendorTemplate**
> \KnetikCloud\Model\ItemTemplateResource updateVendorTemplate($id, $vendor_template_resource)

Update a vendor template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreVendorsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$vendor_template_resource = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The vendor template resource object

try {
    $result = $api_instance->updateVendorTemplate($id, $vendor_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreVendorsApi->updateVendorTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **vendor_template_resource** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)| The vendor template resource object | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

