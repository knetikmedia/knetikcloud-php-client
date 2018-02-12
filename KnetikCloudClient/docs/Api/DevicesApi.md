# KnetikCloud\DevicesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDeviceUsers**](DevicesApi.md#addDeviceUsers) | **POST** /devices/{id}/users | Add device users
[**createDevice**](DevicesApi.md#createDevice) | **POST** /devices | Create a device
[**createDeviceTemplate**](DevicesApi.md#createDeviceTemplate) | **POST** /devices/templates | Create a device template
[**deleteDevice**](DevicesApi.md#deleteDevice) | **DELETE** /devices/{id} | Delete a device
[**deleteDeviceTemplate**](DevicesApi.md#deleteDeviceTemplate) | **DELETE** /devices/templates/{id} | Delete an device template
[**deleteDeviceUser**](DevicesApi.md#deleteDeviceUser) | **DELETE** /devices/{id}/users/{user_id} | Delete a device user
[**deleteDeviceUsers**](DevicesApi.md#deleteDeviceUsers) | **DELETE** /devices/{id}/users | Delete all device users
[**getDevice**](DevicesApi.md#getDevice) | **GET** /devices/{id} | Get a single device
[**getDeviceTemplate**](DevicesApi.md#getDeviceTemplate) | **GET** /devices/templates/{id} | Get a single device template
[**getDeviceTemplates**](DevicesApi.md#getDeviceTemplates) | **GET** /devices/templates | List and search device templates
[**getDevices**](DevicesApi.md#getDevices) | **GET** /devices | List and search devices
[**updateDevice**](DevicesApi.md#updateDevice) | **PUT** /devices/{id} | Update a device
[**updateDeviceTemplate**](DevicesApi.md#updateDeviceTemplate) | **PUT** /devices/templates/{id} | Update an device template


# **addDeviceUsers**
> \KnetikCloud\Model\DeviceResource addDeviceUsers($user_resources, $id)

Add device users

<b>Permissions Needed:</b> DEVICES_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$user_resources = array(new \KnetikCloud\Model\SimpleUserResource()); // \KnetikCloud\Model\SimpleUserResource[] | userResources
$id = "id_example"; // string | id

try {
    $result = $api_instance->addDeviceUsers($user_resources, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->addDeviceUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_resources** | [**\KnetikCloud\Model\SimpleUserResource[]**](../Model/SimpleUserResource.md)| userResources |
 **id** | **string**| id |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDevice**
> \KnetikCloud\Model\DeviceResource createDevice($device)

Create a device

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$device = new \KnetikCloud\Model\DeviceResource(); // \KnetikCloud\Model\DeviceResource | device

try {
    $result = $api_instance->createDevice($device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | [**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)| device |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeviceTemplate**
> \KnetikCloud\Model\TemplateResource createDeviceTemplate($device_template_resource)

Create a device template

Device Templates define a type of device and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$device_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The device template resource object

try {
    $result = $api_instance->createDeviceTemplate($device_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The device template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDevice**
> deleteDevice($id)

Delete a device

<b>Permissions Needed:</b> DEVICES_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | id

try {
    $api_instance->deleteDevice($id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceTemplate**
> deleteDeviceTemplate($id, $cascade)

Delete an device template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteDeviceTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDeviceTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **cascade** | **string**| The value needed to delete used templates | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceUser**
> deleteDeviceUser($id, $user_id)

Delete a device user

<b>Permissions Needed:</b> DEVICES_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the device
$user_id = 56; // int | The user id of the device user

try {
    $api_instance->deleteDeviceUser($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDeviceUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the device |
 **user_id** | **int**| The user id of the device user |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceUsers**
> deleteDeviceUsers($id, $filter_id)

Delete all device users

<b>Permissions Needed:</b> DEVICES_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the device
$filter_id = "filter_id_example"; // string | Filter for device users to delete with a user id in a given comma separated list of ids

try {
    $api_instance->deleteDeviceUsers($id, $filter_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDeviceUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the device |
 **filter_id** | **string**| Filter for device users to delete with a user id in a given comma separated list of ids | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevice**
> \KnetikCloud\Model\DeviceResource getDevice($id)

Get a single device

<b>Permissions Needed:</b> DEVICES_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | id

try {
    $result = $api_instance->getDevice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceTemplate**
> \KnetikCloud\Model\TemplateResource getDeviceTemplate($id)

Get a single device template

<b>Permissions Needed:</b> description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getDeviceTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getDeviceTemplates($size, $page, $order)

List and search device templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or DEVICES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getDeviceTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceTemplateResource_**](../Model/PageResourceTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevices**
> \KnetikCloud\Model\PageResourceDeviceResource_ getDevices($filter_make, $filter_model, $filter_os, $filter_serial, $filter_type, $filter_tag, $size, $page, $order)

List and search devices

Get a list of devices with optional filtering. <br><br><b>Permissions Needed:</b> DEVICES_ADMIN or user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$filter_make = "filter_make_example"; // string | Filter for devices with specified make
$filter_model = "filter_model_example"; // string | Filter for devices with specified model
$filter_os = "filter_os_example"; // string | Filter for devices with specified OS
$filter_serial = "filter_serial_example"; // string | Filter for devices with specified serial
$filter_type = "filter_type_example"; // string | Filter for devices with specified type
$filter_tag = "filter_tag_example"; // string | A comma separated list without spaces to filter for devices with specified tags (matches any)
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getDevices($filter_make, $filter_model, $filter_os, $filter_serial, $filter_type, $filter_tag, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_make** | **string**| Filter for devices with specified make | [optional]
 **filter_model** | **string**| Filter for devices with specified model | [optional]
 **filter_os** | **string**| Filter for devices with specified OS | [optional]
 **filter_serial** | **string**| Filter for devices with specified serial | [optional]
 **filter_type** | **string**| Filter for devices with specified type | [optional]
 **filter_tag** | **string**| A comma separated list without spaces to filter for devices with specified tags (matches any) | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceDeviceResource_**](../Model/PageResourceDeviceResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDevice**
> \KnetikCloud\Model\DeviceResource updateDevice($device, $id)

Update a device

<b>Permissions Needed:</b> CUSTOMERS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$device = new \KnetikCloud\Model\DeviceResource(); // \KnetikCloud\Model\DeviceResource | device
$id = "id_example"; // string | id

try {
    $result = $api_instance->updateDevice($device, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | [**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)| device |
 **id** | **string**| id |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeviceTemplate**
> \KnetikCloud\Model\TemplateResource updateDeviceTemplate($id, $device_template_resource)

Update an device template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$device_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The device template resource object

try {
    $result = $api_instance->updateDeviceTemplate($id, $device_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDeviceTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **device_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The device template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

