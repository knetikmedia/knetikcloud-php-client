# KnetikCloud\ChatApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acknowledgeChatMessage**](ChatApi.md#acknowledgeChatMessage) | **PUT** /chat/threads/{id}/acknowledge | Acknowledge number of messages in a thread
[**addChatMessageBlacklist**](ChatApi.md#addChatMessageBlacklist) | **POST** /chat/users/{id}/blacklist/{blacklisted_user_id} | Add a user to a chat message blacklist
[**deleteChatMessage**](ChatApi.md#deleteChatMessage) | **DELETE** /chat/messages/{id} | Delete a message
[**editChatMessage**](ChatApi.md#editChatMessage) | **PUT** /chat/messages/{id} | Edit your message
[**getChatMessage**](ChatApi.md#getChatMessage) | **GET** /chat/messages/{id} | Get a message
[**getChatMessageBlacklist**](ChatApi.md#getChatMessageBlacklist) | **GET** /chat/users/{id}/blacklist | Get a list of blocked users for chat messaging
[**getChatThreads**](ChatApi.md#getChatThreads) | **GET** /chat/threads | List your threads
[**getDirectMessages**](ChatApi.md#getDirectMessages) | **GET** /chat/users/{id}/messages | List messages with a user
[**getThreadMessages**](ChatApi.md#getThreadMessages) | **GET** /chat/threads/{id}/messages | List messages in a thread
[**getTopicMessages**](ChatApi.md#getTopicMessages) | **GET** /chat/topics/{id}/messages | List messages in a topic
[**removeChatBlacklist**](ChatApi.md#removeChatBlacklist) | **DELETE** /chat/users/{id}/blacklist/{blacklisted_user_id} | Remove a user from a blacklist
[**sendChatMessage**](ChatApi.md#sendChatMessage) | **POST** /chat/messages | Send a message


# **acknowledgeChatMessage**
> acknowledgeChatMessage($id, $read_count)

Acknowledge number of messages in a thread

<b>Permissions Needed:</b> owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The thread id
$read_count = 56; // int | The amount of messages read

try {
    $api_instance->acknowledgeChatMessage($id, $read_count);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->acknowledgeChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The thread id |
 **read_count** | **int**| The amount of messages read | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addChatMessageBlacklist**
> addChatMessageBlacklist($blacklisted_user_id, $id)

Add a user to a chat message blacklist

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$blacklisted_user_id = 56; // int | The user id to blacklist
$id = "id_example"; // string | The user id or 'me'

try {
    $api_instance->addChatMessageBlacklist($blacklisted_user_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->addChatMessageBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blacklisted_user_id** | **int**| The user id to blacklist |
 **id** | **string**| The user id or &#39;me&#39; |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChatMessage**
> deleteChatMessage($id)

Delete a message

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The message id

try {
    $api_instance->deleteChatMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->deleteChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The message id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editChatMessage**
> editChatMessage($id, $chat_message_resource)

Edit your message

<b>Permissions Needed:</b> owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The message id
$chat_message_resource = new \KnetikCloud\Model\ChatMessageResource(); // \KnetikCloud\Model\ChatMessageResource | The chat message resource

try {
    $api_instance->editChatMessage($id, $chat_message_resource);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->editChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The message id |
 **chat_message_resource** | [**\KnetikCloud\Model\ChatMessageResource**](../Model/ChatMessageResource.md)| The chat message resource | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatMessage**
> \KnetikCloud\Model\ChatMessageResource getChatMessage($id)

Get a message

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The message id

try {
    $result = $api_instance->getChatMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The message id |

### Return type

[**\KnetikCloud\Model\ChatMessageResource**](../Model/ChatMessageResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatMessageBlacklist**
> \KnetikCloud\Model\ChatBlacklistResource[] getChatMessageBlacklist($id)

Get a list of blocked users for chat messaging

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The user id or 'me'

try {
    $result = $api_instance->getChatMessageBlacklist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatMessageBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The user id or &#39;me&#39; |

### Return type

[**\KnetikCloud\Model\ChatBlacklistResource[]**](../Model/ChatBlacklistResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatThreads**
> \KnetikCloud\Model\PageResourceChatUserThreadResource_ getChatThreads($size, $page, $order)

List your threads

<b>Permissions Needed:</b> owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChatThreads($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceChatUserThreadResource_**](../Model/PageResourceChatUserThreadResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDirectMessages**
> \KnetikCloud\Model\PageResourceChatMessageResource_ getDirectMessages($id, $size, $page, $order)

List messages with a user

<b>Permissions Needed:</b> owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The user id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getDirectMessages($id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getDirectMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The user id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceChatMessageResource_**](../Model/PageResourceChatMessageResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThreadMessages**
> \KnetikCloud\Model\PageResourceChatMessageResource_ getThreadMessages($id, $size, $page, $order)

List messages in a thread

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The thread id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getThreadMessages($id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getThreadMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The thread id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceChatMessageResource_**](../Model/PageResourceChatMessageResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopicMessages**
> \KnetikCloud\Model\PageResourceChatMessageResource_ getTopicMessages($id, $size, $page, $order)

List messages in a topic

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The topic id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getTopicMessages($id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getTopicMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The topic id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceChatMessageResource_**](../Model/PageResourceChatMessageResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeChatBlacklist**
> removeChatBlacklist($blacklisted_user_id, $id)

Remove a user from a blacklist

<b>Permissions Needed:</b> CHAT_ADMIN or owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$blacklisted_user_id = 56; // int | The user id to blacklist
$id = "id_example"; // string | The user id or 'me'

try {
    $api_instance->removeChatBlacklist($blacklisted_user_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->removeChatBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blacklisted_user_id** | **int**| The user id to blacklist |
 **id** | **string**| The user id or &#39;me&#39; |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendChatMessage**
> \KnetikCloud\Model\ChatMessageResource sendChatMessage($chat_message_resource)

Send a message

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ChatApi(new \Http\Adapter\Guzzle6\Client());
$chat_message_resource = new \KnetikCloud\Model\ChatMessageResource(); // \KnetikCloud\Model\ChatMessageResource | The chat message resource

try {
    $result = $api_instance->sendChatMessage($chat_message_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->sendChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chat_message_resource** | [**\KnetikCloud\Model\ChatMessageResource**](../Model/ChatMessageResource.md)| The chat message resource | [optional]

### Return type

[**\KnetikCloud\Model\ChatMessageResource**](../Model/ChatMessageResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

