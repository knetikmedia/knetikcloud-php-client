# KnetikCloud\BRERuleEngineTriggersApi

All URIs are relative to *https://devsandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBRETrigger**](BRERuleEngineTriggersApi.md#createBRETrigger) | **POST** /bre/triggers | Create a trigger
[**deleteBRETrigger**](BRERuleEngineTriggersApi.md#deleteBRETrigger) | **DELETE** /bre/triggers/{event_name} | Delete a trigger
[**getBRETrigger**](BRERuleEngineTriggersApi.md#getBRETrigger) | **GET** /bre/triggers/{event_name} | Get a single trigger
[**getBRETriggers**](BRERuleEngineTriggersApi.md#getBRETriggers) | **GET** /bre/triggers | List triggers
[**updateBRETrigger**](BRERuleEngineTriggersApi.md#updateBRETrigger) | **PUT** /bre/triggers/{event_name} | Update a trigger


# **createBRETrigger**
> \KnetikCloud\Model\BreTriggerResource createBRETrigger($bre_trigger_resource)

Create a trigger

Customer added triggers will not be fired automatically or have rules associated with them by default. Custom rules must be added to get use from the trigger and it must then be fired from the outside. See the Bre Event services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineTriggersApi(new \Http\Adapter\Guzzle6\Client());
$bre_trigger_resource = new \KnetikCloud\Model\BreTriggerResource(); // \KnetikCloud\Model\BreTriggerResource | The BRE trigger resource object

try {
    $result = $api_instance->createBRETrigger($bre_trigger_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineTriggersApi->createBRETrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bre_trigger_resource** | [**\KnetikCloud\Model\BreTriggerResource**](../Model/BreTriggerResource.md)| The BRE trigger resource object | [optional]

### Return type

[**\KnetikCloud\Model\BreTriggerResource**](../Model/BreTriggerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBRETrigger**
> deleteBRETrigger($event_name)

Delete a trigger

May fail if there are existing rules against it. Cannot delete core triggers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineTriggersApi(new \Http\Adapter\Guzzle6\Client());
$event_name = "event_name_example"; // string | The trigger event name

try {
    $api_instance->deleteBRETrigger($event_name);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineTriggersApi->deleteBRETrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The trigger event name |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRETrigger**
> \KnetikCloud\Model\BreTriggerResource getBRETrigger($event_name)

Get a single trigger

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineTriggersApi(new \Http\Adapter\Guzzle6\Client());
$event_name = "event_name_example"; // string | The trigger event name

try {
    $result = $api_instance->getBRETrigger($event_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineTriggersApi->getBRETrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The trigger event name |

### Return type

[**\KnetikCloud\Model\BreTriggerResource**](../Model/BreTriggerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRETriggers**
> \KnetikCloud\Model\PageResourceBreTriggerResource_ getBRETriggers($filter_system, $filter_category, $filter_tags, $filter_name, $filter_search, $size, $page)

List triggers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineTriggersApi(new \Http\Adapter\Guzzle6\Client());
$filter_system = true; // bool | Filter for triggers that are system triggers when true, or not when false. Leave off for both mixed
$filter_category = "filter_category_example"; // string | Filter for triggers that are within a specific category
$filter_tags = "filter_tags_example"; // string | Filter for triggers that have all of the given tags (comma separated list)
$filter_name = "filter_name_example"; // string | Filter for triggers that have names containing the given string
$filter_search = "filter_search_example"; // string | Filter for triggers containing the given words somewhere within name, description and tags
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getBRETriggers($filter_system, $filter_category, $filter_tags, $filter_name, $filter_search, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineTriggersApi->getBRETriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_system** | **bool**| Filter for triggers that are system triggers when true, or not when false. Leave off for both mixed | [optional]
 **filter_category** | **string**| Filter for triggers that are within a specific category | [optional]
 **filter_tags** | **string**| Filter for triggers that have all of the given tags (comma separated list) | [optional]
 **filter_name** | **string**| Filter for triggers that have names containing the given string | [optional]
 **filter_search** | **string**| Filter for triggers containing the given words somewhere within name, description and tags | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceBreTriggerResource_**](../Model/PageResourceBreTriggerResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBRETrigger**
> \KnetikCloud\Model\BreTriggerResource updateBRETrigger($event_name, $bre_trigger_resource)

Update a trigger

May fail if new parameters mismatch requirements of existing rules. Cannot update core triggers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineTriggersApi(new \Http\Adapter\Guzzle6\Client());
$event_name = "event_name_example"; // string | The trigger event name
$bre_trigger_resource = new \KnetikCloud\Model\BreTriggerResource(); // \KnetikCloud\Model\BreTriggerResource | The BRE trigger resource object

try {
    $result = $api_instance->updateBRETrigger($event_name, $bre_trigger_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineTriggersApi->updateBRETrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The trigger event name |
 **bre_trigger_resource** | [**\KnetikCloud\Model\BreTriggerResource**](../Model/BreTriggerResource.md)| The BRE trigger resource object | [optional]

### Return type

[**\KnetikCloud\Model\BreTriggerResource**](../Model/BreTriggerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

