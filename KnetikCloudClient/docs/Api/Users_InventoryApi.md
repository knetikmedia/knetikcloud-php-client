# KnetikCloud\Users_InventoryApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemToUserInventory**](Users_InventoryApi.md#addItemToUserInventory) | **POST** /users/{id}/inventory | Adds an item to the user inventory
[**checkUserEntitlementItem**](Users_InventoryApi.md#checkUserEntitlementItem) | **GET** /users/{user_id}/entitlements/{item_id}/check | Check for access to an item without consuming
[**createEntitlementItem**](Users_InventoryApi.md#createEntitlementItem) | **POST** /entitlements | Create an entitlement item
[**createEntitlementTemplate**](Users_InventoryApi.md#createEntitlementTemplate) | **POST** /entitlements/templates | Create an entitlement template
[**deleteEntitlementItem**](Users_InventoryApi.md#deleteEntitlementItem) | **DELETE** /entitlements/{entitlement_id} | Delete an entitlement item
[**deleteEntitlementTemplate**](Users_InventoryApi.md#deleteEntitlementTemplate) | **DELETE** /entitlements/templates/{id} | Delete an entitlement template
[**getEntitlementItem**](Users_InventoryApi.md#getEntitlementItem) | **GET** /entitlements/{entitlement_id} | Get a single entitlement item
[**getEntitlementItems**](Users_InventoryApi.md#getEntitlementItems) | **GET** /entitlements | List and search entitlement items
[**getEntitlementTemplate**](Users_InventoryApi.md#getEntitlementTemplate) | **GET** /entitlements/templates/{id} | Get a single entitlement template
[**getEntitlementTemplates**](Users_InventoryApi.md#getEntitlementTemplates) | **GET** /entitlements/templates | List and search entitlement templates
[**getUserInventories**](Users_InventoryApi.md#getUserInventories) | **GET** /users/{id}/inventory | List the user inventory entries for a given user
[**getUserInventory**](Users_InventoryApi.md#getUserInventory) | **GET** /users/{user_id}/inventory/{id} | Get an inventory entry
[**getUserInventoryLog**](Users_InventoryApi.md#getUserInventoryLog) | **GET** /users/{user_id}/inventory/{id}/log | List the log entries for this inventory entry
[**getUsersInventory**](Users_InventoryApi.md#getUsersInventory) | **GET** /inventories | List the user inventory entries for all users
[**grantUserEntitlement**](Users_InventoryApi.md#grantUserEntitlement) | **POST** /users/{user_id}/entitlements | Grant an entitlement
[**updateEntitlementItem**](Users_InventoryApi.md#updateEntitlementItem) | **PUT** /entitlements/{entitlement_id} | Update an entitlement item
[**updateEntitlementTemplate**](Users_InventoryApi.md#updateEntitlementTemplate) | **PUT** /entitlements/templates/{id} | Update an entitlement template
[**updateUserInventoryBehaviorData**](Users_InventoryApi.md#updateUserInventoryBehaviorData) | **PUT** /users/{user_id}/inventory/{id}/behavior-data | Set the behavior data for an inventory entry
[**updateUserInventoryExpires**](Users_InventoryApi.md#updateUserInventoryExpires) | **PUT** /users/{user_id}/inventory/{id}/expires | Set the expiration date
[**updateUserInventoryStatus**](Users_InventoryApi.md#updateUserInventoryStatus) | **PUT** /users/{user_id}/inventory/{id}/status | Set the status for an inventory entry
[**useUserEntitlementItem**](Users_InventoryApi.md#useUserEntitlementItem) | **POST** /users/{user_id}/entitlements/{item_id}/use | Use an item


# **addItemToUserInventory**
> \KnetikCloud\Model\InvoiceResource addItemToUserInventory($id, $user_inventory_add_request)

Adds an item to the user inventory

The inventory is fulfilled asynchronously UNLESS the invoice is explicitely skipped. Depending on the use case, it might require the client to verify that the entitlement was added after the fact or configure a BRE rule to get a notification in real time. <br><br><b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the user
$user_inventory_add_request = new \KnetikCloud\Model\UserInventoryAddRequest(); // \KnetikCloud\Model\UserInventoryAddRequest | The user inventory add request object

try {
    $result = $api_instance->addItemToUserInventory($id, $user_inventory_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->addItemToUserInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the user |
 **user_inventory_add_request** | [**\KnetikCloud\Model\UserInventoryAddRequest**](../Model/UserInventoryAddRequest.md)| The user inventory add request object | [optional]

### Return type

[**\KnetikCloud\Model\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkUserEntitlementItem**
> checkUserEntitlementItem($user_id, $item_id, $sku)

Check for access to an item without consuming

Useful for pre-check and accounts for all various buisness rules. <br><br><b>Permissions Needed:</b> INVENTORY_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user to check for or 'me' for logged in user
$item_id = 56; // int | The id of the item
$sku = "sku_example"; // string | The specific sku of an entitlement list addition to check entitlement for. This is of very limited and specific use and should generally be left out

try {
    $api_instance->checkUserEntitlementItem($user_id, $item_id, $sku);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->checkUserEntitlementItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user to check for or &#39;me&#39; for logged in user |
 **item_id** | **int**| The id of the item |
 **sku** | **string**| The specific sku of an entitlement list addition to check entitlement for. This is of very limited and specific use and should generally be left out | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEntitlementItem**
> \KnetikCloud\Model\EntitlementItem createEntitlementItem($cascade, $entitlement_item)

Create an entitlement item

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$entitlement_item = new \KnetikCloud\Model\EntitlementItem(); // \KnetikCloud\Model\EntitlementItem | The entitlement item object

try {
    $result = $api_instance->createEntitlementItem($cascade, $entitlement_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->createEntitlementItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **entitlement_item** | [**\KnetikCloud\Model\EntitlementItem**](../Model/EntitlementItem.md)| The entitlement item object | [optional]

### Return type

[**\KnetikCloud\Model\EntitlementItem**](../Model/EntitlementItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEntitlementTemplate**
> \KnetikCloud\Model\ItemTemplateResource createEntitlementTemplate($template)

Create an entitlement template

Entitlement templates define a type of entitlement and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$template = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The entitlement template to be created

try {
    $result = $api_instance->createEntitlementTemplate($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->createEntitlementTemplate: ', $e->getMessage(), PHP_EOL;
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

# **deleteEntitlementItem**
> deleteEntitlementItem($entitlement_id)

Delete an entitlement item

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$entitlement_id = 56; // int | The id of the entitlement

try {
    $api_instance->deleteEntitlementItem($entitlement_id);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->deleteEntitlementItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entitlement_id** | **int**| The id of the entitlement |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntitlementTemplate**
> deleteEntitlementTemplate($id, $cascade)

Delete an entitlement template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteEntitlementTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->deleteEntitlementTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getEntitlementItem**
> \KnetikCloud\Model\EntitlementItem getEntitlementItem($entitlement_id)

Get a single entitlement item

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$entitlement_id = 56; // int | The id of the entitlement

try {
    $result = $api_instance->getEntitlementItem($entitlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getEntitlementItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entitlement_id** | **int**| The id of the entitlement |

### Return type

[**\KnetikCloud\Model\EntitlementItem**](../Model/EntitlementItem.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitlementItems**
> \KnetikCloud\Model\PageResourceEntitlementItem_ getEntitlementItems($filter_template, $size, $page, $order)

List and search entitlement items

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$filter_template = "filter_template_example"; // string | Filter for entitlements using a specified template
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getEntitlementItems($filter_template, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getEntitlementItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_template** | **string**| Filter for entitlements using a specified template | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceEntitlementItem_**](../Model/PageResourceEntitlementItem_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitlementTemplate**
> \KnetikCloud\Model\ItemTemplateResource getEntitlementTemplate($id)

Get a single entitlement template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getEntitlementTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getEntitlementTemplate: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitlementTemplates**
> \KnetikCloud\Model\PageResourceItemTemplateResource_ getEntitlementTemplates($size, $page, $order)

List and search entitlement templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getEntitlementTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getEntitlementTemplates: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInventories**
> \KnetikCloud\Model\PageResourceUserInventoryResource_ getUserInventories($id, $inactive, $size, $page, $filter_item_name, $filter_item_id, $filter_username, $filter_group, $filter_date)

List the user inventory entries for a given user

<b>Permissions Needed:</b> INVENTORY_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the user
$inactive = false; // bool | If true, accepts inactive user inventories
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$filter_item_name = "filter_item_name_example"; // string | Filter by items whose name starts with a string
$filter_item_id = 56; // int | Filter by item id
$filter_username = "filter_username_example"; // string | Filter by entries owned by the user with the specified username
$filter_group = "filter_group_example"; // string | Filter by entries owned by the users in a given group, by unique name
$filter_date = "filter_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE).

try {
    $result = $api_instance->getUserInventories($id, $inactive, $size, $page, $filter_item_name, $filter_item_id, $filter_username, $filter_group, $filter_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getUserInventories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the user |
 **inactive** | **bool**| If true, accepts inactive user inventories | [optional] [default to false]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **filter_item_name** | **string**| Filter by items whose name starts with a string | [optional]
 **filter_item_id** | **int**| Filter by item id | [optional]
 **filter_username** | **string**| Filter by entries owned by the user with the specified username | [optional]
 **filter_group** | **string**| Filter by entries owned by the users in a given group, by unique name | [optional]
 **filter_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceUserInventoryResource_**](../Model/PageResourceUserInventoryResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInventory**
> \KnetikCloud\Model\UserInventoryResource getUserInventory($user_id, $id)

Get an inventory entry

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the inventory owner or 'me' for the logged in user
$id = 56; // int | The id of the user inventory

try {
    $result = $api_instance->getUserInventory($user_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getUserInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the inventory owner or &#39;me&#39; for the logged in user |
 **id** | **int**| The id of the user inventory |

### Return type

[**\KnetikCloud\Model\UserInventoryResource**](../Model/UserInventoryResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInventoryLog**
> \KnetikCloud\Model\PageResourceUserItemLogResource_ getUserInventoryLog($user_id, $id, $size, $page)

List the log entries for this inventory entry

<b>Permissions Needed:</b> INVENTORY_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the inventory owner or 'me' for the logged in user
$id = 56; // int | The id of the user inventory
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUserInventoryLog($user_id, $id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getUserInventoryLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the inventory owner or &#39;me&#39; for the logged in user |
 **id** | **int**| The id of the user inventory |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUserItemLogResource_**](../Model/PageResourceUserItemLogResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersInventory**
> \KnetikCloud\Model\PageResourceUserInventoryResource_ getUsersInventory($inactive, $size, $page, $filter_item_name, $filter_item_id, $filter_username, $filter_group, $filter_date)

List the user inventory entries for all users

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$inactive = false; // bool | If true, accepts inactive user inventories
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$filter_item_name = "filter_item_name_example"; // string | Filter by items whose name starts with a string
$filter_item_id = 56; // int | Filter by item id
$filter_username = "filter_username_example"; // string | Filter by entries owned by the user with the specified username
$filter_group = "filter_group_example"; // string | Filter by entries owned by the users in a given group, by unique name
$filter_date = "filter_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE).

try {
    $result = $api_instance->getUsersInventory($inactive, $size, $page, $filter_item_name, $filter_item_id, $filter_username, $filter_group, $filter_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->getUsersInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inactive** | **bool**| If true, accepts inactive user inventories | [optional] [default to false]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **filter_item_name** | **string**| Filter by items whose name starts with a string | [optional]
 **filter_item_id** | **int**| Filter by item id | [optional]
 **filter_username** | **string**| Filter by entries owned by the user with the specified username | [optional]
 **filter_group** | **string**| Filter by entries owned by the users in a given group, by unique name | [optional]
 **filter_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceUserInventoryResource_**](../Model/PageResourceUserInventoryResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **grantUserEntitlement**
> grantUserEntitlement($user_id, $grant_request)

Grant an entitlement

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user to grant the entitlement to
$grant_request = new \KnetikCloud\Model\EntitlementGrantRequest(); // \KnetikCloud\Model\EntitlementGrantRequest | grantRequest

try {
    $api_instance->grantUserEntitlement($user_id, $grant_request);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->grantUserEntitlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user to grant the entitlement to |
 **grant_request** | [**\KnetikCloud\Model\EntitlementGrantRequest**](../Model/EntitlementGrantRequest.md)| grantRequest |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntitlementItem**
> updateEntitlementItem($entitlement_id, $cascade, $entitlement_item)

Update an entitlement item

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$entitlement_id = 56; // int | The id of the entitlement
$cascade = false; // bool | Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values.
$entitlement_item = new \KnetikCloud\Model\EntitlementItem(); // \KnetikCloud\Model\EntitlementItem | The entitlement item object

try {
    $api_instance->updateEntitlementItem($entitlement_id, $cascade, $entitlement_item);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->updateEntitlementItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entitlement_id** | **int**| The id of the entitlement |
 **cascade** | **bool**| Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. | [optional] [default to false]
 **entitlement_item** | [**\KnetikCloud\Model\EntitlementItem**](../Model/EntitlementItem.md)| The entitlement item object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntitlementTemplate**
> \KnetikCloud\Model\ItemTemplateResource updateEntitlementTemplate($id, $template)

Update an entitlement template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$template = new \KnetikCloud\Model\ItemTemplateResource(); // \KnetikCloud\Model\ItemTemplateResource | The updated template

try {
    $result = $api_instance->updateEntitlementTemplate($id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->updateEntitlementTemplate: ', $e->getMessage(), PHP_EOL;
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

# **updateUserInventoryBehaviorData**
> updateUserInventoryBehaviorData($user_id, $id, $data)

Set the behavior data for an inventory entry

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$id = 56; // int | The id of the user inventory
$data = NULL; // object | The data map

try {
    $api_instance->updateUserInventoryBehaviorData($user_id, $id, $data);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->updateUserInventoryBehaviorData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **id** | **int**| The id of the user inventory |
 **data** | **object**| The data map | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserInventoryExpires**
> updateUserInventoryExpires($user_id, $id, $timestamp)

Set the expiration date

Will change the current grace period for a subscription but not the bill date (possibly even ending before having the chance to re-bill). <br><br><b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | user_id
$id = 56; // int | The id of the user inventory
$timestamp = 789; // int | The new expiration date as a unix timestamp in seconds. May be null (no body).

try {
    $api_instance->updateUserInventoryExpires($user_id, $id, $timestamp);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->updateUserInventoryExpires: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| user_id |
 **id** | **int**| The id of the user inventory |
 **timestamp** | **int**| The new expiration date as a unix timestamp in seconds. May be null (no body). | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserInventoryStatus**
> updateUserInventoryStatus($user_id, $id, $inventory_status)

Set the status for an inventory entry

<b>Permissions Needed:</b> INVENTORY_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$id = 56; // int | The id of the user inventory
$inventory_status = new \KnetikCloud\Model\InventoryStatusWrapper(); // \KnetikCloud\Model\InventoryStatusWrapper | The inventory status object

try {
    $api_instance->updateUserInventoryStatus($user_id, $id, $inventory_status);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->updateUserInventoryStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **id** | **int**| The id of the user inventory |
 **inventory_status** | [**\KnetikCloud\Model\InventoryStatusWrapper**](../Model/InventoryStatusWrapper.md)| The inventory status object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **useUserEntitlementItem**
> useUserEntitlementItem($user_id, $item_id, $sku, $info)

Use an item

<b>Permissions Needed:</b> INVENTORY_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_InventoryApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user to check for or 'me' for logged in user
$item_id = 56; // int | The id of the item
$sku = "sku_example"; // string | The specific sku of an entitlement_list addition to check entitlement for. This is of very limited and specific use and should generally be left out
$info = "info_example"; // string | Any additional info to add to the log about this use

try {
    $api_instance->useUserEntitlementItem($user_id, $item_id, $sku, $info);
} catch (Exception $e) {
    echo 'Exception when calling Users_InventoryApi->useUserEntitlementItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user to check for or &#39;me&#39; for logged in user |
 **item_id** | **int**| The id of the item |
 **sku** | **string**| The specific sku of an entitlement_list addition to check entitlement for. This is of very limited and specific use and should generally be left out | [optional]
 **info** | **string**| Any additional info to add to the log about this use | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

