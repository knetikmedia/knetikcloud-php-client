# KnetikCloud\MediaModerationApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getModerationReport**](MediaModerationApi.md#getModerationReport) | **GET** /moderation/reports/{id} | Get a flag report
[**getModerationReports**](MediaModerationApi.md#getModerationReports) | **GET** /moderation/reports | Returns a page of flag reports
[**updateModerationReport**](MediaModerationApi.md#updateModerationReport) | **PUT** /moderation/reports/{id} | Update a flag report


# **getModerationReport**
> \KnetikCloud\Model\FlagReportResource getModerationReport($id)

Get a flag report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MediaModerationApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The flag report id

try {
    $result = $api_instance->getModerationReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaModerationApi->getModerationReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The flag report id |

### Return type

[**\KnetikCloud\Model\FlagReportResource**](../Model/FlagReportResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModerationReports**
> \KnetikCloud\Model\PageResourceFlagReportResource_ getModerationReports($exclude_resolved, $filter_context, $size, $page)

Returns a page of flag reports

Context can be either a free-form string or a pre-defined context name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MediaModerationApi(new \Http\Adapter\Guzzle6\Client());
$exclude_resolved = true; // bool | Ignore resolved context
$filter_context = "filter_context_example"; // string | Filter by moderation context
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getModerationReports($exclude_resolved, $filter_context, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaModerationApi->getModerationReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_resolved** | **bool**| Ignore resolved context | [optional] [default to true]
 **filter_context** | **string**| Filter by moderation context | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceFlagReportResource_**](../Model/PageResourceFlagReportResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModerationReport**
> updateModerationReport($id, $flag_report_resource)

Update a flag report

Lets you set the resolution of a report. Resolution types is {banned,ignore} in case of 'banned' you will need to pass the reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MediaModerationApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The flag report id
$flag_report_resource = new \KnetikCloud\Model\FlagReportResource(); // \KnetikCloud\Model\FlagReportResource | The new flag report

try {
    $api_instance->updateModerationReport($id, $flag_report_resource);
} catch (Exception $e) {
    echo 'Exception when calling MediaModerationApi->updateModerationReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The flag report id |
 **flag_report_resource** | [**\KnetikCloud\Model\FlagReportResource**](../Model/FlagReportResource.md)| The new flag report | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

