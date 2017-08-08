# KnetikCloud\MessagingApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendRawEmail**](MessagingApi.md#sendRawEmail) | **POST** /messaging/raw-email | Send a raw email to one or more users
[**sendRawSMS**](MessagingApi.md#sendRawSMS) | **POST** /messaging/raw-sms | Send a raw SMS
[**sendTemplatedEmail**](MessagingApi.md#sendTemplatedEmail) | **POST** /messaging/templated-email | Send a templated email to one or more users
[**sendTemplatedSMS**](MessagingApi.md#sendTemplatedSMS) | **POST** /messaging/templated-sms | Send a new templated SMS


# **sendRawEmail**
> sendRawEmail($raw_email_resource)

Send a raw email to one or more users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendRawSMS**
> sendRawSMS($raw_sms_resource)

Send a raw SMS

Sends a raw SMS text message to one or more users. User's without registered mobile numbers will be skipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplatedEmail**
> sendTemplatedEmail($message_resource)

Send a templated email to one or more users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplatedSMS**
> sendTemplatedSMS($template_sms_resource)

Send a new templated SMS

Sends a templated SMS text message to one or more users. User's without registered mobile numbers will be skipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

