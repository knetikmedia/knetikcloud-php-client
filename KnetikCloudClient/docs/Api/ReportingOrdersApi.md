# KnetikCloud\ReportingOrdersApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceReports**](ReportingOrdersApi.md#getInvoiceReports) | **GET** /reporting/orders/count/{currency_code} | Retrieve invoice counts aggregated by time ranges


# **getInvoiceReports**
> \KnetikCloud\Model\PageResourceAggregateInvoiceReportResource_ getInvoiceReports($currency_code, $granularity, $filter_payment_status, $filter_fulfillment_status, $start_date, $end_date)

Retrieve invoice counts aggregated by time ranges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ReportingOrdersApi();
$currency_code = "currency_code_example"; // string | The code for a currency to get sales data for
$granularity = "day"; // string | The time duration to aggregate by
$filter_payment_status = "filter_payment_status_example"; // string | A payment status to filter results by, can be a comma separated list
$filter_fulfillment_status = "filter_fulfillment_status_example"; // string | An invoice fulfillment status to filter results by, can be a comma separated list
$start_date = 789; // int | The start of the time range to return, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to return, unix timestamp in seconds. Default is end of time

try {
    $result = $api_instance->getInvoiceReports($currency_code, $granularity, $filter_payment_status, $filter_fulfillment_status, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingOrdersApi->getInvoiceReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The code for a currency to get sales data for |
 **granularity** | **string**| The time duration to aggregate by | [optional] [default to day]
 **filter_payment_status** | **string**| A payment status to filter results by, can be a comma separated list | [optional]
 **filter_fulfillment_status** | **string**| An invoice fulfillment status to filter results by, can be a comma separated list | [optional]
 **start_date** | **int**| The start of the time range to return, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to return, unix timestamp in seconds. Default is end of time | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceAggregateInvoiceReportResource_**](../Model/PageResourceAggregateInvoiceReportResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

