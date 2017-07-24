# KnetikCloud\CampaignsChallengesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChallenge**](CampaignsChallengesApi.md#createChallenge) | **POST** /challenges | Create a challenge
[**createChallengeActivity**](CampaignsChallengesApi.md#createChallengeActivity) | **POST** /challenges/{challenge_id}/activities | Create a challenge activity
[**createChallengeActivityTemplate**](CampaignsChallengesApi.md#createChallengeActivityTemplate) | **POST** /challenge-activities/templates | Create a challenge activity template
[**createChallengeTemplate**](CampaignsChallengesApi.md#createChallengeTemplate) | **POST** /challenges/templates | Create a challenge template
[**deleteChallenge**](CampaignsChallengesApi.md#deleteChallenge) | **DELETE** /challenges/{id} | Delete a challenge
[**deleteChallengeActivity**](CampaignsChallengesApi.md#deleteChallengeActivity) | **DELETE** /challenges/{challenge_id}/activities/{id} | Delete a challenge activity
[**deleteChallengeActivityTemplate**](CampaignsChallengesApi.md#deleteChallengeActivityTemplate) | **DELETE** /challenge-activities/templates/{id} | Delete a challenge activity template
[**deleteChallengeEvent**](CampaignsChallengesApi.md#deleteChallengeEvent) | **DELETE** /challenges/events/{id} | Delete a challenge event
[**deleteChallengeTemplate**](CampaignsChallengesApi.md#deleteChallengeTemplate) | **DELETE** /challenges/templates/{id} | Delete a challenge template
[**getChallenge**](CampaignsChallengesApi.md#getChallenge) | **GET** /challenges/{id} | Retrieve a challenge
[**getChallengeActivities**](CampaignsChallengesApi.md#getChallengeActivities) | **GET** /challenges/{challenge_id}/activities | List and search challenge activities
[**getChallengeActivity**](CampaignsChallengesApi.md#getChallengeActivity) | **GET** /challenges/{challenge_id}/activities/{id} | Get a single challenge activity
[**getChallengeActivityTemplate**](CampaignsChallengesApi.md#getChallengeActivityTemplate) | **GET** /challenge-activities/templates/{id} | Get a single challenge activity template
[**getChallengeActivityTemplates**](CampaignsChallengesApi.md#getChallengeActivityTemplates) | **GET** /challenge-activities/templates | List and search challenge activity templates
[**getChallengeEvent**](CampaignsChallengesApi.md#getChallengeEvent) | **GET** /challenges/events/{id} | Retrieve a single challenge event details
[**getChallengeEvents**](CampaignsChallengesApi.md#getChallengeEvents) | **GET** /challenges/events | Retrieve a list of challenge events
[**getChallengeTemplate**](CampaignsChallengesApi.md#getChallengeTemplate) | **GET** /challenges/templates/{id} | Get a single challenge template
[**getChallengeTemplates**](CampaignsChallengesApi.md#getChallengeTemplates) | **GET** /challenges/templates | List and search challenge templates
[**getChallenges**](CampaignsChallengesApi.md#getChallenges) | **GET** /challenges | Retrieve a list of challenges
[**updateChallenge**](CampaignsChallengesApi.md#updateChallenge) | **PUT** /challenges/{id} | Update a challenge
[**updateChallengeActivity**](CampaignsChallengesApi.md#updateChallengeActivity) | **PUT** /challenges/{challenge_id}/activities/{id} | Update a challenge activity
[**updateChallengeActivityTemplate**](CampaignsChallengesApi.md#updateChallengeActivityTemplate) | **PUT** /challenge-activities/templates/{id} | Update an challenge activity template
[**updateChallengeTemplate**](CampaignsChallengesApi.md#updateChallengeTemplate) | **PUT** /challenges/templates/{id} | Update a challenge template


# **createChallenge**
> \KnetikCloud\Model\ChallengeResource createChallenge($challenge_resource)

Create a challenge

Challenges do not run on their own.  They must be added to a campaign before events will spawn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$challenge_resource = new \KnetikCloud\Model\ChallengeResource(); // \KnetikCloud\Model\ChallengeResource | The challenge resource object

try {
    $result = $api_instance->createChallenge($challenge_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->createChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_resource** | [**\KnetikCloud\Model\ChallengeResource**](../Model/ChallengeResource.md)| The challenge resource object | [optional]

### Return type

[**\KnetikCloud\Model\ChallengeResource**](../Model/ChallengeResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChallengeActivity**
> \KnetikCloud\Model\ChallengeActivityResource createChallengeActivity($challenge_id, $challenge_activity_resource, $validate_settings)

Create a challenge activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$challenge_id = 789; // int | The challenge id
$challenge_activity_resource = new \KnetikCloud\Model\ChallengeActivityResource(); // \KnetikCloud\Model\ChallengeActivityResource | The challenge activity resource object
$validate_settings = false; // bool | Whether to validate the settings being sent against the available settings on the base activity.

try {
    $result = $api_instance->createChallengeActivity($challenge_id, $challenge_activity_resource, $validate_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->createChallengeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_id** | **int**| The challenge id |
 **challenge_activity_resource** | [**\KnetikCloud\Model\ChallengeActivityResource**](../Model/ChallengeActivityResource.md)| The challenge activity resource object | [optional]
 **validate_settings** | **bool**| Whether to validate the settings being sent against the available settings on the base activity. | [optional] [default to false]

### Return type

[**\KnetikCloud\Model\ChallengeActivityResource**](../Model/ChallengeActivityResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChallengeActivityTemplate**
> \KnetikCloud\Model\TemplateResource createChallengeActivityTemplate($challenge_activity_template_resource)

Create a challenge activity template

Challenge Activity Templates define a type of challenge activity and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$challenge_activity_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The challengeActivity template resource object

try {
    $result = $api_instance->createChallengeActivityTemplate($challenge_activity_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->createChallengeActivityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_activity_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The challengeActivity template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChallengeTemplate**
> \KnetikCloud\Model\TemplateResource createChallengeTemplate($challenge_template_resource)

Create a challenge template

Challenge Templates define a type of challenge and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$challenge_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The challenge template resource object

try {
    $result = $api_instance->createChallengeTemplate($challenge_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->createChallengeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The challenge template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChallenge**
> deleteChallenge($id)

Delete a challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge id

try {
    $api_instance->deleteChallenge($id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->deleteChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge id |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChallengeActivity**
> deleteChallengeActivity($id, $challenge_id)

Delete a challenge activity

A challenge can have multiple instances of the same activity and thus the id used is of the specific entry within the challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge_activity id
$challenge_id = 789; // int | The challenge id

try {
    $api_instance->deleteChallengeActivity($id, $challenge_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->deleteChallengeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge_activity id |
 **challenge_id** | **int**| The challenge id |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChallengeActivityTemplate**
> deleteChallengeActivityTemplate($id, $cascade)

Delete a challenge activity template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteChallengeActivityTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->deleteChallengeActivityTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChallengeEvent**
> deleteChallengeEvent($id)

Delete a challenge event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge event id

try {
    $api_instance->deleteChallengeEvent($id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->deleteChallengeEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge event id |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChallengeTemplate**
> deleteChallengeTemplate($id, $cascade)

Delete a challenge template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteChallengeTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->deleteChallengeTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallenge**
> \KnetikCloud\Model\ChallengeResource getChallenge($id)

Retrieve a challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge id

try {
    $result = $api_instance->getChallenge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge id |

### Return type

[**\KnetikCloud\Model\ChallengeResource**](../Model/ChallengeResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeActivities**
> \KnetikCloud\Model\PageResourceBareChallengeActivityResource_ getChallengeActivities($challenge_id, $size, $page, $order)

List and search challenge activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$challenge_id = 789; // int | The challenge id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallengeActivities($challenge_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_id** | **int**| The challenge id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceBareChallengeActivityResource_**](../Model/PageResourceBareChallengeActivityResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeActivity**
> \KnetikCloud\Model\ChallengeActivityResource getChallengeActivity($id, $challenge_id)

Get a single challenge activity

A challenge can have multiple instances of the same activity and thus the id used is of the specific entry within the challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge_activity id
$challenge_id = 789; // int | The challenge id

try {
    $result = $api_instance->getChallengeActivity($id, $challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge_activity id |
 **challenge_id** | **int**| The challenge id |

### Return type

[**\KnetikCloud\Model\ChallengeActivityResource**](../Model/ChallengeActivityResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeActivityTemplate**
> \KnetikCloud\Model\TemplateResource getChallengeActivityTemplate($id)

Get a single challenge activity template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getChallengeActivityTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeActivityTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeActivityTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getChallengeActivityTemplates($size, $page, $order)

List and search challenge activity templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallengeActivityTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeActivityTemplates: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeEvent**
> \KnetikCloud\Model\ChallengeEventResource getChallengeEvent($id)

Retrieve a single challenge event details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge event id

try {
    $result = $api_instance->getChallengeEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge event id |

### Return type

[**\KnetikCloud\Model\ChallengeEventResource**](../Model/ChallengeEventResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeEvents**
> \KnetikCloud\Model\PageResourceChallengeEventResource_ getChallengeEvents($filter_start_date, $filter_end_date, $filter_campaigns, $filter_challenge, $size, $page, $order)

Retrieve a list of challenge events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$filter_start_date = "filter_start_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the event start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_end_date = "filter_end_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the event end date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_campaigns = true; // bool | check only for events from currently running campaigns
$filter_challenge = 789; // int | check only for events from the challenge specified by id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallengeEvents($filter_start_date, $filter_end_date, $filter_campaigns, $filter_challenge, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_start_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the event start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_end_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the event end date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_campaigns** | **bool**| check only for events from currently running campaigns | [optional]
 **filter_challenge** | **int**| check only for events from the challenge specified by id | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceChallengeEventResource_**](../Model/PageResourceChallengeEventResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeTemplate**
> \KnetikCloud\Model\TemplateResource getChallengeTemplate($id)

Get a single challenge template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getChallengeTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeTemplate: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getChallengeTemplates($size, $page, $order)

List and search challenge templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallengeTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallengeTemplates: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallenges**
> \KnetikCloud\Model\PageResourceChallengeResource_ getChallenges($filter_template, $filter_active_campaign, $filter_start_date, $filter_end_date, $size, $page, $order)

Retrieve a list of challenges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$filter_template = true; // bool | Filter for challenges that are not tied to campaigns (templates)
$filter_active_campaign = true; // bool | Filter for challenges that are tied to active campaigns
$filter_start_date = "filter_start_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the challenge start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_end_date = "filter_end_date_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the challenge end date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallenges($filter_template, $filter_active_campaign, $filter_start_date, $filter_end_date, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->getChallenges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_template** | **bool**| Filter for challenges that are not tied to campaigns (templates) | [optional]
 **filter_active_campaign** | **bool**| Filter for challenges that are tied to active campaigns | [optional]
 **filter_start_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the challenge start date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_end_date** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the challenge end date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceChallengeResource_**](../Model/PageResourceChallengeResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChallenge**
> \KnetikCloud\Model\ChallengeResource updateChallenge($id, $challenge_resource)

Update a challenge

If the challenge is a copy, changes will propagate to all the related challenges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge id
$challenge_resource = new \KnetikCloud\Model\ChallengeResource(); // \KnetikCloud\Model\ChallengeResource | The challenge resource object

try {
    $result = $api_instance->updateChallenge($id, $challenge_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->updateChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge id |
 **challenge_resource** | [**\KnetikCloud\Model\ChallengeResource**](../Model/ChallengeResource.md)| The challenge resource object | [optional]

### Return type

[**\KnetikCloud\Model\ChallengeResource**](../Model/ChallengeResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChallengeActivity**
> \KnetikCloud\Model\ChallengeActivityResource updateChallengeActivity($id, $challenge_id, $challenge_activity_resource)

Update a challenge activity

A challenge can have multiple instances of the same activity and thus the id used is of the specific entry within the challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = 789; // int | The challenge_activity id
$challenge_id = 789; // int | The challenge id
$challenge_activity_resource = new \KnetikCloud\Model\ChallengeActivityResource(); // \KnetikCloud\Model\ChallengeActivityResource | The challenge activity resource object

try {
    $result = $api_instance->updateChallengeActivity($id, $challenge_id, $challenge_activity_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->updateChallengeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The challenge_activity id |
 **challenge_id** | **int**| The challenge id |
 **challenge_activity_resource** | [**\KnetikCloud\Model\ChallengeActivityResource**](../Model/ChallengeActivityResource.md)| The challenge activity resource object | [optional]

### Return type

[**\KnetikCloud\Model\ChallengeActivityResource**](../Model/ChallengeActivityResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChallengeActivityTemplate**
> \KnetikCloud\Model\TemplateResource updateChallengeActivityTemplate($id, $challenge_activity_template_resource)

Update an challenge activity template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = "id_example"; // string | The id of the template
$challenge_activity_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The challengeActivity template resource object

try {
    $result = $api_instance->updateChallengeActivityTemplate($id, $challenge_activity_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->updateChallengeActivityTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **challenge_activity_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The challengeActivity template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChallengeTemplate**
> \KnetikCloud\Model\TemplateResource updateChallengeTemplate($id, $challenge_template_resource)

Update a challenge template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\CampaignsChallengesApi();
$id = "id_example"; // string | The id of the template
$challenge_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The challenge template resource object

try {
    $result = $api_instance->updateChallengeTemplate($id, $challenge_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsChallengesApi->updateChallengeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **challenge_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The challenge template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

