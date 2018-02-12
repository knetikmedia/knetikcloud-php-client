# KnetikCloud\AmazonWebServicesS3Api

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDownloadURL**](AmazonWebServicesS3Api.md#getDownloadURL) | **GET** /amazon/s3/downloadurl | Get a temporary signed S3 URL for download
[**getSignedS3URL**](AmazonWebServicesS3Api.md#getSignedS3URL) | **GET** /amazon/s3/signedposturl | Get a signed S3 URL for upload


# **getDownloadURL**
> string getDownloadURL($bucket, $path, $expiration)

Get a temporary signed S3 URL for download

To give access to files in your own S3 account, you will need to grant KnetikcCloud access to the file by adjusting your bucket policy accordingly. See S3 documentation for details. <br><br><b>Permissions Needed:</b> S3_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AmazonWebServicesS3Api(new \Http\Adapter\Guzzle6\Client());
$bucket = "bucket_example"; // string | S3 bucket name
$path = "path_example"; // string | The path to the file relative the bucket (the s3 object key)
$expiration = 60; // int | The number of seconds this URL will be valid. Default to 60

try {
    $result = $api_instance->getDownloadURL($bucket, $path, $expiration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmazonWebServicesS3Api->getDownloadURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket** | **string**| S3 bucket name | [optional]
 **path** | **string**| The path to the file relative the bucket (the s3 object key) | [optional]
 **expiration** | **int**| The number of seconds this URL will be valid. Default to 60 | [optional] [default to 60]

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignedS3URL**
> \KnetikCloud\Model\AmazonS3Activity getSignedS3URL($filename, $content_type)

Get a signed S3 URL for upload

Requires the file name and file content type (i.e., 'video/mpeg'). Make a PUT to the resulting url to upload the file and use the cdn_url to retrieve it after. <br><br><b>Permissions Needed:</b> S3_USER or S3_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

