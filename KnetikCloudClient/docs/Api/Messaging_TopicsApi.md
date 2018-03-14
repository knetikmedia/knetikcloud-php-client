# KnetikCloud\Messaging_TopicsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disableTopicSubscriber**](Messaging_TopicsApi.md#disableTopicSubscriber) | **PUT** /messaging/topics/{id}/subscribers/{user_id}/disabled | Enable or disable messages for a user
[**getTopicSubscriber**](Messaging_TopicsApi.md#getTopicSubscriber) | **GET** /messaging/topics/{id}/subscribers/{user_id} | Get a subscriber to a topic
[**getUserTopics**](Messaging_TopicsApi.md#getUserTopics) | **GET** /users/{id}/topics | Get all messaging topics for a given user


# **disableTopicSubscriber**
> disableTopicSubscriber($id, $user_id, $disabled)

Enable or disable messages for a user

Useful for opt-out options on a single topic. Consider multiple topics for multiple opt-out options. <br><br><b>Permissions Needed:</b> TOPICS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Messaging_TopicsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the topic
$user_id = "user_id_example"; // string | The id of the subscriber or 'me'
$disabled = new \KnetikCloud\Model\ValueWrapperBoolean_(); // \KnetikCloud\Model\ValueWrapperBoolean_ | disabled

try {
    $api_instance->disableTopicSubscriber($id, $user_id, $disabled);
} catch (Exception $e) {
    echo 'Exception when calling Messaging_TopicsApi->disableTopicSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the topic |
 **user_id** | **string**| The id of the subscriber or &#39;me&#39; |
 **disabled** | [**\KnetikCloud\Model\ValueWrapperBoolean_**](../Model/ValueWrapperBoolean_.md)| disabled |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopicSubscriber**
> \KnetikCloud\Model\TopicSubscriberResource getTopicSubscriber($id, $user_id)

Get a subscriber to a topic

<b>Permissions Needed:</b> TOPICS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Messaging_TopicsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the topic
$user_id = "user_id_example"; // string | The id of the subscriber or 'me'

try {
    $result = $api_instance->getTopicSubscriber($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Messaging_TopicsApi->getTopicSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the topic |
 **user_id** | **string**| The id of the subscriber or &#39;me&#39; |

### Return type

[**\KnetikCloud\Model\TopicSubscriberResource**](../Model/TopicSubscriberResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTopics**
> \KnetikCloud\Model\PageResourceTopicResource_ getUserTopics($id)

Get all messaging topics for a given user

<b>Permissions Needed:</b> TOPICS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Messaging_TopicsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the user or 'me'

try {
    $result = $api_instance->getUserTopics($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Messaging_TopicsApi->getUserTopics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user or &#39;me&#39; |

### Return type

[**\KnetikCloud\Model\PageResourceTopicResource_**](../Model/PageResourceTopicResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

