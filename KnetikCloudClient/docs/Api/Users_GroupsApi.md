# KnetikCloud\Users_GroupsApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMemberToGroup**](Users_GroupsApi.md#addMemberToGroup) | **POST** /users/groups/{unique_name}/members | Adds a new member to the group
[**addMembersToGroup**](Users_GroupsApi.md#addMembersToGroup) | **POST** /users/groups/{unique_name}/members/batch-add | Adds multiple members to the group
[**createGroup**](Users_GroupsApi.md#createGroup) | **POST** /users/groups | Create a group
[**createGroupMemberTemplate**](Users_GroupsApi.md#createGroupMemberTemplate) | **POST** /users/groups/members/templates | Create an group member template
[**createGroupTemplate**](Users_GroupsApi.md#createGroupTemplate) | **POST** /users/groups/templates | Create a group template
[**deleteGroup**](Users_GroupsApi.md#deleteGroup) | **DELETE** /users/groups/{unique_name} | Removes a group from the system
[**deleteGroupMemberTemplate**](Users_GroupsApi.md#deleteGroupMemberTemplate) | **DELETE** /users/groups/members/templates/{id} | Delete an group member template
[**deleteGroupTemplate**](Users_GroupsApi.md#deleteGroupTemplate) | **DELETE** /users/groups/templates/{id} | Delete a group template
[**disableGroupNotification**](Users_GroupsApi.md#disableGroupNotification) | **PUT** /users/groups/{unique_name}/members/{user_id}/messages/disabled | Enable or disable notification of group messages
[**getGroup**](Users_GroupsApi.md#getGroup) | **GET** /users/groups/{unique_name} | Loads a specific group&#39;s details
[**getGroupAncestors**](Users_GroupsApi.md#getGroupAncestors) | **GET** /users/groups/{unique_name}/ancestors | Get group ancestors
[**getGroupMember**](Users_GroupsApi.md#getGroupMember) | **GET** /users/groups/{unique_name}/members/{user_id} | Get a user from a group
[**getGroupMemberTemplate**](Users_GroupsApi.md#getGroupMemberTemplate) | **GET** /users/groups/members/templates/{id} | Get a single group member template
[**getGroupMemberTemplates**](Users_GroupsApi.md#getGroupMemberTemplates) | **GET** /users/groups/members/templates | List and search group member templates
[**getGroupMembers**](Users_GroupsApi.md#getGroupMembers) | **GET** /users/groups/{unique_name}/members | Lists members of the group
[**getGroupMessages**](Users_GroupsApi.md#getGroupMessages) | **GET** /users/groups/{unique_name}/messages | Get a list of group messages
[**getGroupTemplate**](Users_GroupsApi.md#getGroupTemplate) | **GET** /users/groups/templates/{id} | Get a single group template
[**getGroupTemplates**](Users_GroupsApi.md#getGroupTemplates) | **GET** /users/groups/templates | List and search group templates
[**getGroupsForUser**](Users_GroupsApi.md#getGroupsForUser) | **GET** /users/{user_id}/groups | List groups a user is in
[**listGroups**](Users_GroupsApi.md#listGroups) | **GET** /users/groups | List and search groups
[**postGroupMessage**](Users_GroupsApi.md#postGroupMessage) | **POST** /users/groups/{unique_name}/messages | Send a group message
[**removeGroupMember**](Users_GroupsApi.md#removeGroupMember) | **DELETE** /users/groups/{unique_name}/members/{user_id} | Removes a user from a group
[**updateGroup**](Users_GroupsApi.md#updateGroup) | **PUT** /users/groups/{unique_name} | Update a group
[**updateGroupMemberProperties**](Users_GroupsApi.md#updateGroupMemberProperties) | **PUT** /users/groups/{unique_name}/members/{user_id}/order | Change a user&#39;s order
[**updateGroupMemberProperties1**](Users_GroupsApi.md#updateGroupMemberProperties1) | **PUT** /users/groups/{unique_name}/members/{user_id}/properties | Change a user&#39;s membership properties
[**updateGroupMemberStatus**](Users_GroupsApi.md#updateGroupMemberStatus) | **PUT** /users/groups/{unique_name}/members/{user_id}/status | Change a user&#39;s status
[**updateGroupMemberTemplate**](Users_GroupsApi.md#updateGroupMemberTemplate) | **PUT** /users/groups/members/templates/{id} | Update an group member template
[**updateGroupTemplate**](Users_GroupsApi.md#updateGroupTemplate) | **PUT** /users/groups/templates/{id} | Update a group template


# **addMemberToGroup**
> \KnetikCloud\Model\GroupMemberResource addMemberToGroup($unique_name, $user)

Adds a new member to the group

<b>Permissions Needed:</b> GROUP_ADMIN or self if open

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user = new \KnetikCloud\Model\GroupMemberResource(); // \KnetikCloud\Model\GroupMemberResource | The id and status for a user to add to the group

try {
    $result = $api_instance->addMemberToGroup($unique_name, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->addMemberToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user** | [**\KnetikCloud\Model\GroupMemberResource**](../Model/GroupMemberResource.md)| The id and status for a user to add to the group |

### Return type

[**\KnetikCloud\Model\GroupMemberResource**](../Model/GroupMemberResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMembersToGroup**
> \KnetikCloud\Model\GroupMemberResource[] addMembersToGroup($unique_name, $users)

Adds multiple members to the group

<b>Permissions Needed:</b> GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$users = array(new \KnetikCloud\Model\GroupMemberResource()); // \KnetikCloud\Model\GroupMemberResource[] | The id and status for a list of users to add to the group

try {
    $result = $api_instance->addMembersToGroup($unique_name, $users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->addMembersToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **users** | [**\KnetikCloud\Model\GroupMemberResource[]**](../Model/GroupMemberResource.md)| The id and status for a list of users to add to the group |

### Return type

[**\KnetikCloud\Model\GroupMemberResource[]**](../Model/GroupMemberResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \KnetikCloud\Model\GroupResource createGroup($group_resource)

Create a group

<b>Permissions Needed:</b> GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$group_resource = new \KnetikCloud\Model\GroupResource(); // \KnetikCloud\Model\GroupResource | The new group

try {
    $result = $api_instance->createGroup($group_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_resource** | [**\KnetikCloud\Model\GroupResource**](../Model/GroupResource.md)| The new group | [optional]

### Return type

[**\KnetikCloud\Model\GroupResource**](../Model/GroupResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroupMemberTemplate**
> \KnetikCloud\Model\TemplateResource createGroupMemberTemplate($group_member_template_resource)

Create an group member template

GroupMember Templates define a type of group member and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$group_member_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The group member template resource object

try {
    $result = $api_instance->createGroupMemberTemplate($group_member_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->createGroupMemberTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_member_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The group member template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroupTemplate**
> \KnetikCloud\Model\TemplateResource createGroupTemplate($group_template_resource)

Create a group template

Group Templates define a type of group and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$group_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The group template resource object

try {
    $result = $api_instance->createGroupTemplate($group_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->createGroupTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The group template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($unique_name)

Removes a group from the system

All groups listing this as the parent are also removed and users are in turn removed from this and those groups. This may result in users no longer being in this group's parent if they were not added to it directly as well. <br><br><b>Permissions Needed:</b> GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name

try {
    $api_instance->deleteGroup($unique_name);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupMemberTemplate**
> deleteGroupMemberTemplate($id, $cascade)

Delete an group member template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteGroupMemberTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->deleteGroupMemberTemplate: ', $e->getMessage(), PHP_EOL;
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

# **deleteGroupTemplate**
> deleteGroupTemplate($id, $cascade)

Delete a group template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteGroupTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->deleteGroupTemplate: ', $e->getMessage(), PHP_EOL;
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

# **disableGroupNotification**
> disableGroupNotification($unique_name, $user_id, $disabled)

Enable or disable notification of group messages

<b>Permissions Needed:</b> TOPICS_ADMIN or self

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = "user_id_example"; // string | The user id of the member or 'me'
$disabled = new \KnetikCloud\Model\ValueWrapperBoolean_(); // \KnetikCloud\Model\ValueWrapperBoolean_ | disabled

try {
    $api_instance->disableGroupNotification($unique_name, $user_id, $disabled);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->disableGroupNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **string**| The user id of the member or &#39;me&#39; |
 **disabled** | [**\KnetikCloud\Model\ValueWrapperBoolean_**](../Model/ValueWrapperBoolean_.md)| disabled |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \KnetikCloud\Model\GroupResource getGroup($unique_name)

Loads a specific group's details

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name

try {
    $result = $api_instance->getGroup($unique_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |

### Return type

[**\KnetikCloud\Model\GroupResource**](../Model/GroupResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupAncestors**
> \KnetikCloud\Model\GroupResource[] getGroupAncestors($unique_name)

Get group ancestors

Returns a list of ancestor groups in reverse order (parent, then grandparent, etc). <br><br><b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name

try {
    $result = $api_instance->getGroupAncestors($unique_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupAncestors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |

### Return type

[**\KnetikCloud\Model\GroupResource[]**](../Model/GroupResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMember**
> \KnetikCloud\Model\GroupMemberResource getGroupMember($unique_name, $user_id)

Get a user from a group

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The id of the user

try {
    $result = $api_instance->getGroupMember($unique_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **int**| The id of the user |

### Return type

[**\KnetikCloud\Model\GroupMemberResource**](../Model/GroupMemberResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMemberTemplate**
> \KnetikCloud\Model\TemplateResource getGroupMemberTemplate($id)

Get a single group member template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getGroupMemberTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupMemberTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getGroupMemberTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getGroupMemberTemplates($size, $page, $order)

List and search group member templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getGroupMemberTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupMemberTemplates: ', $e->getMessage(), PHP_EOL;
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

# **getGroupMembers**
> \KnetikCloud\Model\PageResourceGroupMemberResource_ getGroupMembers($unique_name, $size, $page, $order)

Lists members of the group

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "order:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getGroupMembers($unique_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to order:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceGroupMemberResource_**](../Model/PageResourceGroupMemberResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMessages**
> \KnetikCloud\Model\PageResourceChatMessageResource_ getGroupMessages($unique_name, $size, $page)

Get a list of group messages

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getGroupMessages($unique_name, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceChatMessageResource_**](../Model/PageResourceChatMessageResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupTemplate**
> \KnetikCloud\Model\TemplateResource getGroupTemplate($id)

Get a single group template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getGroupTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getGroupTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getGroupTemplates($size, $page, $order)

List and search group templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | a comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getGroupTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| a comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceTemplateResource_**](../Model/PageResourceTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsForUser**
> string[] getGroupsForUser($user_id, $filter_children)

List groups a user is in

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The id of the user
$filter_children = true; // bool | Whether to limit group list to children of groups only. If true, shows only groups with parents. If false, shows only groups with no parent.

try {
    $result = $api_instance->getGroupsForUser($user_id, $filter_children);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->getGroupsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user |
 **filter_children** | **bool**| Whether to limit group list to children of groups only. If true, shows only groups with parents. If false, shows only groups with no parent. | [optional]

### Return type

**string[]**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroups**
> \KnetikCloud\Model\PageResourceGroupResource_ listGroups($filter_template, $filter_member_count, $filter_name, $filter_unique_name, $filter_parent, $filter_status, $size, $page, $order)

List and search groups

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$filter_template = "filter_template_example"; // string | Filter for groups using a specific template, by id
$filter_member_count = "filter_member_count_example"; // string | Filters groups by member count. Multiple values possible for range search. Format: filter_member_count=OP,ts&... where OP in (GT, LT, GOE, LOE, EQ). Ex: filter_member_count=GT,14,LT,17
$filter_name = "filter_name_example"; // string | Filter for groups with names starting with the given string
$filter_unique_name = "filter_unique_name_example"; // string | Filter for groups whose unique_name starts with provided string
$filter_parent = "filter_parent_example"; // string | Filter for groups with a specific parent, by unique name
$filter_status = "filter_status_example"; // string | Filter for groups with a certain status
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "name:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->listGroups($filter_template, $filter_member_count, $filter_name, $filter_unique_name, $filter_parent, $filter_status, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_template** | **string**| Filter for groups using a specific template, by id | [optional]
 **filter_member_count** | **string**| Filters groups by member count. Multiple values possible for range search. Format: filter_member_count&#x3D;OP,ts&amp;... where OP in (GT, LT, GOE, LOE, EQ). Ex: filter_member_count&#x3D;GT,14,LT,17 | [optional]
 **filter_name** | **string**| Filter for groups with names starting with the given string | [optional]
 **filter_unique_name** | **string**| Filter for groups whose unique_name starts with provided string | [optional]
 **filter_parent** | **string**| Filter for groups with a specific parent, by unique name | [optional]
 **filter_status** | **string**| Filter for groups with a certain status | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to name:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceGroupResource_**](../Model/PageResourceGroupResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupMessage**
> \KnetikCloud\Model\ChatMessageResource postGroupMessage($unique_name, $chat_message_request)

Send a group message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$chat_message_request = new \KnetikCloud\Model\ChatMessageRequest(); // \KnetikCloud\Model\ChatMessageRequest | The chat message request

try {
    $result = $api_instance->postGroupMessage($unique_name, $chat_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->postGroupMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **chat_message_request** | [**\KnetikCloud\Model\ChatMessageRequest**](../Model/ChatMessageRequest.md)| The chat message request | [optional]

### Return type

[**\KnetikCloud\Model\ChatMessageResource**](../Model/ChatMessageResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGroupMember**
> removeGroupMember($unique_name, $user_id)

Removes a user from a group

<b>Permissions Needed:</b> GROUP_ADMIN or self if open

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The id of the user to remove

try {
    $api_instance->removeGroupMember($unique_name, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->removeGroupMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **int**| The id of the user to remove |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> updateGroup($unique_name, $group_resource)

Update a group

If adding/removing/changing parent, user membership in group/new parent groups may be modified. The parent being removed will remove members from this sub group unless they were added explicitly to the parent and the new parent will gain members unless they were already a part of it. <br><br><b>Permissions Needed:</b> GROUP_ADMIN or admin of the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$group_resource = new \KnetikCloud\Model\GroupResource(); // \KnetikCloud\Model\GroupResource | The updated group

try {
    $api_instance->updateGroup($unique_name, $group_resource);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **group_resource** | [**\KnetikCloud\Model\GroupResource**](../Model/GroupResource.md)| The updated group | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupMemberProperties**
> updateGroupMemberProperties($unique_name, $user_id, $order)

Change a user's order

<b>Permissions Needed:</b> GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The user id of the member to modify
$order = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The new order for the membership

try {
    $api_instance->updateGroupMemberProperties($unique_name, $user_id, $order);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->updateGroupMemberProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **int**| The user id of the member to modify |
 **order** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The new order for the membership |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupMemberProperties1**
> updateGroupMemberProperties1($unique_name, $user_id, $properties)

Change a user's membership properties

<b>Permissions Needed:</b> GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The user id of the member to modify
$properties = NULL; // object | The new properties for the membership

try {
    $api_instance->updateGroupMemberProperties1($unique_name, $user_id, $properties);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->updateGroupMemberProperties1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **int**| The user id of the member to modify |
 **properties** | **object**| The new properties for the membership |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupMemberStatus**
> updateGroupMemberStatus($unique_name, $user_id, $status)

Change a user's status

<b>Permissions Needed:</b> GROUP_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The user id of the member to modify
$status = new \KnetikCloud\Model\GroupMemberStatusWrapper(); // \KnetikCloud\Model\GroupMemberStatusWrapper | The new status for the user

try {
    $api_instance->updateGroupMemberStatus($unique_name, $user_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->updateGroupMemberStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **int**| The user id of the member to modify |
 **status** | [**\KnetikCloud\Model\GroupMemberStatusWrapper**](../Model/GroupMemberStatusWrapper.md)| The new status for the user |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupMemberTemplate**
> \KnetikCloud\Model\TemplateResource updateGroupMemberTemplate($id, $group_member_template_resource)

Update an group member template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$group_member_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The group member template resource object

try {
    $result = $api_instance->updateGroupMemberTemplate($id, $group_member_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->updateGroupMemberTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **group_member_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The group member template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupTemplate**
> \KnetikCloud\Model\TemplateResource updateGroupTemplate($id, $group_template_resource)

Update a group template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Users_GroupsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$group_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The group template resource object

try {
    $result = $api_instance->updateGroupTemplate($id, $group_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Users_GroupsApi->updateGroupTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **group_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The group template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

