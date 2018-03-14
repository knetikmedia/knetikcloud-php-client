# KnetikCloud\NotificationsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNotificationType**](NotificationsApi.md#createNotificationType) | **POST** /notifications/types | Create a notification type
[**deleteNotificationType**](NotificationsApi.md#deleteNotificationType) | **DELETE** /notifications/types/{id} | Delete a notification type
[**getNotificationType**](NotificationsApi.md#getNotificationType) | **GET** /notifications/types/{id} | Get a single notification type
[**getNotificationTypes**](NotificationsApi.md#getNotificationTypes) | **GET** /notifications/types | List and search notification types
[**getUserNotificationInfo**](NotificationsApi.md#getUserNotificationInfo) | **GET** /users/{user_id}/notifications/types/{type_id} | View a user&#39;s notification settings for a type
[**getUserNotificationInfoList**](NotificationsApi.md#getUserNotificationInfoList) | **GET** /users/{user_id}/notifications/types | View a user&#39;s notification settings
[**getUserNotifications**](NotificationsApi.md#getUserNotifications) | **GET** /users/{id}/notifications | Get notifications
[**sendNotification**](NotificationsApi.md#sendNotification) | **POST** /notifications | Send a notification
[**setUserNotificationStatus**](NotificationsApi.md#setUserNotificationStatus) | **PUT** /users/{user_id}/notifications/{notification_id}/status | Set notification status
[**silenceDirectNotifications**](NotificationsApi.md#silenceDirectNotifications) | **PUT** /users/{user_id}/notifications/types/{type_id}/silenced | Enable or disable direct notifications for a user
[**updateNotificationType**](NotificationsApi.md#updateNotificationType) | **PUT** /notifications/types/{id} | Update a notificationType


# **createNotificationType**
> \KnetikCloud\Model\NotificationTypeResource createNotificationType($notification_type)

Create a notification type

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$notification_type = new \KnetikCloud\Model\NotificationTypeResource(); // \KnetikCloud\Model\NotificationTypeResource | notificationType

try {
    $result = $api_instance->createNotificationType($notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createNotificationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_type** | [**\KnetikCloud\Model\NotificationTypeResource**](../Model/NotificationTypeResource.md)| notificationType | [optional]

### Return type

[**\KnetikCloud\Model\NotificationTypeResource**](../Model/NotificationTypeResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNotificationType**
> deleteNotificationType($id)

Delete a notification type

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | id

try {
    $api_instance->deleteNotificationType($id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteNotificationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationType**
> \KnetikCloud\Model\NotificationTypeResource getNotificationType($id)

Get a single notification type

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | id

try {
    $result = $api_instance->getNotificationType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |

### Return type

[**\KnetikCloud\Model\NotificationTypeResource**](../Model/NotificationTypeResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationTypes**
> \KnetikCloud\Model\PageResourceNotificationTypeResource_ getNotificationTypes($size, $page, $order)

List and search notification types

Get a list of notification type with optional filtering. <br><br><b>Permissions Needed:</b> NOTIFICATIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getNotificationTypes($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationTypes: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceNotificationTypeResource_**](../Model/PageResourceNotificationTypeResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserNotificationInfo**
> \KnetikCloud\Model\NotificationUserTypeResource getUserNotificationInfo($type_id, $user_id)

View a user's notification settings for a type

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$type_id = "type_id_example"; // string | The id of the topic
$user_id = "user_id_example"; // string | The id of the subscriber or 'me'

try {
    $result = $api_instance->getUserNotificationInfo($type_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getUserNotificationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **string**| The id of the topic |
 **user_id** | **string**| The id of the subscriber or &#39;me&#39; |

### Return type

[**\KnetikCloud\Model\NotificationUserTypeResource**](../Model/NotificationUserTypeResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserNotificationInfoList**
> \KnetikCloud\Model\PageResourceNotificationUserTypeResource_ getUserNotificationInfoList($user_id, $size, $page, $order)

View a user's notification settings

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the subscriber or 'me'
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserNotificationInfoList($user_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getUserNotificationInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the subscriber or &#39;me&#39; |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceNotificationUserTypeResource_**](../Model/PageResourceNotificationUserTypeResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserNotifications**
> \KnetikCloud\Model\PageResourceUserNotificationResource_ getUserNotifications($id, $filter_status, $size, $page, $order)

Get notifications

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the user or 'me'
$filter_status = "filter_status_example"; // string | filter for notifications with a given status
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserNotifications($id, $filter_status, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getUserNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user or &#39;me&#39; |
 **filter_status** | **string**| filter for notifications with a given status | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceUserNotificationResource_**](../Model/PageResourceUserNotificationResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendNotification**
> \KnetikCloud\Model\NotificationResource sendNotification($notification)

Send a notification

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$notification = new \KnetikCloud\Model\NotificationResource(); // \KnetikCloud\Model\NotificationResource | notification

try {
    $result = $api_instance->sendNotification($notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->sendNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification** | [**\KnetikCloud\Model\NotificationResource**](../Model/NotificationResource.md)| notification | [optional]

### Return type

[**\KnetikCloud\Model\NotificationResource**](../Model/NotificationResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserNotificationStatus**
> setUserNotificationStatus($user_id, $notification_id, $notification)

Set notification status

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me'
$notification_id = "notification_id_example"; // string | The id of the notification
$notification = new \KnetikCloud\Model\UserNotificationStatusWrapper(); // \KnetikCloud\Model\UserNotificationStatusWrapper | status

try {
    $api_instance->setUserNotificationStatus($user_id, $notification_id, $notification);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->setUserNotificationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; |
 **notification_id** | **string**| The id of the notification |
 **notification** | [**\KnetikCloud\Model\UserNotificationStatusWrapper**](../Model/UserNotificationStatusWrapper.md)| status | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **silenceDirectNotifications**
> silenceDirectNotifications($type_id, $user_id, $silenced)

Enable or disable direct notifications for a user

Allows enabling or disabling messages for a given notification type when sent direct to the user. Notifications can still be retrieved by endpoint. For notifications broadcased to a topic, see the topic service to disable messages for the user there. <br><br><b>Permissions Needed:</b> NOTIFICATIONS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$type_id = "type_id_example"; // string | The id of the topic
$user_id = "user_id_example"; // string | The id of the subscriber or 'me'
$silenced = new \KnetikCloud\Model\ValueWrapperBoolean_(); // \KnetikCloud\Model\ValueWrapperBoolean_ | silenced

try {
    $api_instance->silenceDirectNotifications($type_id, $user_id, $silenced);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->silenceDirectNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **string**| The id of the topic |
 **user_id** | **string**| The id of the subscriber or &#39;me&#39; |
 **silenced** | [**\KnetikCloud\Model\ValueWrapperBoolean_**](../Model/ValueWrapperBoolean_.md)| silenced |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotificationType**
> \KnetikCloud\Model\NotificationTypeResource updateNotificationType($id, $notification_type)

Update a notificationType

<b>Permissions Needed:</b> NOTIFICATIONS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\NotificationsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | id
$notification_type = new \KnetikCloud\Model\NotificationTypeResource(); // \KnetikCloud\Model\NotificationTypeResource | notificationType

try {
    $result = $api_instance->updateNotificationType($id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->updateNotificationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **notification_type** | [**\KnetikCloud\Model\NotificationTypeResource**](../Model/NotificationTypeResource.md)| notificationType | [optional]

### Return type

[**\KnetikCloud\Model\NotificationTypeResource**](../Model/NotificationTypeResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

