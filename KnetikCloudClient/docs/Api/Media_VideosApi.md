# KnetikCloud\Media_VideosApi

All URIs are relative to *https://jsapi-integration.us-east-1.elasticbeanstalk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserToVideoWhitelist**](Media_VideosApi.md#addUserToVideoWhitelist) | **POST** /media/videos/{id}/whitelist | Adds a user to a video&#39;s whitelist
[**addVideo**](Media_VideosApi.md#addVideo) | **POST** /media/videos | Adds a new video in the system
[**addVideoComment**](Media_VideosApi.md#addVideoComment) | **POST** /media/videos/{video_id}/comments | Add a new video comment
[**addVideoContributor**](Media_VideosApi.md#addVideoContributor) | **POST** /media/videos/{video_id}/contributors | Adds a contributor to a video
[**addVideoFlag**](Media_VideosApi.md#addVideoFlag) | **POST** /media/videos/{video_id}/moderation | Add a new flag
[**addVideoRelationships**](Media_VideosApi.md#addVideoRelationships) | **POST** /media/videos/{video_id}/related | Adds one or more existing videos as related to this one
[**createVideoDisposition**](Media_VideosApi.md#createVideoDisposition) | **POST** /media/videos/{video_id}/dispositions | Create a video disposition
[**createVideoTemplate**](Media_VideosApi.md#createVideoTemplate) | **POST** /media/videos/templates | Create a video template
[**deleteVideo**](Media_VideosApi.md#deleteVideo) | **DELETE** /media/videos/{id} | Deletes a video from the system if no resources are attached to it
[**deleteVideoComment**](Media_VideosApi.md#deleteVideoComment) | **DELETE** /media/videos/{video_id}/comments/{id} | Delete a video comment
[**deleteVideoDisposition**](Media_VideosApi.md#deleteVideoDisposition) | **DELETE** /media/videos/{video_id}/dispositions/{disposition_id} | Delete a video disposition
[**deleteVideoFlag**](Media_VideosApi.md#deleteVideoFlag) | **DELETE** /media/videos/{video_id}/moderation | Delete a flag
[**deleteVideoRelationship**](Media_VideosApi.md#deleteVideoRelationship) | **DELETE** /media/videos/{video_id}/related/{id} | Delete a video&#39;s relationship
[**deleteVideoTemplate**](Media_VideosApi.md#deleteVideoTemplate) | **DELETE** /media/videos/templates/{id} | Delete a video template
[**getUserVideos**](Media_VideosApi.md#getUserVideos) | **GET** /users/{user_id}/videos | Get user videos
[**getVideo**](Media_VideosApi.md#getVideo) | **GET** /media/videos/{id} | Loads a specific video details
[**getVideoComments**](Media_VideosApi.md#getVideoComments) | **GET** /media/videos/{video_id}/comments | Returns a page of comments for a video
[**getVideoDispositions**](Media_VideosApi.md#getVideoDispositions) | **GET** /media/videos/{video_id}/dispositions | Returns a page of dispositions for a video
[**getVideoRelationships**](Media_VideosApi.md#getVideoRelationships) | **GET** /media/videos/{video_id}/related | Returns a page of video relationships
[**getVideoTemplate**](Media_VideosApi.md#getVideoTemplate) | **GET** /media/videos/templates/{id} | Get a single video template
[**getVideoTemplates**](Media_VideosApi.md#getVideoTemplates) | **GET** /media/videos/templates | List and search video templates
[**getVideos**](Media_VideosApi.md#getVideos) | **GET** /media/videos | Search videos using the documented filters
[**removeUserFromVideoWhitelist**](Media_VideosApi.md#removeUserFromVideoWhitelist) | **DELETE** /media/videos/{video_id}/whitelist/{id} | Removes a user from a video&#39;s whitelist
[**removeVideoContributor**](Media_VideosApi.md#removeVideoContributor) | **DELETE** /media/videos/{video_id}/contributors/{id} | Removes a contributor from a video
[**updateVideo**](Media_VideosApi.md#updateVideo) | **PUT** /media/videos/{id} | Modifies a video&#39;s details
[**updateVideoComment**](Media_VideosApi.md#updateVideoComment) | **PUT** /media/videos/{video_id}/comments/{id}/content | Update a video comment
[**updateVideoRelationship**](Media_VideosApi.md#updateVideoRelationship) | **PUT** /media/videos/{video_id}/related/{id}/relationship_details | Update a video&#39;s relationship details
[**updateVideoTemplate**](Media_VideosApi.md#updateVideoTemplate) | **PUT** /media/videos/templates/{id} | Update a video template
[**viewVideo**](Media_VideosApi.md#viewVideo) | **POST** /media/videos/{id}/views | Increment a video&#39;s view count


# **addUserToVideoWhitelist**
> addUserToVideoWhitelist($id, $user_id)

Adds a user to a video's whitelist

Whitelisted users can view video regardless of privacy setting. <br><br><b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id
$user_id = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The user id

try {
    $api_instance->addUserToVideoWhitelist($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->addUserToVideoWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The video id |
 **user_id** | [**\KnetikCloud\Model\IntWrapper**](../Model/IntWrapper.md)| The user id | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideo**
> \KnetikCloud\Model\VideoResource addVideo($video_resource)

Adds a new video in the system

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_resource = new \KnetikCloud\Model\VideoResource(); // \KnetikCloud\Model\VideoResource | The video object

try {
    $result = $api_instance->addVideo($video_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->addVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_resource** | [**\KnetikCloud\Model\VideoResource**](../Model/VideoResource.md)| The video object | [optional]

### Return type

[**\KnetikCloud\Model\VideoResource**](../Model/VideoResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoComment**
> \KnetikCloud\Model\CommentResource addVideoComment($video_id, $comment_resource)

Add a new video comment

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$comment_resource = new \KnetikCloud\Model\CommentResource(); // \KnetikCloud\Model\CommentResource | The comment object

try {
    $result = $api_instance->addVideoComment($video_id, $comment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->addVideoComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **comment_resource** | [**\KnetikCloud\Model\CommentResource**](../Model/CommentResource.md)| The comment object | [optional]

### Return type

[**\KnetikCloud\Model\CommentResource**](../Model/CommentResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoContributor**
> addVideoContributor($video_id, $contribution_resource)

Adds a contributor to a video

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$contribution_resource = new \KnetikCloud\Model\ContributionResource(); // \KnetikCloud\Model\ContributionResource | The contribution object

try {
    $api_instance->addVideoContributor($video_id, $contribution_resource);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->addVideoContributor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **contribution_resource** | [**\KnetikCloud\Model\ContributionResource**](../Model/ContributionResource.md)| The contribution object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoFlag**
> \KnetikCloud\Model\FlagResource addVideoFlag($video_id, $reason)

Add a new flag

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$reason = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The flag reason

try {
    $result = $api_instance->addVideoFlag($video_id, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->addVideoFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **reason** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The flag reason | [optional]

### Return type

[**\KnetikCloud\Model\FlagResource**](../Model/FlagResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoRelationships**
> \KnetikCloud\Model\VideoRelationshipResource addVideoRelationships($video_id, $video_relationship_resource)

Adds one or more existing videos as related to this one

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$video_relationship_resource = new \KnetikCloud\Model\VideoRelationshipResource(); // \KnetikCloud\Model\VideoRelationshipResource | The video relationship object

try {
    $result = $api_instance->addVideoRelationships($video_id, $video_relationship_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->addVideoRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **video_relationship_resource** | [**\KnetikCloud\Model\VideoRelationshipResource**](../Model/VideoRelationshipResource.md)| The video relationship object | [optional]

### Return type

[**\KnetikCloud\Model\VideoRelationshipResource**](../Model/VideoRelationshipResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVideoDisposition**
> \KnetikCloud\Model\DispositionResource createVideoDisposition($video_id, $disposition_resource)

Create a video disposition

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$disposition_resource = new \KnetikCloud\Model\DispositionResource(); // \KnetikCloud\Model\DispositionResource | The disposition object

try {
    $result = $api_instance->createVideoDisposition($video_id, $disposition_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->createVideoDisposition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **disposition_resource** | [**\KnetikCloud\Model\DispositionResource**](../Model/DispositionResource.md)| The disposition object | [optional]

### Return type

[**\KnetikCloud\Model\DispositionResource**](../Model/DispositionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVideoTemplate**
> \KnetikCloud\Model\TemplateResource createVideoTemplate($video_template_resource)

Create a video template

Video Templates define a type of video and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The video template resource object

try {
    $result = $api_instance->createVideoTemplate($video_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->createVideoTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The video template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideo**
> deleteVideo($id)

Deletes a video from the system if no resources are attached to it

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id

try {
    $api_instance->deleteVideo($id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->deleteVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The video id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoComment**
> deleteVideoComment($video_id, $id)

Delete a video comment

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 789; // int | The comment id

try {
    $api_instance->deleteVideoComment($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->deleteVideoComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **id** | **int**| The comment id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoDisposition**
> deleteVideoDisposition($disposition_id)

Delete a video disposition

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$disposition_id = 789; // int | The disposition id

try {
    $api_instance->deleteVideoDisposition($disposition_id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->deleteVideoDisposition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disposition_id** | **int**| The disposition id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoFlag**
> deleteVideoFlag($video_id)

Delete a flag

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id

try {
    $api_instance->deleteVideoFlag($video_id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->deleteVideoFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoRelationship**
> deleteVideoRelationship($video_id, $id)

Delete a video's relationship

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 789; // int | The relationship id

try {
    $api_instance->deleteVideoRelationship($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->deleteVideoRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **id** | **int**| The relationship id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoTemplate**
> deleteVideoTemplate($id, $cascade)

Delete a video template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteVideoTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->deleteVideoTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getUserVideos**
> \KnetikCloud\Model\PageResourceVideoResource_ getUserVideos($user_id, $exclude_flagged, $size, $page)

Get user videos

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user id
$exclude_flagged = true; // bool | Skip videos that have been flagged by the current user
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUserVideos($user_id, $exclude_flagged, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getUserVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id |
 **exclude_flagged** | **bool**| Skip videos that have been flagged by the current user | [optional] [default to true]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceVideoResource_**](../Model/PageResourceVideoResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideo**
> \KnetikCloud\Model\VideoResource getVideo($id)

Loads a specific video details

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id

try {
    $result = $api_instance->getVideo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The video id |

### Return type

[**\KnetikCloud\Model\VideoResource**](../Model/VideoResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoComments**
> \KnetikCloud\Model\PageResourceCommentResource_ getVideoComments($video_id, $size, $page)

Returns a page of comments for a video

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getVideoComments($video_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideoComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceCommentResource_**](../Model/PageResourceCommentResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoDispositions**
> \KnetikCloud\Model\PageResourceDispositionResource_ getVideoDispositions($video_id, $size, $page)

Returns a page of dispositions for a video

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getVideoDispositions($video_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideoDispositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceDispositionResource_**](../Model/PageResourceDispositionResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoRelationships**
> \KnetikCloud\Model\PageResourceVideoRelationshipResource_ getVideoRelationships($video_id, $size, $page)

Returns a page of video relationships

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getVideoRelationships($video_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideoRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]

### Return type

[**\KnetikCloud\Model\PageResourceVideoRelationshipResource_**](../Model/PageResourceVideoRelationshipResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoTemplate**
> \KnetikCloud\Model\TemplateResource getVideoTemplate($id)

Get a single video template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getVideoTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideoTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getVideoTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getVideoTemplates($size, $page, $order)

List and search video templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getVideoTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideoTemplates: ', $e->getMessage(), PHP_EOL;
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

# **getVideos**
> \KnetikCloud\Model\PageResourceVideoResource_ getVideos($exclude_flagged, $filter_videos_by_uploader, $filter_category, $filter_tagset, $filter_videos_by_name, $filter_videos_by_contributor, $filter_videos_by_author, $filter_has_author, $filter_has_uploader, $filter_related_to, $filter_friends, $filter_disposition, $size, $page, $order)

Search videos using the documented filters

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$exclude_flagged = true; // bool | Skip videos that have been flagged by the current user
$filter_videos_by_uploader = 56; // int | Filter for videos by uploader id
$filter_category = "filter_category_example"; // string | Filter for videos from a specific category by id
$filter_tagset = "filter_tagset_example"; // string | Filter for videos with specified tags (separated by comma)
$filter_videos_by_name = "filter_videos_by_name_example"; // string | Filter for videos which name *STARTS* with the given string
$filter_videos_by_contributor = 56; // int | Filter for videos with contribution from the artist specified by ID
$filter_videos_by_author = 56; // int | Filter for videos with an artist as author specified by ID
$filter_has_author = true; // bool | Filter for videos that have an author set if true, or that have no author if false
$filter_has_uploader = true; // bool | Filter for videos that have an uploader set if true, or that have no uploader if false
$filter_related_to = "filter_related_to_example"; // string | Filter for videos that have designated a particular video as the TO of a relationship. Pattern should match VIDEO_ID or VIDEO_ID:DETAILS to match with a specific details string as well
$filter_friends = true; // bool | Filter for videos uploaded by friends. 'true' for friends of the caller (requires user token) or a user id for a specific user's friends (requires VIDEOS_ADMIN permission)
$filter_disposition = "filter_disposition_example"; // string | Filter for videos a given user has a given disposition towards. USER_ID:DISPOSITION where USER_ID is the id of the user who has this disposition or 'me' for the caller (requires user token for 'me') and DISPOSITION is the name of the disposition. E.G. filter_disposition=123:like or filter_disposition=me:favorite
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "author:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getVideos($exclude_flagged, $filter_videos_by_uploader, $filter_category, $filter_tagset, $filter_videos_by_name, $filter_videos_by_contributor, $filter_videos_by_author, $filter_has_author, $filter_has_uploader, $filter_related_to, $filter_friends, $filter_disposition, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->getVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_flagged** | **bool**| Skip videos that have been flagged by the current user | [optional] [default to true]
 **filter_videos_by_uploader** | **int**| Filter for videos by uploader id | [optional]
 **filter_category** | **string**| Filter for videos from a specific category by id | [optional]
 **filter_tagset** | **string**| Filter for videos with specified tags (separated by comma) | [optional]
 **filter_videos_by_name** | **string**| Filter for videos which name *STARTS* with the given string | [optional]
 **filter_videos_by_contributor** | **int**| Filter for videos with contribution from the artist specified by ID | [optional]
 **filter_videos_by_author** | **int**| Filter for videos with an artist as author specified by ID | [optional]
 **filter_has_author** | **bool**| Filter for videos that have an author set if true, or that have no author if false | [optional]
 **filter_has_uploader** | **bool**| Filter for videos that have an uploader set if true, or that have no uploader if false | [optional]
 **filter_related_to** | **string**| Filter for videos that have designated a particular video as the TO of a relationship. Pattern should match VIDEO_ID or VIDEO_ID:DETAILS to match with a specific details string as well | [optional]
 **filter_friends** | **bool**| Filter for videos uploaded by friends. &#39;true&#39; for friends of the caller (requires user token) or a user id for a specific user&#39;s friends (requires VIDEOS_ADMIN permission) | [optional]
 **filter_disposition** | **string**| Filter for videos a given user has a given disposition towards. USER_ID:DISPOSITION where USER_ID is the id of the user who has this disposition or &#39;me&#39; for the caller (requires user token for &#39;me&#39;) and DISPOSITION is the name of the disposition. E.G. filter_disposition&#x3D;123:like or filter_disposition&#x3D;me:favorite | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to author:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceVideoResource_**](../Model/PageResourceVideoResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserFromVideoWhitelist**
> removeUserFromVideoWhitelist($video_id, $id)

Removes a user from a video's whitelist

Remove the user with the id given in the path from the whitelist of users that can view this video regardless of privacy setting. <br><br><b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 56; // int | The user id

try {
    $api_instance->removeUserFromVideoWhitelist($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->removeUserFromVideoWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **id** | **int**| The user id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeVideoContributor**
> removeVideoContributor($video_id, $id)

Removes a contributor from a video

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 56; // int | The contributor id

try {
    $api_instance->removeVideoContributor($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->removeVideoContributor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **id** | **int**| The contributor id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideo**
> updateVideo($id, $video_resource)

Modifies a video's details

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id
$video_resource = new \KnetikCloud\Model\VideoResource(); // \KnetikCloud\Model\VideoResource | The video object

try {
    $api_instance->updateVideo($id, $video_resource);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->updateVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The video id |
 **video_resource** | [**\KnetikCloud\Model\VideoResource**](../Model/VideoResource.md)| The video object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideoComment**
> updateVideoComment($video_id, $id, $content)

Update a video comment

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 789; // int | The comment id
$content = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The comment content

try {
    $api_instance->updateVideoComment($video_id, $id, $content);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->updateVideoComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **id** | **int**| The comment id |
 **content** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The comment content | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideoRelationship**
> updateVideoRelationship($video_id, $relationship_id, $details)

Update a video's relationship details

<b>Permissions Needed:</b> VIDEOS_USER or VIDEOS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$relationship_id = 789; // int | The relationship id
$details = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The video relationship details

try {
    $api_instance->updateVideoRelationship($video_id, $relationship_id, $details);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->updateVideoRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The video id |
 **relationship_id** | **int**| The relationship id |
 **details** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The video relationship details | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideoTemplate**
> \KnetikCloud\Model\TemplateResource updateVideoTemplate($id, $video_template_resource)

Update a video template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$video_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The video template resource object

try {
    $result = $api_instance->updateVideoTemplate($id, $video_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->updateVideoTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **video_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The video template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewVideo**
> viewVideo($id)

Increment a video's view count

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\Media_VideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id

try {
    $api_instance->viewVideo($id);
} catch (Exception $e) {
    echo 'Exception when calling Media_VideosApi->viewVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The video id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

