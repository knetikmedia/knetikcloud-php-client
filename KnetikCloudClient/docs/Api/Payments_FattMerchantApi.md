# KnetikCloud\Payments_FattMerchantApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateFattMerchantPaymentMethod**](Payments_FattMerchantApi.md#createOrUpdateFattMerchantPaymentMethod) | **PUT** /payment/provider/fattmerchant/payment-methods | Create or update a FattMerchant payment method for a user


# **createOrUpdateFattMerchantPaymentMethod**
> \KnetikCloud\Model\PaymentMethodResource createOrUpdateFattMerchantPaymentMethod($request)

Create or update a FattMerchant payment method for a user

Stores customer information and creates a payment method that can be used to pay invoices through the payments endpoints. <br><br><b>Permissions Needed:</b> FATTMERCHANT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Payments_FattMerchantApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\FattMerchantPaymentMethodRequest(); // \KnetikCloud\Model\FattMerchantPaymentMethodRequest | Request containing payment method information for user

try {
    $result = $api_instance->createOrUpdateFattMerchantPaymentMethod($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Payments_FattMerchantApi->createOrUpdateFattMerchantPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\FattMerchantPaymentMethodRequest**](../Model/FattMerchantPaymentMethodRequest.md)| Request containing payment method information for user | [optional]

### Return type

[**\KnetikCloud\Model\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

