# KnetikCloud\PaymentsStripeApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStripePaymentMethod**](PaymentsStripeApi.md#createStripePaymentMethod) | **POST** /payment/provider/stripe/payment-methods | Create a Stripe payment method for a user
[**payStripeInvoice**](PaymentsStripeApi.md#payStripeInvoice) | **POST** /payment/provider/stripe/payments | Pay with a single use token


# **createStripePaymentMethod**
> \KnetikCloud\Model\PaymentMethodResource createStripePaymentMethod($request)

Create a Stripe payment method for a user

Stores customer information and creates a payment method that can be used to pay invoices through the payments endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsStripeApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\StripeCreatePaymentMethod(); // \KnetikCloud\Model\StripeCreatePaymentMethod | The request to create a Stripe customer with payment info

try {
    $result = $api_instance->createStripePaymentMethod($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsStripeApi->createStripePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\StripeCreatePaymentMethod**](../Model/StripeCreatePaymentMethod.md)| The request to create a Stripe customer with payment info | [optional]

### Return type

[**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payStripeInvoice**
> payStripeInvoice($request)

Pay with a single use token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsStripeApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\StripePaymentRequest(); // \KnetikCloud\Model\StripePaymentRequest | The request to pay an invoice

try {
    $api_instance->payStripeInvoice($request);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsStripeApi->payStripeInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\StripePaymentRequest**](../Model/StripePaymentRequest.md)| The request to pay an invoice | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

