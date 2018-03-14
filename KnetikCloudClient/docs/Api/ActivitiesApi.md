# KnetikCloud\ActivitiesApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUser**](ActivitiesApi.md#addUser) | **POST** /activity-occurrences/{activity_occurrence_id}/users | Add a user to an occurrence
[**createActivity**](ActivitiesApi.md#createActivity) | **POST** /activities | Create an activity
[**createActivityOccurrence**](ActivitiesApi.md#createActivityOccurrence) | **POST** /activity-occurrences | Create a new activity occurrence. Ex: start a game
[**createActivityTemplate**](ActivitiesApi.md#createActivityTemplate) | **POST** /activities/templates | Create a activity template
[**deleteActivity**](ActivitiesApi.md#deleteActivity) | **DELETE** /activities/{id} | Delete an activity
[**deleteActivityTemplate**](ActivitiesApi.md#deleteActivityTemplate) | **DELETE** /activities/templates/{id} | Delete a activity template
[**getActivities**](ActivitiesApi.md#getActivities) | **GET** /activities | List activity definitions
[**getActivity**](ActivitiesApi.md#getActivity) | **GET** /activities/{id} | Get a single activity
[**getActivityOccurrenceDetails**](ActivitiesApi.md#getActivityOccurrenceDetails) | **GET** /activity-occurrences/{activity_occurrence_id} | Load a single activity occurrence details
[**getActivityTemplate**](ActivitiesApi.md#getActivityTemplate) | **GET** /activities/templates/{id} | Get a single activity template
[**getActivityTemplates**](ActivitiesApi.md#getActivityTemplates) | **GET** /activities/templates | List and search activity templates
[**listActivityOccurrences**](ActivitiesApi.md#listActivityOccurrences) | **GET** /activity-occurrences | List activity occurrences
[**removeUser**](ActivitiesApi.md#removeUser) | **DELETE** /activity-occurrences/{activity_occurrence_id}/users/{user_id} | Remove a user from an occurrence
[**setActivityOccurrenceResults**](ActivitiesApi.md#setActivityOccurrenceResults) | **POST** /activity-occurrences/{activity_occurrence_id}/results | Sets the status of an activity occurrence to FINISHED and logs metrics
[**setActivityOccurrenceSettings**](ActivitiesApi.md#setActivityOccurrenceSettings) | **PUT** /activity-occurrences/{activity_occurrence_id}/settings | Sets the settings of an activity occurrence
[**setUserStatus**](ActivitiesApi.md#setUserStatus) | **PUT** /activity-occurrences/{activity_occurrence_id}/users/{user_id}/status | Set a user&#39;s status within an occurrence
[**updateActivity**](ActivitiesApi.md#updateActivity) | **PUT** /activities/{id} | Update an activity
[**updateActivityOccurrenceStatus**](ActivitiesApi.md#updateActivityOccurrenceStatus) | **PUT** /activity-occurrences/{activity_occurrence_id}/status | Update the status of an activity occurrence
[**updateActivityTemplate**](ActivitiesApi.md#updateActivityTemplate) | **PUT** /activities/templates/{id} | Update an activity template


# **addUser**
> \KnetikCloud\Model\ActivityOccurrenceResource addUser($activity_occurrence_id, $test, $bypass_restrictions, $user_id)

Add a user to an occurrence

If called with no body, defaults to the user making the call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence
$test = false; // bool | if true, indicates that the user should NOT be added. This can be used to test for eligibility
$bypass_restrictions = false; // bool | if true, indicates that restrictions such as max player count should be ignored. Can only be used with ACTIVITIES_ADMIN
$user_id = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The id of the user, or null for 'caller'

try {
    $result = $api_instance->addUser($activity_occurrence_id, $test, $bypass_restrictions, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **test** | **bool**| if true, indicates that the user should NOT be added. This can be used to test for eligibility | [optional] [default to false]
 **bypass_restrictions** | **bool**| if true, indicates that restrictions such as max player count should be ignored. Can only be used with ACTIVITIES_ADMIN | [optional] [default to false]
 **user_id** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The id of the user, or null for &#39;caller&#39; | [optional]

### Return type

[**\KnetikCloud\Model\ActivityOccurrenceResource**](../Model/ActivityOccurrenceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createActivity**
> \KnetikCloud\Model\ActivityResource createActivity($activity_resource)

Create an activity

<b>Permissions Needed:</b> ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_resource = new \KnetikCloud\Model\ActivityResource(); // \KnetikCloud\Model\ActivityResource | The activity resource object

try {
    $result = $api_instance->createActivity($activity_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_resource** | [**\KnetikCloud\Model\ActivityResource**](../Model/ActivityResource.md)| The activity resource object | [optional]

### Return type

[**\KnetikCloud\Model\ActivityResource**](../Model/ActivityResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createActivityOccurrence**
> \KnetikCloud\Model\ActivityOccurrenceResource createActivityOccurrence($test, $activity_occurrence_resource)

Create a new activity occurrence. Ex: start a game

Has to enforce extra rules if not used as an admin. <br><br><b>Permissions Needed:</b> ACTIVITIES_USER or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$test = false; // bool | if true, indicates that the occurrence should NOT be created. This can be used to test for eligibility and valid settings
$activity_occurrence_resource = new \KnetikCloud\Model\CreateActivityOccurrenceRequest(); // \KnetikCloud\Model\CreateActivityOccurrenceRequest | The activity occurrence object

try {
    $result = $api_instance->createActivityOccurrence($test, $activity_occurrence_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createActivityOccurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test** | **bool**| if true, indicates that the occurrence should NOT be created. This can be used to test for eligibility and valid settings | [optional] [default to false]
 **activity_occurrence_resource** | [**\KnetikCloud\Model\CreateActivityOccurrenceRequest**](../Model/CreateActivityOccurrenceRequest.md)| The activity occurrence object | [optional]

### Return type

[**\KnetikCloud\Model\ActivityOccurrenceResource**](../Model/ActivityOccurrenceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createActivityTemplate**
> \KnetikCloud\Model\TemplateResource createActivityTemplate($activity_template_resource)

Create a activity template

Activity Templates define a type of activity and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The activity template resource object

try {
    $result = $api_instance->createActivityTemplate($activity_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createActivityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The activity template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteActivity**
> deleteActivity($id)

Delete an activity

<b>Permissions Needed:</b> ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the activity

try {
    $api_instance->deleteActivity($id);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->deleteActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the activity |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteActivityTemplate**
> deleteActivityTemplate($id, $cascade)

Delete a activity template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteActivityTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->deleteActivityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **cascade** | **string**| The value needed to delete used templates | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivities**
> \KnetikCloud\Model\PageResourceBareActivityResource_ getActivities($filter_template, $filter_name, $filter_id, $size, $page, $order)

List activity definitions

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$filter_template = true; // bool | Filter for activities that are templates, or specifically not if false
$filter_name = "filter_name_example"; // string | Filter for activities that have a name starting with specified string
$filter_id = "filter_id_example"; // string | Filter for activities with an id in the given comma separated list of ids
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getActivities($filter_template, $filter_name, $filter_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_template** | **bool**| Filter for activities that are templates, or specifically not if false | [optional]
 **filter_name** | **string**| Filter for activities that have a name starting with specified string | [optional]
 **filter_id** | **string**| Filter for activities with an id in the given comma separated list of ids | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceBareActivityResource_**](../Model/PageResourceBareActivityResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivity**
> \KnetikCloud\Model\ActivityResource getActivity($id)

Get a single activity

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the activity

try {
    $result = $api_instance->getActivity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the activity |

### Return type

[**\KnetikCloud\Model\ActivityResource**](../Model/ActivityResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityOccurrenceDetails**
> \KnetikCloud\Model\ActivityOccurrenceResource getActivityOccurrenceDetails($activity_occurrence_id)

Load a single activity occurrence details

<b>Permissions Needed:</b> ACTIVITIES_USER or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence

try {
    $result = $api_instance->getActivityOccurrenceDetails($activity_occurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivityOccurrenceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |

### Return type

[**\KnetikCloud\Model\ActivityOccurrenceResource**](../Model/ActivityOccurrenceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityTemplate**
> \KnetikCloud\Model\TemplateResource getActivityTemplate($id)

Get a single activity template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getActivityTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getActivityTemplates($size, $page, $order)

List and search activity templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getActivityTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivityTemplates: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceTemplateResource_**](../Model/PageResourceTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listActivityOccurrences**
> \KnetikCloud\Model\PageResourceActivityOccurrenceResource_ listActivityOccurrences($filter_activity, $filter_status, $filter_event, $filter_challenge, $size, $page, $order)

List activity occurrences

<b>Permissions Needed:</b> ACTIVITIES_USER or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$filter_activity = "filter_activity_example"; // string | Filter for occurrences of the given activity ID
$filter_status = "filter_status_example"; // string | Filter for occurrences in the given status
$filter_event = 56; // int | Filter for occurrences played during the given event
$filter_challenge = 56; // int | Filter for occurrences played within the given challenge
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->listActivityOccurrences($filter_activity, $filter_status, $filter_event, $filter_challenge, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->listActivityOccurrences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_activity** | **string**| Filter for occurrences of the given activity ID | [optional]
 **filter_status** | **string**| Filter for occurrences in the given status | [optional]
 **filter_event** | **int**| Filter for occurrences played during the given event | [optional]
 **filter_challenge** | **int**| Filter for occurrences played within the given challenge | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceActivityOccurrenceResource_**](../Model/PageResourceActivityOccurrenceResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUser**
> removeUser($activity_occurrence_id, $user_id, $ban, $bypass_restrictions)

Remove a user from an occurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence
$user_id = "user_id_example"; // string | The id of the user, or 'me'
$ban = false; // bool | if true, indicates that the user should not be allowed to re-join. Can only be set by host or admin
$bypass_restrictions = false; // bool | if true, indicates that restrictions such as current status should be ignored. Can only be used with ACTIVITIES_ADMIN

try {
    $api_instance->removeUser($activity_occurrence_id, $user_id, $ban, $bypass_restrictions);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->removeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **user_id** | **string**| The id of the user, or &#39;me&#39; |
 **ban** | **bool**| if true, indicates that the user should not be allowed to re-join. Can only be set by host or admin | [optional] [default to false]
 **bypass_restrictions** | **bool**| if true, indicates that restrictions such as current status should be ignored. Can only be used with ACTIVITIES_ADMIN | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setActivityOccurrenceResults**
> \KnetikCloud\Model\ActivityOccurrenceResults setActivityOccurrenceResults($activity_occurrence_id, $activity_occurrence_results)

Sets the status of an activity occurrence to FINISHED and logs metrics

In addition to user permissions requirements there is security based on the core_settings.results_trust setting. <br><br><b>Permissions Needed:</b> ACTIVITIES_USER or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence
$activity_occurrence_results = new \KnetikCloud\Model\ActivityOccurrenceResultsResource(); // \KnetikCloud\Model\ActivityOccurrenceResultsResource | The activity occurrence object

try {
    $result = $api_instance->setActivityOccurrenceResults($activity_occurrence_id, $activity_occurrence_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->setActivityOccurrenceResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **activity_occurrence_results** | [**\KnetikCloud\Model\ActivityOccurrenceResultsResource**](../Model/ActivityOccurrenceResultsResource.md)| The activity occurrence object | [optional]

### Return type

[**\KnetikCloud\Model\ActivityOccurrenceResults**](../Model/ActivityOccurrenceResults.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setActivityOccurrenceSettings**
> \KnetikCloud\Model\ActivityOccurrenceResource setActivityOccurrenceSettings($activity_occurrence_id, $settings)

Sets the settings of an activity occurrence

<b>Permissions Needed:</b> ACTIVITIES_USER and host or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence
$settings = new \KnetikCloud\Model\ActivityOccurrenceSettingsResource(); // \KnetikCloud\Model\ActivityOccurrenceSettingsResource | The new settings

try {
    $result = $api_instance->setActivityOccurrenceSettings($activity_occurrence_id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->setActivityOccurrenceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **settings** | [**\KnetikCloud\Model\ActivityOccurrenceSettingsResource**](../Model/ActivityOccurrenceSettingsResource.md)| The new settings | [optional]

### Return type

[**\KnetikCloud\Model\ActivityOccurrenceResource**](../Model/ActivityOccurrenceResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserStatus**
> \KnetikCloud\Model\ActivityUserResource setUserStatus($activity_occurrence_id, $user_id, $status)

Set a user's status within an occurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence
$user_id = "user_id_example"; // string | The id of the user
$status = new \KnetikCloud\Model\ActivityUserStatusWrapper(); // \KnetikCloud\Model\ActivityUserStatusWrapper | The new status

try {
    $result = $api_instance->setUserStatus($activity_occurrence_id, $user_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->setUserStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **user_id** | **string**| The id of the user |
 **status** | [**\KnetikCloud\Model\ActivityUserStatusWrapper**](../Model/ActivityUserStatusWrapper.md)| The new status | [optional]

### Return type

[**\KnetikCloud\Model\ActivityUserResource**](../Model/ActivityUserResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivity**
> \KnetikCloud\Model\ActivityResource updateActivity($id, $activity_resource)

Update an activity

<b>Permissions Needed:</b> ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the activity
$activity_resource = new \KnetikCloud\Model\ActivityResource(); // \KnetikCloud\Model\ActivityResource | The activity resource object

try {
    $result = $api_instance->updateActivity($id, $activity_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the activity |
 **activity_resource** | [**\KnetikCloud\Model\ActivityResource**](../Model/ActivityResource.md)| The activity resource object | [optional]

### Return type

[**\KnetikCloud\Model\ActivityResource**](../Model/ActivityResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivityOccurrenceStatus**
> updateActivityOccurrenceStatus($activity_occurrence_id, $activity_occurrence_status)

Update the status of an activity occurrence

If setting to 'FINISHED' reward will be run based on current metrics that have been recorded already. Alternatively, see results endpoint to finish and record all metrics at once. Can be called by non-host participants if non_host_status_control is true. <br><br><b>Permissions Needed:</b> ACTIVITIES_USER and host or ACTIVITIES_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$activity_occurrence_id = 789; // int | The id of the activity occurrence
$activity_occurrence_status = new \KnetikCloud\Model\ActivityOccurrenceStatusWrapper(); // \KnetikCloud\Model\ActivityOccurrenceStatusWrapper | The activity occurrence status object

try {
    $api_instance->updateActivityOccurrenceStatus($activity_occurrence_id, $activity_occurrence_status);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateActivityOccurrenceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **activity_occurrence_status** | [**\KnetikCloud\Model\ActivityOccurrenceStatusWrapper**](../Model/ActivityOccurrenceStatusWrapper.md)| The activity occurrence status object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivityTemplate**
> \KnetikCloud\Model\TemplateResource updateActivityTemplate($id, $activity_template_resource)

Update an activity template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ActivitiesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$activity_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The activity template resource object

try {
    $result = $api_instance->updateActivityTemplate($id, $activity_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateActivityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **activity_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The activity template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

