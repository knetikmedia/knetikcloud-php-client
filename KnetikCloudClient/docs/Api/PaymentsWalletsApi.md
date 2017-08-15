# KnetikCloud\PaymentsWalletsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserWallet**](PaymentsWalletsApi.md#getUserWallet) | **GET** /users/{user_id}/wallets/{currency_code} | Returns the user&#39;s wallet for the given currency code
[**getUserWalletTransactions**](PaymentsWalletsApi.md#getUserWalletTransactions) | **GET** /users/{user_id}/wallets/{currency_code}/transactions | Retrieve a user&#39;s wallet transactions
[**getUserWallets**](PaymentsWalletsApi.md#getUserWallets) | **GET** /users/{user_id}/wallets | List all of a user&#39;s wallets
[**getWalletBalances**](PaymentsWalletsApi.md#getWalletBalances) | **GET** /wallets/totals | Retrieves a summation of wallet balances by currency code
[**getWalletTransactions**](PaymentsWalletsApi.md#getWalletTransactions) | **GET** /wallets/transactions | Retrieve wallet transactions across the system
[**getWallets**](PaymentsWalletsApi.md#getWallets) | **GET** /wallets | Retrieve a list of wallets across the system
[**updateWalletBalance**](PaymentsWalletsApi.md#updateWalletBalance) | **PUT** /users/{user_id}/wallets/{currency_code}/balance | Updates the balance for a user&#39;s wallet


# **getUserWallet**
> \KnetikCloud\Model\SimpleWallet getUserWallet($user_id, $currency_code)

Returns the user's wallet for the given currency code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The ID of the user for whom wallet is being retrieved
$currency_code = "currency_code_example"; // string | Currency code of the user's wallet

try {
    $result = $api_instance->getUserWallet($user_id, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->getUserWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user for whom wallet is being retrieved |
 **currency_code** | **string**| Currency code of the user&#39;s wallet |

### Return type

[**\KnetikCloud\Model\SimpleWallet**](../Model/SimpleWallet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserWalletTransactions**
> \KnetikCloud\Model\PageResourceWalletTransactionResource_ getUserWalletTransactions($user_id, $currency_code, $filter_type, $filter_max_date, $filter_min_date, $filter_sign, $size, $page, $order)

Retrieve a user's wallet transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The ID of the user for whom wallet transactions are being retrieved
$currency_code = "currency_code_example"; // string | Currency code of the user's wallet
$filter_type = "filter_type_example"; // string | Filter for transactions with specified type
$filter_max_date = 789; // int | Filter for transactions from no earlier than the specified date as a unix timestamp in seconds
$filter_min_date = 789; // int | Filter for transactions from no later than the specified date as a unix timestamp in seconds
$filter_sign = "filter_sign_example"; // string | Filter for transactions with amount with the given sign.  Allowable values: ('positive', 'negative')
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserWalletTransactions($user_id, $currency_code, $filter_type, $filter_max_date, $filter_min_date, $filter_sign, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->getUserWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user for whom wallet transactions are being retrieved |
 **currency_code** | **string**| Currency code of the user&#39;s wallet |
 **filter_type** | **string**| Filter for transactions with specified type | [optional]
 **filter_max_date** | **int**| Filter for transactions from no earlier than the specified date as a unix timestamp in seconds | [optional]
 **filter_min_date** | **int**| Filter for transactions from no later than the specified date as a unix timestamp in seconds | [optional]
 **filter_sign** | **string**| Filter for transactions with amount with the given sign.  Allowable values: (&#39;positive&#39;, &#39;negative&#39;) | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceWalletTransactionResource_**](../Model/PageResourceWalletTransactionResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserWallets**
> \KnetikCloud\Model\SimpleWallet[] getUserWallets($user_id)

List all of a user's wallets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The ID of the user for whom wallets are being retrieved

try {
    $result = $api_instance->getUserWallets($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->getUserWallets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user for whom wallets are being retrieved |

### Return type

[**\KnetikCloud\Model\SimpleWallet[]**](../Model/SimpleWallet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWalletBalances**
> \KnetikCloud\Model\PageResourceWalletTotalResponse_ getWalletBalances()

Retrieves a summation of wallet balances by currency code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getWalletBalances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->getWalletBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\PageResourceWalletTotalResponse_**](../Model/PageResourceWalletTotalResponse_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWalletTransactions**
> \KnetikCloud\Model\PageResourceWalletTransactionResource_ getWalletTransactions($filter_invoice, $filter_type, $filter_date, $filter_sign, $filter_user_id, $filter_username, $filter_details, $filter_currency_code, $size, $page, $order)

Retrieve wallet transactions across the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());
$filter_invoice = 56; // int | Filter for transactions from a specific invoice
$filter_type = "filter_type_example"; // string | Filter for transactions with specified type
$filter_date = "filter_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_sign = "filter_sign_example"; // string | Filter for transactions with amount with the given sign
$filter_user_id = 56; // int | Filter for transactions for specific userId
$filter_username = "filter_username_example"; // string | Filter for transactions for specific username that start with the given string
$filter_details = "filter_details_example"; // string | Filter for transactions for specific details that start with the given string
$filter_currency_code = "filter_currency_code_example"; // string | Filter for transactions for specific currency code
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getWalletTransactions($filter_invoice, $filter_type, $filter_date, $filter_sign, $filter_user_id, $filter_username, $filter_details, $filter_currency_code, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->getWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_invoice** | **int**| Filter for transactions from a specific invoice | [optional]
 **filter_type** | **string**| Filter for transactions with specified type | [optional]
 **filter_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_sign** | **string**| Filter for transactions with amount with the given sign | [optional]
 **filter_user_id** | **int**| Filter for transactions for specific userId | [optional]
 **filter_username** | **string**| Filter for transactions for specific username that start with the given string | [optional]
 **filter_details** | **string**| Filter for transactions for specific details that start with the given string | [optional]
 **filter_currency_code** | **string**| Filter for transactions for specific currency code | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceWalletTransactionResource_**](../Model/PageResourceWalletTransactionResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWallets**
> \KnetikCloud\Model\PageResourceSimpleWallet_ getWallets($size, $page, $order)

Retrieve a list of wallets across the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getWallets($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->getWallets: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceSimpleWallet_**](../Model/PageResourceSimpleWallet_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWalletBalance**
> \KnetikCloud\Model\WalletTransactionResource updateWalletBalance($user_id, $currency_code, $request)

Updates the balance for a user's wallet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsWalletsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The ID of the user for whom wallet is being modified
$currency_code = "currency_code_example"; // string | Currency code of the user's wallet
$request = new \KnetikCloud\Model\WalletAlterRequest(); // \KnetikCloud\Model\WalletAlterRequest | The requested balance modification to be made to the user's wallet

try {
    $result = $api_instance->updateWalletBalance($user_id, $currency_code, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsWalletsApi->updateWalletBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of the user for whom wallet is being modified |
 **currency_code** | **string**| Currency code of the user&#39;s wallet |
 **request** | [**\KnetikCloud\Model\WalletAlterRequest**](../Model/WalletAlterRequest.md)| The requested balance modification to be made to the user&#39;s wallet | [optional]

### Return type

[**\KnetikCloud\Model\WalletTransactionResource**](../Model/WalletTransactionResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

