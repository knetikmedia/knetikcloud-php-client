# KnetikCloud\BRERuleEngineActionsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBREActions**](BRERuleEngineActionsApi.md#getBREActions) | **GET** /bre/actions | Get a list of available actions


# **getBREActions**
> \KnetikCloud\Model\ActionResource[] getBREActions($filter_category, $filter_name, $filter_tags, $filter_search)

Get a list of available actions

<b>Permissions Needed:</b> BRE_RULE_ENGINE_ACTIONS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineActionsApi(new \Http\Adapter\Guzzle6\Client());
$filter_category = "filter_category_example"; // string | Filter for actions that are within a specific category
$filter_name = "filter_name_example"; // string | Filter for actions that have names containing the given string
$filter_tags = "filter_tags_example"; // string | Filter for actions that have all of the given tags (comma separated list)
$filter_search = "filter_search_example"; // string | Filter for actions containing the given words somewhere within name, description and tags

try {
    $result = $api_instance->getBREActions($filter_category, $filter_name, $filter_tags, $filter_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineActionsApi->getBREActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_category** | **string**| Filter for actions that are within a specific category | [optional]
 **filter_name** | **string**| Filter for actions that have names containing the given string | [optional]
 **filter_tags** | **string**| Filter for actions that have all of the given tags (comma separated list) | [optional]
 **filter_search** | **string**| Filter for actions containing the given words somewhere within name, description and tags | [optional]

### Return type

[**\KnetikCloud\Model\ActionResource[]**](../Model/ActionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

