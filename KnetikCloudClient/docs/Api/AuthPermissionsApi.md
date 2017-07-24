# KnetikCloud\AuthPermissionsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPermission**](AuthPermissionsApi.md#createPermission) | **POST** /auth/permissions | Create a new permission
[**deletePermission**](AuthPermissionsApi.md#deletePermission) | **DELETE** /auth/permissions/{permission} | Delete a permission
[**getPermission**](AuthPermissionsApi.md#getPermission) | **GET** /auth/permissions/{permission} | Get a single permission
[**getPermissions**](AuthPermissionsApi.md#getPermissions) | **GET** /auth/permissions | List and search permissions
[**updatePermission**](AuthPermissionsApi.md#updatePermission) | **PUT** /auth/permissions/{permission} | Update a permission


# **createPermission**
> \KnetikCloud\Model\PermissionResource createPermission($permission_resource)

Create a new permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthPermissionsApi();
$permission_resource = new \KnetikCloud\Model\PermissionResource(); // \KnetikCloud\Model\PermissionResource | The permission resource object

try {
    $result = $api_instance->createPermission($permission_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthPermissionsApi->createPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_resource** | [**\KnetikCloud\Model\PermissionResource**](../Model/PermissionResource.md)| The permission resource object | [optional]

### Return type

[**\KnetikCloud\Model\PermissionResource**](../Model/PermissionResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePermission**
> deletePermission($permission, $force)

Delete a permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthPermissionsApi();
$permission = "permission_example"; // string | The permission value
$force = true; // bool | If true, removes permission assigned to roles

try {
    $api_instance->deletePermission($permission, $force);
} catch (Exception $e) {
    echo 'Exception when calling AuthPermissionsApi->deletePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission** | **string**| The permission value |
 **force** | **bool**| If true, removes permission assigned to roles | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPermission**
> \KnetikCloud\Model\PermissionResource getPermission($permission)

Get a single permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthPermissionsApi();
$permission = "permission_example"; // string | The permission value

try {
    $result = $api_instance->getPermission($permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthPermissionsApi->getPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission** | **string**| The permission value |

### Return type

[**\KnetikCloud\Model\PermissionResource**](../Model/PermissionResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPermissions**
> \KnetikCloud\Model\PageResourcePermissionResource_ getPermissions($size, $page, $order)

List and search permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthPermissionsApi();
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "permission:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getPermissions($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthPermissionsApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to permission:ASC]

### Return type

[**\KnetikCloud\Model\PageResourcePermissionResource_**](../Model/PageResourcePermissionResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePermission**
> \KnetikCloud\Model\PermissionResource updatePermission($permission, $permission_resource)

Update a permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthPermissionsApi();
$permission = "permission_example"; // string | The permission value
$permission_resource = new \KnetikCloud\Model\PermissionResource(); // \KnetikCloud\Model\PermissionResource | The permission resource object

try {
    $result = $api_instance->updatePermission($permission, $permission_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthPermissionsApi->updatePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission** | **string**| The permission value |
 **permission_resource** | [**\KnetikCloud\Model\PermissionResource**](../Model/PermissionResource.md)| The permission resource object | [optional]

### Return type

[**\KnetikCloud\Model\PermissionResource**](../Model/PermissionResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

