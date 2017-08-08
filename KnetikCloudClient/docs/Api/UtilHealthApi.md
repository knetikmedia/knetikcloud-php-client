# KnetikCloud\UtilHealthApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHealth**](UtilHealthApi.md#getHealth) | **GET** /health | Get health info


# **getHealth**
> object getHealth()

Get health info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UtilHealthApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilHealthApi->getHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

