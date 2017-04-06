# KnetikCloud\BRERuleEngineVariablesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBREVariableTypes**](BRERuleEngineVariablesApi.md#getBREVariableTypes) | **GET** /bre/variable-types | Get a list of variable types available


# **getBREVariableTypes**
> \KnetikCloud\Model\VariableTypeResource[] getBREVariableTypes()

Get a list of variable types available

Types include integer, string, user and invoice. These are used to qualify trigger parameters and action variables with strong typing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineVariablesApi();

try {
    $result = $api_instance->getBREVariableTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineVariablesApi->getBREVariableTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\VariableTypeResource[]**](../Model/VariableTypeResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

