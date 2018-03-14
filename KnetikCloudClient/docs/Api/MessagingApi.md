# KnetikCloud\MessagingApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**compileMessageTemplate**](MessagingApi.md#compileMessageTemplate) | **POST** /messaging/templates/compilations | Compile a message template
[**createMessageTemplate**](MessagingApi.md#createMessageTemplate) | **POST** /messaging/templates | Create a message template
[**deleteMessageTemplate**](MessagingApi.md#deleteMessageTemplate) | **DELETE** /messaging/templates/{id} | Delete an existing message template
[**getMessageTemplate**](MessagingApi.md#getMessageTemplate) | **GET** /messaging/templates/{id} | Get a single message template
[**getMessageTemplates**](MessagingApi.md#getMessageTemplates) | **GET** /messaging/templates | List and search message templates
[**sendMessage**](MessagingApi.md#sendMessage) | **POST** /messaging/message | Send a message
[**sendRawEmail**](MessagingApi.md#sendRawEmail) | **POST** /messaging/raw-email | Send a raw email to one or more users
[**sendRawPush**](MessagingApi.md#sendRawPush) | **POST** /messaging/raw-push | Send a raw push notification
[**sendRawSMS**](MessagingApi.md#sendRawSMS) | **POST** /messaging/raw-sms | Send a raw SMS
[**sendTemplatedEmail**](MessagingApi.md#sendTemplatedEmail) | **POST** /messaging/templated-email | Send a templated email to one or more users
[**sendTemplatedPush**](MessagingApi.md#sendTemplatedPush) | **POST** /messaging/templated-push | Send a templated push notification
[**sendTemplatedSMS**](MessagingApi.md#sendTemplatedSMS) | **POST** /messaging/templated-sms | Send a new templated SMS
[**sendWebsocket**](MessagingApi.md#sendWebsocket) | **POST** /messaging/websocket-message | Send a websocket message
[**updateMessageTemplate**](MessagingApi.md#updateMessageTemplate) | **PUT** /messaging/templates/{id} | Update an existing message template


# **compileMessageTemplate**
> map[string,string] compileMessageTemplate($request)

Compile a message template

Processes a set of input data against the template and returnes the compiled result. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\MessageTemplateBulkRequest(); // \KnetikCloud\Model\MessageTemplateBulkRequest | request

try {
    $result = $api_instance->compileMessageTemplate($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->compileMessageTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\MessageTemplateBulkRequest**](../Model/MessageTemplateBulkRequest.md)| request | [optional]

### Return type

**map[string,string]**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMessageTemplate**
> \KnetikCloud\Model\MessageTemplateResource createMessageTemplate($message_template)

Create a message template

<b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$message_template = new \KnetikCloud\Model\MessageTemplateResource(); // \KnetikCloud\Model\MessageTemplateResource | The new template email to be sent

try {
    $result = $api_instance->createMessageTemplate($message_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createMessageTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_template** | [**\KnetikCloud\Model\MessageTemplateResource**](../Model/MessageTemplateResource.md)| The new template email to be sent | [optional]

### Return type

[**\KnetikCloud\Model\MessageTemplateResource**](../Model/MessageTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageTemplate**
> deleteMessageTemplate($id)

Delete an existing message template

<b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The message_template id

try {
    $api_instance->deleteMessageTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->deleteMessageTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The message_template id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageTemplate**
> \KnetikCloud\Model\MessageTemplateResource getMessageTemplate($id)

Get a single message template

<b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The message_template id

try {
    $result = $api_instance->getMessageTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessageTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The message_template id |

### Return type

[**\KnetikCloud\Model\MessageTemplateResource**](../Model/MessageTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageTemplates**
> \KnetikCloud\Model\PageResourceMessageTemplateResource_ getMessageTemplates($filter_tagset, $filter_tag_intersection, $filter_tag_exclusion, $size, $page, $order)

List and search message templates

Get a list of message templates with optional filtering. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$filter_tagset = "filter_tagset_example"; // string | Filter for message templates with at least one of a specified set of tags (separated by comma)
$filter_tag_intersection = "filter_tag_intersection_example"; // string | Filter for message templates with all of a specified set of tags (separated by comma)
$filter_tag_exclusion = "filter_tag_exclusion_example"; // string | Filter for message templates with none of a specified set of tags (separated by comma)
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getMessageTemplates($filter_tagset, $filter_tag_intersection, $filter_tag_exclusion, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessageTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_tagset** | **string**| Filter for message templates with at least one of a specified set of tags (separated by comma) | [optional]
 **filter_tag_intersection** | **string**| Filter for message templates with all of a specified set of tags (separated by comma) | [optional]
 **filter_tag_exclusion** | **string**| Filter for message templates with none of a specified set of tags (separated by comma) | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceMessageTemplateResource_**](../Model/PageResourceMessageTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> sendMessage($message_resource)

Send a message

Sends a message with one or more formats to one or more users. Fill in any message formats desired (email, sms, websockets) and each user will recieve all valid formats. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$message_resource = new \KnetikCloud\Model\MessageResource(); // \KnetikCloud\Model\MessageResource | The message to be sent

try {
    $api_instance->sendMessage($message_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_resource** | [**\KnetikCloud\Model\MessageResource**](../Model/MessageResource.md)| The message to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendRawEmail**
> sendRawEmail($raw_email_resource)

Send a raw email to one or more users

<b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$raw_email_resource = new \KnetikCloud\Model\RawEmailResource(); // \KnetikCloud\Model\RawEmailResource | The new raw email to be sent

try {
    $api_instance->sendRawEmail($raw_email_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendRawEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **raw_email_resource** | [**\KnetikCloud\Model\RawEmailResource**](../Model/RawEmailResource.md)| The new raw email to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendRawPush**
> sendRawPush($raw_push_resource)

Send a raw push notification

Sends a raw push notification message to one or more users. User's without registered mobile device for the application will be skipped. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$raw_push_resource = new \KnetikCloud\Model\RawPushResource(); // \KnetikCloud\Model\RawPushResource | The new raw push notification to be sent

try {
    $api_instance->sendRawPush($raw_push_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendRawPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **raw_push_resource** | [**\KnetikCloud\Model\RawPushResource**](../Model/RawPushResource.md)| The new raw push notification to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendRawSMS**
> sendRawSMS($raw_sms_resource)

Send a raw SMS

Sends a raw SMS text message to one or more users. User's without registered mobile numbers will be skipped. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$raw_sms_resource = new \KnetikCloud\Model\RawSMSResource(); // \KnetikCloud\Model\RawSMSResource | The new raw SMS to be sent

try {
    $api_instance->sendRawSMS($raw_sms_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendRawSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **raw_sms_resource** | [**\KnetikCloud\Model\RawSMSResource**](../Model/RawSMSResource.md)| The new raw SMS to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplatedEmail**
> sendTemplatedEmail($message_resource)

Send a templated email to one or more users

<b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$message_resource = new \KnetikCloud\Model\TemplateEmailResource(); // \KnetikCloud\Model\TemplateEmailResource | The new template email to be sent

try {
    $api_instance->sendTemplatedEmail($message_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendTemplatedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_resource** | [**\KnetikCloud\Model\TemplateEmailResource**](../Model/TemplateEmailResource.md)| The new template email to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplatedPush**
> sendTemplatedPush($template_push_resource)

Send a templated push notification

Sends a templated push notification message to one or more users. User's without registered mobile device for the application will be skipped. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$template_push_resource = new \KnetikCloud\Model\TemplatePushResource(); // \KnetikCloud\Model\TemplatePushResource | The new templated push notification to be sent

try {
    $api_instance->sendTemplatedPush($template_push_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendTemplatedPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_push_resource** | [**\KnetikCloud\Model\TemplatePushResource**](../Model/TemplatePushResource.md)| The new templated push notification to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplatedSMS**
> sendTemplatedSMS($template_sms_resource)

Send a new templated SMS

Sends a templated SMS text message to one or more users. User's without registered mobile numbers will be skipped. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$template_sms_resource = new \KnetikCloud\Model\TemplateSMSResource(); // \KnetikCloud\Model\TemplateSMSResource | The new template SMS to be sent

try {
    $api_instance->sendTemplatedSMS($template_sms_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendTemplatedSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_sms_resource** | [**\KnetikCloud\Model\TemplateSMSResource**](../Model/TemplateSMSResource.md)| The new template SMS to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendWebsocket**
> sendWebsocket($websocket_resource)

Send a websocket message

Sends a websocket message to one or more users. <br><br><b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$websocket_resource = new \KnetikCloud\Model\WebsocketMessageResource(); // \KnetikCloud\Model\WebsocketMessageResource | The new websocket message to be sent

try {
    $api_instance->sendWebsocket($websocket_resource);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendWebsocket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **websocket_resource** | [**\KnetikCloud\Model\WebsocketMessageResource**](../Model/WebsocketMessageResource.md)| The new websocket message to be sent | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageTemplate**
> \KnetikCloud\Model\MessageTemplateResource updateMessageTemplate($id, $message_template_resource)

Update an existing message template

<b>Permissions Needed:</b> MESSAGING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\MessagingApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The message_template id
$message_template_resource = new \KnetikCloud\Model\MessageTemplateResource(); // \KnetikCloud\Model\MessageTemplateResource | The message template

try {
    $result = $api_instance->updateMessageTemplate($id, $message_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->updateMessageTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The message_template id |
 **message_template_resource** | [**\KnetikCloud\Model\MessageTemplateResource**](../Model/MessageTemplateResource.md)| The message template | [optional]

### Return type

[**\KnetikCloud\Model\MessageTemplateResource**](../Model/MessageTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

