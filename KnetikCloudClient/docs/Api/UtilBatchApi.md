# KnetikCloud\UtilBatchApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBatch**](UtilBatchApi.md#getBatch) | **GET** /batch/{token} | Get batch result with token
[**sendBatch**](UtilBatchApi.md#sendBatch) | **POST** /batch | Request to run API call given the method, content type, path url, and body of request


# **getBatch**
> \KnetikCloud\Model\BatchReturn[] getBatch($token)

Get batch result with token

Tokens expire in 24 hours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UtilBatchApi();
$token = "token_example"; // string | token

try {
    $result = $api_instance->getBatch($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilBatchApi->getBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| token |

### Return type

[**\KnetikCloud\Model\BatchReturn[]**](../Model/BatchReturn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendBatch**
> \KnetikCloud\Model\BatchReturn[] sendBatch($batch)

Request to run API call given the method, content type, path url, and body of request

Should the request take longer than one of the alloted timeout parameters, a token will be returned instead, which can be used on the token endpoint in this service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UtilBatchApi();
$batch = new \KnetikCloud\Model\Batch(); // \KnetikCloud\Model\Batch | The batch object

try {
    $result = $api_instance->sendBatch($batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilBatchApi->sendBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | [**\KnetikCloud\Model\Batch**](../Model/\KnetikCloud\Model\Batch.md)| The batch object | [optional]

### Return type

[**\KnetikCloud\Model\BatchReturn[]**](../Model/BatchReturn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
