# KnetikCloud\BRERuleEngineEventsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendBREEvent**](BRERuleEngineEventsApi.md#sendBREEvent) | **POST** /bre/events | Fire a new event, based on an existing trigger


# **sendBREEvent**
> string sendBREEvent($bre_event)

Fire a new event, based on an existing trigger

Parameters within the event must match names and types from the trigger. Actual rule execution is asynchornous.  Returns request id, which will be used as the event id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\BRERuleEngineEventsApi();
$bre_event = new \KnetikCloud\Model\BreEvent(); // \KnetikCloud\Model\BreEvent | The BRE event object

try {
    $result = $api_instance->sendBREEvent($bre_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BRERuleEngineEventsApi->sendBREEvent: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

