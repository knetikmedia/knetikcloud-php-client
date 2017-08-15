# KnetikCloud\ReportingUsageApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsageByDay**](ReportingUsageApi.md#getUsageByDay) | **GET** /reporting/usage/day | Returns aggregated endpoint usage information by day
[**getUsageByHour**](ReportingUsageApi.md#getUsageByHour) | **GET** /reporting/usage/hour | Returns aggregated endpoint usage information by hour
[**getUsageByMinute**](ReportingUsageApi.md#getUsageByMinute) | **GET** /reporting/usage/minute | Returns aggregated endpoint usage information by minute
[**getUsageByMonth**](ReportingUsageApi.md#getUsageByMonth) | **GET** /reporting/usage/month | Returns aggregated endpoint usage information by month
[**getUsageByYear**](ReportingUsageApi.md#getUsageByYear) | **GET** /reporting/usage/year | Returns aggregated endpoint usage information by year
[**getUsageEndpoints**](ReportingUsageApi.md#getUsageEndpoints) | **GET** /reporting/usage/endpoints | Returns list of endpoints called (method and url)


# **getUsageByDay**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByDay($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingUsageApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling ReportingUsageApi->getUsageByDay: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByHour**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByHour($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by hour

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingUsageApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling ReportingUsageApi->getUsageByHour: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByMinute**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByMinute($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by minute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingUsageApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling ReportingUsageApi->getUsageByMinute: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByMonth**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByMonth($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingUsageApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling ReportingUsageApi->getUsageByMonth: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageByYear**
> \KnetikCloud\Model\PageResourceUsageInfo_ getUsageByYear($start_date, $end_date, $combine_endpoints, $method, $url, $size, $page)

Returns aggregated endpoint usage information by year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingUsageApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling ReportingUsageApi->getUsageByYear: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsageEndpoints**
> string[] getUsageEndpoints($start_date, $end_date)

Returns list of endpoints called (method and url)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingUsageApi(new \Http\Adapter\Guzzle6\Client());
$start_date = 789; // int | The beginning of the range being requested, unix timestamp in seconds
$end_date = 789; // int | The ending of the range being requested, unix timestamp in seconds

try {
    $result = $api_instance->getUsageEndpoints($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingUsageApi->getUsageEndpoints: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

