# KnetikCloud\StoreSalesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCatalogSale**](StoreSalesApi.md#createCatalogSale) | **POST** /store/sales | Create a sale
[**deleteCatalogSale**](StoreSalesApi.md#deleteCatalogSale) | **DELETE** /store/sales/{id} | Delete a sale
[**getCatalogSale**](StoreSalesApi.md#getCatalogSale) | **GET** /store/sales/{id} | Get a single sale
[**getCatalogSales**](StoreSalesApi.md#getCatalogSales) | **GET** /store/sales | List and search sales
[**updateCatalogSale**](StoreSalesApi.md#updateCatalogSale) | **PUT** /store/sales/{id} | Update a sale


# **createCatalogSale**
> \KnetikCloud\Model\CatalogSale createCatalogSale($catalog_sale)

Create a sale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreSalesApi(new \Http\Adapter\Guzzle6\Client());
$catalog_sale = new \KnetikCloud\Model\CatalogSale(); // \KnetikCloud\Model\CatalogSale | The catalog sale object

try {
    $result = $api_instance->createCatalogSale($catalog_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSalesApi->createCatalogSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_sale** | [**\KnetikCloud\Model\CatalogSale**](../Model/CatalogSale.md)| The catalog sale object | [optional]

### Return type

[**\KnetikCloud\Model\CatalogSale**](../Model/CatalogSale.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCatalogSale**
> deleteCatalogSale($id)

Delete a sale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreSalesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the sale

try {
    $api_instance->deleteCatalogSale($id);
} catch (Exception $e) {
    echo 'Exception when calling StoreSalesApi->deleteCatalogSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the sale |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCatalogSale**
> \KnetikCloud\Model\CatalogSale getCatalogSale($id)

Get a single sale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreSalesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the sale

try {
    $result = $api_instance->getCatalogSale($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSalesApi->getCatalogSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the sale |

### Return type

[**\KnetikCloud\Model\CatalogSale**](../Model/CatalogSale.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCatalogSales**
> \KnetikCloud\Model\PageResourceCatalogSale_ getCatalogSales($size, $page, $order)

List and search sales

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreSalesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCatalogSales($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSalesApi->getCatalogSales: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceCatalogSale_**](../Model/PageResourceCatalogSale_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCatalogSale**
> \KnetikCloud\Model\CatalogSale updateCatalogSale($id, $catalog_sale)

Update a sale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreSalesApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the sale
$catalog_sale = new \KnetikCloud\Model\CatalogSale(); // \KnetikCloud\Model\CatalogSale | The catalog sale object

try {
    $result = $api_instance->updateCatalogSale($id, $catalog_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSalesApi->updateCatalogSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the sale |
 **catalog_sale** | [**\KnetikCloud\Model\CatalogSale**](../Model/CatalogSale.md)| The catalog sale object | [optional]

### Return type

[**\KnetikCloud\Model\CatalogSale**](../Model/CatalogSale.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

