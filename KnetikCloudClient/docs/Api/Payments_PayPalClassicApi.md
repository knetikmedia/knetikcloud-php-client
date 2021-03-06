# KnetikCloud\Payments_PayPalClassicApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayPalBillingAgreementUrl**](Payments_PayPalClassicApi.md#createPayPalBillingAgreementUrl) | **POST** /payment/provider/paypal/classic/agreements/start | Create a PayPal Classic billing agreement for the user
[**createPayPalExpressCheckout**](Payments_PayPalClassicApi.md#createPayPalExpressCheckout) | **POST** /payment/provider/paypal/classic/checkout/start | Create a payment token for PayPal express checkout
[**finalizePayPalBillingAgreement**](Payments_PayPalClassicApi.md#finalizePayPalBillingAgreement) | **POST** /payment/provider/paypal/classic/agreements/finish | Finalizes a billing agreement after the user has accepted through PayPal
[**finalizePayPalCheckout**](Payments_PayPalClassicApi.md#finalizePayPalCheckout) | **POST** /payment/provider/paypal/classic/checkout/finish | Finalizes a payment after the user has completed checkout with PayPal


# **createPayPalBillingAgreementUrl**
> string createPayPalBillingAgreementUrl($request)

Create a PayPal Classic billing agreement for the user

Returns the token that should be used to forward the user to PayPal so they can accept the agreement. <br><br><b>Permissions Needed:</b> PAYPAL_CLASSIC_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Payments_PayPalClassicApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\CreateBillingAgreementRequest(); // \KnetikCloud\Model\CreateBillingAgreementRequest | The request to create a PayPal billing agreement

try {
    $result = $api_instance->createPayPalBillingAgreementUrl($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Payments_PayPalClassicApi->createPayPalBillingAgreementUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\CreateBillingAgreementRequest**](../Model/CreateBillingAgreementRequest.md)| The request to create a PayPal billing agreement | [optional]

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayPalExpressCheckout**
> string createPayPalExpressCheckout($request)

Create a payment token for PayPal express checkout

Returns the token that should be used to forward the user to PayPal so they can complete the checkout. <br><br><b>Permissions Needed:</b> PAYPAL_CLASSIC_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Payments_PayPalClassicApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\CreatePayPalPaymentRequest(); // \KnetikCloud\Model\CreatePayPalPaymentRequest | The request to create a PayPal payment token

try {
    $result = $api_instance->createPayPalExpressCheckout($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Payments_PayPalClassicApi->createPayPalExpressCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\CreatePayPalPaymentRequest**](../Model/CreatePayPalPaymentRequest.md)| The request to create a PayPal payment token | [optional]

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **finalizePayPalBillingAgreement**
> int finalizePayPalBillingAgreement($request)

Finalizes a billing agreement after the user has accepted through PayPal

Returns the ID of the new payment method created for the user for the billing agreement. <br><br><b>Permissions Needed:</b> PAYPAL_CLASSIC_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Payments_PayPalClassicApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\FinalizeBillingAgreementRequest(); // \KnetikCloud\Model\FinalizeBillingAgreementRequest | The request to finalize a PayPal billing agreement

try {
    $result = $api_instance->finalizePayPalBillingAgreement($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Payments_PayPalClassicApi->finalizePayPalBillingAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\FinalizeBillingAgreementRequest**](../Model/FinalizeBillingAgreementRequest.md)| The request to finalize a PayPal billing agreement | [optional]

### Return type

**int**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **finalizePayPalCheckout**
> finalizePayPalCheckout($request)

Finalizes a payment after the user has completed checkout with PayPal

The invoice will be marked paid/failed by asynchronous IPN callback. <br><br><b>Permissions Needed:</b> PAYPAL_CLASSIC_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Payments_PayPalClassicApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\FinalizePayPalPaymentRequest(); // \KnetikCloud\Model\FinalizePayPalPaymentRequest | The request to finalize the payment

try {
    $api_instance->finalizePayPalCheckout($request);
} catch (Exception $e) {
    echo 'Exception when calling Payments_PayPalClassicApi->finalizePayPalCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\FinalizePayPalPaymentRequest**](../Model/FinalizePayPalPaymentRequest.md)| The request to finalize the payment | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

