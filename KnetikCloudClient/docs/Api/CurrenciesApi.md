# KnetikCloud\CurrenciesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCurrency**](CurrenciesApi.md#createCurrency) | **POST** /currencies | Create a currency
[**deleteCurrency**](CurrenciesApi.md#deleteCurrency) | **DELETE** /currencies/{code} | Delete a currency
[**getCurrencies**](CurrenciesApi.md#getCurrencies) | **GET** /currencies | List and search currencies
[**getCurrency**](CurrenciesApi.md#getCurrency) | **GET** /currencies/{code} | Get a single currency
[**updateCurrency**](CurrenciesApi.md#updateCurrency) | **PUT** /currencies/{code} | Update a currency


# **createCurrency**
> \KnetikCloud\Model\CurrencyResource createCurrency($currency)

Create a currency

<b>Permissions Needed:</b> CURRENCIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CurrenciesApi(new \Http\Adapter\Guzzle6\Client());
$currency = new \KnetikCloud\Model\CurrencyResource(); // \KnetikCloud\Model\CurrencyResource | The currency object

try {
    $result = $api_instance->createCurrency($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->createCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | [**\KnetikCloud\Model\CurrencyResource**](../Model/CurrencyResource.md)| The currency object | [optional]

### Return type

[**\KnetikCloud\Model\CurrencyResource**](../Model/CurrencyResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCurrency**
> deleteCurrency($code)

Delete a currency

<b>Permissions Needed:</b> CURRENCIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CurrenciesApi(new \Http\Adapter\Guzzle6\Client());
$code = "code_example"; // string | The currency code

try {
    $api_instance->deleteCurrency($code);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->deleteCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The currency code |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrencies**
> \KnetikCloud\Model\PageResourceCurrencyResource_ getCurrencies($filter_default, $filter_enabled_currencies, $filter_type, $size, $page, $order)

List and search currencies

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CurrenciesApi(new \Http\Adapter\Guzzle6\Client());
$filter_default = true; // bool | Filter for the one currency that is set as default (true), or all that are not (false)
$filter_enabled_currencies = true; // bool | Filter for alternate currencies setup explicitely in system config
$filter_type = "filter_type_example"; // string | Filter currencies by type.  Allowable values: ('virtual', 'real')
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "name:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCurrencies($filter_default, $filter_enabled_currencies, $filter_type, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_default** | **bool**| Filter for the one currency that is set as default (true), or all that are not (false) | [optional]
 **filter_enabled_currencies** | **bool**| Filter for alternate currencies setup explicitely in system config | [optional]
 **filter_type** | **string**| Filter currencies by type.  Allowable values: (&#39;virtual&#39;, &#39;real&#39;) | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to name:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceCurrencyResource_**](../Model/PageResourceCurrencyResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrency**
> \KnetikCloud\Model\CurrencyResource getCurrency($code)

Get a single currency

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CurrenciesApi(new \Http\Adapter\Guzzle6\Client());
$code = "code_example"; // string | The currency code

try {
    $result = $api_instance->getCurrency($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The currency code |

### Return type

[**\KnetikCloud\Model\CurrencyResource**](../Model/CurrencyResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrency**
> updateCurrency($code, $currency)

Update a currency

<b>Permissions Needed:</b> CURRENCIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CurrenciesApi(new \Http\Adapter\Guzzle6\Client());
$code = "code_example"; // string | The currency code
$currency = new \KnetikCloud\Model\CurrencyResource(); // \KnetikCloud\Model\CurrencyResource | The currency object

try {
    $api_instance->updateCurrency($code, $currency);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->updateCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The currency code |
 **currency** | [**\KnetikCloud\Model\CurrencyResource**](../Model/CurrencyResource.md)| The currency object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

