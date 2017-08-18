# KnetikCloud\BRERuleEngineVariablesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBREVariableTypes**](BRERuleEngineVariablesApi.md#getBREVariableTypes) | **GET** /bre/variable-types | Get a list of variable types available
[**getBREVariableValues**](BRERuleEngineVariablesApi.md#getBREVariableValues) | **GET** /bre/variable-types/{name}/values | List valid values for a type


# **getBREVariableTypes**
> \KnetikCloud\Model\VariableTypeResource[] getBREVariableTypes()

Get a list of variable types available

Types include integer, string, user and invoice. These are used to qualify trigger parameters and action variables with strong typing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineVariablesApi(new \Http\Adapter\Guzzle6\Client());

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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREVariableValues**
> \KnetikCloud\Model\PageResourceSimpleReferenceResourceObject_ getBREVariableValues($name, $filter_name, $size, $page)

List valid values for a type

Used to lookup users to fill in a user constant for example. Only types marked as enumerable are suppoorted here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineVariablesApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The name of the type
$filter_name = "filter_name_example"; // string | Filter results by those with names starting with this string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getBREVariableValues($name, $filter_name, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineVariablesApi->getBREVariableValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the type |
 **filter_name** | **string**| Filter results by those with names starting with this string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceSimpleReferenceResourceObject_**](../Model/PageResourceSimpleReferenceResourceObject_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

