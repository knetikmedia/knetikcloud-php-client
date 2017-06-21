# KnetikCloud\PaymentsGoogleApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**handleGooglePayment**](PaymentsGoogleApi.md#handleGooglePayment) | **POST** /payment/provider/google/payments | Mark an invoice paid with Google


# **handleGooglePayment**
> int handleGooglePayment($request)

Mark an invoice paid with Google

Mark an invoice paid with Google. Verifies signature from Google and treats the developerPayload field inside the json payload as the id of the invoice to pay. Returns the transaction ID if successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsGoogleApi();
$request = new \KnetikCloud\Model\GooglePaymentRequest(); // \KnetikCloud\Model\GooglePaymentRequest | The request for paying an invoice through a Google in-app payment

try {
    $result = $api_instance->handleGooglePayment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsGoogleApi->handleGooglePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\GooglePaymentRequest**](../Model/\KnetikCloud\Model\GooglePaymentRequest.md)| The request for paying an invoice through a Google in-app payment | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
