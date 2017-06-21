# KnetikCloud\UsersSubscriptionsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserSubscriptionDetails**](UsersSubscriptionsApi.md#getUserSubscriptionDetails) | **GET** /users/{user_id}/subscriptions/{inventory_id} | Get details about a user&#39;s subscription
[**getUsersSubscriptionDetails**](UsersSubscriptionsApi.md#getUsersSubscriptionDetails) | **GET** /users/{user_id}/subscriptions | Get details about a user&#39;s subscriptions
[**reactivateUserSubscription**](UsersSubscriptionsApi.md#reactivateUserSubscription) | **POST** /users/{user_id}/subscriptions/{inventory_id}/reactivate | Reactivate a subscription and charge fee
[**setSubscriptionBillDate**](UsersSubscriptionsApi.md#setSubscriptionBillDate) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/bill-date | Set a new date to bill a subscription on
[**setSubscriptionPaymentMethod**](UsersSubscriptionsApi.md#setSubscriptionPaymentMethod) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/payment-method | Set the payment method to use for a subscription
[**setSubscriptionStatus**](UsersSubscriptionsApi.md#setSubscriptionStatus) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/status | Set the status of a subscription
[**setUserSubscriptionPlan**](UsersSubscriptionsApi.md#setUserSubscriptionPlan) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/plan | Set a new subscription plan for a user


# **getUserSubscriptionDetails**
> \KnetikCloud\Model\InventorySubscriptionResource getUserSubscriptionDetails($user_id, $inventory_id)

Get details about a user's subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory

try {
    $result = $api_instance->getUserSubscriptionDetails($user_id, $inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->getUserSubscriptionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |

### Return type

[**\KnetikCloud\Model\InventorySubscriptionResource**](../Model/InventorySubscriptionResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersSubscriptionDetails**
> \KnetikCloud\Model\InventorySubscriptionResource[] getUsersSubscriptionDetails($user_id)

Get details about a user's subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user

try {
    $result = $api_instance->getUsersSubscriptionDetails($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->getUsersSubscriptionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |

### Return type

[**\KnetikCloud\Model\InventorySubscriptionResource[]**](../Model/InventorySubscriptionResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateUserSubscription**
> \KnetikCloud\Model\InvoiceResource reactivateUserSubscription($user_id, $inventory_id, $reactivate_subscription_request)

Reactivate a subscription and charge fee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$reactivate_subscription_request = new \KnetikCloud\Model\ReactivateSubscriptionRequest(); // \KnetikCloud\Model\ReactivateSubscriptionRequest | The reactivate subscription request object inventory

try {
    $result = $api_instance->reactivateUserSubscription($user_id, $inventory_id, $reactivate_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->reactivateUserSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **reactivate_subscription_request** | [**\KnetikCloud\Model\ReactivateSubscriptionRequest**](../Model/\KnetikCloud\Model\ReactivateSubscriptionRequest.md)| The reactivate subscription request object inventory | [optional]

### Return type

[**\KnetikCloud\Model\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionBillDate**
> setSubscriptionBillDate($user_id, $inventory_id, $bill_date)

Set a new date to bill a subscription on

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$bill_date = 789; // int | The new bill date. Unix timestamp in seconds

try {
    $api_instance->setSubscriptionBillDate($user_id, $inventory_id, $bill_date);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->setSubscriptionBillDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **bill_date** | **int**| The new bill date. Unix timestamp in seconds |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionPaymentMethod**
> setSubscriptionPaymentMethod($user_id, $inventory_id, $payment_method_id)

Set the payment method to use for a subscription

May send null to use floating default

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$payment_method_id = 56; // int | The id of the payment method

try {
    $api_instance->setSubscriptionPaymentMethod($user_id, $inventory_id, $payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->setSubscriptionPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **payment_method_id** | **int**| The id of the payment method | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionStatus**
> setSubscriptionStatus($user_id, $inventory_id, $status)

Set the status of a subscription

The body is a json string (put in quotes) that should match a desired invoice status type. Note that the new status may be blocked if the system is not configured to allow the current status to be changed to the new, to enforce proper flow. The default options for statuses are shown below but may be altered for special use cases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$status = "status_example"; // string | The new status for the subscription. Actual options may differ from the indicated set if the invoice status type data has been altered.  Allowable values: ('current', 'canceled', 'stopped', 'payment_failed', 'suspended')

try {
    $api_instance->setSubscriptionStatus($user_id, $inventory_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->setSubscriptionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **status** | **string**| The new status for the subscription. Actual options may differ from the indicated set if the invoice status type data has been altered.  Allowable values: (&#39;current&#39;, &#39;canceled&#39;, &#39;stopped&#39;, &#39;payment_failed&#39;, &#39;suspended&#39;) |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserSubscriptionPlan**
> setUserSubscriptionPlan($user_id, $inventory_id, $plan_id)

Set a new subscription plan for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersSubscriptionsApi();
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$plan_id = "plan_id_example"; // string | The id of the new plan. Must be from the same subscription

try {
    $api_instance->setUserSubscriptionPlan($user_id, $inventory_id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersSubscriptionsApi->setUserSubscriptionPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **plan_id** | **string**| The id of the new plan. Must be from the same subscription | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
