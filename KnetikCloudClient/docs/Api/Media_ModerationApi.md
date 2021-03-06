# KnetikCloud\Media_ModerationApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFlag**](Media_ModerationApi.md#addFlag) | **POST** /moderation/flags | Add a flag
[**deleteFlag**](Media_ModerationApi.md#deleteFlag) | **DELETE** /moderation/flags | Delete a flag
[**getFlags**](Media_ModerationApi.md#getFlags) | **GET** /moderation/flags | Returns a page of flags
[**getModerationReport**](Media_ModerationApi.md#getModerationReport) | **GET** /moderation/reports/{id} | Get a flag report
[**getModerationReports**](Media_ModerationApi.md#getModerationReports) | **GET** /moderation/reports | Returns a page of flag reports
[**updateModerationReport**](Media_ModerationApi.md#updateModerationReport) | **PUT** /moderation/reports/{id} | Update a flag report


# **addFlag**
> \KnetikCloud\Model\FlagResource addFlag($flag_resource)

Add a flag

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_ModerationApi(new \Http\Adapter\Guzzle6\Client());
$flag_resource = new \KnetikCloud\Model\FlagResource(); // \KnetikCloud\Model\FlagResource | The flag resource object

try {
    $result = $api_instance->addFlag($flag_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_ModerationApi->addFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_resource** | [**\KnetikCloud\Model\FlagResource**](../Model/FlagResource.md)| The flag resource object | [optional]

### Return type

[**\KnetikCloud\Model\FlagResource**](../Model/FlagResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlag**
> deleteFlag($context_name, $context_id, $user_id)

Delete a flag

<b>Permissions Needed:</b> MODERATION_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_ModerationApi(new \Http\Adapter\Guzzle6\Client());
$context_name = "context_name_example"; // string | The name of the context
$context_id = "context_id_example"; // string | The id of the context
$user_id = 56; // int | The id of the user

try {
    $api_instance->deleteFlag($context_name, $context_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling Media_ModerationApi->deleteFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context_name** | **string**| The name of the context | [optional]
 **context_id** | **string**| The id of the context | [optional]
 **user_id** | **int**| The id of the user | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlags**
> \KnetikCloud\Model\PageResourceFlagResource_ getFlags($filter_context, $filter_context_id, $filter_user_id, $size, $page)

Returns a page of flags

<b>Permissions Needed:</b> MODERATION_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_ModerationApi(new \Http\Adapter\Guzzle6\Client());
$filter_context = "filter_context_example"; // string | Filter by flag context
$filter_context_id = "filter_context_id_example"; // string | Filter by flag context ID
$filter_user_id = 56; // int | Filter by user ID
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getFlags($filter_context, $filter_context_id, $filter_user_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_ModerationApi->getFlags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_context** | **string**| Filter by flag context | [optional]
 **filter_context_id** | **string**| Filter by flag context ID | [optional]
 **filter_user_id** | **int**| Filter by user ID | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceFlagResource_**](../Model/PageResourceFlagResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModerationReport**
> \KnetikCloud\Model\FlagReportResource getModerationReport($id)

Get a flag report

<b>Permissions Needed:</b> MODERATION_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_ModerationApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The flag report id

try {
    $result = $api_instance->getModerationReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_ModerationApi->getModerationReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The flag report id |

### Return type

[**\KnetikCloud\Model\FlagReportResource**](../Model/FlagReportResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModerationReports**
> \KnetikCloud\Model\PageResourceFlagReportResource_ getModerationReports($exclude_resolved, $filter_context, $filter_context_id, $size, $page, $order)

Returns a page of flag reports

Context can be either a free-form string or a pre-defined context name. <br><br><b>Permissions Needed:</b> MODERATION_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_ModerationApi(new \Http\Adapter\Guzzle6\Client());
$exclude_resolved = true; // bool | Ignore resolved context
$filter_context = "filter_context_example"; // string | Filter by moderation context
$filter_context_id = "filter_context_id_example"; // string | Filter by moderation context ID
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getModerationReports($exclude_resolved, $filter_context, $filter_context_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_ModerationApi->getModerationReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_resolved** | **bool**| Ignore resolved context | [optional] [default to true]
 **filter_context** | **string**| Filter by moderation context | [optional]
 **filter_context_id** | **string**| Filter by moderation context ID | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceFlagReportResource_**](../Model/PageResourceFlagReportResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModerationReport**
> updateModerationReport($id, $flag_report_resource)

Update a flag report

Lets you set the resolution of a report. Resolution types is {banned,ignore} in case of 'banned' you will need to pass the reason. <br><br><b>Permissions Needed:</b> MODERATION_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_ModerationApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The flag report id
$flag_report_resource = new \KnetikCloud\Model\FlagReportResource(); // \KnetikCloud\Model\FlagReportResource | The new flag report

try {
    $api_instance->updateModerationReport($id, $flag_report_resource);
} catch (Exception $e) {
    echo 'Exception when calling Media_ModerationApi->updateModerationReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The flag report id |
 **flag_report_resource** | [**\KnetikCloud\Model\FlagReportResource**](../Model/FlagReportResource.md)| The new flag report | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

