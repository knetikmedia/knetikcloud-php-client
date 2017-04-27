# KnetikCloud\TemplatesPropertiesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplatePropertyType**](TemplatesPropertiesApi.md#getTemplatePropertyType) | **GET** /templates/properties/{type} | Get details for a template property type
[**getTemplatePropertyTypes**](TemplatesPropertiesApi.md#getTemplatePropertyTypes) | **GET** /templates/properties | List template property types


# **getTemplatePropertyType**
> \KnetikCloud\Model\PropertyFieldListResource getTemplatePropertyType($type)

Get details for a template property type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TemplatesPropertiesApi();
$type = "type_example"; // string | type

try {
    $result = $api_instance->getTemplatePropertyType($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesPropertiesApi->getTemplatePropertyType: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplatePropertyTypes**
> \KnetikCloud\Model\PropertyFieldListResource[] getTemplatePropertyTypes()

List template property types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TemplatesPropertiesApi();

try {
    $result = $api_instance->getTemplatePropertyTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesPropertiesApi->getTemplatePropertyTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\PropertyFieldListResource[]**](../Model/PropertyFieldListResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

