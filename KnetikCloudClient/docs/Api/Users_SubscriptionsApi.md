# KnetikCloud\Users_SubscriptionsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserSubscriptionDetails**](Users_SubscriptionsApi.md#getUserSubscriptionDetails) | **GET** /users/{user_id}/subscriptions/{inventory_id} | Get details about a user&#39;s subscription
[**getUsersSubscriptionDetails**](Users_SubscriptionsApi.md#getUsersSubscriptionDetails) | **GET** /users/{user_id}/subscriptions | Get details about a user&#39;s subscriptions
[**reactivateUserSubscription**](Users_SubscriptionsApi.md#reactivateUserSubscription) | **POST** /users/{user_id}/subscriptions/{inventory_id}/reactivate | Reactivate a subscription and charge fee
[**setSubscriptionBillDate**](Users_SubscriptionsApi.md#setSubscriptionBillDate) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/bill-date | Set a new date to bill a subscription on
[**setSubscriptionPaymentMethod**](Users_SubscriptionsApi.md#setSubscriptionPaymentMethod) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/payment-method | Set the payment method to use for a subscription
[**setSubscriptionStatus**](Users_SubscriptionsApi.md#setSubscriptionStatus) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/status | Set the status of a subscription
[**setUserSubscriptionPlan**](Users_SubscriptionsApi.md#setUserSubscriptionPlan) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/plan | Set a new subscription plan for a user
[**setUserSubscriptionPrice**](Users_SubscriptionsApi.md#setUserSubscriptionPrice) | **PUT** /users/{user_id}/subscriptions/{inventory_id}/price-override | Set a new subscription price for a user


# **getUserSubscriptionDetails**
> \KnetikCloud\Model\InventorySubscriptionResource getUserSubscriptionDetails($user_id, $inventory_id)

Get details about a user's subscription

<b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory

try {
    $result = $api_instance->getUserSubscriptionDetails($user_id, $inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->getUserSubscriptionDetails: ', $e->getMessage(), PHP_EOL;
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersSubscriptionDetails**
> \KnetikCloud\Model\InventorySubscriptionResource[] getUsersSubscriptionDetails($user_id)

Get details about a user's subscriptions

<b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user

try {
    $result = $api_instance->getUsersSubscriptionDetails($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->getUsersSubscriptionDetails: ', $e->getMessage(), PHP_EOL;
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateUserSubscription**
> \KnetikCloud\Model\InvoiceResource reactivateUserSubscription($user_id, $inventory_id, $reactivate_subscription_request)

Reactivate a subscription and charge fee

<b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$reactivate_subscription_request = new \KnetikCloud\Model\ReactivateSubscriptionRequest(); // \KnetikCloud\Model\ReactivateSubscriptionRequest | The reactivate subscription request object inventory

try {
    $result = $api_instance->reactivateUserSubscription($user_id, $inventory_id, $reactivate_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->reactivateUserSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **reactivate_subscription_request** | [**\KnetikCloud\Model\ReactivateSubscriptionRequest**](../Model/ReactivateSubscriptionRequest.md)| The reactivate subscription request object inventory | [optional]

### Return type

[**\KnetikCloud\Model\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionBillDate**
> setSubscriptionBillDate($user_id, $inventory_id, $bill_date)

Set a new date to bill a subscription on

<b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$bill_date = 789; // int | The new bill date. Unix timestamp in seconds

try {
    $api_instance->setSubscriptionBillDate($user_id, $inventory_id, $bill_date);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->setSubscriptionBillDate: ', $e->getMessage(), PHP_EOL;
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

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionPaymentMethod**
> setSubscriptionPaymentMethod($user_id, $inventory_id, $payment_method_id)

Set the payment method to use for a subscription

May send null to use floating default. <br><br><b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$payment_method_id = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The id of the payment method

try {
    $api_instance->setSubscriptionPaymentMethod($user_id, $inventory_id, $payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->setSubscriptionPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **payment_method_id** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The id of the payment method | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionStatus**
> setSubscriptionStatus($user_id, $inventory_id, $status)

Set the status of a subscription

Note that the new status may be blocked if the system is not configured to allow the current status to be changed to the new, to enforce proper flow. The default options for statuses are shown below but may be altered for special use cases. <br><br><b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$status = new \KnetikCloud\Model\SubscriptionStatusWrapper(); // \KnetikCloud\Model\SubscriptionStatusWrapper | The new status for the subscription

try {
    $api_instance->setSubscriptionStatus($user_id, $inventory_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->setSubscriptionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **status** | [**\KnetikCloud\Model\SubscriptionStatusWrapper**](../Model/SubscriptionStatusWrapper.md)| The new status for the subscription |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserSubscriptionPlan**
> setUserSubscriptionPlan($user_id, $inventory_id, $plan_id)

Set a new subscription plan for a user

<b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$plan_id = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The id of the new plan. Must be from the same subscription

try {
    $api_instance->setUserSubscriptionPlan($user_id, $inventory_id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->setUserSubscriptionPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **plan_id** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The id of the new plan. Must be from the same subscription | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserSubscriptionPrice**
> setUserSubscriptionPrice($user_id, $inventory_id, $the_override_details)

Set a new subscription price for a user

This new price will be what the user is charged at the begining of each new period. This override is specific to the current subscription and will not carry over if they end and later re-subscribe. It will persist if the plan is changed using the setUserSubscriptionPlan endpoint. <br><br><b>Permissions Needed:</b> USERS_SUBSCRIPTIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_SubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$inventory_id = 56; // int | The id of the user's inventory
$the_override_details = new \KnetikCloud\Model\SubscriptionPriceOverrideRequest(); // \KnetikCloud\Model\SubscriptionPriceOverrideRequest | override

try {
    $api_instance->setUserSubscriptionPrice($user_id, $inventory_id, $the_override_details);
} catch (Exception $e) {
    echo 'Exception when calling Users_SubscriptionsApi->setUserSubscriptionPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **inventory_id** | **int**| The id of the user&#39;s inventory |
 **the_override_details** | [**\KnetikCloud\Model\SubscriptionPriceOverrideRequest**](../Model/SubscriptionPriceOverrideRequest.md)| override | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

