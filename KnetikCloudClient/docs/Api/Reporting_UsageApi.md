# KnetikCloud\Reporting_UsageApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsageByDay**](Reporting_UsageApi.md#getUsageByDay) | **GET** /reporting/usage/day | Returns aggregated endpoint usage information by day
[**getUsageByHour**](Reporting_UsageApi.md#getUsageByHour) | **GET** /reporting/usage/hour | Returns aggregated endpoint usage information by hour
[**getUsageByMinute**](Reporting_UsageApi.md#getUsageByMinute) | **GET** /reporting/usage/minute | Returns aggregated endpoint usage information by minute
[**getUsageByMonth**](Reporting_UsageApi.md#getUsageByMonth) | **GET** /reporting/usage/month | Returns aggregated endpoint usage information by month
[**getUsageByYear**](Reporting_UsageApi.md#getUsageByYear) | **GET** /reporting/usage/year | Returns aggregated endpoint usage information by year
[**getUsageEndpoints**](Reporting_UsageApi.md#getUsageEndpoints) | **GET** /reporting/usage/endpoints | Returns list of endpoints called (method and url)


# **getUsageByDay**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByDay($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by day

<b>Permissions Needed:</b> USAGE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_UsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds
$combine_endpoints = false; // bool | Whether to combine counts from different endpoint. Removes the url and method from the result object
$method = "method_example"; // string | Filter for a certain endpoint method.  Must include url as well to work
$url = "url_example"; // string | Filter for a certain endpoint.  Must include method as well to work
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsageByDay($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_UsageApi->getUsageByDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| The beginning of the range being requested, unix timestamp in seconds |
 **end_date** | **int**| The ending of the range being requested, unix timestamp in seconds |
 **combine_endpoints** | **bool**| Whether to combine counts from different endpoint. Removes the url and method from the result object | [optional] [default to false]
 **method** | **string**| Filter for a certain endpoint method.  Must include url as well to work | [optional]
 **url** | **string**| Filter for a certain endpoint.  Must include method as well to work | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUsageInfo_**](../Model/PageResourceUsageInfo_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByHour**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByHour($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by hour

<b>Permissions Needed:</b> USAGE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_UsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds
$combine_endpoints = false; // bool | Whether to combine counts from different endpoint. Removes the url and method from the result object
$method = "method_example"; // string | Filter for a certain endpoint method.  Must include url as well to work
$url = "url_example"; // string | Filter for a certain endpoint.  Must include method as well to work
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsageByHour($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_UsageApi->getUsageByHour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| The beginning of the range being requested, unix timestamp in seconds |
 **end_date** | **int**| The ending of the range being requested, unix timestamp in seconds |
 **combine_endpoints** | **bool**| Whether to combine counts from different endpoint. Removes the url and method from the result object | [optional] [default to false]
 **method** | **string**| Filter for a certain endpoint method.  Must include url as well to work | [optional]
 **url** | **string**| Filter for a certain endpoint.  Must include method as well to work | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUsageInfo_**](../Model/PageResourceUsageInfo_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByMinute**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByMinute($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by minute

<b>Permissions Needed:</b> USAGE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_UsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds
$combine_endpoints = false; // bool | Whether to combine counts from different endpoint. Removes the url and method from the result object
$method = "method_example"; // string | Filter for a certain endpoint method.  Must include url as well to work
$url = "url_example"; // string | Filter for a certain endpoint.  Must include method as well to work
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsageByMinute($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_UsageApi->getUsageByMinute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| The beginning of the range being requested, unix timestamp in seconds |
 **end_date** | **int**| The ending of the range being requested, unix timestamp in seconds |
 **combine_endpoints** | **bool**| Whether to combine counts from different endpoint. Removes the url and method from the result object | [optional] [default to false]
 **method** | **string**| Filter for a certain endpoint method.  Must include url as well to work | [optional]
 **url** | **string**| Filter for a certain endpoint.  Must include method as well to work | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUsageInfo_**](../Model/PageResourceUsageInfo_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByMonth**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByMonth($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by month

<b>Permissions Needed:</b> USAGE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_UsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds
$combine_endpoints = false; // bool | Whether to combine counts from different endpoint. Removes the url and method from the result object
$method = "method_example"; // string | Filter for a certain endpoint method.  Must include url as well to work
$url = "url_example"; // string | Filter for a certain endpoint.  Must include method as well to work
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsageByMonth($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_UsageApi->getUsageByMonth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| The beginning of the range being requested, unix timestamp in seconds |
 **end_date** | **int**| The ending of the range being requested, unix timestamp in seconds |
 **combine_endpoints** | **bool**| Whether to combine counts from different endpoint. Removes the url and method from the result object | [optional] [default to false]
 **method** | **string**| Filter for a certain endpoint method.  Must include url as well to work | [optional]
 **url** | **string**| Filter for a certain endpoint.  Must include method as well to work | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUsageInfo_**](../Model/PageResourceUsageInfo_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByYear**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByYear($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by year

<b>Permissions Needed:</b> USAGE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_UsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds
$combine_endpoints = false; // bool | Whether to combine counts from different endpoints. Removes the url and method from the result object
$method = "method_example"; // string | Filter for a certain endpoint method.  Must include url as well to work
$url = "url_example"; // string | Filter for a certain endpoint.  Must include method as well to work
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsageByYear($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_UsageApi->getUsageByYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| The beginning of the range being requested, unix timestamp in seconds |
 **end_date** | **int**| The ending of the range being requested, unix timestamp in seconds |
 **combine_endpoints** | **bool**| Whether to combine counts from different endpoints. Removes the url and method from the result object | [optional] [default to false]
 **method** | **string**| Filter for a certain endpoint method.  Must include url as well to work | [optional]
 **url** | **string**| Filter for a certain endpoint.  Must include method as well to work | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUsageInfo_**](../Model/PageResourceUsageInfo_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageEndpoints**
> string[] getUsageEndpoints($start_date, $end_date)

Returns list of endpoints called (method and url)

<b>Permissions Needed:</b> USAGE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_UsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds

try {
    $result = $api_instance->getUsageEndpoints($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_UsageApi->getUsageEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| The beginning of the range being requested, unix timestamp in seconds |
 **end_date** | **int**| The ending of the range being requested, unix timestamp in seconds |

### Return type

**string[]**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

