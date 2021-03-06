# KnetikCloud\Rule_Engine_ExpressionsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBREExpression**](Rule_Engine_ExpressionsApi.md#getBREExpression) | **GET** /bre/expressions/{type} | Lookup a specific expression
[**getBREExpressions**](Rule_Engine_ExpressionsApi.md#getBREExpressions) | **GET** /bre/expressions | Get a list of supported expressions to use in conditions or actions.
[**getExpressionAsText**](Rule_Engine_ExpressionsApi.md#getExpressionAsText) | **POST** /bre/expressions | Returns the textual representation of an expression


# **getBREExpression**
> \KnetikCloud\Model\ExpressionResource getBREExpression($type)

Lookup a specific expression

<b>Permissions Needed:</b> BRE_RULE_ENGINE_EXPRESSIONS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Rule_Engine_ExpressionsApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | Specifiy the type of expression as returned by the listing endpoint

try {
    $result = $api_instance->getBREExpression($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Rule_Engine_ExpressionsApi->getBREExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Specifiy the type of expression as returned by the listing endpoint |

### Return type

[**\KnetikCloud\Model\ExpressionResource**](../Model/ExpressionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREExpressions**
> \KnetikCloud\Model\ExpressionResource[] getBREExpressions($filter_type_group)

Get a list of supported expressions to use in conditions or actions.

Each resource contains a type and a definition that are read-only, all the other fields must be provided when using the expression in a rule. <br><br><b>Permissions Needed:</b> BRE_RULE_ENGINE_EXPRESSIONS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Rule_Engine_ExpressionsApi(new \Http\Adapter\Guzzle6\Client());
$filter_type_group = "filter_type_group_example"; // string | Filter for expressions by type group

try {
    $result = $api_instance->getBREExpressions($filter_type_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Rule_Engine_ExpressionsApi->getBREExpressions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type_group** | **string**| Filter for expressions by type group | [optional]

### Return type

[**\KnetikCloud\Model\ExpressionResource[]**](../Model/ExpressionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpressionAsText**
> \KnetikCloud\Model\StringWrapper getExpressionAsText($expression)

Returns the textual representation of an expression

<b>Permissions Needed:</b> BRE_RULE_ENGINE_EXPRESSIONS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Rule_Engine_ExpressionsApi(new \Http\Adapter\Guzzle6\Client());
$expression = new \KnetikCloud\Model\ExpressionResource(); // \KnetikCloud\Model\ExpressionResource | The expression resource to be converted

try {
    $result = $api_instance->getExpressionAsText($expression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Rule_Engine_ExpressionsApi->getExpressionAsText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expression** | [**\KnetikCloud\Model\ExpressionResource**](../Model/ExpressionResource.md)| The expression resource to be converted | [optional]

### Return type

[**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

