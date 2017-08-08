# KnetikCloud\PaymentsAppleApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyAppleReceipt**](PaymentsAppleApi.md#verifyAppleReceipt) | **POST** /payment/provider/apple/receipt | Pay invoice with Apple receipt


# **verifyAppleReceipt**
> string verifyAppleReceipt($request)

Pay invoice with Apple receipt

Mark an invoice paid using Apple payment receipt. A receipt will only be accepted once and the details of the transaction must match the invoice, including the product_id matching the sku text of the item in the invoice. Returns the transaction ID if successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\PaymentsAppleApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\ApplyPaymentRequest(); // \KnetikCloud\Model\ApplyPaymentRequest | The request for paying an invoice through an Apple receipt

try {
    $result = $api_instance->verifyAppleReceipt($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsAppleApi->verifyAppleReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\ApplyPaymentRequest**](../Model/ApplyPaymentRequest.md)| The request for paying an invoice through an Apple receipt | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

