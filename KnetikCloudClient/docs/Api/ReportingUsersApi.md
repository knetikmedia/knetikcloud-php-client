# KnetikCloud\ReportingUsersApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserRegistrations**](ReportingUsersApi.md#getUserRegistrations) | **GET** /reporting/users/registrations | Get user registration info


# **getUserRegistrations**
> \KnetikCloud\Model\PageResourceAggregateCountResource_ getUserRegistrations($granularity, $start_date, $end_date, $size, $page)

Get user registration info

Get user registration counts grouped by time range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ReportingUsersApi(new \Http\Adapter\Guzzle6\Client());
$granularity = "day"; // string | The time duration to aggregate by
$start_date = 789; // int | The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to aggregate, unix timestamp in seconds. Default is end of time
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUserRegistrations($granularity, $start_date, $end_date, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingUsersApi->getUserRegistrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **granularity** | **string**| The time duration to aggregate by | [optional] [default to day]
 **start_date** | **int**| The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to aggregate, unix timestamp in seconds. Default is end of time | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceAggregateCountResource_**](../Model/PageResourceAggregateCountResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

