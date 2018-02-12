# KnetikCloud\AuthClientsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClient**](AuthClientsApi.md#createClient) | **POST** /auth/clients | Create a new client
[**deleteClient**](AuthClientsApi.md#deleteClient) | **DELETE** /auth/clients/{client_key} | Delete a client
[**getClient**](AuthClientsApi.md#getClient) | **GET** /auth/clients/{client_key} | Get a single client
[**getClientGrantTypes**](AuthClientsApi.md#getClientGrantTypes) | **GET** /auth/clients/grant-types | List available client grant types
[**getClients**](AuthClientsApi.md#getClients) | **GET** /auth/clients | List and search clients
[**setClientGrantTypes**](AuthClientsApi.md#setClientGrantTypes) | **PUT** /auth/clients/{client_key}/grant-types | Set grant types for a client
[**setClientRedirectUris**](AuthClientsApi.md#setClientRedirectUris) | **PUT** /auth/clients/{client_key}/redirect-uris | Set redirect uris for a client
[**updateClient**](AuthClientsApi.md#updateClient) | **PUT** /auth/clients/{client_key} | Update a client


# **createClient**
> \KnetikCloud\Model\ClientResource createClient($client_resource)

Create a new client

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$client_resource = new \KnetikCloud\Model\ClientResource(); // \KnetikCloud\Model\ClientResource | The client resource object

try {
    $result = $api_instance->createClient($client_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->createClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_resource** | [**\KnetikCloud\Model\ClientResource**](../Model/ClientResource.md)| The client resource object | [optional]

### Return type

[**\KnetikCloud\Model\ClientResource**](../Model/ClientResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClient**
> deleteClient($client_key)

Delete a client

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$client_key = "client_key_example"; // string | The key of the client

try {
    $api_instance->deleteClient($client_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The key of the client |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClient**
> \KnetikCloud\Model\ClientResource getClient($client_key)

Get a single client

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$client_key = "client_key_example"; // string | The key of the client

try {
    $result = $api_instance->getClient($client_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->getClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The key of the client |

### Return type

[**\KnetikCloud\Model\ClientResource**](../Model/ClientResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientGrantTypes**
> \KnetikCloud\Model\GrantTypeResource[] getClientGrantTypes()

List available client grant types

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getClientGrantTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->getClientGrantTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\GrantTypeResource[]**](../Model/GrantTypeResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClients**
> \KnetikCloud\Model\PageResourceClientResource_ getClients($size, $page, $order)

List and search clients

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getClients($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->getClients: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceClientResource_**](../Model/PageResourceClientResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setClientGrantTypes**
> setClientGrantTypes($client_key, $grant_list)

Set grant types for a client

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$client_key = "client_key_example"; // string | The key of the client
$grant_list = array(new \KnetikCloud\Model\string[]()); // string[] | A list of unique grant types

try {
    $api_instance->setClientGrantTypes($client_key, $grant_list);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->setClientGrantTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The key of the client |
 **grant_list** | **string[]**| A list of unique grant types | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setClientRedirectUris**
> setClientRedirectUris($client_key, $redirect_list)

Set redirect uris for a client

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$client_key = "client_key_example"; // string | The key of the client
$redirect_list = array(new \KnetikCloud\Model\string[]()); // string[] | A list of unique redirect uris

try {
    $api_instance->setClientRedirectUris($client_key, $redirect_list);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->setClientRedirectUris: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The key of the client |
 **redirect_list** | **string[]**| A list of unique redirect uris | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClient**
> \KnetikCloud\Model\ClientResource updateClient($client_key, $client_resource)

Update a client

<b>Permissions Needed:</b> CLIENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\AuthClientsApi(new \Http\Adapter\Guzzle6\Client());
$client_key = "client_key_example"; // string | The key of the client
$client_resource = new \KnetikCloud\Model\ClientResource(); // \KnetikCloud\Model\ClientResource | The client resource object

try {
    $result = $api_instance->updateClient($client_key, $client_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthClientsApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| The key of the client |
 **client_resource** | [**\KnetikCloud\Model\ClientResource**](../Model/ClientResource.md)| The client resource object | [optional]

### Return type

[**\KnetikCloud\Model\ClientResource**](../Model/ClientResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

