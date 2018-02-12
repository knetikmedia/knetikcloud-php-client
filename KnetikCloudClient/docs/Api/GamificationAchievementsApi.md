# KnetikCloud\GamificationAchievementsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAchievement**](GamificationAchievementsApi.md#createAchievement) | **POST** /achievements | Create a new achievement definition
[**createAchievementTemplate**](GamificationAchievementsApi.md#createAchievementTemplate) | **POST** /achievements/templates | Create an achievement template
[**deleteAchievement**](GamificationAchievementsApi.md#deleteAchievement) | **DELETE** /achievements/{name} | Delete an achievement definition
[**deleteAchievementTemplate**](GamificationAchievementsApi.md#deleteAchievementTemplate) | **DELETE** /achievements/templates/{id} | Delete an achievement template
[**getAchievement**](GamificationAchievementsApi.md#getAchievement) | **GET** /achievements/{name} | Get a single achievement definition
[**getAchievementTemplate**](GamificationAchievementsApi.md#getAchievementTemplate) | **GET** /achievements/templates/{id} | Get a single achievement template
[**getAchievementTemplates**](GamificationAchievementsApi.md#getAchievementTemplates) | **GET** /achievements/templates | List and search achievement templates
[**getAchievementTriggers**](GamificationAchievementsApi.md#getAchievementTriggers) | **GET** /achievements/triggers | Get the list of triggers that can be used to trigger an achievement progress update
[**getAchievements**](GamificationAchievementsApi.md#getAchievements) | **GET** /achievements | Get all achievement definitions in the system
[**getDerivedAchievements**](GamificationAchievementsApi.md#getDerivedAchievements) | **GET** /achievements/derived/{name} | Get a list of derived achievements
[**getUserAchievementProgress**](GamificationAchievementsApi.md#getUserAchievementProgress) | **GET** /users/{user_id}/achievements/{achievement_name} | Retrieve progress on a given achievement for a given user
[**getUserAchievementsProgress**](GamificationAchievementsApi.md#getUserAchievementsProgress) | **GET** /users/{user_id}/achievements | Retrieve progress on achievements for a given user
[**getUsersAchievementProgress**](GamificationAchievementsApi.md#getUsersAchievementProgress) | **GET** /users/achievements/{achievement_name} | Retrieve progress on a given achievement for all users
[**getUsersAchievementsProgress**](GamificationAchievementsApi.md#getUsersAchievementsProgress) | **GET** /users/achievements | Retrieve progress on achievements for all users
[**incrementAchievementProgress**](GamificationAchievementsApi.md#incrementAchievementProgress) | **POST** /users/{user_id}/achievements/{achievement_name}/progress | Increment an achievement progress record for a user
[**setAchievementProgress**](GamificationAchievementsApi.md#setAchievementProgress) | **PUT** /users/{user_id}/achievements/{achievement_name}/progress | Set an achievement progress record for a user
[**updateAchievement**](GamificationAchievementsApi.md#updateAchievement) | **PUT** /achievements/{name} | Update an achievement definition
[**updateAchievementTemplate**](GamificationAchievementsApi.md#updateAchievementTemplate) | **PUT** /achievements/templates/{id} | Update an achievement template


# **createAchievement**
> \KnetikCloud\Model\AchievementDefinitionResource createAchievement($achievement)

Create a new achievement definition

If the definition contains a trigger event name, a BRE rule is created, so that tracking logic is executed when the triggering event occurs. If no trigger event name is specified, the user's achievement status must manually be updated via the API. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$achievement = new \KnetikCloud\Model\AchievementDefinitionResource(); // \KnetikCloud\Model\AchievementDefinitionResource | The achievement definition

try {
    $result = $api_instance->createAchievement($achievement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->createAchievement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **achievement** | [**\KnetikCloud\Model\AchievementDefinitionResource**](../Model/AchievementDefinitionResource.md)| The achievement definition | [optional]

### Return type

[**\KnetikCloud\Model\AchievementDefinitionResource**](../Model/AchievementDefinitionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAchievementTemplate**
> \KnetikCloud\Model\TemplateResource createAchievementTemplate($template)

Create an achievement template

Achievement templates define a type of achievement and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The achievement template to be created

try {
    $result = $api_instance->createAchievementTemplate($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->createAchievementTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The achievement template to be created | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAchievement**
> deleteAchievement($name)

Delete an achievement definition

Will also disable the associated generated rule, if any. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The name of the achievement

try {
    $api_instance->deleteAchievement($name);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->deleteAchievement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the achievement |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAchievementTemplate**
> deleteAchievementTemplate($id, $cascade)

Delete an achievement template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteAchievementTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->deleteAchievementTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getAchievement**
> \KnetikCloud\Model\AchievementDefinitionResource getAchievement($name)

Get a single achievement definition

<b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN or ACHIEVEMENTS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The name of the achievement

try {
    $result = $api_instance->getAchievement($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getAchievement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the achievement |

### Return type

[**\KnetikCloud\Model\AchievementDefinitionResource**](../Model/AchievementDefinitionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAchievementTemplate**
> \KnetikCloud\Model\TemplateResource getAchievementTemplate($id)

Get a single achievement template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getAchievementTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getAchievementTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getAchievementTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getAchievementTemplates($size, $page, $order)

List and search achievement templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getAchievementTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getAchievementTemplates: ', $e->getMessage(), PHP_EOL;
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

# **getAchievementTriggers**
> \KnetikCloud\Model\BreTriggerResource[] getAchievementTriggers()

Get the list of triggers that can be used to trigger an achievement progress update

<b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getAchievementTriggers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getAchievementTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\BreTriggerResource[]**](../Model/BreTriggerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAchievements**
> \KnetikCloud\Model\PageResourceAchievementDefinitionResource_ getAchievements($filter_tagset, $filter_name, $filter_hidden, $size, $page, $order, $filter_derived)

Get all achievement definitions in the system

<b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN or ACHIEVEMENTS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$filter_tagset = "filter_tagset_example"; // string | Filter for achievements with specified tags (separated by comma)
$filter_name = "filter_name_example"; // string | Filter for achievements whose name contains a string
$filter_hidden = true; // bool | Filter for achievements that are hidden or not
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "name:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]
$filter_derived = false; // bool | Filter for achievements that are derived from other services

try {
    $result = $api_instance->getAchievements($filter_tagset, $filter_name, $filter_hidden, $size, $page, $order, $filter_derived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getAchievements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_tagset** | **string**| Filter for achievements with specified tags (separated by comma) | [optional]
 **filter_name** | **string**| Filter for achievements whose name contains a string | [optional]
 **filter_hidden** | **bool**| Filter for achievements that are hidden or not | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to name:ASC]
 **filter_derived** | **bool**| Filter for achievements that are derived from other services | [optional] [default to false]

### Return type

[**\KnetikCloud\Model\PageResourceAchievementDefinitionResource_**](../Model/PageResourceAchievementDefinitionResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDerivedAchievements**
> \KnetikCloud\Model\AchievementDefinitionResource[] getDerivedAchievements($name)

Get a list of derived achievements

Used by other services that depend on achievements.  <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The name of the derived achievement

try {
    $result = $api_instance->getDerivedAchievements($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getDerivedAchievements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the derived achievement |

### Return type

[**\KnetikCloud\Model\AchievementDefinitionResource[]**](../Model/AchievementDefinitionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAchievementProgress**
> \KnetikCloud\Model\UserAchievementGroupResource getUserAchievementProgress($user_id, $achievement_name)

Retrieve progress on a given achievement for a given user

Assets will not be filled in on the resources returned. Use 'Get a single poll' to retrieve the full resource with assets for a given item as needed. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user's id
$achievement_name = "achievement_name_example"; // string | The achievement's name

try {
    $result = $api_instance->getUserAchievementProgress($user_id, $achievement_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getUserAchievementProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user&#39;s id |
 **achievement_name** | **string**| The achievement&#39;s name |

### Return type

[**\KnetikCloud\Model\UserAchievementGroupResource**](../Model/UserAchievementGroupResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAchievementsProgress**
> \KnetikCloud\Model\PageResourceUserAchievementGroupResource_ getUserAchievementsProgress($user_id, $filter_achievement_derived, $filter_achievement_tagset, $filter_achievement_name, $size, $page)

Retrieve progress on achievements for a given user

Assets will not be filled in on the resources returned. Use 'Get a single poll' to retrieve the full resource with assets for a given item as needed. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user's id
$filter_achievement_derived = true; // bool | Filter for achievements that are derived from other services
$filter_achievement_tagset = "filter_achievement_tagset_example"; // string | Filter for achievements with specified tags (separated by comma)
$filter_achievement_name = "filter_achievement_name_example"; // string | Filter for achievements whose name contains a string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUserAchievementsProgress($user_id, $filter_achievement_derived, $filter_achievement_tagset, $filter_achievement_name, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getUserAchievementsProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user&#39;s id |
 **filter_achievement_derived** | **bool**| Filter for achievements that are derived from other services | [optional]
 **filter_achievement_tagset** | **string**| Filter for achievements with specified tags (separated by comma) | [optional]
 **filter_achievement_name** | **string**| Filter for achievements whose name contains a string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUserAchievementGroupResource_**](../Model/PageResourceUserAchievementGroupResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersAchievementProgress**
> \KnetikCloud\Model\PageResourceUserAchievementGroupResource_ getUsersAchievementProgress($achievement_name, $filter_achievement_derived, $filter_achievement_tagset, $filter_achievement_name, $size, $page)

Retrieve progress on a given achievement for all users

Assets will not be filled in on the resources returned. Use 'Get single achievement progress for user' to retrieve the full resource with assets for a given user as needed. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$achievement_name = "achievement_name_example"; // string | The achievement's name
$filter_achievement_derived = true; // bool | Filter for achievements that are derived from other services
$filter_achievement_tagset = "filter_achievement_tagset_example"; // string | Filter for achievements with specified tags (separated by comma)
$filter_achievement_name = "filter_achievement_name_example"; // string | Filter for achievements whose name contains a string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsersAchievementProgress($achievement_name, $filter_achievement_derived, $filter_achievement_tagset, $filter_achievement_name, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getUsersAchievementProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **achievement_name** | **string**| The achievement&#39;s name |
 **filter_achievement_derived** | **bool**| Filter for achievements that are derived from other services | [optional]
 **filter_achievement_tagset** | **string**| Filter for achievements with specified tags (separated by comma) | [optional]
 **filter_achievement_name** | **string**| Filter for achievements whose name contains a string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUserAchievementGroupResource_**](../Model/PageResourceUserAchievementGroupResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersAchievementsProgress**
> \KnetikCloud\Model\PageResourceUserAchievementGroupResource_ getUsersAchievementsProgress($filter_achievement_derived, $filter_achievement_tagset, $filter_achievement_name, $size, $page)

Retrieve progress on achievements for all users

Assets will not be filled in on the resources returned. Use 'Get single achievement progress for user' to retrieve the full resource with assets for a given user as needed. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$filter_achievement_derived = true; // bool | Filter for achievements that are derived from other services
$filter_achievement_tagset = "filter_achievement_tagset_example"; // string | Filter for achievements with specified tags (separated by comma)
$filter_achievement_name = "filter_achievement_name_example"; // string | Filter for achievements whose name contains a string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUsersAchievementsProgress($filter_achievement_derived, $filter_achievement_tagset, $filter_achievement_name, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->getUsersAchievementsProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_achievement_derived** | **bool**| Filter for achievements that are derived from other services | [optional]
 **filter_achievement_tagset** | **string**| Filter for achievements with specified tags (separated by comma) | [optional]
 **filter_achievement_name** | **string**| Filter for achievements whose name contains a string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceUserAchievementGroupResource_**](../Model/PageResourceUserAchievementGroupResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incrementAchievementProgress**
> \KnetikCloud\Model\UserAchievementGroupResource incrementAchievementProgress($user_id, $achievement_name, $progress)

Increment an achievement progress record for a user

If no progress record yet exists for the user, it will be created. Otherwise it will be updated and the provided value added to the existing progress. May be negative. If progress meets or exceeds the achievement's max_value it will be marked as earned and a BRE event will be triggered for the <code>BreAchievementEarnedTrigger</code>. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user's id
$achievement_name = "achievement_name_example"; // string | The achievement's name
$progress = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The amount to add to the progress value

try {
    $result = $api_instance->incrementAchievementProgress($user_id, $achievement_name, $progress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->incrementAchievementProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user&#39;s id |
 **achievement_name** | **string**| The achievement&#39;s name |
 **progress** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The amount to add to the progress value | [optional]

### Return type

[**\KnetikCloud\Model\UserAchievementGroupResource**](../Model/UserAchievementGroupResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAchievementProgress**
> \KnetikCloud\Model\UserAchievementGroupResource setAchievementProgress($user_id, $achievement_name, $progress)

Set an achievement progress record for a user

If no progress record yet exists for the user, it will be created. Otherwise it will be updated and progress set to the provided value. If progress meets or exceeds the achievement's max_value it will be marked as earned and a BRE event will be triggered for the <code>BreAchievementEarnedTrigger</code>. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user's id
$achievement_name = "achievement_name_example"; // string | The achievement's name
$progress = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The new progress value

try {
    $result = $api_instance->setAchievementProgress($user_id, $achievement_name, $progress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->setAchievementProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user&#39;s id |
 **achievement_name** | **string**| The achievement&#39;s name |
 **progress** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The new progress value | [optional]

### Return type

[**\KnetikCloud\Model\UserAchievementGroupResource**](../Model/UserAchievementGroupResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAchievement**
> \KnetikCloud\Model\AchievementDefinitionResource updateAchievement($name, $achievement)

Update an achievement definition

The existing generated rule, if any, will be deleted. A new rule will be created if a trigger event name is specified in the new version. <br><br><b>Permissions Needed:</b> ACHIEVEMENTS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The name of the achievement
$achievement = new \KnetikCloud\Model\AchievementDefinitionResource(); // \KnetikCloud\Model\AchievementDefinitionResource | The achievement definition

try {
    $result = $api_instance->updateAchievement($name, $achievement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->updateAchievement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the achievement |
 **achievement** | [**\KnetikCloud\Model\AchievementDefinitionResource**](../Model/AchievementDefinitionResource.md)| The achievement definition | [optional]

### Return type

[**\KnetikCloud\Model\AchievementDefinitionResource**](../Model/AchievementDefinitionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAchievementTemplate**
> \KnetikCloud\Model\TemplateResource updateAchievementTemplate($id, $template)

Update an achievement template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationAchievementsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$template = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The updated template

try {
    $result = $api_instance->updateAchievementTemplate($id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationAchievementsApi->updateAchievementTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **template** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The updated template | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

