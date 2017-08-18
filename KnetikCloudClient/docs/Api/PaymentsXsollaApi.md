# KnetikCloud\PaymentsXsollaApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createXsollaTokenUrl**](PaymentsXsollaApi.md#createXsollaTokenUrl) | **POST** /payment/provider/xsolla/payment | Create a payment token that should be used to forward the user to Xsolla so they can complete payment
[**receiveXsollaNotification**](PaymentsXsollaApi.md#receiveXsollaNotification) | **POST** /payment/provider/xsolla/notifications | Receives payment response from Xsolla


# **createXsollaTokenUrl**
> string createXsollaTokenUrl($request)

Create a payment token that should be used to forward the user to Xsolla so they can complete payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\PaymentsXsollaApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\XsollaPaymentRequest(); // \KnetikCloud\Model\XsollaPaymentRequest | The payment request to be sent to XSolla

try {
    $result = $api_instance->createXsollaTokenUrl($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsXsollaApi->createXsollaTokenUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\XsollaPaymentRequest**](../Model/XsollaPaymentRequest.md)| The payment request to be sent to XSolla | [optional]

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receiveXsollaNotification**
> receiveXsollaNotification()

Receives payment response from Xsolla

Only used by Xsolla to call back to JSAPI after processing user payment action

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsXsollaApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->receiveXsollaNotification();
} catch (Exception $e) {
    echo 'Exception when calling PaymentsXsollaApi->receiveXsollaNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

