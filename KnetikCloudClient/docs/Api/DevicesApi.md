# KnetikCloud\DevicesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDeviceUsers**](DevicesApi.md#addDeviceUsers) | **POST** /devices/{id}/users | Add device users
[**createDevice**](DevicesApi.md#createDevice) | **POST** /devices | Create a device
[**deleteDevice**](DevicesApi.md#deleteDevice) | **DELETE** /devices/{id} | Delete a device
[**deleteDeviceUser**](DevicesApi.md#deleteDeviceUser) | **DELETE** /devices/{id}/users/{user_id} | Delete a device user
[**deleteDeviceUsers**](DevicesApi.md#deleteDeviceUsers) | **DELETE** /devices/{id}/users | Delete all device users
[**getDevice**](DevicesApi.md#getDevice) | **GET** /devices/{id} | Get a single device
[**getDevices**](DevicesApi.md#getDevices) | **GET** /devices | List and search devices
[**updateDevice**](DevicesApi.md#updateDevice) | **PUT** /devices/{id} | Update a device


# **addDeviceUsers**
> \KnetikCloud\Model\DeviceResource addDeviceUsers($user_resources, $id)

Add device users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$user_resources = array(new \KnetikCloud\Model\SimpleUserResource()); // \KnetikCloud\Model\SimpleUserResource[] | userResources
$id = 56; // int | id

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
 **id** | **int**| id |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDevice**
> \KnetikCloud\Model\DeviceResource createDevice($device)

Create a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDevice**
> deleteDevice($id)

Delete a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | id

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
 **id** | **int**| id |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceUser**
> deleteDeviceUser($id, $user_id)

Delete a device user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the device
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
 **id** | **int**| The id of the device |
 **user_id** | **int**| The user id of the device user |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceUsers**
> deleteDeviceUsers($id, $filter_id)

Delete all device users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the device
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
 **id** | **int**| The id of the device |
 **filter_id** | **string**| Filter for device users to delete with a user id in a given comma separated list of ids | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevice**
> \KnetikCloud\Model\DeviceResource getDevice($id)

Get a single device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | id

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
 **id** | **int**| id |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevices**
> \KnetikCloud\Model\PageResourceDeviceResource_ getDevices($filter_make, $filter_model, $size, $page, $order)

List and search devices

Get a list of devices with optional filtering

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$filter_make = "filter_make_example"; // string | Filter for devices with specified make
$filter_model = "filter_model_example"; // string | Filter for devices with specified model
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getDevices($filter_make, $filter_model, $size, $page, $order);
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
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceDeviceResource_**](../Model/PageResourceDeviceResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDevice**
> \KnetikCloud\Model\DeviceResource updateDevice($device, $id)

Update a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\DevicesApi(new \Http\Adapter\Guzzle6\Client());
$device = new \KnetikCloud\Model\DeviceResource(); // \KnetikCloud\Model\DeviceResource | device
$id = 56; // int | id

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
 **id** | **int**| id |

### Return type

[**\KnetikCloud\Model\DeviceResource**](../Model/DeviceResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

