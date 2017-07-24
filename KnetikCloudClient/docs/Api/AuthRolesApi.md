# KnetikCloud\AuthRolesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRole**](AuthRolesApi.md#createRole) | **POST** /auth/roles | Create a new role
[**deleteRole**](AuthRolesApi.md#deleteRole) | **DELETE** /auth/roles/{role} | Delete a role
[**getClientRoles**](AuthRolesApi.md#getClientRoles) | **GET** /auth/clients/{client_key}/roles | Get roles for a client
[**getRole**](AuthRolesApi.md#getRole) | **GET** /auth/roles/{role} | Get a single role
[**getRoles**](AuthRolesApi.md#getRoles) | **GET** /auth/roles | List and search roles
[**getUserRoles**](AuthRolesApi.md#getUserRoles) | **GET** /auth/users/{user_id}/roles | Get roles for a user
[**setClientRoles**](AuthRolesApi.md#setClientRoles) | **PUT** /auth/clients/{client_key}/roles | Set roles for a client
[**setPermissionsForRole**](AuthRolesApi.md#setPermissionsForRole) | **PUT** /auth/roles/{role}/permissions | Set permissions for a role
[**setUserRoles**](AuthRolesApi.md#setUserRoles) | **PUT** /auth/users/{user_id}/roles | Set roles for a user
[**updateRole**](AuthRolesApi.md#updateRole) | **PUT** /auth/roles/{role} | Update a role


# **createRole**
> \KnetikCloud\Model\RoleResource createRole($role_resource)

Create a new role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$role_resource = new \KnetikCloud\Model\RoleResource(); // \KnetikCloud\Model\RoleResource | The role resource object

try {
    $result = $api_instance->createRole($role_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->createRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_resource** | [**\KnetikCloud\Model\RoleResource**](../Model/RoleResource.md)| The role resource object | [optional]

### Return type

[**\KnetikCloud\Model\RoleResource**](../Model/RoleResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRole**
> deleteRole($role, $force)

Delete a role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$role = "role_example"; // string | The role value
$force = true; // bool | If true, removes role from users/clients

try {
    $api_instance->deleteRole($role, $force);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| The role value |
 **force** | **bool**| If true, removes role from users/clients | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientRoles**
> \KnetikCloud\Model\RoleResource[] getClientRoles($client_key)

Get roles for a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$client_key = "client_key_example"; // string | The client key

try {
    $result = $api_instance->getClientRoles($client_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->getClientRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The client key |

### Return type

[**\KnetikCloud\Model\RoleResource[]**](../Model/RoleResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRole**
> \KnetikCloud\Model\RoleResource getRole($role)

Get a single role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$role = "role_example"; // string | The role value

try {
    $result = $api_instance->getRole($role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| The role value |

### Return type

[**\KnetikCloud\Model\RoleResource**](../Model/RoleResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \KnetikCloud\Model\PageResourceRoleResource_ getRoles($size, $page, $order)

List and search roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getRoles($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceRoleResource_**](../Model/PageResourceRoleResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoles**
> \KnetikCloud\Model\RoleResource[] getUserRoles($user_id)

Get roles for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$user_id = 56; // int | The user's id

try {
    $result = $api_instance->getUserRoles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->getUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user&#39;s id |

### Return type

[**\KnetikCloud\Model\RoleResource[]**](../Model/RoleResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setClientRoles**
> \KnetikCloud\Model\ClientResource setClientRoles($client_key, $roles_list)

Set roles for a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$client_key = "client_key_example"; // string | The client key
$roles_list = array(new \KnetikCloud\Model\string[]()); // string[] | The list of unique roles

try {
    $result = $api_instance->setClientRoles($client_key, $roles_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->setClientRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The client key |
 **roles_list** | **string[]**| The list of unique roles | [optional]

### Return type

[**\KnetikCloud\Model\ClientResource**](../Model/ClientResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPermissionsForRole**
> \KnetikCloud\Model\RoleResource setPermissionsForRole($role, $permissions_list)

Set permissions for a role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$role = "role_example"; // string | The role value
$permissions_list = array(new \KnetikCloud\Model\string[]()); // string[] | The list of unique permissions

try {
    $result = $api_instance->setPermissionsForRole($role, $permissions_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->setPermissionsForRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| The role value |
 **permissions_list** | **string[]**| The list of unique permissions | [optional]

### Return type

[**\KnetikCloud\Model\RoleResource**](../Model/RoleResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserRoles**
> \KnetikCloud\Model\UserResource setUserRoles($user_id, $roles_list)

Set roles for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$user_id = 56; // int | The user's id
$roles_list = array(new \KnetikCloud\Model\string[]()); // string[] | The list of unique roles

try {
    $result = $api_instance->setUserRoles($user_id, $roles_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->setUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user&#39;s id |
 **roles_list** | **string[]**| The list of unique roles | [optional]

### Return type

[**\KnetikCloud\Model\UserResource**](../Model/UserResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRole**
> \KnetikCloud\Model\RoleResource updateRole($role, $role_resource)

Update a role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthRolesApi();
$role = "role_example"; // string | The role value
$role_resource = new \KnetikCloud\Model\RoleResource(); // \KnetikCloud\Model\RoleResource | The role resource object

try {
    $result = $api_instance->updateRole($role, $role_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthRolesApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| The role value |
 **role_resource** | [**\KnetikCloud\Model\RoleResource**](../Model/RoleResource.md)| The role resource object | [optional]

### Return type

[**\KnetikCloud\Model\RoleResource**](../Model/RoleResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

