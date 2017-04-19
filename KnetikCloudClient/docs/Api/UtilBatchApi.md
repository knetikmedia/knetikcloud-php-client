# KnetikCloud\UtilBatchApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendBatch**](UtilBatchApi.md#sendBatch) | **POST** /batch | Request to run API call given the method, content type, path url, and body of request


# **sendBatch**
> \KnetikCloud\Model\BatchReturn[] sendBatch($batch)

Request to run API call given the method, content type, path url, and body of request

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

