# KnetikCloud\TaxesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCountryTax**](TaxesApi.md#createCountryTax) | **POST** /tax/countries | Create a country tax
[**createStateTax**](TaxesApi.md#createStateTax) | **POST** /tax/countries/{country_code_iso3}/states | Create a state tax
[**deleteCountryTax**](TaxesApi.md#deleteCountryTax) | **DELETE** /tax/countries/{country_code_iso3} | Delete an existing tax
[**deleteStateTax**](TaxesApi.md#deleteStateTax) | **DELETE** /tax/countries/{country_code_iso3}/states/{state_code} | Delete an existing state tax
[**getCountryTax**](TaxesApi.md#getCountryTax) | **GET** /tax/countries/{country_code_iso3} | Get a single tax
[**getCountryTaxes**](TaxesApi.md#getCountryTaxes) | **GET** /tax/countries | List and search taxes
[**getStateTax**](TaxesApi.md#getStateTax) | **GET** /tax/countries/{country_code_iso3}/states/{state_code} | Get a single state tax
[**getStateTaxesForCountries**](TaxesApi.md#getStateTaxesForCountries) | **GET** /tax/states | List and search taxes across all countries
[**getStateTaxesForCountry**](TaxesApi.md#getStateTaxesForCountry) | **GET** /tax/countries/{country_code_iso3}/states | List and search taxes within a country
[**updateCountryTax**](TaxesApi.md#updateCountryTax) | **PUT** /tax/countries/{country_code_iso3} | Create or update a tax
[**updateStateTax**](TaxesApi.md#updateStateTax) | **PUT** /tax/countries/{country_code_iso3}/states/{state_code} | Create or update a state tax


# **createCountryTax**
> \KnetikCloud\Model\CountryTaxResource createCountryTax($tax_resource)

Create a country tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$tax_resource = new \KnetikCloud\Model\CountryTaxResource(); // \KnetikCloud\Model\CountryTaxResource | The tax object

try {
    $result = $api_instance->createCountryTax($tax_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->createCountryTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_resource** | [**\KnetikCloud\Model\CountryTaxResource**](../Model/CountryTaxResource.md)| The tax object | [optional]

### Return type

[**\KnetikCloud\Model\CountryTaxResource**](../Model/CountryTaxResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStateTax**
> \KnetikCloud\Model\StateTaxResource createStateTax($country_code_iso3, $tax_resource)

Create a state tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country
$tax_resource = new \KnetikCloud\Model\StateTaxResource(); // \KnetikCloud\Model\StateTaxResource | The tax object

try {
    $result = $api_instance->createStateTax($country_code_iso3, $tax_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->createStateTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |
 **tax_resource** | [**\KnetikCloud\Model\StateTaxResource**](../Model/StateTaxResource.md)| The tax object | [optional]

### Return type

[**\KnetikCloud\Model\StateTaxResource**](../Model/StateTaxResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCountryTax**
> deleteCountryTax($country_code_iso3)

Delete an existing tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country

try {
    $api_instance->deleteCountryTax($country_code_iso3);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->deleteCountryTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStateTax**
> deleteStateTax($country_code_iso3, $state_code)

Delete an existing state tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country
$state_code = "state_code_example"; // string | The code of the state

try {
    $api_instance->deleteStateTax($country_code_iso3, $state_code);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->deleteStateTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |
 **state_code** | **string**| The code of the state |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountryTax**
> \KnetikCloud\Model\CountryTaxResource getCountryTax($country_code_iso3)

Get a single tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country

try {
    $result = $api_instance->getCountryTax($country_code_iso3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getCountryTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |

### Return type

[**\KnetikCloud\Model\CountryTaxResource**](../Model/CountryTaxResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountryTaxes**
> \KnetikCloud\Model\PageResourceCountryTaxResource_ getCountryTaxes($size, $page, $order)

List and search taxes

Get a list of taxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "name:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCountryTaxes($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getCountryTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to name:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceCountryTaxResource_**](../Model/PageResourceCountryTaxResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateTax**
> \KnetikCloud\Model\StateTaxResource getStateTax($country_code_iso3, $state_code)

Get a single state tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country
$state_code = "state_code_example"; // string | The code of the state

try {
    $result = $api_instance->getStateTax($country_code_iso3, $state_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getStateTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |
 **state_code** | **string**| The code of the state |

### Return type

[**\KnetikCloud\Model\StateTaxResource**](../Model/StateTaxResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateTaxesForCountries**
> \KnetikCloud\Model\PageResourceStateTaxResource_ getStateTaxesForCountries($size, $page, $order)

List and search taxes across all countries

Get a list of taxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getStateTaxesForCountries($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getStateTaxesForCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceStateTaxResource_**](../Model/PageResourceStateTaxResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateTaxesForCountry**
> \KnetikCloud\Model\PageResourceStateTaxResource_ getStateTaxesForCountry($country_code_iso3, $size, $page, $order)

List and search taxes within a country

Get a list of taxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getStateTaxesForCountry($country_code_iso3, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getStateTaxesForCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceStateTaxResource_**](../Model/PageResourceStateTaxResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCountryTax**
> \KnetikCloud\Model\CountryTaxResource updateCountryTax($country_code_iso3, $tax_resource)

Create or update a tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country
$tax_resource = new \KnetikCloud\Model\CountryTaxResource(); // \KnetikCloud\Model\CountryTaxResource | The tax object

try {
    $result = $api_instance->updateCountryTax($country_code_iso3, $tax_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->updateCountryTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |
 **tax_resource** | [**\KnetikCloud\Model\CountryTaxResource**](../Model/CountryTaxResource.md)| The tax object | [optional]

### Return type

[**\KnetikCloud\Model\CountryTaxResource**](../Model/CountryTaxResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateTax**
> \KnetikCloud\Model\StateTaxResource updateStateTax($country_code_iso3, $state_code, $tax_resource)

Create or update a state tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\TaxesApi(new \Http\Adapter\Guzzle6\Client());
$country_code_iso3 = "country_code_iso3_example"; // string | The iso3 code of the country
$state_code = "state_code_example"; // string | The code of the state
$tax_resource = new \KnetikCloud\Model\StateTaxResource(); // \KnetikCloud\Model\StateTaxResource | The tax object

try {
    $result = $api_instance->updateStateTax($country_code_iso3, $state_code, $tax_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->updateStateTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code_iso3** | **string**| The iso3 code of the country |
 **state_code** | **string**| The code of the state |
 **tax_resource** | [**\KnetikCloud\Model\StateTaxResource**](../Model/StateTaxResource.md)| The tax object | [optional]

### Return type

[**\KnetikCloud\Model\StateTaxResource**](../Model/StateTaxResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

