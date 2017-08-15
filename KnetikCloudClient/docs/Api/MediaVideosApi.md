# KnetikCloud\MediaVideosApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserToVideoWhitelist**](MediaVideosApi.md#addUserToVideoWhitelist) | **POST** /media/videos/{id}/whitelist | Adds a user to a video&#39;s whitelist
[**addVideo**](MediaVideosApi.md#addVideo) | **POST** /media/videos | Adds a new video in the system
[**addVideoComment**](MediaVideosApi.md#addVideoComment) | **POST** /media/videos/{video_id}/comments | Add a new video comment
[**addVideoContributor**](MediaVideosApi.md#addVideoContributor) | **POST** /media/videos/{video_id}/contributors | Adds a contributor to a video
[**addVideoFlag**](MediaVideosApi.md#addVideoFlag) | **POST** /media/videos/{video_id}/moderation | Add a new flag
[**addVideoRelationships**](MediaVideosApi.md#addVideoRelationships) | **POST** /media/videos/{video_id}/related | Adds one or more existing videos as related to this one
[**createVideoDisposition**](MediaVideosApi.md#createVideoDisposition) | **POST** /media/videos/{video_id}/dispositions | Create a video disposition
[**deleteVideo**](MediaVideosApi.md#deleteVideo) | **DELETE** /media/videos/{id} | Deletes a video from the system if no resources are attached to it
[**deleteVideoComment**](MediaVideosApi.md#deleteVideoComment) | **DELETE** /media/videos/{video_id}/comments/{id} | Delete a video comment
[**deleteVideoDisposition**](MediaVideosApi.md#deleteVideoDisposition) | **DELETE** /media/videos/{video_id}/dispositions/{disposition_id} | Delete a video disposition
[**deleteVideoFlag**](MediaVideosApi.md#deleteVideoFlag) | **DELETE** /media/videos/{video_id}/moderation | Delete a flag
[**deleteVideoRelationship**](MediaVideosApi.md#deleteVideoRelationship) | **DELETE** /media/videos/{video_id}/related/{id} | Delete a video&#39;s relationship
[**getUserVideos**](MediaVideosApi.md#getUserVideos) | **GET** /users/{user_id}/videos | Get user videos
[**getVideo**](MediaVideosApi.md#getVideo) | **GET** /media/videos/{id} | Loads a specific video details
[**getVideoComments**](MediaVideosApi.md#getVideoComments) | **GET** /media/videos/{video_id}/comments | Returns a page of comments for a video
[**getVideoDispositions**](MediaVideosApi.md#getVideoDispositions) | **GET** /media/videos/{video_id}/dispositions | Returns a page of dispositions for a video
[**getVideoRelationships**](MediaVideosApi.md#getVideoRelationships) | **GET** /media/videos/{video_id}/related | Returns a page of video relationships
[**getVideos**](MediaVideosApi.md#getVideos) | **GET** /media/videos | Search videos using the documented filters
[**removeUserFromVideoWhitelist**](MediaVideosApi.md#removeUserFromVideoWhitelist) | **DELETE** /media/videos/{video_id}/whitelist/{id} | Removes a user from a video&#39;s whitelist
[**removeVideoContributor**](MediaVideosApi.md#removeVideoContributor) | **DELETE** /media/videos/{video_id}/contributors/{id} | Removes a contributor from a video
[**updateVideo**](MediaVideosApi.md#updateVideo) | **PUT** /media/videos/{id} | Modifies a video&#39;s details
[**updateVideoComment**](MediaVideosApi.md#updateVideoComment) | **PUT** /media/videos/{video_id}/comments/{id}/content | Update a video comment
[**updateVideoRelationship**](MediaVideosApi.md#updateVideoRelationship) | **PUT** /media/videos/{video_id}/related/{id}/relationship_details | Update a video&#39;s relationship details
[**viewVideo**](MediaVideosApi.md#viewVideo) | **POST** /media/videos/{id}/views | Increment a video&#39;s view count


# **addUserToVideoWhitelist**
> addUserToVideoWhitelist($id, $user_id)

Adds a user to a video's whitelist

Whitelisted users can view video regardless of privacy setting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id
$user_id = new \KnetikCloud\Model\IntWrapper(); // \KnetikCloud\Model\IntWrapper | The user id

try {
    $api_instance->addUserToVideoWhitelist($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->addUserToVideoWhitelist: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideo**
> \KnetikCloud\Model\VideoResource addVideo($video_resource)

Adds a new video in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_resource = new \KnetikCloud\Model\VideoResource(); // \KnetikCloud\Model\VideoResource | The video object

try {
    $result = $api_instance->addVideo($video_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->addVideo: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoComment**
> \KnetikCloud\Model\CommentResource addVideoComment($video_id, $comment_resource)

Add a new video comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$comment_resource = new \KnetikCloud\Model\CommentResource(); // \KnetikCloud\Model\CommentResource | The comment object

try {
    $result = $api_instance->addVideoComment($video_id, $comment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->addVideoComment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoContributor**
> addVideoContributor($video_id, $contribution_resource)

Adds a contributor to a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$contribution_resource = new \KnetikCloud\Model\ContributionResource(); // \KnetikCloud\Model\ContributionResource | The contribution object

try {
    $api_instance->addVideoContributor($video_id, $contribution_resource);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->addVideoContributor: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoFlag**
> \KnetikCloud\Model\FlagResource addVideoFlag($video_id, $reason)

Add a new flag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$reason = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The flag reason

try {
    $result = $api_instance->addVideoFlag($video_id, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->addVideoFlag: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVideoRelationships**
> \KnetikCloud\Model\VideoRelationshipResource addVideoRelationships($video_id, $video_relationship_resource)

Adds one or more existing videos as related to this one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$video_relationship_resource = new \KnetikCloud\Model\VideoRelationshipResource(); // \KnetikCloud\Model\VideoRelationshipResource | The video relationship object

try {
    $result = $api_instance->addVideoRelationships($video_id, $video_relationship_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->addVideoRelationships: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVideoDisposition**
> \KnetikCloud\Model\DispositionResource createVideoDisposition($video_id, $disposition_resource)

Create a video disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$disposition_resource = new \KnetikCloud\Model\DispositionResource(); // \KnetikCloud\Model\DispositionResource | The disposition object

try {
    $result = $api_instance->createVideoDisposition($video_id, $disposition_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->createVideoDisposition: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideo**
> deleteVideo($id)

Deletes a video from the system if no resources are attached to it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id

try {
    $api_instance->deleteVideo($id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->deleteVideo: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoComment**
> deleteVideoComment($video_id, $id)

Delete a video comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 789; // int | The comment id

try {
    $api_instance->deleteVideoComment($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->deleteVideoComment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoDisposition**
> deleteVideoDisposition($disposition_id)

Delete a video disposition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$disposition_id = 789; // int | The disposition id

try {
    $api_instance->deleteVideoDisposition($disposition_id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->deleteVideoDisposition: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoFlag**
> deleteVideoFlag($video_id)

Delete a flag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id

try {
    $api_instance->deleteVideoFlag($video_id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->deleteVideoFlag: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoRelationship**
> deleteVideoRelationship($video_id, $id)

Delete a video's relationship

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 789; // int | The relationship id

try {
    $api_instance->deleteVideoRelationship($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->deleteVideoRelationship: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserVideos**
> \KnetikCloud\Model\PageResourceVideoResource_ getUserVideos($user_id, $exclude_flagged, $size, $page)

Get user videos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$user_id = 56; // int | The user id
$exclude_flagged = true; // bool | Skip videos that have been flagged by the current user
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getUserVideos($user_id, $exclude_flagged, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->getUserVideos: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideo**
> \KnetikCloud\Model\VideoResource getVideo($id)

Loads a specific video details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id

try {
    $result = $api_instance->getVideo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->getVideo: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoComments**
> \KnetikCloud\Model\PageResourceCommentResource_ getVideoComments($video_id, $size, $page)

Returns a page of comments for a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getVideoComments($video_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->getVideoComments: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoDispositions**
> \KnetikCloud\Model\PageResourceDispositionResource_ getVideoDispositions($video_id, $size, $page)

Returns a page of dispositions for a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 56; // int | The video id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getVideoDispositions($video_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->getVideoDispositions: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoRelationships**
> \KnetikCloud\Model\PageResourceVideoRelationshipResource_ getVideoRelationships($video_id, $size, $page)

Returns a page of video relationships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1

try {
    $result = $api_instance->getVideoRelationships($video_id, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->getVideoRelationships: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideos**
> \KnetikCloud\Model\PageResourceVideoResource_ getVideos($exclude_flagged, $filter_videos_by_uploader, $filter_category, $filter_tagset, $filter_videos_by_name, $filter_videos_by_contributor, $filter_videos_by_author, $filter_has_author, $filter_has_uploader, $filter_related_to, $filter_friends, $filter_disposition, $size, $page, $order)

Search videos using the documented filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
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
    echo 'Exception when calling MediaVideosApi->getVideos: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserFromVideoWhitelist**
> removeUserFromVideoWhitelist($video_id, $id)

Removes a user from a video's whitelist

Remove the user with the id given in the path from the whitelist of users that can view this video regardless of privacy setting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 56; // int | The user id

try {
    $api_instance->removeUserFromVideoWhitelist($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->removeUserFromVideoWhitelist: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeVideoContributor**
> removeVideoContributor($video_id, $id)

Removes a contributor from a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 56; // int | The contributor id

try {
    $api_instance->removeVideoContributor($video_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->removeVideoContributor: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideo**
> updateVideo($id, $video_resource)

Modifies a video's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id
$video_resource = new \KnetikCloud\Model\VideoResource(); // \KnetikCloud\Model\VideoResource | The video object

try {
    $api_instance->updateVideo($id, $video_resource);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->updateVideo: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideoComment**
> updateVideoComment($video_id, $id, $content)

Update a video comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$id = 789; // int | The comment id
$content = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The comment content

try {
    $api_instance->updateVideoComment($video_id, $id, $content);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->updateVideoComment: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideoRelationship**
> updateVideoRelationship($video_id, $relationship_id, $details)

Update a video's relationship details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$video_id = 789; // int | The video id
$relationship_id = 789; // int | The relationship id
$details = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The video relationship details

try {
    $api_instance->updateVideoRelationship($video_id, $relationship_id, $details);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->updateVideoRelationship: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewVideo**
> viewVideo($id)

Increment a video's view count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\MediaVideosApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The video id

try {
    $api_instance->viewVideo($id);
} catch (Exception $e) {
    echo 'Exception when calling MediaVideosApi->viewVideo: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

