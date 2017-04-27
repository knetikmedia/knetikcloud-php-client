# KnetikCloud\StoreCouponsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCouponItem**](StoreCouponsApi.md#createCouponItem) | **POST** /store/coupons | Create a coupon item
[**createCouponTemplate**](StoreCouponsApi.md#createCouponTemplate) | **POST** /store/coupons/templates | Create a coupon template
[**deleteCouponItem**](StoreCouponsApi.md#deleteCouponItem) | **DELETE** /store/coupons/{id} | Delete a coupon item
[**deleteCouponTemplate**](StoreCouponsApi.md#deleteCouponTemplate) | **DELETE** /store/coupons/templates/{id} | Delete a coupon template
[**getCouponItem**](StoreCouponsApi.md#getCouponItem) | **GET** /store/coupons/{id} | Get a single coupon item
[**getCouponTemplate**](StoreCouponsApi.md#getCouponTemplate) | **GET** /store/coupons/templates/{id} | Get a single coupon template
[**getCouponTemplates**](StoreCouponsApi.md#getCouponTemplates) | **GET** /store/coupons/templates | List and search coupon templates
[**updateCouponItem**](StoreCouponsApi.md#updateCouponItem) | **PUT** /store/coupons/{id} | Update a coupon item
[**updateCouponTemplate**](StoreCouponsApi.md#updateCouponTemplate) | **PUT** /store/coupons/templates/{id} | Update a coupon template


# **createCouponItem**
> \KnetikCloud\Model\CouponItem createCouponItem($cascade, $coupon_item)

Create a coupon item

SKUs have to be unique in the entire store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$coupon_item = new \KnetikCloud\Model\CouponItem(); // \KnetikCloud\Model\CouponItem | The coupon item object

try {
    $result = $api_instance->createCouponItem($cascade, $coupon_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->createCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **coupon_item** | [**\KnetikCloud\Model\CouponItem**](../Model/\KnetikCloud\Model\CouponItem.md)| The coupon item object | [optional]

### Return type

[**\KnetikCloud\Model\CouponItem**](../Model/CouponItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponTemplate**
> \KnetikCloud\Model\ItemTemplateResource createCouponTemplate($coupon_template_resource)

Create a coupon template

Coupon Templates define a type of coupon and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$coupon_template_resource = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The new coupon template

try {
    $result = $api_instance->createCouponTemplate($coupon_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->createCouponTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_template_resource** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/\KnetikCloud\Model\ItemTemplateResource.md)| The new coupon template | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponItem**
> deleteCouponItem($id)

Delete a coupon item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$id = 56; // int | The id of the coupon

try {
    $api_instance->deleteCouponItem($id);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->deleteCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the coupon |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponTemplate**
> deleteCouponTemplate($id, $cascade)

Delete a coupon template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | force deleting the template if it's attached to other objects, cascade = detach

try {
    $api_instance->deleteCouponTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->deleteCouponTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getCouponItem**
> \KnetikCloud\Model\CouponItem getCouponItem($id)

Get a single coupon item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$id = 56; // int | The id of the coupon

try {
    $result = $api_instance->getCouponItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->getCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the coupon |

### Return type

[**\KnetikCloud\Model\CouponItem**](../Model/CouponItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponTemplate**
> \KnetikCloud\Model\ItemTemplateResource getCouponTemplate($id)

Get a single coupon template

Coupon Templates define a type of coupon and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getCouponTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->getCouponTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getCouponTemplates**
> \KnetikCloud\Model\PageResourceItemTemplateResource_ getCouponTemplates($size, $page, $order)

List and search coupon templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCouponTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->getCouponTemplates: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCouponItem**
> \KnetikCloud\Model\CouponItem updateCouponItem($id, $cascade, $coupon_item)

Update a coupon item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$id = 56; // int | The id of the coupon
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$coupon_item = new \KnetikCloud\Model\CouponItem(); // \KnetikCloud\Model\CouponItem | The coupon item object

try {
    $result = $api_instance->updateCouponItem($id, $cascade, $coupon_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->updateCouponItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the coupon |
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **coupon_item** | [**\KnetikCloud\Model\CouponItem**](../Model/\KnetikCloud\Model\CouponItem.md)| The coupon item object | [optional]

### Return type

[**\KnetikCloud\Model\CouponItem**](../Model/CouponItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCouponTemplate**
> \KnetikCloud\Model\ItemTemplateResource updateCouponTemplate($id, $coupon_template_resource)

Update a coupon template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreCouponsApi();
$id = "id_example"; // string | The id of the template
$coupon_template_resource = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The coupon template resource object

try {
    $result = $api_instance->updateCouponTemplate($id, $coupon_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreCouponsApi->updateCouponTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **coupon_template_resource** | [**\KnetikCloud\Model\ItemTemplateResource**](../Model/\KnetikCloud\Model\ItemTemplateResource.md)| The coupon template resource object | [optional]

### Return type

[**\KnetikCloud\Model\ItemTemplateResource**](../Model/ItemTemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

