# KnetikCloud\UsersGroupsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMemberToGroup**](UsersGroupsApi.md#addMemberToGroup) | **POST** /users/groups/{unique_name}/members | Adds a new member to the group
[**addMembersToGroup**](UsersGroupsApi.md#addMembersToGroup) | **POST** /users/groups/{unique_name}/members/batch-add | Adds multiple members to the group
[**createGroup**](UsersGroupsApi.md#createGroup) | **POST** /users/groups | Create a group
[**createGroupTemplate**](UsersGroupsApi.md#createGroupTemplate) | **POST** /users/groups/templates | Create a group template
[**deleteGroup**](UsersGroupsApi.md#deleteGroup) | **DELETE** /users/groups/{unique_name} | Removes a group from the system IF no resources are attached to it
[**deleteGroupTemplate**](UsersGroupsApi.md#deleteGroupTemplate) | **DELETE** /users/groups/templates/{id} | Delete a group template
[**getGroup**](UsersGroupsApi.md#getGroup) | **GET** /users/groups/{unique_name} | Loads a specific group&#39;s details
[**getGroupMember**](UsersGroupsApi.md#getGroupMember) | **GET** /users/groups/{unique_name}/members/{user_id} | Get a user from a group
[**getGroupMembers**](UsersGroupsApi.md#getGroupMembers) | **GET** /users/groups/{unique_name}/members | Lists members of the group
[**getGroupTemplate**](UsersGroupsApi.md#getGroupTemplate) | **GET** /users/groups/templates/{id} | Get a single group template
[**getGroupTemplates**](UsersGroupsApi.md#getGroupTemplates) | **GET** /users/groups/templates | List and search group templates
[**getGroupsForUser**](UsersGroupsApi.md#getGroupsForUser) | **GET** /users/{user_id}/groups | List groups a user is in
[**removeGroupMember**](UsersGroupsApi.md#removeGroupMember) | **DELETE** /users/groups/{unique_name}/members/{user_id} | Removes a user from a group
[**updateGroup**](UsersGroupsApi.md#updateGroup) | **PUT** /users/groups/{unique_name} | Update a group
[**updateGroupMemberStatus**](UsersGroupsApi.md#updateGroupMemberStatus) | **PUT** /users/groups/{unique_name}/members/{user_id}/status | Change a user&#39;s status
[**updateGroupTemplate**](UsersGroupsApi.md#updateGroupTemplate) | **PUT** /users/groups/templates/{id} | Update a group template
[**updateGroups**](UsersGroupsApi.md#updateGroups) | **GET** /users/groups | List and search groups


# **addMemberToGroup**
> \KnetikCloud\Model\GroupMemberResource addMemberToGroup($unique_name, $user)

Adds a new member to the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$user = new \KnetikCloud\Model\GroupMemberResource(); // \KnetikCloud\Model\GroupMemberResource | The id and status for a user to add to the group

try {
    $result = $api_instance->addMemberToGroup($unique_name, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->addMemberToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user** | [**\KnetikCloud\Model\GroupMemberResource**](../Model/\KnetikCloud\Model\GroupMemberResource.md)| The id and status for a user to add to the group |

### Return type

[**\KnetikCloud\Model\GroupMemberResource**](../Model/GroupMemberResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMembersToGroup**
> \KnetikCloud\Model\GroupMemberResource[] addMembersToGroup($unique_name, $users)

Adds multiple members to the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$users = array(new GroupMemberResource()); // \KnetikCloud\Model\GroupMemberResource[] | The id and status for a list of users to add to the group

try {
    $result = $api_instance->addMembersToGroup($unique_name, $users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->addMembersToGroup: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \KnetikCloud\Model\GroupResource createGroup($group_resource)

Create a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$group_resource = new \KnetikCloud\Model\GroupResource(); // \KnetikCloud\Model\GroupResource | The new group

try {
    $result = $api_instance->createGroup($group_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_resource** | [**\KnetikCloud\Model\GroupResource**](../Model/\KnetikCloud\Model\GroupResource.md)| The new group | [optional]

### Return type

[**\KnetikCloud\Model\GroupResource**](../Model/GroupResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroupTemplate**
> \KnetikCloud\Model\TemplateResource createGroupTemplate($group_template_resource)

Create a group template

Group Templates define a type of group and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$group_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The group template resource object

try {
    $result = $api_instance->createGroupTemplate($group_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->createGroupTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/\KnetikCloud\Model\TemplateResource.md)| The group template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($unique_name)

Removes a group from the system IF no resources are attached to it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name

try {
    $api_instance->deleteGroup($unique_name);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupTemplate**
> deleteGroupTemplate($id, $cascade)

Delete a group template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteGroupTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->deleteGroupTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getGroup**
> \KnetikCloud\Model\GroupResource getGroup($unique_name)

Loads a specific group's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name

try {
    $result = $api_instance->getGroup($unique_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMember**
> \KnetikCloud\Model\GroupMemberResource getGroupMember($unique_name, $user_id)

Get a user from a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The id of the user

try {
    $result = $api_instance->getGroupMember($unique_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->getGroupMember: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMembers**
> \KnetikCloud\Model\PageResourceGroupMemberResource_ getGroupMembers($unique_name, $size, $page, $order)

Lists members of the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getGroupMembers($unique_name, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->getGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceGroupMemberResource_**](../Model/PageResourceGroupMemberResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupTemplate**
> \KnetikCloud\Model\TemplateResource getGroupTemplate($id)

Get a single group template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getGroupTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->getGroupTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getGroupTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getGroupTemplates($size, $page, $order)

List and search group templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | a comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getGroupTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->getGroupTemplates: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsForUser**
> string[] getGroupsForUser($user_id)

List groups a user is in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$user_id = 56; // int | The id of the user

try {
    $result = $api_instance->getGroupsForUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->getGroupsForUser: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGroupMember**
> removeGroupMember($unique_name, $user_id)

Removes a user from a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The id of the user to remove

try {
    $api_instance->removeGroupMember($unique_name, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->removeGroupMember: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> updateGroup($unique_name, $group_resource)

Update a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$group_resource = new \KnetikCloud\Model\GroupResource(); // \KnetikCloud\Model\GroupResource | The updated group

try {
    $api_instance->updateGroup($unique_name, $group_resource);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **group_resource** | [**\KnetikCloud\Model\GroupResource**](../Model/\KnetikCloud\Model\GroupResource.md)| The updated group | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupMemberStatus**
> updateGroupMemberStatus($unique_name, $user_id, $status)

Change a user's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$unique_name = "unique_name_example"; // string | The group unique name
$user_id = 56; // int | The user id of the member to modify
$status = "status_example"; // string | The new status for the user

try {
    $api_instance->updateGroupMemberStatus($unique_name, $user_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->updateGroupMemberStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_name** | **string**| The group unique name |
 **user_id** | **int**| The user id of the member to modify |
 **status** | **string**| The new status for the user |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupTemplate**
> \KnetikCloud\Model\TemplateResource updateGroupTemplate($id, $group_template_resource)

Update a group template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
$id = "id_example"; // string | The id of the template
$group_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The group template resource object

try {
    $result = $api_instance->updateGroupTemplate($id, $group_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->updateGroupTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **group_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/\KnetikCloud\Model\TemplateResource.md)| The group template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroups**
> \KnetikCloud\Model\PageResourceGroupResource_ updateGroups($filter_template, $filter_member_count, $filter_name, $filter_unique_name, $filter_parent, $filter_status, $size, $page, $order)

List and search groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UsersGroupsApi();
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
    $result = $api_instance->updateGroups($filter_template, $filter_member_count, $filter_name, $filter_unique_name, $filter_parent, $filter_status, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersGroupsApi->updateGroups: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

