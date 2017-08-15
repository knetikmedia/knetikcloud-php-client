# KnetikCloud\UtilSecurityApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserLocationLog**](UtilSecurityApi.md#getUserLocationLog) | **GET** /security/country-log | Returns the authentication log for a user
[**getUserTokenDetails**](UtilSecurityApi.md#getUserTokenDetails) | **GET** /me | Returns the authentication token details. Use /users endpoint for detailed user&#39;s info


# **getUserLocationLog**
> \KnetikCloud\Model\PageResourceLocationLogResource_ getUserLocationLog($user_id, $size, $page, $order)

Returns the authentication log for a user

A log entry is recorded everytime a user requests a new token. Standard pagination available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UtilSecurityApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserLocationLog($user_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilSecurityApi->getUserLocationLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceLocationLogResource_**](../Model/PageResourceLocationLogResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTokenDetails**
> \KnetikCloud\Model\TokenDetailsResource getUserTokenDetails()

Returns the authentication token details. Use /users endpoint for detailed user's info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UtilSecurityApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getUserTokenDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilSecurityApi->getUserTokenDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\TokenDetailsResource**](../Model/TokenDetailsResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

