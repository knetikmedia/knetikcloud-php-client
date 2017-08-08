# KnetikCloud\StoreShoppingCartsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomDiscount**](StoreShoppingCartsApi.md#addCustomDiscount) | **POST** /carts/{id}/custom-discounts | Adds a custom discount to the cart
[**addDiscountToCart**](StoreShoppingCartsApi.md#addDiscountToCart) | **POST** /carts/{id}/discounts | Adds a discount coupon to the cart
[**addItemToCart**](StoreShoppingCartsApi.md#addItemToCart) | **POST** /carts/{id}/items | Add an item to the cart
[**createCart**](StoreShoppingCartsApi.md#createCart) | **POST** /carts | Create a cart
[**getCart**](StoreShoppingCartsApi.md#getCart) | **GET** /carts/{id} | Returns the cart with the given GUID
[**getCarts**](StoreShoppingCartsApi.md#getCarts) | **GET** /carts | Get a list of carts
[**getShippable**](StoreShoppingCartsApi.md#getShippable) | **GET** /carts/{id}/shippable | Returns whether a cart requires shipping
[**getShippingCountries**](StoreShoppingCartsApi.md#getShippingCountries) | **GET** /carts/{id}/countries | Get the list of available shipping countries per vendor
[**removeDiscountFromCart**](StoreShoppingCartsApi.md#removeDiscountFromCart) | **DELETE** /carts/{id}/discounts/{code} | Removes a discount coupon from the cart
[**setCartCurrency**](StoreShoppingCartsApi.md#setCartCurrency) | **PUT** /carts/{id}/currency | Sets the currency to use for the cart
[**setCartOwner**](StoreShoppingCartsApi.md#setCartOwner) | **PUT** /carts/{id}/owner | Sets the owner of a cart if none is set already
[**updateItemInCart**](StoreShoppingCartsApi.md#updateItemInCart) | **PUT** /carts/{id}/items | Changes the quantity of an item already in the cart
[**updateShippingAddress**](StoreShoppingCartsApi.md#updateShippingAddress) | **PUT** /carts/{id}/shipping-address | Modifies or sets the order shipping address


# **addCustomDiscount**
> addCustomDiscount($id, $custom_discount)

Adds a custom discount to the cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$custom_discount = new \KnetikCloud\Model\CouponDefinition(); // \KnetikCloud\Model\CouponDefinition | The details of the discount to add

try {
    $api_instance->addCustomDiscount($id, $custom_discount);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->addCustomDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **custom_discount** | [**\KnetikCloud\Model\CouponDefinition**](../Model/CouponDefinition.md)| The details of the discount to add | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDiscountToCart**
> addDiscountToCart($id, $sku_request)

Adds a discount coupon to the cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$sku_request = new \KnetikCloud\Model\SkuRequest(); // \KnetikCloud\Model\SkuRequest | The request of the sku

try {
    $api_instance->addDiscountToCart($id, $sku_request);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->addDiscountToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **sku_request** | [**\KnetikCloud\Model\SkuRequest**](../Model/SkuRequest.md)| The request of the sku | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemToCart**
> addItemToCart($id, $cart_item_request)

Add an item to the cart

Currently, carts cannot contain virtual and real currency items at the same time. Furthermore, the API only support a single virtual item at the moment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$cart_item_request = new \KnetikCloud\Model\CartItemRequest(); // \KnetikCloud\Model\CartItemRequest | The cart item request object

try {
    $api_instance->addItemToCart($id, $cart_item_request);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->addItemToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **cart_item_request** | [**\KnetikCloud\Model\CartItemRequest**](../Model/CartItemRequest.md)| The cart item request object | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCart**
> string createCart($owner, $currency_code)

Create a cart

You don't have to have a user to create a cart but the API requires authentication to checkout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$owner = 56; // int | Set the owner of a cart. If not specified, defaults to the calling user's id. If specified and is not the calling user's id, SHOPPING_CARTS_ADMIN permission is required
$currency_code = "currency_code_example"; // string | Set the currency for the cart, by currency code. May be disallowed by site settings.

try {
    $result = $api_instance->createCart($owner, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->createCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **int**| Set the owner of a cart. If not specified, defaults to the calling user&#39;s id. If specified and is not the calling user&#39;s id, SHOPPING_CARTS_ADMIN permission is required | [optional]
 **currency_code** | **string**| Set the currency for the cart, by currency code. May be disallowed by site settings. | [optional]

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCart**
> \KnetikCloud\Model\Cart getCart($id)

Returns the cart with the given GUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart

try {
    $result = $api_instance->getCart($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->getCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |

### Return type

[**\KnetikCloud\Model\Cart**](../Model/Cart.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCarts**
> \KnetikCloud\Model\PageResourceCartSummary_ getCarts($filter_owner_id, $size, $page, $order)

Get a list of carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$filter_owner_id = 56; // int | Filter by the id of the owner
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getCarts($filter_owner_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->getCarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_owner_id** | **int**| Filter by the id of the owner | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceCartSummary_**](../Model/PageResourceCartSummary_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippable**
> \KnetikCloud\Model\CartShippableResponse getShippable($id)

Returns whether a cart requires shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart

try {
    $result = $api_instance->getShippable($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->getShippable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |

### Return type

[**\KnetikCloud\Model\CartShippableResponse**](../Model/CartShippableResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingCountries**
> \KnetikCloud\Model\SampleCountriesResponse getShippingCountries($id)

Get the list of available shipping countries per vendor

Since a cart can have multiple vendors with different shipping options, the countries are broken down by vendors. Please see notes about the response object as the fields are variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart

try {
    $result = $api_instance->getShippingCountries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->getShippingCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |

### Return type

[**\KnetikCloud\Model\SampleCountriesResponse**](../Model/SampleCountriesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDiscountFromCart**
> removeDiscountFromCart($id, $code)

Removes a discount coupon from the cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$code = "code_example"; // string | The SKU code of the coupon to remove

try {
    $api_instance->removeDiscountFromCart($id, $code);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->removeDiscountFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **code** | **string**| The SKU code of the coupon to remove |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCartCurrency**
> setCartCurrency($id, $currency_code)

Sets the currency to use for the cart

May be disallowed by site settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$currency_code = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The code of the currency

try {
    $api_instance->setCartCurrency($id, $currency_code);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->setCartCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **currency_code** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The code of the currency | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCartOwner**
> setCartOwner($id, $user_id)

Sets the owner of a cart if none is set already

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$user_id = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The id of the user

try {
    $api_instance->setCartOwner($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->setCartOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **user_id** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The id of the user | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemInCart**
> updateItemInCart($id, $cart_item_request)

Changes the quantity of an item already in the cart

A quantity of zero will remove the item from the cart altogether.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$cart_item_request = new \KnetikCloud\Model\CartItemRequest(); // \KnetikCloud\Model\CartItemRequest | The cart item request object

try {
    $api_instance->updateItemInCart($id, $cart_item_request);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->updateItemInCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **cart_item_request** | [**\KnetikCloud\Model\CartItemRequest**](../Model/CartItemRequest.md)| The cart item request object | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShippingAddress**
> updateShippingAddress($id, $cart_shipping_address_request)

Modifies or sets the order shipping address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\StoreShoppingCartsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the cart
$cart_shipping_address_request = new \KnetikCloud\Model\CartShippingAddressRequest(); // \KnetikCloud\Model\CartShippingAddressRequest | The cart shipping address request object

try {
    $api_instance->updateShippingAddress($id, $cart_shipping_address_request);
} catch (Exception $e) {
    echo 'Exception when calling StoreShoppingCartsApi->updateShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the cart |
 **cart_shipping_address_request** | [**\KnetikCloud\Model\CartShippingAddressRequest**](../Model/CartShippingAddressRequest.md)| The cart shipping address request object | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

