# KnetikCloud\GamificationLevelingApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLevel**](GamificationLevelingApi.md#createLevel) | **POST** /leveling | Create a level schema
[**deleteLevel**](GamificationLevelingApi.md#deleteLevel) | **DELETE** /leveling/{name} | Delete a level
[**getLevel**](GamificationLevelingApi.md#getLevel) | **GET** /leveling/{name} | Retrieve a level
[**getLevelTriggers**](GamificationLevelingApi.md#getLevelTriggers) | **GET** /leveling/triggers | Get the list of triggers that can be used to trigger a leveling progress update
[**getLevels**](GamificationLevelingApi.md#getLevels) | **GET** /leveling | List and search levels
[**getUserLevel**](GamificationLevelingApi.md#getUserLevel) | **GET** /users/{user_id}/leveling/{name} | Get a user&#39;s progress for a given level schema
[**getUserLevels**](GamificationLevelingApi.md#getUserLevels) | **GET** /users/{user_id}/leveling | Get a user&#39;s progress for all level schemas
[**incrementProgress**](GamificationLevelingApi.md#incrementProgress) | **POST** /users/{user_id}/leveling/{name}/progress | Update or create a leveling progress record for a user
[**setProgress**](GamificationLevelingApi.md#setProgress) | **PUT** /users/{user_id}/leveling/{name}/progress | Set leveling progress for a user
[**updateLevel**](GamificationLevelingApi.md#updateLevel) | **PUT** /leveling/{name} | Update a level


# **createLevel**
> \KnetikCloud\Model\LevelingResource createLevel($level)

Create a level schema

<b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$level = new \KnetikCloud\Model\LevelingResource(); // \KnetikCloud\Model\LevelingResource | The level schema definition

try {
    $result = $api_instance->createLevel($level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->createLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**\KnetikCloud\Model\LevelingResource**](../Model/LevelingResource.md)| The level schema definition | [optional]

### Return type

[**\KnetikCloud\Model\LevelingResource**](../Model/LevelingResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLevel**
> deleteLevel($name)

Delete a level

<b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The level schema name

try {
    $api_instance->deleteLevel($name);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->deleteLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The level schema name |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLevel**
> \KnetikCloud\Model\LevelingResource getLevel($name)

Retrieve a level

<b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The level schema name

try {
    $result = $api_instance->getLevel($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->getLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The level schema name |

### Return type

[**\KnetikCloud\Model\LevelingResource**](../Model/LevelingResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLevelTriggers**
> \KnetikCloud\Model\BreTriggerResource[] getLevelTriggers()

Get the list of triggers that can be used to trigger a leveling progress update

<b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getLevelTriggers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->getLevelTriggers: ', $e->getMessage(), PHP_EOL;
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

# **getLevels**
> \KnetikCloud\Model\PageResourceLevelingResource_ getLevels($filter_name, $size, $page, $order)

List and search levels

Get a list of levels schemas with optional filtering. <br><br><b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$filter_name = "filter_name_example"; // string | Filter for level schemas whose name contains a given string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "name:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getLevels($filter_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->getLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name** | **string**| Filter for level schemas whose name contains a given string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to name:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceLevelingResource_**](../Model/PageResourceLevelingResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLevel**
> \KnetikCloud\Model\UserLevelingResource getUserLevel($user_id, $name)

Get a user's progress for a given level schema

<b>Permissions Needed:</b> LEVELING_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me'
$name = "name_example"; // string | The level schema name

try {
    $result = $api_instance->getUserLevel($user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->getUserLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; |
 **name** | **string**| The level schema name |

### Return type

[**\KnetikCloud\Model\UserLevelingResource**](../Model/UserLevelingResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLevels**
> \KnetikCloud\Model\PageResourceUserLevelingResource_ getUserLevels($user_id, $filter_name, $size, $page, $order)

Get a user's progress for all level schemas

Filtering and sorting is based on the LevelingResource object, not the UserLevelingResource that is returned here. <br><br><b>Permissions Needed:</b> LEVELING_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me'
$filter_name = "filter_name_example"; // string | Filter for level schemas whose name contains a given string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserLevels($user_id, $filter_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->getUserLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; |
 **filter_name** | **string**| Filter for level schemas whose name contains a given string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceUserLevelingResource_**](../Model/PageResourceUserLevelingResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incrementProgress**
> incrementProgress($user_id, $name, $progress)

Update or create a leveling progress record for a user

If no progress record yet exists for the user, it will be created. Otherwise the provided value will be added to it. May be negative. If progress meets or exceeds the level's max_value it will be marked as earned and a BRE event will be triggered for the <code>BreAchievementEarnedTrigger</code>. <br><br><b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$name = "name_example"; // string | The level schema name
$progress = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The amount of progress to add

try {
    $api_instance->incrementProgress($user_id, $name, $progress);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->incrementProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **name** | **string**| The level schema name |
 **progress** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The amount of progress to add | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProgress**
> setProgress($user_id, $name, $progress)

Set leveling progress for a user

If no progress record yet exists for the user, it will be created. Otherwise it will be updated to the provided value. If progress meets or exceeds the level's max_value it will be marked as earned and a BRE event will be triggered for the <code>BreAchievementEarnedTrigger</code>. <br><br><b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$name = "name_example"; // string | The level schema name
$progress = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The new progress amount

try {
    $api_instance->setProgress($user_id, $name, $progress);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->setProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **name** | **string**| The level schema name |
 **progress** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The new progress amount | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLevel**
> \KnetikCloud\Model\LevelingResource updateLevel($name, $new_level)

Update a level

<b>Permissions Needed:</b> LEVELING_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLevelingApi(new \Http\Adapter\Guzzle6\Client());
$name = "name_example"; // string | The level schema name
$new_level = new \KnetikCloud\Model\LevelingResource(); // \KnetikCloud\Model\LevelingResource | The level schema definition

try {
    $result = $api_instance->updateLevel($name, $new_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLevelingApi->updateLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The level schema name |
 **new_level** | [**\KnetikCloud\Model\LevelingResource**](../Model/LevelingResource.md)| The level schema definition | [optional]

### Return type

[**\KnetikCloud\Model\LevelingResource**](../Model/LevelingResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

