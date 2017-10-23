# KnetikCloud\UsersApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserTag**](UsersApi.md#addUserTag) | **POST** /users/{user_id}/tags | Add a tag to a user
[**createUserTemplate**](UsersApi.md#createUserTemplate) | **POST** /users/templates | Create a user template
[**deleteUserTemplate**](UsersApi.md#deleteUserTemplate) | **DELETE** /users/templates/{id} | Delete a user template
[**getUser**](UsersApi.md#getUser) | **GET** /users/{id} | Get a single user
[**getUserTags**](UsersApi.md#getUserTags) | **GET** /users/{user_id}/tags | List tags for a user
[**getUserTemplate**](UsersApi.md#getUserTemplate) | **GET** /users/templates/{id} | Get a single user template
[**getUserTemplates**](UsersApi.md#getUserTemplates) | **GET** /users/templates | List and search user templates
[**getUsers**](UsersApi.md#getUsers) | **GET** /users | List and search users
[**passwordReset**](UsersApi.md#passwordReset) | **PUT** /users/{id}/password-reset | Choose a new password after a reset
[**registerUser**](UsersApi.md#registerUser) | **POST** /users | Register a new user
[**removeUserTag**](UsersApi.md#removeUserTag) | **DELETE** /users/{user_id}/tags/{tag} | Remove a tag from a user
[**setPassword**](UsersApi.md#setPassword) | **PUT** /users/{id}/password | Set a user&#39;s password
[**startPasswordReset**](UsersApi.md#startPasswordReset) | **POST** /users/{id}/password-reset | Reset a user&#39;s password
[**submitPasswordReset**](UsersApi.md#submitPasswordReset) | **POST** /users/password-reset | Reset a user&#39;s password without user id
[**updateUser**](UsersApi.md#updateUser) | **PUT** /users/{id} | Update a user
[**updateUserTemplate**](UsersApi.md#updateUserTemplate) | **PUT** /users/templates/{id} | Update a user template


# **addUserTag**
> addUserTag($user_id, $tag)

Add a tag to a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$tag = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | tag

try {
    $api_instance->addUserTag($user_id, $tag);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->addUserTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **tag** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| tag |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUserTemplate**
> \KnetikCloud\Model\TemplateResource createUserTemplate($user_template_resource)

Create a user template

User Templates define a type of user and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$user_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The user template resource object

try {
    $result = $api_instance->createUserTemplate($user_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUserTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The user template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserTemplate**
> deleteUserTemplate($id, $cascade)

Delete a user template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteUserTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getUser**
> \KnetikCloud\Model\UserResource getUser($id)

Get a single user

Additional private info is included as USERS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the user or 'me'

try {
    $result = $api_instance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user or &#39;me&#39; |

### Return type

[**\KnetikCloud\Model\UserResource**](../Model/UserResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTags**
> string[] getUserTags($user_id)

List tags for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user

try {
    $result = $api_instance->getUserTags($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |

### Return type

**string[]**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTemplate**
> \KnetikCloud\Model\TemplateResource getUserTemplate($id)

Get a single user template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getUserTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getUserTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getUserTemplates($size, $page, $order)

List and search user templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUserTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserTemplates: ', $e->getMessage(), PHP_EOL;
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

# **getUsers**
> \KnetikCloud\Model\PageResourceUserBaseResource_ getUsers($filter_displayname, $filter_email, $filter_firstname, $filter_fullname, $filter_lastname, $filter_username, $filter_tag, $filter_group, $filter_role, $filter_last_activity, $filter_id_list, $filter_search, $size, $page, $order)

List and search users

Additional private info is included as USERS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$filter_displayname = "filter_displayname_example"; // string | Filter for users whose display name starts with provided string.
$filter_email = "filter_email_example"; // string | Filter for users whose email starts with provided string. Requires USERS_ADMIN permission
$filter_firstname = "filter_firstname_example"; // string | Filter for users whose first name starts with provided string. Requires USERS_ADMIN permission
$filter_fullname = "filter_fullname_example"; // string | Filter for users whose full name starts with provided string. Requires USERS_ADMIN permission
$filter_lastname = "filter_lastname_example"; // string | Filter for users whose last name starts with provided string. Requires USERS_ADMIN permission
$filter_username = "filter_username_example"; // string | Filter for users whose username starts with the provided string. Requires USERS_ADMIN permission
$filter_tag = "filter_tag_example"; // string | Filter for users who have a given tag
$filter_group = "filter_group_example"; // string | Filter for users in a given group, by unique name
$filter_role = "filter_role_example"; // string | Filter for users with a given role
$filter_last_activity = "filter_last_activity_example"; // string | A comma separated string without spaces.  First value is the operator to search on, second value is the date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE).
$filter_id_list = "filter_id_list_example"; // string | A comma separated list of ids.
$filter_search = "filter_search_example"; // string | Filter for users whose display_name starts with the provided string, or username if display_name is null
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getUsers($filter_displayname, $filter_email, $filter_firstname, $filter_fullname, $filter_lastname, $filter_username, $filter_tag, $filter_group, $filter_role, $filter_last_activity, $filter_id_list, $filter_search, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_displayname** | **string**| Filter for users whose display name starts with provided string. | [optional]
 **filter_email** | **string**| Filter for users whose email starts with provided string. Requires USERS_ADMIN permission | [optional]
 **filter_firstname** | **string**| Filter for users whose first name starts with provided string. Requires USERS_ADMIN permission | [optional]
 **filter_fullname** | **string**| Filter for users whose full name starts with provided string. Requires USERS_ADMIN permission | [optional]
 **filter_lastname** | **string**| Filter for users whose last name starts with provided string. Requires USERS_ADMIN permission | [optional]
 **filter_username** | **string**| Filter for users whose username starts with the provided string. Requires USERS_ADMIN permission | [optional]
 **filter_tag** | **string**| Filter for users who have a given tag | [optional]
 **filter_group** | **string**| Filter for users in a given group, by unique name | [optional]
 **filter_role** | **string**| Filter for users with a given role | [optional]
 **filter_last_activity** | **string**| A comma separated string without spaces.  First value is the operator to search on, second value is the date, a unix timestamp in seconds.  Allowed operators: (GT, LT, EQ, GOE, LOE). | [optional]
 **filter_id_list** | **string**| A comma separated list of ids. | [optional]
 **filter_search** | **string**| Filter for users whose display_name starts with the provided string, or username if display_name is null | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceUserBaseResource_**](../Model/PageResourceUserBaseResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordReset**
> passwordReset($id, $new_password_request)

Choose a new password after a reset

Finish resetting a user's password using the secret provided from the password-reset endpoint.  Password should be in plain text and will be encrypted on receipt. Use SSL for security.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the user
$new_password_request = new \KnetikCloud\Model\NewPasswordRequest(); // \KnetikCloud\Model\NewPasswordRequest | The new password request object

try {
    $api_instance->passwordReset($id, $new_password_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->passwordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the user |
 **new_password_request** | [**\KnetikCloud\Model\NewPasswordRequest**](../Model/NewPasswordRequest.md)| The new password request object | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerUser**
> \KnetikCloud\Model\UserResource registerUser($user_resource)

Register a new user

Password should be in plain text and will be encrypted on receipt. Use SSL for security

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$user_resource = new \KnetikCloud\Model\UserResource(); // \KnetikCloud\Model\UserResource | The user resource object

try {
    $result = $api_instance->registerUser($user_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->registerUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_resource** | [**\KnetikCloud\Model\UserResource**](../Model/UserResource.md)| The user resource object | [optional]

### Return type

[**\KnetikCloud\Model\UserResource**](../Model/UserResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserTag**
> removeUserTag($user_id, $tag)

Remove a tag from a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$tag = "tag_example"; // string | The tag to remove

try {
    $api_instance->removeUserTag($user_id, $tag);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->removeUserTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **tag** | **string**| The tag to remove |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPassword**
> setPassword($id, $password)

Set a user's password

Password should be in plain text and will be encrypted on receipt. Use SSL for security.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the user
$password = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The new plain text password

try {
    $api_instance->setPassword($id, $password);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the user |
 **password** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The new plain text password | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPasswordReset**
> startPasswordReset($id)

Reset a user's password

A reset code will be generated and a 'forgot_password' BRE event will be fired with that code.  The default system rule will send an email to the selected user if an email service has been setup. You can modify that rule in BRE to send an SMS instead or any other type of notification as you see fit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = 56; // int | The id of the user

try {
    $api_instance->startPasswordReset($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->startPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the user |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitPasswordReset**
> submitPasswordReset($password_reset)

Reset a user's password without user id

A reset code will be generated and a 'forgot_password' BRE event will be fired with that code.  The default system rule will send an email to the selected user if an email service has been setup. You can modify that rule in BRE to send an SMS instead or any other type of notification as you see fit.  Must submit their email, username, or mobile phone number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$password_reset = new \KnetikCloud\Model\PasswordResetRequest(); // \KnetikCloud\Model\PasswordResetRequest | An object containing one of three methods to look up a user

try {
    $api_instance->submitPasswordReset($password_reset);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->submitPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_reset** | [**\KnetikCloud\Model\PasswordResetRequest**](../Model/PasswordResetRequest.md)| An object containing one of three methods to look up a user | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> updateUser($id, $user_resource)

Update a user

Password will not be edited on this endpoint, use password specific endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the user or 'me'
$user_resource = new \KnetikCloud\Model\UserResource(); // \KnetikCloud\Model\UserResource | The user resource object

try {
    $api_instance->updateUser($id, $user_resource);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user or &#39;me&#39; |
 **user_resource** | [**\KnetikCloud\Model\UserResource**](../Model/UserResource.md)| The user resource object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserTemplate**
> \KnetikCloud\Model\TemplateResource updateUserTemplate($id, $user_template_resource)

Update a user template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$user_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The user template resource object

try {
    $result = $api_instance->updateUserTemplate($id, $user_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUserTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **user_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The user template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

