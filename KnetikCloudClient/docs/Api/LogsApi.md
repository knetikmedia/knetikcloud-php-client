# KnetikCloud\LogsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserLog**](LogsApi.md#addUserLog) | **POST** /audit/logs | Add a user log entry
[**getBREEventLog**](LogsApi.md#getBREEventLog) | **GET** /bre/logs/event-log/{id} | Get an existing BRE event log entry by id
[**getBREEventLogs**](LogsApi.md#getBREEventLogs) | **GET** /bre/logs/event-log | Returns a list of BRE event log entries
[**getBREForwardLog**](LogsApi.md#getBREForwardLog) | **GET** /bre/logs/forward-log/{id} | Get an existing forward log entry by id
[**getBREForwardLogs**](LogsApi.md#getBREForwardLogs) | **GET** /bre/logs/forward-log | Returns a list of forward log entries
[**getUserLog**](LogsApi.md#getUserLog) | **GET** /audit/logs/{id} | Returns a user log entry by id
[**getUserLogs**](LogsApi.md#getUserLogs) | **GET** /audit/logs | Returns a page of user logs entries


# **addUserLog**
> addUserLog($log_entry)

Add a user log entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$log_entry = new \KnetikCloud\Model\UserActionLog(); // \KnetikCloud\Model\UserActionLog | The user log entry to be added

try {
    $api_instance->addUserLog($log_entry);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->addUserLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_entry** | [**\KnetikCloud\Model\UserActionLog**](../Model/UserActionLog.md)| The user log entry to be added | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREEventLog**
> \KnetikCloud\Model\BreEventLog getBREEventLog($id)

Get an existing BRE event log entry by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The BRE event log entry id

try {
    $result = $api_instance->getBREEventLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getBREEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The BRE event log entry id |

### Return type

[**\KnetikCloud\Model\BreEventLog**](../Model/BreEventLog.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREEventLogs**
> \KnetikCloud\Model\PageResourceBreEventLog_ getBREEventLogs($filter_start_date, $filter_event_name, $filter_event_id, $size, $page, $order)

Returns a list of BRE event log entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$filter_start_date = "filter_start_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the event log start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_event_name = "filter_event_name_example"; // string | Filter event logs by event name
$filter_event_id = "filter_event_id_example"; // string | Filter event logs by request id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:DESC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getBREEventLogs($filter_start_date, $filter_event_name, $filter_event_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getBREEventLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_start_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the event log start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_event_name** | **string**| Filter event logs by event name | [optional]
 **filter_event_id** | **string**| Filter event logs by request id | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:DESC]

### Return type

[**\KnetikCloud\Model\PageResourceBreEventLog_**](../Model/PageResourceBreEventLog_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREForwardLog**
> \KnetikCloud\Model\ForwardLog getBREForwardLog($id)

Get an existing forward log entry by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The forward log entry id

try {
    $result = $api_instance->getBREForwardLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getBREForwardLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The forward log entry id |

### Return type

[**\KnetikCloud\Model\ForwardLog**](../Model/ForwardLog.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREForwardLogs**
> \KnetikCloud\Model\PageResourceForwardLog_ getBREForwardLogs($filter_start_date, $filter_end_date, $filter_status_code, $size, $page, $order)

Returns a list of forward log entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$filter_start_date = "filter_start_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_end_date = "filter_end_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the log end date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_status_code = 56; // int | Filter forward logs by http status code
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:DESC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getBREForwardLogs($filter_start_date, $filter_end_date, $filter_status_code, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getBREForwardLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_start_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_end_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the log end date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_status_code** | **int**| Filter forward logs by http status code | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:DESC]

### Return type

[**\KnetikCloud\Model\PageResourceForwardLog_**](../Model/PageResourceForwardLog_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLog**
> \KnetikCloud\Model\UserActionLog getUserLog($id)

Returns a user log entry by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The user log entry id

try {
    $result = $api_instance->getUserLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getUserLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The user log entry id |

### Return type

[**\KnetikCloud\Model\UserActionLog**](../Model/UserActionLog.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLogs**
> \KnetikCloud\Model\PageResourceUserActionLog_ getUserLogs($filter_user, $filter_action_name, $size, $page, $order)

Returns a page of user logs entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\LogsApi(new \Http\Adapter\Guzzle6\Client());
$filter_user = 56; // int | Filter for actions taken by a specific user by id
$filter_action_name = "filter_action_name_example"; // string | Filter for actions of a specific name
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "timestamp:DESC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserLogs($filter_user, $filter_action_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getUserLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_user** | **int**| Filter for actions taken by a specific user by id | [optional]
 **filter_action_name** | **string**| Filter for actions of a specific name | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to timestamp:DESC]

### Return type

[**\KnetikCloud\Model\PageResourceUserActionLog_**](../Model/PageResourceUserActionLog_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

