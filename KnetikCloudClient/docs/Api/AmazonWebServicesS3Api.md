# KnetikCloud\AmazonWebServicesS3Api

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSignedS3URL**](AmazonWebServicesS3Api.md#getSignedS3URL) | **GET** /amazon/s3/signedposturl | Get a signed S3 URL


# **getSignedS3URL**
> \KnetikCloud\Model\AmazonS3Activity getSignedS3URL($filename, $content_type)

Get a signed S3 URL

Requires the file name and file content type (i.e., 'video/mpeg')

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AmazonWebServicesS3Api(new \Http\Adapter\Guzzle6\Client());
$filename = "filename_example"; // string | The file name
$content_type = "content_type_example"; // string | The content type

try {
    $result = $api_instance->getSignedS3URL($filename, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmazonWebServicesS3Api->getSignedS3URL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| The file name | [optional]
 **content_type** | **string**| The content type | [optional]

### Return type

[**\KnetikCloud\Model\AmazonS3Activity**](../Model/AmazonS3Activity.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

