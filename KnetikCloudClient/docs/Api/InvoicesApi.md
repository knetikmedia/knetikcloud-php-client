# KnetikCloud\InvoicesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvoice**](InvoicesApi.md#createInvoice) | **POST** /invoices | Create an invoice
[**getFulFillmentStatuses**](InvoicesApi.md#getFulFillmentStatuses) | **GET** /invoices/fulfillment-statuses | Lists available fulfillment statuses
[**getInvoice**](InvoicesApi.md#getInvoice) | **GET** /invoices/{id} | Retrieve an invoice
[**getInvoiceLogs**](InvoicesApi.md#getInvoiceLogs) | **GET** /invoices/{id}/logs | List invoice logs
[**getInvoices**](InvoicesApi.md#getInvoices) | **GET** /invoices | Retrieve invoices
[**getPaymentStatuses**](InvoicesApi.md#getPaymentStatuses) | **GET** /invoices/payment-statuses | Lists available payment statuses
[**payInvoice**](InvoicesApi.md#payInvoice) | **POST** /invoices/{id}/payments | Trigger payment of an invoice
[**setExternalRef**](InvoicesApi.md#setExternalRef) | **PUT** /invoices/{id}/external-ref | Set the external reference of an invoice
[**setInvoiceItemFulfillmentStatus**](InvoicesApi.md#setInvoiceItemFulfillmentStatus) | **PUT** /invoices/{id}/items/{sku}/fulfillment-status | Set the fulfillment status of an invoice item
[**setOrderNotes**](InvoicesApi.md#setOrderNotes) | **PUT** /invoices/{id}/order-notes | Set the order notes of an invoice
[**setPaymentStatus**](InvoicesApi.md#setPaymentStatus) | **PUT** /invoices/{id}/payment-status | Set the payment status of an invoice
[**updateBillingInfo**](InvoicesApi.md#updateBillingInfo) | **PUT** /invoices/{id}/billing-address | Set or update billing info


# **createInvoice**
> \KnetikCloud\Model\InvoiceResource[] createInvoice($req)

Create an invoice

Create an invoice(s) by providing a cart GUID. Note that there may be multiple invoices created, one per vendor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$req = new \KnetikCloud\Model\InvoiceCreateRequest(); // \KnetikCloud\Model\InvoiceCreateRequest | Invoice to be created

try {
    $result = $api_instance->createInvoice($req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req** | [**\KnetikCloud\Model\InvoiceCreateRequest**](../Model/\KnetikCloud\Model\InvoiceCreateRequest.md)| Invoice to be created | [optional]

### Return type

[**\KnetikCloud\Model\InvoiceResource[]**](../Model/InvoiceResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulFillmentStatuses**
> string[] getFulFillmentStatuses()

Lists available fulfillment statuses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\InvoicesApi();

try {
    $result = $api_instance->getFulFillmentStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getFulFillmentStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \KnetikCloud\Model\InvoiceResource getInvoice($id)

Retrieve an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice

try {
    $result = $api_instance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |

### Return type

[**\KnetikCloud\Model\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceLogs**
> \KnetikCloud\Model\PageResourceInvoiceLogEntry_ getInvoiceLogs($id, $size, $page)

List invoice logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getInvoiceLogs($id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoiceLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceInvoiceLogEntry_**](../Model/PageResourceInvoiceLogEntry_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \KnetikCloud\Model\PageResourceInvoiceResource_ getInvoices($filter_user, $filter_email, $filter_fulfillment_status, $filter_payment_status, $filter_item_name, $filter_external_ref, $filter_created_date, $filter_vendor_ids, $filter_currency, $filter_shipping_state_name, $filter_shipping_country_name, $filter_shipping, $filter_vendor_name, $filter_sku, $size, $page, $order)

Retrieve invoices

Without INVOICES_ADMIN permission the results are automatically filtered for only the logged in user's invoices. It is recomended however that filter_user be added to avoid issues for admin users accidentally getting additional invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$filter_user = 56; // int | The id of a user to get invoices for. Automtically added if not being called with admin permissions.
$filter_email = "filter_email_example"; // string | Filters invoices by customer's email. Admins only.
$filter_fulfillment_status = "filter_fulfillment_status_example"; // string | Filters invoices by fulfillment status type. Can be a comma separated list of statuses
$filter_payment_status = "filter_payment_status_example"; // string | Filters invoices by payment status type. Can be a comma separated list of statuses
$filter_item_name = "filter_item_name_example"; // string | Filters invoices by item name containing the given string
$filter_external_ref = "filter_external_ref_example"; // string | Filters invoices by external reference.
$filter_created_date = "filter_created_date_example"; // string | Filters invoices by creation date. Multiple values possible for range search. Format: filter_created_date=OP,ts&... where OP in (GT, LT, GOE, LOE, EQ) and ts is a unix timestamp in seconds. Ex: filter_created_date=GT,1452154258,LT,1554254874
$filter_vendor_ids = new \KnetikCloud\Model\Object(); // \KnetikCloud\Model\Object | Filters invoices for ones from one of the vendors whose id is in the given comma separated list
$filter_currency = "filter_currency_example"; // string | Filters invoices by currency. ISO3 currency code
$filter_shipping_state_name = "filter_shipping_state_name_example"; // string | Filters invoices by shipping address: Exact match state name
$filter_shipping_country_name = "filter_shipping_country_name_example"; // string | Filters invoices by shipping address: Exact match country name
$filter_shipping = "filter_shipping_example"; // string | Filters invoices by shipping price. Multiple values possible for range search. Format: filter_shipping=OP,ts&... where OP in (GT, LT, GOE, LOE, EQ). Ex: filter_shipping=GT,14.58,LT,15.54
$filter_vendor_name = "filter_vendor_name_example"; // string | Filters invoices by vendor name starting with given string
$filter_sku = "filter_sku_example"; // string | Filters invoices by item sku
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "1"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getInvoices($filter_user, $filter_email, $filter_fulfillment_status, $filter_payment_status, $filter_item_name, $filter_external_ref, $filter_created_date, $filter_vendor_ids, $filter_currency, $filter_shipping_state_name, $filter_shipping_country_name, $filter_shipping, $filter_vendor_name, $filter_sku, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_user** | **int**| The id of a user to get invoices for. Automtically added if not being called with admin permissions. | [optional]
 **filter_email** | **string**| Filters invoices by customer&#39;s email. Admins only. | [optional]
 **filter_fulfillment_status** | **string**| Filters invoices by fulfillment status type. Can be a comma separated list of statuses | [optional]
 **filter_payment_status** | **string**| Filters invoices by payment status type. Can be a comma separated list of statuses | [optional]
 **filter_item_name** | **string**| Filters invoices by item name containing the given string | [optional]
 **filter_external_ref** | **string**| Filters invoices by external reference. | [optional]
 **filter_created_date** | **string**| Filters invoices by creation date. Multiple values possible for range search. Format: filter_created_date&#x3D;OP,ts&amp;... where OP in (GT, LT, GOE, LOE, EQ) and ts is a unix timestamp in seconds. Ex: filter_created_date&#x3D;GT,1452154258,LT,1554254874 | [optional]
 **filter_vendor_ids** | [**\KnetikCloud\Model\Object**](../Model/.md)| Filters invoices for ones from one of the vendors whose id is in the given comma separated list | [optional]
 **filter_currency** | **string**| Filters invoices by currency. ISO3 currency code | [optional]
 **filter_shipping_state_name** | **string**| Filters invoices by shipping address: Exact match state name | [optional]
 **filter_shipping_country_name** | **string**| Filters invoices by shipping address: Exact match country name | [optional]
 **filter_shipping** | **string**| Filters invoices by shipping price. Multiple values possible for range search. Format: filter_shipping&#x3D;OP,ts&amp;... where OP in (GT, LT, GOE, LOE, EQ). Ex: filter_shipping&#x3D;GT,14.58,LT,15.54 | [optional]
 **filter_vendor_name** | **string**| Filters invoices by vendor name starting with given string | [optional]
 **filter_sku** | **string**| Filters invoices by item sku | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceInvoiceResource_**](../Model/PageResourceInvoiceResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentStatuses**
> string[] getPaymentStatuses()

Lists available payment statuses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\InvoicesApi();

try {
    $result = $api_instance->getPaymentStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getPaymentStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInvoice**
> payInvoice($id, $request)

Trigger payment of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$request = new \KnetikCloud\Model\PayBySavedMethodRequest(); // \KnetikCloud\Model\PayBySavedMethodRequest | Payment info

try {
    $api_instance->payInvoice($id, $request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->payInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **request** | [**\KnetikCloud\Model\PayBySavedMethodRequest**](../Model/\KnetikCloud\Model\PayBySavedMethodRequest.md)| Payment info | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setExternalRef**
> setExternalRef($id, $external_ref)

Set the external reference of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$external_ref = "external_ref_example"; // string | External reference info

try {
    $api_instance->setExternalRef($id, $external_ref);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->setExternalRef: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **external_ref** | **string**| External reference info | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setInvoiceItemFulfillmentStatus**
> setInvoiceItemFulfillmentStatus($id, $sku, $status)

Set the fulfillment status of an invoice item

This allows external fulfillment systems to report success or failure. Fulfillment status changes are restricted by a specific flow determining which status can lead to which.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$sku = "sku_example"; // string | The sku of an item in the invoice
$status = "status_example"; // string | The new fulfillment status for the item. Additional options may be available based on configuration.  Allowable values:  'unfulfilled', 'fulfilled', 'not fulfillable', 'failed', 'processing', 'failed_permanent', 'delayed'

try {
    $api_instance->setInvoiceItemFulfillmentStatus($id, $sku, $status);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->setInvoiceItemFulfillmentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **sku** | **string**| The sku of an item in the invoice |
 **status** | **string**| The new fulfillment status for the item. Additional options may be available based on configuration.  Allowable values:  &#39;unfulfilled&#39;, &#39;fulfilled&#39;, &#39;not fulfillable&#39;, &#39;failed&#39;, &#39;processing&#39;, &#39;failed_permanent&#39;, &#39;delayed&#39; |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setOrderNotes**
> setOrderNotes($id, $order_notes)

Set the order notes of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$order_notes = "order_notes_example"; // string | Payment status info

try {
    $api_instance->setOrderNotes($id, $order_notes);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->setOrderNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **order_notes** | **string**| Payment status info | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPaymentStatus**
> setPaymentStatus($id, $request)

Set the payment status of an invoice

This may trigger fulfillment if setting the status to 'paid'. This is mainly intended to support external payment systems that cannot be incorporated into the payment method system. Payment status changes are restricted by a specific flow determining which status can lead to which.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$request = new \KnetikCloud\Model\InvoicePaymentStatusRequest(); // \KnetikCloud\Model\InvoicePaymentStatusRequest | Payment status info

try {
    $api_instance->setPaymentStatus($id, $request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->setPaymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **request** | [**\KnetikCloud\Model\InvoicePaymentStatusRequest**](../Model/\KnetikCloud\Model\InvoicePaymentStatusRequest.md)| Payment status info | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillingInfo**
> updateBillingInfo($id, $billing_info_request)

Set or update billing info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\InvoicesApi();
$id = 56; // int | The id of the invoice
$billing_info_request = new \KnetikCloud\Model\AddressResource(); // \KnetikCloud\Model\AddressResource | Address info

try {
    $api_instance->updateBillingInfo($id, $billing_info_request);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateBillingInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the invoice |
 **billing_info_request** | [**\KnetikCloud\Model\AddressResource**](../Model/\KnetikCloud\Model\AddressResource.md)| Address info | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

