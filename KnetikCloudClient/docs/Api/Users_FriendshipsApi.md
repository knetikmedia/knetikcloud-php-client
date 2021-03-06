# KnetikCloud\Users_FriendshipsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFriend**](Users_FriendshipsApi.md#addFriend) | **POST** /users/{user_id}/friends/{id} | Add a friend
[**getFriends**](Users_FriendshipsApi.md#getFriends) | **GET** /users/{user_id}/friends | Get friends list
[**getInviteToken**](Users_FriendshipsApi.md#getInviteToken) | **GET** /users/{user_id}/invite-token | Returns the invite token
[**getInvites**](Users_FriendshipsApi.md#getInvites) | **GET** /users/{user_id}/invites | Get pending invites
[**redeemFriendshipToken**](Users_FriendshipsApi.md#redeemFriendshipToken) | **POST** /users/{user_id}/friends/tokens | Redeem friendship token
[**removeOrDeclineFriend**](Users_FriendshipsApi.md#removeOrDeclineFriend) | **DELETE** /users/{user_id}/friends/{id} | Remove or decline a friend


# **addFriend**
> addFriend($user_id, $id)

Add a friend

As a user, either creates or confirm a pending request. As an admin, call this endpoint twice while inverting the IDs to create a confirmed friendship. <br><br><b>Permissions Needed:</b> FRIENDSHIPS_ADMIN or (FRIENDSHIPS_USER and owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_FriendshipsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me' if logged in
$id = 56; // int | The id of the user to befriend

try {
    $api_instance->addFriend($user_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling Users_FriendshipsApi->addFriend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; if logged in |
 **id** | **int**| The id of the user to befriend |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFriends**
> \KnetikCloud\Model\PageResourceSimpleUserResource_ getFriends($user_id, $filter_username, $filter_user_id, $size, $page)

Get friends list

<b>Permissions Needed:</b> FRIENDSHIPS_ADMIN or (FRIENDSHIPS_USER and owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_FriendshipsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me'
$filter_username = "filter_username_example"; // string | Filter for friends with the given username
$filter_user_id = 56; // int | Filter for friends by user id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getFriends($user_id, $filter_username, $filter_user_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_FriendshipsApi->getFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; |
 **filter_username** | **string**| Filter for friends with the given username | [optional]
 **filter_user_id** | **int**| Filter for friends by user id | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceSimpleUserResource_**](../Model/PageResourceSimpleUserResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInviteToken**
> string getInviteToken($user_id)

Returns the invite token

This is a unique invite token that allows direct connection to the request user.  Exposing that token presents privacy issues if the token is leaked. Use friend request flow instead if confirmation is required. <br><br><b>Permissions Needed:</b> FRIENDSHIPS_ADMIN or (FRIENDSHIPS_USER and owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_FriendshipsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me' if logged in

try {
    $result = $api_instance->getInviteToken($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_FriendshipsApi->getInviteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; if logged in |

### Return type

**string**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvites**
> \KnetikCloud\Model\PageResourceSimpleUserResource_ getInvites($user_id, $size, $page)

Get pending invites

Invites that the specified user received. <br><br><b>Permissions Needed:</b> FRIENDSHIPS_ADMIN or (FRIENDSHIPS_USER and owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_FriendshipsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me'
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getInvites($user_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_FriendshipsApi->getInvites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceSimpleUserResource_**](../Model/PageResourceSimpleUserResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redeemFriendshipToken**
> redeemFriendshipToken($user_id, $token)

Redeem friendship token

Immediately connects the requested user with the user mapped by the provided invite token. <br><br><b>Permissions Needed:</b> FRIENDSHIPS_ADMIN or (FRIENDSHIPS_USER and owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_FriendshipsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me' if logged in
$token = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The invite token

try {
    $api_instance->redeemFriendshipToken($user_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling Users_FriendshipsApi->redeemFriendshipToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; if logged in |
 **token** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The invite token | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeOrDeclineFriend**
> removeOrDeclineFriend($user_id, $id)

Remove or decline a friend

<b>Permissions Needed:</b> FRIENDSHIPS_ADMIN or (FRIENDSHIPS_USER and owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_FriendshipsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = "user_id_example"; // string | The id of the user or 'me' if logged in
$id = 56; // int | The id of the user to befriend

try {
    $api_instance->removeOrDeclineFriend($user_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling Users_FriendshipsApi->removeOrDeclineFriend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user or &#39;me&#39; if logged in |
 **id** | **int**| The id of the user to befriend |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

