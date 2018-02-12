# KnetikCloud\BRERuleEngineRulesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBRERule**](BRERuleEngineRulesApi.md#createBRERule) | **POST** /bre/rules | Create a rule
[**deleteBRERule**](BRERuleEngineRulesApi.md#deleteBRERule) | **DELETE** /bre/rules/{id} | Delete a rule
[**getBREExpressionAsString**](BRERuleEngineRulesApi.md#getBREExpressionAsString) | **POST** /bre/rules/expression-as-string | Returns a string representation of the provided expression
[**getBRERule**](BRERuleEngineRulesApi.md#getBRERule) | **GET** /bre/rules/{id} | Get a single rule
[**getBRERules**](BRERuleEngineRulesApi.md#getBRERules) | **GET** /bre/rules | List rules
[**setBRERule**](BRERuleEngineRulesApi.md#setBRERule) | **PUT** /bre/rules/{id}/enabled | Enable or disable a rule
[**updateBRERule**](BRERuleEngineRulesApi.md#updateBRERule) | **PUT** /bre/rules/{id} | Update a rule


# **createBRERule**
> \KnetikCloud\Model\BreRule createBRERule($bre_rule)

Create a rule

Rules define which actions to run when a given event verifies the specified condition. Full list of predicates and other type of expressions can be found at GET /bre/expressions/. <br><br><b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$bre_rule = new \KnetikCloud\Model\BreRule(); // \KnetikCloud\Model\BreRule | The BRE rule object

try {
    $result = $api_instance->createBRERule($bre_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->createBRERule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bre_rule** | [**\KnetikCloud\Model\BreRule**](../Model/BreRule.md)| The BRE rule object | [optional]

### Return type

[**\KnetikCloud\Model\BreRule**](../Model/BreRule.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBRERule**
> deleteBRERule($id)

Delete a rule

May fail if there are existing rules against it. Cannot delete core rules. <br><br><b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the rule

try {
    $api_instance->deleteBRERule($id);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->deleteBRERule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the rule |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREExpressionAsString**
> string getBREExpressionAsString($expression)

Returns a string representation of the provided expression

<b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$expression = new \KnetikCloud\Model\ExpressionObject_(); // \KnetikCloud\Model\ExpressionObject_ | The expression

try {
    $result = $api_instance->getBREExpressionAsString($expression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->getBREExpressionAsString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expression** | [**\KnetikCloud\Model\ExpressionObject_**](../Model/ExpressionObject_.md)| The expression | [optional]

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRERule**
> \KnetikCloud\Model\BreRule getBRERule($id)

Get a single rule

<b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the rule

try {
    $result = $api_instance->getBRERule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->getBRERule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the rule |

### Return type

[**\KnetikCloud\Model\BreRule**](../Model/BreRule.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRERules**
> \KnetikCloud\Model\PageResourceBreRule_ getBRERules($filter_name, $filter_enabled, $filter_system, $filter_trigger, $filter_action, $filter_condition, $size, $page)

List rules

<b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$filter_name = "filter_name_example"; // string | Filter for rules containing the given name
$filter_enabled = null; // bool | Filter for rules by active status, null for both
$filter_system = true; // bool | Filter for rules that are system rules when true, or not when false. Leave off for both mixed
$filter_trigger = "filter_trigger_example"; // string | Filter for rules that are for the trigger with the given name
$filter_action = "filter_action_example"; // string | Filter for rules that use the action with the given name
$filter_condition = "filter_condition_example"; // string | Filter for rules that have a condition containing the given string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getBRERules($filter_name, $filter_enabled, $filter_system, $filter_trigger, $filter_action, $filter_condition, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->getBRERules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name** | **string**| Filter for rules containing the given name | [optional]
 **filter_enabled** | **bool**| Filter for rules by active status, null for both | [optional] [default to null]
 **filter_system** | **bool**| Filter for rules that are system rules when true, or not when false. Leave off for both mixed | [optional]
 **filter_trigger** | **string**| Filter for rules that are for the trigger with the given name | [optional]
 **filter_action** | **string**| Filter for rules that use the action with the given name | [optional]
 **filter_condition** | **string**| Filter for rules that have a condition containing the given string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceBreRule_**](../Model/PageResourceBreRule_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBRERule**
> setBRERule($id, $enabled)

Enable or disable a rule

This is helpful for turning off systems rules which cannot be deleted or modified otherwise. <br><br><b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the rule
$enabled = new \KnetikCloud\Model\BooleanResource(); // \KnetikCloud\Model\BooleanResource | The boolean value

try {
    $api_instance->setBRERule($id, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->setBRERule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the rule |
 **enabled** | [**\KnetikCloud\Model\BooleanResource**](../Model/BooleanResource.md)| The boolean value | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBRERule**
> \KnetikCloud\Model\BreRule updateBRERule($id, $bre_rule)

Update a rule

Cannot update system rules. <br><br><b>Permissions Needed:</b> BRE_RULE_ENGINE_RULES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineRulesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the rule
$bre_rule = new \KnetikCloud\Model\BreRule(); // \KnetikCloud\Model\BreRule | The BRE rule object

try {
    $result = $api_instance->updateBRERule($id, $bre_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineRulesApi->updateBRERule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the rule |
 **bre_rule** | [**\KnetikCloud\Model\BreRule**](../Model/BreRule.md)| The BRE rule object | [optional]

### Return type

[**\KnetikCloud\Model\BreRule**](../Model/BreRule.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

