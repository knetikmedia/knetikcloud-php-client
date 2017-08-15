# KnetikCloud\StoreSubscriptionsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](StoreSubscriptionsApi.md#createSubscription) | **POST** /subscriptions | Creates a subscription item and associated plans
[**createSubscriptionTemplate**](StoreSubscriptionsApi.md#createSubscriptionTemplate) | **POST** /subscriptions/templates | Create a subscription template
[**deleteSubscription**](StoreSubscriptionsApi.md#deleteSubscription) | **DELETE** /subscriptions/{id}/plans/{plan_id} | Delete a subscription plan
[**deleteSubscriptionTemplate**](StoreSubscriptionsApi.md#deleteSubscriptionTemplate) | **DELETE** /subscriptions/templates/{id} | Delete a subscription template
[**getSubscription**](StoreSubscriptionsApi.md#getSubscription) | **GET** /subscriptions/{id} | Retrieve a single subscription item and associated plans
[**getSubscriptionTemplate**](StoreSubscriptionsApi.md#getSubscriptionTemplate) | **GET** /subscriptions/templates/{id} | Get a single subscription template
[**getSubscriptionTemplates**](StoreSubscriptionsApi.md#getSubscriptionTemplates) | **GET** /subscriptions/templates | List and search subscription templates
[**getSubscriptions**](StoreSubscriptionsApi.md#getSubscriptions) | **GET** /subscriptions | List available subscription items and associated plans
[**processSubscriptions**](StoreSubscriptionsApi.md#processSubscriptions) | **POST** /subscriptions/process | Processes subscriptions and charge dues
[**updateSubscription**](StoreSubscriptionsApi.md#updateSubscription) | **PUT** /subscriptions/{id} | Updates a subscription item and associated plans
[**updateSubscriptionTemplate**](StoreSubscriptionsApi.md#updateSubscriptionTemplate) | **PUT** /subscriptions/templates/{id} | Update a subscription template


# **createSubscription**
> \KnetikCloud\Model\SubscriptionResource createSubscription($subscription_resource)

Creates a subscription item and associated plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$subscription_resource = new \KnetikCloud\Model\SubscriptionResource(); // \KnetikCloud\Model\SubscriptionResource | The subscription to be created

try {
    $result = $api_instance->createSubscription($subscription_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_resource** | [**\KnetikCloud\Model\SubscriptionResource**](../Model/SubscriptionResource.md)| The subscription to be created | [optional]

### Return type

[**\KnetikCloud\Model\SubscriptionResource**](../Model/SubscriptionResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionTemplate**
> \KnetikCloud\Model\SubscriptionTemplateResource createSubscriptionTemplate($subscription_template_resource)

Create a subscription template

Subscription Templates define a type of subscription and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$subscription_template_resource = new \KnetikCloud\Model\SubscriptionTemplateResource(); // \KnetikCloud\Model\SubscriptionTemplateResource | The new subscription template

try {
    $result = $api_instance->createSubscriptionTemplate($subscription_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->createSubscriptionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_template_resource** | [**\KnetikCloud\Model\SubscriptionTemplateResource**](../Model/SubscriptionTemplateResource.md)| The new subscription template | [optional]

### Return type

[**\KnetikCloud\Model\SubscriptionTemplateResource**](../Model/SubscriptionTemplateResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($id, $plan_id)

Delete a subscription plan

Must not be locked or a migration target

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the subscription
$plan_id = "plan_id_example"; // string | The id of the plan

try {
    $api_instance->deleteSubscription($id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the subscription |
 **plan_id** | **string**| The id of the plan |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriptionTemplate**
> deleteSubscriptionTemplate($id, $cascade)

Delete a subscription template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | force deleting the template if it's attached to other objects, cascade = detach

try {
    $api_instance->deleteSubscriptionTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->deleteSubscriptionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **cascade** | **string**| force deleting the template if it&#39;s attached to other objects, cascade &#x3D; detach | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \KnetikCloud\Model\SubscriptionResource getSubscription($id)

Retrieve a single subscription item and associated plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the subscription

try {
    $result = $api_instance->getSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the subscription |

### Return type

[**\KnetikCloud\Model\SubscriptionResource**](../Model/SubscriptionResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionTemplate**
> \KnetikCloud\Model\SubscriptionTemplateResource getSubscriptionTemplate($id)

Get a single subscription template

Subscription Templates define a type of subscription and the properties they have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getSubscriptionTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->getSubscriptionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\SubscriptionTemplateResource**](../Model/SubscriptionTemplateResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionTemplates**
> \KnetikCloud\Model\PageResourceSubscriptionTemplateResource_ getSubscriptionTemplates($size, $page, $order)

List and search subscription templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getSubscriptionTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->getSubscriptionTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceSubscriptionTemplateResource_**](../Model/PageResourceSubscriptionTemplateResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptions**
> \KnetikCloud\Model\PageResourceSubscriptionResource_ getSubscriptions($size, $page, $order)

List available subscription items and associated plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getSubscriptions($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceSubscriptionResource_**](../Model/PageResourceSubscriptionResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processSubscriptions**
> processSubscriptions()

Processes subscriptions and charge dues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->processSubscriptions();
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->processSubscriptions: ', $e->getMessage(), PHP_EOL;
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

# **updateSubscription**
> updateSubscription($id, $subscription_resource)

Updates a subscription item and associated plans

Will not remove plans left out

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the subscription
$subscription_resource = new \KnetikCloud\Model\SubscriptionResource(); // \KnetikCloud\Model\SubscriptionResource | The subscription resource object

try {
    $api_instance->updateSubscription($id, $subscription_resource);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the subscription |
 **subscription_resource** | [**\KnetikCloud\Model\SubscriptionResource**](../Model/SubscriptionResource.md)| The subscription resource object | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscriptionTemplate**
> \KnetikCloud\Model\SubscriptionTemplateResource updateSubscriptionTemplate($id, $subscription_template_resource)

Update a subscription template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\StoreSubscriptionsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$subscription_template_resource = new \KnetikCloud\Model\SubscriptionTemplateResource(); // \KnetikCloud\Model\SubscriptionTemplateResource | The subscription template resource object

try {
    $result = $api_instance->updateSubscriptionTemplate($id, $subscription_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreSubscriptionsApi->updateSubscriptionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **subscription_template_resource** | [**\KnetikCloud\Model\SubscriptionTemplateResource**](../Model/SubscriptionTemplateResource.md)| The subscription template resource object | [optional]

### Return type

[**\KnetikCloud\Model\SubscriptionTemplateResource**](../Model/SubscriptionTemplateResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

