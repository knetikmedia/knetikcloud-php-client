# KnetikCloud\GamificationLeaderboardsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLeaderboard**](GamificationLeaderboardsApi.md#getLeaderboard) | **GET** /leaderboards/{context_type}/{context_id} | Retrieves leaderboard details and paginated entries
[**getLeaderboardRank**](GamificationLeaderboardsApi.md#getLeaderboardRank) | **GET** /leaderboards/{context_type}/{context_id}/users/{id}/rank | Retrieves a specific user entry with rank
[**getLeaderboardStrategies**](GamificationLeaderboardsApi.md#getLeaderboardStrategies) | **GET** /leaderboards/strategies | Get a list of available leaderboard strategy names


# **getLeaderboard**
> \KnetikCloud\Model\LeaderboardResource getLeaderboard($context_type, $context_id, $size, $page, $order)

Retrieves leaderboard details and paginated entries

The context type identifies the type of entity (i.e., 'activity') being tracked on the leaderboard. The context ID is the unique ID of the actual entity tracked by the leaderboard. Sorting is based on the fields of LeaderboardEntryResource rather than the returned LeaderboardResource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\GamificationLeaderboardsApi();
$context_type = "context_type_example"; // string | The context type for the leaderboard
$context_id = "context_id_example"; // string | The context id for the leaderboard
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "score:DESC,updated:ASC,user_id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getLeaderboard($context_type, $context_id, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLeaderboardsApi->getLeaderboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context_type** | **string**| The context type for the leaderboard |
 **context_id** | **string**| The context id for the leaderboard |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to score:DESC,updated:ASC,user_id:ASC]

### Return type

[**\KnetikCloud\Model\LeaderboardResource**](../Model/LeaderboardResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardRank**
> \KnetikCloud\Model\LeaderboardEntryResource getLeaderboardRank($context_type, $context_id, $id)

Retrieves a specific user entry with rank

The context type identifies the type of entity (i.e., 'activity') being tracked on the leaderboard. The context ID is the unique ID of the actual entity tracked by the leaderboard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationLeaderboardsApi();
$context_type = "context_type_example"; // string | The context type for the leaderboard
$context_id = "context_id_example"; // string | The context id for the leaderboard
$id = "id_example"; // string | The id of a user

try {
    $result = $api_instance->getLeaderboardRank($context_type, $context_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLeaderboardsApi->getLeaderboardRank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context_type** | **string**| The context type for the leaderboard |
 **context_id** | **string**| The context id for the leaderboard |
 **id** | **string**| The id of a user |

### Return type

[**\KnetikCloud\Model\LeaderboardEntryResource**](../Model/LeaderboardEntryResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardStrategies**
> string[] getLeaderboardStrategies()

Get a list of available leaderboard strategy names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\GamificationLeaderboardsApi();

try {
    $result = $api_instance->getLeaderboardStrategies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationLeaderboardsApi->getLeaderboardStrategies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
