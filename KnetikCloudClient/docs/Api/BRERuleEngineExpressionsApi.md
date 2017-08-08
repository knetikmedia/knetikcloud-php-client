# KnetikCloud\BRERuleEngineExpressionsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBREExpressions**](BRERuleEngineExpressionsApi.md#getBREExpressions) | **GET** /bre/expressions/lookup | Get a list of &#39;lookup&#39; type expressions


# **getBREExpressions**
> \KnetikCloud\Model\LookupTypeResource[] getBREExpressions()

Get a list of 'lookup' type expressions

These are expression types that take a second expression as input and produce a value. These can be used in addition to the standard types, like parameter, global and constant (see BRE documentation for details).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineExpressionsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getBREExpressions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineExpressionsApi->getBREExpressions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\LookupTypeResource[]**](../Model/LookupTypeResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

