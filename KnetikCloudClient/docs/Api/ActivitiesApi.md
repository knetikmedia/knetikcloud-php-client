# KnetikCloud\ActivitiesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createActivity**](ActivitiesApi.md#createActivity) | **POST** /activities | Create an activity
[**createActivityOccurrence**](ActivitiesApi.md#createActivityOccurrence) | **POST** /activity-occurrences | Create a new activity occurrence. Ex: start a game
[**createActivityTemplate**](ActivitiesApi.md#createActivityTemplate) | **POST** /activities/templates | Create a activity template
[**deleteActivity**](ActivitiesApi.md#deleteActivity) | **DELETE** /activities/{id} | Delete an activity
[**deleteActivityTemplate**](ActivitiesApi.md#deleteActivityTemplate) | **DELETE** /activities/templates/{id} | Delete a activity template
[**getActivities**](ActivitiesApi.md#getActivities) | **GET** /activities | List activity definitions
[**getActivity**](ActivitiesApi.md#getActivity) | **GET** /activities/{id} | Get a single activity
[**getActivityTemplate**](ActivitiesApi.md#getActivityTemplate) | **GET** /activities/templates/{id} | Get a single activity template
[**getActivityTemplates**](ActivitiesApi.md#getActivityTemplates) | **GET** /activities/templates | List and search activity templates
[**setActivityOccurrenceResults**](ActivitiesApi.md#setActivityOccurrenceResults) | **POST** /activity-occurrences/{activity_occurrence_id}/results | Sets the status of an activity occurrence to FINISHED and logs metrics
[**updateActivity**](ActivitiesApi.md#updateActivity) | **PUT** /activities/{id} | Update an activity
[**updateActivityOccurrence**](ActivitiesApi.md#updateActivityOccurrence) | **PUT** /activity-occurrences/{activity_occurrence_id}/status | Updated the status of an activity occurrence
[**updateActivityTemplate**](ActivitiesApi.md#updateActivityTemplate) | **PUT** /activities/templates/{id} | Update an activity template


# **createActivity**
> \KnetikCloud\Model\ActivityResource createActivity($activity_resource)

Create an activity

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

Has to enforce extra rules if not used as an admin

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
$activity_occurrence_resource = new \KnetikCloud\Model\ActivityOccurrenceResource(); // \KnetikCloud\Model\ActivityOccurrenceResource | The activity occurrence object

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
 **activity_occurrence_resource** | [**\KnetikCloud\Model\ActivityOccurrenceResource**](../Model/ActivityOccurrenceResource.md)| The activity occurrence object | [optional]

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

Activity Templates define a type of activity and the properties they have

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteActivityTemplate**
> deleteActivityTemplate($id, $cascade)

Delete a activity template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivities**
> \KnetikCloud\Model\PageResourceBareActivityResource_ getActivities($filter_template, $filter_name, $filter_id, $size, $page, $order)

List activity definitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivity**
> \KnetikCloud\Model\ActivityResource getActivity($id)

Get a single activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityTemplate**
> \KnetikCloud\Model\TemplateResource getActivityTemplate($id)

Get a single activity template

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getActivityTemplates($size, $page, $order)

List and search activity templates

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setActivityOccurrenceResults**
> \KnetikCloud\Model\ActivityOccurrenceResults setActivityOccurrenceResults($activity_occurrence_id, $activity_occurrence_results)

Sets the status of an activity occurrence to FINISHED and logs metrics

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

# **updateActivity**
> \KnetikCloud\Model\ActivityResource updateActivity($id, $activity_resource)

Update an activity

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

# **updateActivityOccurrence**
> updateActivityOccurrence($activity_occurrence_id, $activity_cccurrence_status)

Updated the status of an activity occurrence

If setting to 'FINISHED' you must POST to /results instead to record the metrics and get synchronous reward results

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
$activity_cccurrence_status = "activity_cccurrence_status_example"; // string | The activity occurrence status object

try {
    $api_instance->updateActivityOccurrence($activity_occurrence_id, $activity_cccurrence_status);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateActivityOccurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_occurrence_id** | **int**| The id of the activity occurrence |
 **activity_cccurrence_status** | **string**| The activity occurrence status object | [optional]

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

