# KnetikCloud\Rule_Engine_EventsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendBREEvent**](Rule_Engine_EventsApi.md#sendBREEvent) | **POST** /bre/events | Fire a new event, based on an existing trigger


# **sendBREEvent**
> string sendBREEvent($bre_event)

Fire a new event, based on an existing trigger

Parameters within the event must match names and types from the trigger. Actual rule execution is asynchornous.  Returns request id, which will be used as the event id. <br><br><b>Permissions Needed:</b> BRE_RULE_ENGINE_EVENTS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Rule_Engine_EventsApi(new \Http\Adapter\Guzzle6\Client());
$bre_event = new \KnetikCloud\Model\BreEvent(); // \KnetikCloud\Model\BreEvent | The BRE event object

try {
    $result = $api_instance->sendBREEvent($bre_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Rule_Engine_EventsApi->sendBREEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bre_event** | [**\KnetikCloud\Model\BreEvent**](../Model/BreEvent.md)| The BRE event object | [optional]

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

