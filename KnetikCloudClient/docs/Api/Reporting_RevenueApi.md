# KnetikCloud\Reporting_RevenueApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemRevenue**](Reporting_RevenueApi.md#getItemRevenue) | **GET** /reporting/revenue/item-sales/{currency_code} | Get item revenue info
[**getRefundRevenue**](Reporting_RevenueApi.md#getRefundRevenue) | **GET** /reporting/revenue/refunds/{currency_code} | Get refund revenue info
[**getRevenueByCountry**](Reporting_RevenueApi.md#getRevenueByCountry) | **GET** /reporting/revenue/countries/{currency_code} | Get revenue info by country
[**getRevenueByItem**](Reporting_RevenueApi.md#getRevenueByItem) | **GET** /reporting/revenue/products/{currency_code} | Get revenue info by item
[**getSubscriptionRevenue**](Reporting_RevenueApi.md#getSubscriptionRevenue) | **GET** /reporting/revenue/subscription-sales/{currency_code} | Get subscription revenue info


# **getItemRevenue**
> \KnetikCloud\Model\RevenueReportResource getItemRevenue($currency_code, $start_date, $end_date)

Get item revenue info

Get basic info about revenue from sales of items and bundles (not subscriptions, shipping, etc), summed up within a time range. <br><br><b>Permissions Needed:</b> REPORTING_REVENUE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_RevenueApi(new \Http\Adapter\Guzzle6\Client());
$currency_code = "currency_code_example"; // string | The code for a currency to get sales data for
$start_date = 789; // int | The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to aggregate, unix timestamp in seconds. Default is end of time

try {
    $result = $api_instance->getItemRevenue($currency_code, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_RevenueApi->getItemRevenue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The code for a currency to get sales data for |
 **start_date** | **int**| The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to aggregate, unix timestamp in seconds. Default is end of time | [optional]

### Return type

[**\KnetikCloud\Model\RevenueReportResource**](../Model/RevenueReportResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRefundRevenue**
> \KnetikCloud\Model\RevenueReportResource getRefundRevenue($currency_code, $start_date, $end_date)

Get refund revenue info

Get basic info about revenue loss from refunds (for all item types), summed up within a time range. <br><br><b>Permissions Needed:</b> REPORTING_REVENUE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_RevenueApi(new \Http\Adapter\Guzzle6\Client());
$currency_code = "currency_code_example"; // string | The code for a currency to get refund data for
$start_date = 789; // int | The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to aggregate, unix timestamp in seconds. Default is end of time

try {
    $result = $api_instance->getRefundRevenue($currency_code, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_RevenueApi->getRefundRevenue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The code for a currency to get refund data for |
 **start_date** | **int**| The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to aggregate, unix timestamp in seconds. Default is end of time | [optional]

### Return type

[**\KnetikCloud\Model\RevenueReportResource**](../Model/RevenueReportResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRevenueByCountry**
> \KnetikCloud\Model\PageResourceRevenueCountryReportResource_ getRevenueByCountry($currency_code, $start_date, $end_date, $size, $page)

Get revenue info by country

Get basic info about revenue from sales of all types, summed up within a time range and split out by country. Sorted for largest revenue at the top. <br><br><b>Permissions Needed:</b> REPORTING_REVENUE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_RevenueApi(new \Http\Adapter\Guzzle6\Client());
$currency_code = "currency_code_example"; // string | The code for a currency to get sales data for
$start_date = 789; // int | The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to aggregate, unix timestamp in seconds. Default is end of time
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getRevenueByCountry($currency_code, $start_date, $end_date, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_RevenueApi->getRevenueByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The code for a currency to get sales data for |
 **start_date** | **int**| The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to aggregate, unix timestamp in seconds. Default is end of time | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceRevenueCountryReportResource_**](../Model/PageResourceRevenueCountryReportResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRevenueByItem**
> \KnetikCloud\Model\PageResourceRevenueProductReportResource_ getRevenueByItem($currency_code, $start_date, $end_date, $size, $page)

Get revenue info by item

Get basic info about revenue from sales of all types, summed up within a time range and split out by specific item. Sorted for largest revenue at the top. <br><br><b>Permissions Needed:</b> REPORTING_REVENUE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_RevenueApi(new \Http\Adapter\Guzzle6\Client());
$currency_code = "currency_code_example"; // string | The code for a currency to get sales data for
$start_date = 789; // int | The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to aggregate, unix timestamp in seconds. Default is end of time
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getRevenueByItem($currency_code, $start_date, $end_date, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_RevenueApi->getRevenueByItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The code for a currency to get sales data for |
 **start_date** | **int**| The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to aggregate, unix timestamp in seconds. Default is end of time | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceRevenueProductReportResource_**](../Model/PageResourceRevenueProductReportResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionRevenue**
> \KnetikCloud\Model\RevenueReportResource getSubscriptionRevenue($currency_code, $start_date, $end_date)

Get subscription revenue info

Get basic info about revenue from sales of new subscriptions as well as recurring payemnts, summed up within a time range. <br><br><b>Permissions Needed:</b> REPORTING_REVENUE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Reporting_RevenueApi(new \Http\Adapter\Guzzle6\Client());
$currency_code = "currency_code_example"; // string | The code for a currency to get sales data for
$start_date = 789; // int | The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time
$end_date = 789; // int | The end of the time range to aggregate, unix timestamp in seconds. Default is end of time

try {
    $result = $api_instance->getSubscriptionRevenue($currency_code, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Reporting_RevenueApi->getSubscriptionRevenue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| The code for a currency to get sales data for |
 **start_date** | **int**| The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time | [optional]
 **end_date** | **int**| The end of the time range to aggregate, unix timestamp in seconds. Default is end of time | [optional]

### Return type

[**\KnetikCloud\Model\RevenueReportResource**](../Model/RevenueReportResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

