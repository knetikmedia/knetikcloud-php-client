# KnetikCloud\Campaigns_RewardsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRewardSet**](Campaigns_RewardsApi.md#createRewardSet) | **POST** /rewards | Create a reward set
[**deleteRewardSet**](Campaigns_RewardsApi.md#deleteRewardSet) | **DELETE** /rewards/{id} | Delete a reward set
[**getRewardSet**](Campaigns_RewardsApi.md#getRewardSet) | **GET** /rewards/{id} | Get a single reward set
[**getRewardSets**](Campaigns_RewardsApi.md#getRewardSets) | **GET** /rewards | List and search reward sets
[**updateRewardSet**](Campaigns_RewardsApi.md#updateRewardSet) | **PUT** /rewards/{id} | Update a reward set


# **createRewardSet**
> \KnetikCloud\Model\RewardSetResource createRewardSet($reward_set_resource)

Create a reward set

<b>Permissions Needed:</b> REWARDS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Campaigns_RewardsApi(new \Http\Adapter\Guzzle6\Client());
$reward_set_resource = new \KnetikCloud\Model\RewardSetResource(); // \KnetikCloud\Model\RewardSetResource | The reward set resource object

try {
    $result = $api_instance->createRewardSet($reward_set_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Campaigns_RewardsApi->createRewardSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_set_resource** | [**\KnetikCloud\Model\RewardSetResource**](../Model/RewardSetResource.md)| The reward set resource object | [optional]

### Return type

[**\KnetikCloud\Model\RewardSetResource**](../Model/RewardSetResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRewardSet**
> deleteRewardSet($id)

Delete a reward set

<b>Permissions Needed:</b> REWARDS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Campaigns_RewardsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The reward id

try {
    $api_instance->deleteRewardSet($id);
} catch (Exception $e) {
    echo 'Exception when calling Campaigns_RewardsApi->deleteRewardSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The reward id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRewardSet**
> \KnetikCloud\Model\RewardSetResource getRewardSet($id)

Get a single reward set

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Campaigns_RewardsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The reward id

try {
    $result = $api_instance->getRewardSet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Campaigns_RewardsApi->getRewardSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The reward id |

### Return type

[**\KnetikCloud\Model\RewardSetResource**](../Model/RewardSetResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRewardSets**
> \KnetikCloud\Model\PageResourceRewardSetResource_ getRewardSets($size, $page, $order)

List and search reward sets

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Campaigns_RewardsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getRewardSets($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Campaigns_RewardsApi->getRewardSets: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceRewardSetResource_**](../Model/PageResourceRewardSetResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRewardSet**
> \KnetikCloud\Model\RewardSetResource updateRewardSet($id, $reward_set_resource)

Update a reward set

<b>Permissions Needed:</b> REWARDS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Campaigns_RewardsApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The reward id
$reward_set_resource = new \KnetikCloud\Model\RewardSetResource(); // \KnetikCloud\Model\RewardSetResource | The reward set resource object

try {
    $result = $api_instance->updateRewardSet($id, $reward_set_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Campaigns_RewardsApi->updateRewardSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The reward id |
 **reward_set_resource** | [**\KnetikCloud\Model\RewardSetResource**](../Model/RewardSetResource.md)| The reward set resource object | [optional]

### Return type

[**\KnetikCloud\Model\RewardSetResource**](../Model/RewardSetResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

