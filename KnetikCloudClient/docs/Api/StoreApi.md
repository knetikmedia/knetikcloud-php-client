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
[**getStore**](StoreApi.md#getStore) | **GET** /store | Get a listing of store items
[**getStoreItem**](StoreApi.md#getStoreItem) | **GET** /store/items/{id} | Get a single store item
[**getStoreItems**](StoreApi.md#getStoreItems) | **GET** /store/items | List and search store items
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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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
 **item_template_resource** | [**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/\KnetikCloud\Model\StoreItemTemplateResource.md)| The new item template | [optional]

### Return type

[**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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
 **store_item** | [**\KnetikCloud\Model\StoreItem**](../Model/\KnetikCloud\Model\StoreItem.md)| The store item object | [optional]

### Return type

[**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();

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

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStore**
> \KnetikCloud\Model\PageResourceStoreItem_ getStore($limit, $page, $use_catalog, $ignore_location, $in_stock_only)

Get a listing of store items

The exact structure of each items may differ to include fields specific to the type. The same is true for behaviors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreApi();
$limit = 56; // int | The amount of items returned
$page = 56; // int | The page of the request
$use_catalog = true; // bool | Whether to remove items that are not intended for display or not in date
$ignore_location = true; // bool | Whether to ignore country restrictions based on the caller's location
$in_stock_only = false; // bool | Whether only in-stock items should be returned.  Default value is false

try {
    $result = $api_instance->getStore($limit, $page, $use_catalog, $ignore_location, $in_stock_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The amount of items returned | [optional]
 **page** | **int**| The page of the request | [optional]
 **use_catalog** | **bool**| Whether to remove items that are not intended for display or not in date | [optional]
 **ignore_location** | **bool**| Whether to ignore country restrictions based on the caller&#39;s location | [optional]
 **in_stock_only** | **bool**| Whether only in-stock items should be returned.  Default value is false | [optional] [default to false]

### Return type

[**\KnetikCloud\Model\PageResourceStoreItem_**](../Model/PageResourceStoreItem_.md)

### Authorization

No authorization required

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

$api_instance = new KnetikCloud\Api\StoreApi();
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreItems**
> \KnetikCloud\Model\PageResourceStoreItem_ getStoreItems($filter_name_search, $filter_unique_key, $filter_published, $filter_displayable, $filter_start, $filter_end, $filter_start_date, $filter_stop_date, $filter_sku, $filter_price, $filter_tag, $filter_items_by_type, $filter_bundled_skus, $filter_vendor, $size, $page, $order)

List and search store items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreApi();
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

No authorization required

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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
 **item_template_resource** | [**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/\KnetikCloud\Model\StoreItemTemplateResource.md)| The item template resource object | [optional]

### Return type

[**\KnetikCloud\Model\StoreItemTemplateResource**](../Model/StoreItemTemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

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

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreApi();
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
 **store_item** | [**\KnetikCloud\Model\StoreItem**](../Model/\KnetikCloud\Model\StoreItem.md)| The store item object | [optional]

### Return type

[**\KnetikCloud\Model\StoreItem**](../Model/StoreItem.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
