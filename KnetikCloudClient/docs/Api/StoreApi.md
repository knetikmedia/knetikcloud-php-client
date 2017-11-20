# KnetikCloud\StoreApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemTemplate**](StoreApi.md#createItemTemplate) | **POST** /store/items/templates | Create an item template
[**createStoreItem**](StoreApi.md#createStoreItem) | **POST** /store/items | Create a store item
[**deleteItemTemplate**](StoreApi.md#deleteItemTemplate) | **DELETE** /store/items/templates/{id} | Delete an item template
[**deleteStoreItem**](StoreApi.md#deleteStoreItem) | **DELETE** /store/items/{id} | Delete a store item
[**getBehaviors**](StoreApi.md#getBehaviors) | **GET** /store/items/behaviors | List available item behaviors
[**getItemTemplate**](StoreApi.md#getItemTemplate) | **GET** /store/items/templates/{id} | Get a single item template
[**getItemTemplates**](StoreApi.md#getItemTemplates) | **GET** /store/items/templates | List and search item templates
[**getStoreItem**](StoreApi.md#getStoreItem) | **GET** /store/items/{id} | Get a single store item
[**getStoreItems**](StoreApi.md#getStoreItems) | **GET** /store/items | List and search store items
[**quickBuy**](StoreApi.md#quickBuy) | **POST** /store/quick-buy | One-step purchase and pay for a single SKU item from a user&#39;s wallet
[**updateItemTemplate**](StoreApi.md#updateItemTemplate) | **PUT** /store/items/templates/{id} | Update an item template
[**updateStoreItem**](StoreApi.md#updateStoreItem) | **PUT** /store/items/{id} | Update a store item


# **createItemTemplate**
> \KnetikCloud\Model\StoreItemTemplateResource createItemTemplate($item_template_resource)

Create an item template

Item Templates define a type of item and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$item_template_resource = new \KnetikCloud\Model\StoreItemTemplateResource(); // \KnetikCloud\Model\StoreItemTemplateResource | The new item template

try {
    $result = $api_instance->createItemTemplate($item_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->createItemTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_template_resource** | [**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)| The new item template | [optional]

### Return type

[**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoreItem**
> \KnetikCloud\Model\StoreItem createStoreItem($cascade, $store_item)

Create a store item

SKUs have to be unique in the entire store. If a duplicate SKU is found, a 400 error is generated and the response will have a \"parameters\" field that is a list of duplicates. A duplicate is an object like {item_id, offending_sku_list}. Ex:<br /> {..., parameters: [[{item: 1, skus: [\"SKU-1\"]}]]}<br /> If an item is brand new and has duplicate SKUs within itself, the item ID will be 0.  Item subclasses are not allowed here, you will have to use their respective endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$store_item = new \KnetikCloud\Model\StoreItem(); // \KnetikCloud\Model\StoreItem | The store item object

try {
    $result = $api_instance->createStoreItem($cascade, $store_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->createStoreItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **store_item** | [**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)| The store item object | [optional]

### Return type

[**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemTemplate**
> deleteItemTemplate($id, $cascade)

Delete an item template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | force deleting the template if it's attached to other objects, cascade = detach

try {
    $api_instance->deleteItemTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->deleteItemTemplate: ', $e->getMessage(), PHP_EOL;
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

# **deleteStoreItem**
> deleteStoreItem($id)

Delete a store item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the item

try {
    $api_instance->deleteStoreItem($id);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->deleteStoreItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the item |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBehaviors**
> \KnetikCloud\Model\BehaviorDefinitionResource[] getBehaviors()

List available item behaviors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getBehaviors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getBehaviors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\BehaviorDefinitionResource[]**](../Model/BehaviorDefinitionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemTemplate**
> \KnetikCloud\Model\StoreItemTemplateResource getItemTemplate($id)

Get a single item template

Item Templates define a type of item and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getItemTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getItemTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemTemplates**
> \KnetikCloud\Model\PageResourceStoreItemTemplateResource_ getItemTemplates($size, $page, $order)

List and search item templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getItemTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getItemTemplates: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceStoreItemTemplateResource_**](../Model/PageResourceStoreItemTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreItem**
> \KnetikCloud\Model\StoreItem getStoreItem($id)

Get a single store item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the item

try {
    $result = $api_instance->getStoreItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getStoreItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the item |

### Return type

[**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreItems**
> \KnetikCloud\Model\PageResourceStoreItem_ getStoreItems($filter_name_search, $filter_unique_key, $filter_published, $filter_displayable, $filter_start, $filter_end, $filter_start_date, $filter_stop_date, $filter_sku, $filter_price, $filter_tag, $filter_items_by_type, $filter_bundled_skus, $filter_vendor, $size, $page, $order)

List and search store items

If called without permission STORE_ADMIN the only items marked displayable, whose start and end date are null or appropriate to the current date, and whose geo policy allows the caller's country will be returned. Similarly skus will be filtered, possibly resulting in an item returned with no skus the user can purchase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$filter_name_search = "filter_name_search_example"; // string | Filter for items whose name starts with a given string.
$filter_unique_key = "filter_unique_key_example"; // string | Filter for items whose unique_key is a given string.
$filter_published = true; // bool | Filter for skus that have been published.
$filter_displayable = true; // bool | Filter for items that are displayable.
$filter_start = "filter_start_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the store start date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ).
$filter_end = "filter_end_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the store end date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ).
$filter_start_date = "filter_start_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the sku start date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ).
$filter_stop_date = "filter_stop_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the sku end date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ).
$filter_sku = "filter_sku_example"; // string | Filter for skus whose name starts with a given string.
$filter_price = "filter_price_example"; // string | A colon separated string without spaces.  First value is the operator to search on, second value is the price of a sku.  Allowed operators: (LT, GT, LTE, GTE, EQ).
$filter_tag = "filter_tag_example"; // string | A comma separated list without spaces of the names of tags. Will only return items with at least one of the tags.
$filter_items_by_type = "filter_items_by_type_example"; // string | Filter for item type based on its type hint.
$filter_bundled_skus = "filter_bundled_skus_example"; // string | Filter for skus inside bundles whose name starts with a given string.  Used only when type hint is 'bundle_item'
$filter_vendor = 56; // int | Filter for items from a given vendor, by id.
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getStoreItems($filter_name_search, $filter_unique_key, $filter_published, $filter_displayable, $filter_start, $filter_end, $filter_start_date, $filter_stop_date, $filter_sku, $filter_price, $filter_tag, $filter_items_by_type, $filter_bundled_skus, $filter_vendor, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getStoreItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name_search** | **string**| Filter for items whose name starts with a given string. | [optional]
 **filter_unique_key** | **string**| Filter for items whose unique_key is a given string. | [optional]
 **filter_published** | **bool**| Filter for skus that have been published. | [optional]
 **filter_displayable** | **bool**| Filter for items that are displayable. | [optional]
 **filter_start** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the store start date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ). | [optional]
 **filter_end** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the store end date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ). | [optional]
 **filter_start_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the sku start date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ). | [optional]
 **filter_stop_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the sku end date, a unix timestamp in seconds.  Allowed operators: (LT, GT, LTE, GTE, EQ). | [optional]
 **filter_sku** | **string**| Filter for skus whose name starts with a given string. | [optional]
 **filter_price** | **string**| A colon separated string without spaces.  First value is the operator to search on, second value is the price of a sku.  Allowed operators: (LT, GT, LTE, GTE, EQ). | [optional]
 **filter_tag** | **string**| A comma separated list without spaces of the names of tags. Will only return items with at least one of the tags. | [optional]
 **filter_items_by_type** | **string**| Filter for item type based on its type hint. | [optional]
 **filter_bundled_skus** | **string**| Filter for skus inside bundles whose name starts with a given string.  Used only when type hint is &#39;bundle_item&#39; | [optional]
 **filter_vendor** | **int**| Filter for items from a given vendor, by id. | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceStoreItem_**](../Model/PageResourceStoreItem_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickBuy**
> \KnetikCloud\Model\InvoiceResource quickBuy($quick_buy_request)

One-step purchase and pay for a single SKU item from a user's wallet

Used to create and automatically pay an invoice for a single unit of a single SKU from a user's wallet. SKU must be priced in virtual currency and must not be an item that requires shipping. PAYMENTS_ADMIN permission is required if user ID is specified and is not the ID of the currently logged in user. If invoice price does not match expected price, purchase is aborted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$quick_buy_request = new \KnetikCloud\Model\QuickBuyRequest(); // \KnetikCloud\Model\QuickBuyRequest | Quick buy details

try {
    $result = $api_instance->quickBuy($quick_buy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->quickBuy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_buy_request** | [**\KnetikCloud\Model\QuickBuyRequest**](../Model/QuickBuyRequest.md)| Quick buy details | [optional]

### Return type

[**\KnetikCloud\Model\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemTemplate**
> \KnetikCloud\Model\StoreItemTemplateResource updateItemTemplate($id, $item_template_resource)

Update an item template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$item_template_resource = new \KnetikCloud\Model\StoreItemTemplateResource(); // \KnetikCloud\Model\StoreItemTemplateResource | The item template resource object

try {
    $result = $api_instance->updateItemTemplate($id, $item_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->updateItemTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **item_template_resource** | [**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)| The item template resource object | [optional]

### Return type

[**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreItem**
> \KnetikCloud\Model\StoreItem updateStoreItem($id, $cascade, $store_item)

Update a store item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the item
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$store_item = new \KnetikCloud\Model\StoreItem(); // \KnetikCloud\Model\StoreItem | The store item object

try {
    $result = $api_instance->updateStoreItem($id, $cascade, $store_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->updateStoreItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the item |
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **store_item** | [**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)| The store item object | [optional]

### Return type

[**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

