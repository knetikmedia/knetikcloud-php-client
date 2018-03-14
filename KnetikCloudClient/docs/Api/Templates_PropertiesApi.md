# KnetikCloud\Templates_PropertiesApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplatePropertyType**](Templates_PropertiesApi.md#getTemplatePropertyType) | **GET** /templates/properties/{type} | Get details for a template property type
[**getTemplatePropertyTypes**](Templates_PropertiesApi.md#getTemplatePropertyTypes) | **GET** /templates/properties | List template property types


# **getTemplatePropertyType**
> \KnetikCloud\Model\PropertyFieldListResource getTemplatePropertyType($type)

Get details for a template property type

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Templates_PropertiesApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | type

try {
    $result = $api_instance->getTemplatePropertyType($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Templates_PropertiesApi->getTemplatePropertyType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type |

### Return type

[**\KnetikCloud\Model\PropertyFieldListResource**](../Model/PropertyFieldListResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplatePropertyTypes**
> \KnetikCloud\Model\PropertyFieldListResource[] getTemplatePropertyTypes()

List template property types

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Templates_PropertiesApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getTemplatePropertyTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Templates_PropertiesApi->getTemplatePropertyTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\PropertyFieldListResource[]**](../Model/PropertyFieldListResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

