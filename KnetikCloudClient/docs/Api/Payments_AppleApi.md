# KnetikCloud\Payments_AppleApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyAppleReceipt**](Payments_AppleApi.md#verifyAppleReceipt) | **POST** /payment/provider/apple/receipt | Pay invoice with Apple receipt


# **verifyAppleReceipt**
> string verifyAppleReceipt($request)

Pay invoice with Apple receipt

Mark an invoice paid using Apple payment receipt. A receipt will only be accepted once and the details of the transaction must match the invoice, including the product_id matching the sku text of the item in the invoice. Returns the transaction ID if successful. <br><br><b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Payments_AppleApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\ApplyPaymentRequest(); // \KnetikCloud\Model\ApplyPaymentRequest | The request for paying an invoice through an Apple receipt

try {
    $result = $api_instance->verifyAppleReceipt($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Payments_AppleApi->verifyAppleReceipt: ', $e->getMessage(), PHP_EOL;
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

