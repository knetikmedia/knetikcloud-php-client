# KnetikCloud\UsersAddressesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddress**](UsersAddressesApi.md#createAddress) | **POST** /users/{user_id}/addresses | Create a new address
[**deleteAddress**](UsersAddressesApi.md#deleteAddress) | **DELETE** /users/{user_id}/addresses/{id} | Delete an address
[**getAddress**](UsersAddressesApi.md#getAddress) | **GET** /users/{user_id}/addresses/{id} | Get a single address
[**getAddresses**](UsersAddressesApi.md#getAddresses) | **GET** /users/{user_id}/addresses | List and search addresses
[**updateAddress**](UsersAddressesApi.md#updateAddress) | **PUT** /users/{user_id}/addresses/{id} | Update an address


# **createAddress**
> \KnetikCloud\Model\SavedAddressResource createAddress($user_id, $saved_address_resource)

Create a new address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersAddressesApi();
$user_id = "user_id_example"; // string | The id of the user
$saved_address_resource = new \KnetikCloud\Model\SavedAddressResource(); // \KnetikCloud\Model\SavedAddressResource | The new address

try {
    $result = $api_instance->createAddress($user_id, $saved_address_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersAddressesApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user |
 **saved_address_resource** | [**\KnetikCloud\Model\SavedAddressResource**](../Model/SavedAddressResource.md)| The new address | [optional]

### Return type

[**\KnetikCloud\Model\SavedAddressResource**](../Model/SavedAddressResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> deleteAddress($user_id, $id)

Delete an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersAddressesApi();
$user_id = "user_id_example"; // string | The id of the user
$id = 56; // int | The id of the address

try {
    $api_instance->deleteAddress($user_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling UsersAddressesApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user |
 **id** | **int**| The id of the address |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddress**
> \KnetikCloud\Model\SavedAddressResource getAddress($user_id, $id)

Get a single address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersAddressesApi();
$user_id = "user_id_example"; // string | The id of the user
$id = 56; // int | The id of the address

try {
    $result = $api_instance->getAddress($user_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersAddressesApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user |
 **id** | **int**| The id of the address |

### Return type

[**\KnetikCloud\Model\SavedAddressResource**](../Model/SavedAddressResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses**
> \KnetikCloud\Model\PageResourceSavedAddressResource_ getAddresses($user_id, $size, $page, $order)

List and search addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersAddressesApi();
$user_id = "user_id_example"; // string | The id of the user
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getAddresses($user_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersAddressesApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceSavedAddressResource_**](../Model/PageResourceSavedAddressResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddress**
> \KnetikCloud\Model\SavedAddressResource updateAddress($user_id, $id, $saved_address_resource)

Update an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersAddressesApi();
$user_id = "user_id_example"; // string | The id of the user
$id = 56; // int | The id of the address
$saved_address_resource = new \KnetikCloud\Model\SavedAddressResource(); // \KnetikCloud\Model\SavedAddressResource | The saved address resource object

try {
    $result = $api_instance->updateAddress($user_id, $id, $saved_address_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersAddressesApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user |
 **id** | **int**| The id of the address |
 **saved_address_resource** | [**\KnetikCloud\Model\SavedAddressResource**](../Model/SavedAddressResource.md)| The saved address resource object | [optional]

### Return type

[**\KnetikCloud\Model\SavedAddressResource**](../Model/SavedAddressResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

