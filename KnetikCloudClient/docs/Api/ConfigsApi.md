# KnetikCloud\ConfigsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConfig**](ConfigsApi.md#createConfig) | **POST** /configs | Create a new config
[**deleteConfig**](ConfigsApi.md#deleteConfig) | **DELETE** /configs/{name} | Delete an existing config
[**getConfig**](ConfigsApi.md#getConfig) | **GET** /configs/{name} | Get a single config
[**getConfigs**](ConfigsApi.md#getConfigs) | **GET** /configs | List and search configs
[**updateConfig**](ConfigsApi.md#updateConfig) | **PUT** /configs/{name} | Update an existing config


# **createConfig**
> \KnetikCloud\Model\Config createConfig($config)

Create a new config

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ConfigsApi();
$config = new \KnetikCloud\Model\Config(); // \KnetikCloud\Model\Config | The config object

try {
    $result = $api_instance->createConfig($config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->createConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\KnetikCloud\Model\Config**](../Model/Config.md)| The config object | [optional]

### Return type

[**\KnetikCloud\Model\Config**](../Model/Config.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConfig**
> deleteConfig($name)

Delete an existing config

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ConfigsApi();
$name = "name_example"; // string | The config name

try {
    $api_instance->deleteConfig($name);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->deleteConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The config name |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfig**
> \KnetikCloud\Model\Config getConfig($name)

Get a single config

Only configs that are public readable will be shown without admin access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ConfigsApi();
$name = "name_example"; // string | The config name

try {
    $result = $api_instance->getConfig($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The config name |

### Return type

[**\KnetikCloud\Model\Config**](../Model/Config.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigs**
> \KnetikCloud\Model\PageResourceConfig_ getConfigs($filter_search, $size, $page, $order)

List and search configs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ConfigsApi();
$filter_search = "filter_search_example"; // string | Filter for configs whose name contains the given string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "1"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getConfigs($filter_search, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->getConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Filter for configs whose name contains the given string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceConfig_**](../Model/PageResourceConfig_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConfig**
> updateConfig($name, $config)

Update an existing config

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ConfigsApi();
$name = "name_example"; // string | The config name
$config = new \KnetikCloud\Model\Config(); // \KnetikCloud\Model\Config | The config object

try {
    $api_instance->updateConfig($name, $config);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->updateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The config name |
 **config** | [**\KnetikCloud\Model\Config**](../Model/Config.md)| The config object | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

