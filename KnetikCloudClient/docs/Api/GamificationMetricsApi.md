# KnetikCloud\GamificationMetricsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMetric**](GamificationMetricsApi.md#addMetric) | **POST** /metrics | Add a metric


# **addMetric**
> addMetric($metric)

Add a metric

Post a new score/stat for an activity occurrence without ending the occurrence itself

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationMetricsApi();
$metric = new \KnetikCloud\Model\MetricResource(); // \KnetikCloud\Model\MetricResource | The new metric

try {
    $api_instance->addMetric($metric);
} catch (Exception $e) {
    echo 'Exception when calling GamificationMetricsApi->addMetric: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metric** | [**\KnetikCloud\Model\MetricResource**](../Model/\KnetikCloud\Model\MetricResource.md)| The new metric | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
