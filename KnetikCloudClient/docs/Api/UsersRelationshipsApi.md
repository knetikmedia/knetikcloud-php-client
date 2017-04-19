# KnetikCloud\UsersRelationshipsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserRelationship**](UsersRelationshipsApi.md#createUserRelationship) | **POST** /users/relationships | Create a user relationship
[**deleteUserRelationship**](UsersRelationshipsApi.md#deleteUserRelationship) | **DELETE** /users/relationships/{id} | Delete a user relationship
[**getUserRelationship**](UsersRelationshipsApi.md#getUserRelationship) | **GET** /users/relationships/{id} | Get a user relationship
[**getUserRelationships**](UsersRelationshipsApi.md#getUserRelationships) | **GET** /users/relationships | Get a list of user relationships
[**updateUserRelationship**](UsersRelationshipsApi.md#updateUserRelationship) | **PUT** /users/relationships/{id} | Update a user relationship


# **createUserRelationship**
> \KnetikCloud\Model\UserRelationshipResource createUserRelationship($relationship)

Create a user relationship

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersRelationshipsApi();
$relationship = new \KnetikCloud\Model\UserRelationshipResource(); // \KnetikCloud\Model\UserRelationshipResource | The new relationship

try {
    $result = $api_instance->createUserRelationship($relationship);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationshipsApi->createUserRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relationship** | [**\KnetikCloud\Model\UserRelationshipResource**](../Model/\KnetikCloud\Model\UserRelationshipResource.md)| The new relationship | [optional]

### Return type

[**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserRelationship**
> deleteUserRelationship($id)

Delete a user relationship

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersRelationshipsApi();
$id = 789; // int | The id of the relationship

try {
    $api_instance->deleteUserRelationship($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationshipsApi->deleteUserRelationship: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRelationship**
> \KnetikCloud\Model\UserRelationshipResource getUserRelationship($id)

Get a user relationship

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersRelationshipsApi();
$id = 789; // int | The id of the relationship

try {
    $result = $api_instance->getUserRelationship($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationshipsApi->getUserRelationship: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRelationships**
> \KnetikCloud\Model\PageResourceUserRelationshipResource_ getUserRelationships()

Get a list of user relationships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersRelationshipsApi();

try {
    $result = $api_instance->getUserRelationships();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationshipsApi->getUserRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\PageResourceUserRelationshipResource_**](../Model/PageResourceUserRelationshipResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserRelationship**
> \KnetikCloud\Model\UserRelationshipResource updateUserRelationship($id, $relationship)

Update a user relationship

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersRelationshipsApi();
$id = 789; // int | The id of the relationship
$relationship = new \KnetikCloud\Model\UserRelationshipResource(); // \KnetikCloud\Model\UserRelationshipResource | The new relationship

try {
    $result = $api_instance->updateUserRelationship($id, $relationship);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationshipsApi->updateUserRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the relationship |
 **relationship** | [**\KnetikCloud\Model\UserRelationshipResource**](../Model/\KnetikCloud\Model\UserRelationshipResource.md)| The new relationship | [optional]

### Return type

[**\KnetikCloud\Model\UserRelationshipResource**](../Model/UserRelationshipResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

