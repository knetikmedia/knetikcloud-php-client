# KnetikCloud\Users_RelationshipsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserRelationship**](Users_RelationshipsApi.md#createUserRelationship) | **POST** /users/relationships | Create a user relationship
[**deleteUserRelationship**](Users_RelationshipsApi.md#deleteUserRelationship) | **DELETE** /users/relationships/{id} | Delete a user relationship
[**getUserRelationship**](Users_RelationshipsApi.md#getUserRelationship) | **GET** /users/relationships/{id} | Get a user relationship
[**getUserRelationships**](Users_RelationshipsApi.md#getUserRelationships) | **GET** /users/relationships | Get a list of user relationships
[**updateUserRelationship**](Users_RelationshipsApi.md#updateUserRelationship) | **PUT** /users/relationships/{id} | Update a user relationship


# **createUserRelationship**
> \KnetikCloud\Model\UserRelationshipResource createUserRelationship($relationship)

Create a user relationship

<b>Permissions Needed:</b> RELATIONSHIPS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_RelationshipsApi(new \Http\Adapter\Guzzle6\Client());
$relationship = new \KnetikCloud\Model\UserRelationshipResource(); // \KnetikCloud\Model\UserRelationshipResource | The new relationship

try {
    $result = $api_instance->createUserRelationship($relationship);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_RelationshipsApi->createUserRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relationship** | [**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)| The new relationship | [optional]

### Return type

[**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserRelationship**
> deleteUserRelationship($id)

Delete a user relationship

<b>Permissions Needed:</b> RELATIONSHIPS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_RelationshipsApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the relationship

try {
    $api_instance->deleteUserRelationship($id);
} catch (Exception $e) {
    echo 'Exception when calling Users_RelationshipsApi->deleteUserRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the relationship |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRelationship**
> \KnetikCloud\Model\UserRelationshipResource getUserRelationship($id)

Get a user relationship

<b>Permissions Needed:</b> RELATIONSHIPS_USER or RELATIONSHIPS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_RelationshipsApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the relationship

try {
    $result = $api_instance->getUserRelationship($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_RelationshipsApi->getUserRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the relationship |

### Return type

[**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRelationships**
> \KnetikCloud\Model\PageResourceUserRelationshipResource_ getUserRelationships($size, $page, $order)

Get a list of user relationships

<b>Permissions Needed:</b> RELATIONSHIPS_USER or RELATIONSHIPS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_RelationshipsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserRelationships($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_RelationshipsApi->getUserRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceUserRelationshipResource_**](../Model/PageResourceUserRelationshipResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserRelationship**
> \KnetikCloud\Model\UserRelationshipResource updateUserRelationship($id, $relationship)

Update a user relationship

<b>Permissions Needed:</b> RELATIONSHIPS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_RelationshipsApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the relationship
$relationship = new \KnetikCloud\Model\UserRelationshipResource(); // \KnetikCloud\Model\UserRelationshipResource | The new relationship

try {
    $result = $api_instance->updateUserRelationship($id, $relationship);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_RelationshipsApi->updateUserRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the relationship |
 **relationship** | [**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)| The new relationship | [optional]

### Return type

[**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

