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

Rules define which actions to run when a given event verifies the specified conditions. Conditions and actions are defined by binding event or context parameters to arguments. Conditions also known as Predicates are logical expressions that result in a boolean. Operators are used to describe rules between arguments to form that condition. There are 3 families of operators: Boolean, Math and String. Math and String operators are functions that transform arguments into numbers or strings...<h1>Boolean Operators</h1><br /><br />1 arg:<br />======<br /><br /><ul> <li>IS_NULL</li> <li>IS_NOT_NULL</li> <li>STRING_IS_EMPTY</li> <li>NOT </li> <li>MAP_IS_EMPTY</li></ul><br />2 args:<br />=======<br /><br /><ul> <li>EQ</li> <li>NE (Not Equals)</li> <li>GT (Greater Than)</li> <li>GOE (Greater Or Equals)</li> <li>LT (Lesser Than)</li> <li>LOE (Lesser Or Equals)</li> <li>OR</li> <li>AND</li> <li>XNOR</li> <li>XOR</li> <li>CONTAINS_KEY (for maps only)</li> <li>CONTAINS_VALUE (for maps only)</li> <li>MATCHES (regex)</li> <li>MATCHES_IC (regex ignore case)</li> <li>STARTS_WITH</li> <li>STARTS_WITH_IC</li> <li>EQ_IGNORE_CASE</li> <li>ENDS_WITH</li> <li>ENDS_WITH_IC</li> <li>STRING_CONTAINS</li> <li>STRING_CONTAINS_IC</li> <li>LIKE (SQL like)</li></ul><br />3 args exceptions:<br />=================<br /><br /><ul> <li>BETWEEN</li></ul><br />n args:<br />=======<br /><br /><ul> <li>IN</li> <li>NOT_INT</li></ul><h1>Math Operators</h1>1 arg:<br />=====<br /><br /><ul> <li>NEGATE</li> <li>MAP_SIZE</li> <li>STRING_LENGTH</li> <li>CEIL</li> <li>ABS</li> <li>FLOOR</li> <li>ROUND</li> <li>RANDOM (no arg)</li> <li>RANDOM2 (seed arg)</li> <li>NUMCAST</li> <li>HOUR</li> <li>MINUTE</li> <li>SECOND</li> <li>MILLISECOND</li> <li>YEAR</li> <li>WEEK</li> <li>YEAR_MONTH</li> <li>YEAR_WEEK</li> <li>DAY_OF_WEEK</li> <li>DAY_OF_MONTH</li> <li>DAY_OF_YEAR</li> <li>WEEK</li> <li>WEEK</li> <li>WEEK</li></ul><br /><br />2 args:<br />======<br /><br /><ul> <li>ADD</li> <li>DIV</li> <li>MULT</li> <li>SUB</li> <li>POWER</li> <li>MOD</li> <li>LOCATE (index of (string, char))</li> <li>DIFF_YEARS</li> <li>DIFF_MONTHS</li> <li>DIFF_WEEKS</li> <li>DIFF_DAYS</li> <li>DIFF_HOURS</li> <li>DIFF_MINUTES</li> <li>DIFF_SECONDS</li></ul><br /><br />2 args:<br />======<br /><br /><ul> <li>MIN</li> <li>MAX</li></ul><h1>String Operators</h1>0 arg:<br />=====<br /><br /><ul> <li>CURRENT_TIME</li></ul><br /><br />1 arg:<br />=====<br /><br /><ul> <li>CURRENT_TIME</li> <li>LOWER</li> <li>UPPER</li> <li>TRIM</li> <li>STRING_CAST</li></ul><br /><br />2 args:<br />=====<br /><br /><ul> <li>CHAR_AT</li> <li>SUBSTR_1ARG (substr(string, start))</li> <li>CONCAT</li> <li>TRIM</li> <li>STRING_CAST</li></ul><br /><br />3 args:<br />=====<br /><br /><ul> <li>SUBSTR_2ARGS (substr(string, start, length))</li></ul>

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

May fail if there are existing rules against it. Cannot delete core rules

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBREExpressionAsString**
> string getBREExpressionAsString($expression)

Returns a string representation of the provided expression

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBRERules**
> \KnetikCloud\Model\PageResourceBreRule_ getBRERules($filter_name, $filter_enabled, $filter_system, $filter_trigger, $filter_action, $filter_condition, $size, $page)

List rules

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBRERule**
> setBRERule($id, $enabled)

Enable or disable a rule

This is helpful for turning off systems rules which cannot be deleted or modified otherwise

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

Cannot update system rules

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

