# KnetikCloud\PaymentsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentMethod**](PaymentsApi.md#createPaymentMethod) | **POST** /users/{user_id}/payment-methods | Create a new payment method for a user
[**deletePaymentMethod**](PaymentsApi.md#deletePaymentMethod) | **DELETE** /users/{user_id}/payment-methods/{id} | Delete an existing payment method for a user
[**getPaymentMethod**](PaymentsApi.md#getPaymentMethod) | **GET** /users/{user_id}/payment-methods/{id} | Get a single payment method for a user
[**getPaymentMethods**](PaymentsApi.md#getPaymentMethods) | **GET** /users/{user_id}/payment-methods | Get all payment methods for a user
[**paymentAuthorization**](PaymentsApi.md#paymentAuthorization) | **POST** /payment/authorizations | Authorize payment of an invoice for later capture
[**paymentCapture**](PaymentsApi.md#paymentCapture) | **POST** /payment/authorizations/{id}/capture | Capture an existing invoice payment authorization
[**updatePaymentMethod**](PaymentsApi.md#updatePaymentMethod) | **PUT** /users/{user_id}/payment-methods/{id} | Update an existing payment method for a user


# **createPaymentMethod**
> \KnetikCloud\Model\PaymentMethodResource createPaymentMethod($user_id, $payment_method)

Create a new payment method for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$user_id = 56; // int | ID of the user for whom the payment method is being created
$payment_method = new \KnetikCloud\Model\PaymentMethodResource(); // \KnetikCloud\Model\PaymentMethodResource | Payment method being created

try {
    $result = $api_instance->createPaymentMethod($user_id, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user for whom the payment method is being created |
 **payment_method** | [**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)| Payment method being created | [optional]

### Return type

[**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentMethod**
> deletePaymentMethod($user_id, $id)

Delete an existing payment method for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$user_id = 56; // int | ID of the user for whom the payment method is being updated
$id = 56; // int | ID of the payment method being deleted

try {
    $api_instance->deletePaymentMethod($user_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->deletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user for whom the payment method is being updated |
 **id** | **int**| ID of the payment method being deleted |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentMethod**
> \KnetikCloud\Model\PaymentMethodResource getPaymentMethod($user_id, $id)

Get a single payment method for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$user_id = 56; // int | ID of the user for whom the payment method is being retrieved
$id = 56; // int | ID of the payment method being retrieved

try {
    $result = $api_instance->getPaymentMethod($user_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user for whom the payment method is being retrieved |
 **id** | **int**| ID of the payment method being retrieved |

### Return type

[**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentMethods**
> \KnetikCloud\Model\PaymentMethodResource[] getPaymentMethods($user_id, $filter_name, $filter_payment_type, $filter_payment_method_type_id, $filter_payment_method_type_name, $size, $page, $order)

Get all payment methods for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$user_id = 56; // int | ID of the user for whom the payment methods are being retrieved
$filter_name = "filter_name_example"; // string | Filter for payment methods whose name starts with a given string
$filter_payment_type = "filter_payment_type_example"; // string | Filter for payment methods with a specific payment type
$filter_payment_method_type_id = 56; // int | Filter for payment methods with a specific payment method type by id
$filter_payment_method_type_name = "filter_payment_method_type_name_example"; // string | Filter for payment methods whose payment method type name starts with a given string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | a comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getPaymentMethods($user_id, $filter_name, $filter_payment_type, $filter_payment_method_type_id, $filter_payment_method_type_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user for whom the payment methods are being retrieved |
 **filter_name** | **string**| Filter for payment methods whose name starts with a given string | [optional]
 **filter_payment_type** | **string**| Filter for payment methods with a specific payment type | [optional]
 **filter_payment_method_type_id** | **int**| Filter for payment methods with a specific payment method type by id | [optional]
 **filter_payment_method_type_name** | **string**| Filter for payment methods whose payment method type name starts with a given string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| a comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PaymentMethodResource[]**](../Model/PaymentMethodResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentAuthorization**
> \KnetikCloud\Model\PaymentAuthorizationResource paymentAuthorization($request)

Authorize payment of an invoice for later capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$request = new \KnetikCloud\Model\PaymentAuthorizationResource(); // \KnetikCloud\Model\PaymentAuthorizationResource | Payment authorization request

try {
    $result = $api_instance->paymentAuthorization($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\PaymentAuthorizationResource**](../Model/PaymentAuthorizationResource.md)| Payment authorization request | [optional]

### Return type

[**\KnetikCloud\Model\PaymentAuthorizationResource**](../Model/PaymentAuthorizationResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCapture**
> paymentCapture($id)

Capture an existing invoice payment authorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$id = 56; // int | ID of the payment authorization to capture

try {
    $api_instance->paymentCapture($id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the payment authorization to capture |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentMethod**
> \KnetikCloud\Model\PaymentMethodResource updatePaymentMethod($user_id, $id, $payment_method)

Update an existing payment method for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsApi();
$user_id = 56; // int | ID of the user for whom the payment method is being updated
$id = 56; // int | ID of the payment method being updated
$payment_method = new \KnetikCloud\Model\PaymentMethodResource(); // \KnetikCloud\Model\PaymentMethodResource | The updated payment method data

try {
    $result = $api_instance->updatePaymentMethod($user_id, $id, $payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user for whom the payment method is being updated |
 **id** | **int**| ID of the payment method being updated |
 **payment_method** | [**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)| The updated payment method data | [optional]

### Return type

[**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

