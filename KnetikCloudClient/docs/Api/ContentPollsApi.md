# KnetikCloud\ContentPollsApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**answerPoll**](ContentPollsApi.md#answerPoll) | **POST** /media/polls/{id}/response | Add your vote to a poll
[**createPoll**](ContentPollsApi.md#createPoll) | **POST** /media/polls | Create a new poll
[**createPollTemplate**](ContentPollsApi.md#createPollTemplate) | **POST** /media/polls/templates | Create a poll template
[**deletePoll**](ContentPollsApi.md#deletePoll) | **DELETE** /media/polls/{id} | Delete an existing poll
[**deletePollTemplate**](ContentPollsApi.md#deletePollTemplate) | **DELETE** /media/polls/templates/{id} | Delete a poll template
[**getPoll**](ContentPollsApi.md#getPoll) | **GET** /media/polls/{id} | Get a single poll
[**getPollAnswer**](ContentPollsApi.md#getPollAnswer) | **GET** /media/polls/{id}/response | Get poll answer
[**getPollTemplate**](ContentPollsApi.md#getPollTemplate) | **GET** /media/polls/templates/{id} | Get a single poll template
[**getPollTemplates**](ContentPollsApi.md#getPollTemplates) | **GET** /media/polls/templates | List and search poll templates
[**getPolls**](ContentPollsApi.md#getPolls) | **GET** /media/polls | List and search polls
[**updatePoll**](ContentPollsApi.md#updatePoll) | **PUT** /media/polls/{id} | Update an existing poll
[**updatePollTemplate**](ContentPollsApi.md#updatePollTemplate) | **PUT** /media/polls/templates/{id} | Update a poll template


# **answerPoll**
> \KnetikCloud\Model\PollResponseResource answerPoll($id, $answer_key)

Add your vote to a poll

<b>Permissions Needed:</b> POLLS_ADMIN or POLLS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The poll id
$answer_key = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The answer key

try {
    $result = $api_instance->answerPoll($id, $answer_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->answerPoll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The poll id |
 **answer_key** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The answer key | [optional]

### Return type

[**\KnetikCloud\Model\PollResponseResource**](../Model/PollResponseResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPoll**
> \KnetikCloud\Model\PollResource createPoll($poll_resource)

Create a new poll

Polls are blobs of text with titles, a category and assets. Formatting and display of the text is in the hands of the front end. <br><br><b>Permissions Needed:</b> POLLS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$poll_resource = new \KnetikCloud\Model\PollResource(); // \KnetikCloud\Model\PollResource | The poll object

try {
    $result = $api_instance->createPoll($poll_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->createPoll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poll_resource** | [**\KnetikCloud\Model\PollResource**](../Model/PollResource.md)| The poll object | [optional]

### Return type

[**\KnetikCloud\Model\PollResource**](../Model/PollResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPollTemplate**
> \KnetikCloud\Model\TemplateResource createPollTemplate($poll_template_resource)

Create a poll template

Poll templates define a type of poll and the properties they have. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$poll_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The poll template resource object

try {
    $result = $api_instance->createPollTemplate($poll_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->createPollTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poll_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The poll template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePoll**
> deletePoll($id)

Delete an existing poll

<b>Permissions Needed:</b> POLLS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The poll id

try {
    $api_instance->deletePoll($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->deletePoll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The poll id |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePollTemplate**
> deletePollTemplate($id, $cascade)

Delete a poll template

If cascade = 'detach', it will force delete the template even if it's attached to other objects. <br><br><b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deletePollTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->deletePollTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getPoll**
> \KnetikCloud\Model\PollResource getPoll($id)

Get a single poll

<b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The poll id

try {
    $result = $api_instance->getPoll($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->getPoll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The poll id |

### Return type

[**\KnetikCloud\Model\PollResource**](../Model/PollResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPollAnswer**
> \KnetikCloud\Model\PollResponseResource getPollAnswer($id)

Get poll answer

<b>Permissions Needed:</b> POLLS_ADMIN or POLLS_USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The poll id

try {
    $result = $api_instance->getPollAnswer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->getPollAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The poll id |

### Return type

[**\KnetikCloud\Model\PollResponseResource**](../Model/PollResponseResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPollTemplate**
> \KnetikCloud\Model\TemplateResource getPollTemplate($id)

Get a single poll template

<b>Permissions Needed:</b> TEMPLATE_ADMIN or POLLS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getPollTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->getPollTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getPollTemplates**
> \KnetikCloud\Model\PageResourceTemplateResource_ getPollTemplates($size, $page, $order)

List and search poll templates

<b>Permissions Needed:</b> TEMPLATE_ADMIN or POLLS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getPollTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->getPollTemplates: ', $e->getMessage(), PHP_EOL;
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

# **getPolls**
> \KnetikCloud\Model\PageResourcePollResource_ getPolls($filter_category, $filter_tagset, $filter_text, $size, $page, $order)

List and search polls

Get a list of polls with optional filtering. Assets will not be filled in on the resources returned. Use 'Get a single poll' to retrieve the full resource with assets for a given item as needed. <br><br><b>Permissions Needed:</b> ANY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$filter_category = "filter_category_example"; // string | Filter for polls from a specific category by id
$filter_tagset = "filter_tagset_example"; // string | Filter for polls with specified tags (separated by comma)
$filter_text = "filter_text_example"; // string | Filter for polls whose text contains a string
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getPolls($filter_category, $filter_tagset, $filter_text, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->getPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_category** | **string**| Filter for polls from a specific category by id | [optional]
 **filter_tagset** | **string**| Filter for polls with specified tags (separated by comma) | [optional]
 **filter_text** | **string**| Filter for polls whose text contains a string | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourcePollResource_**](../Model/PageResourcePollResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePoll**
> \KnetikCloud\Model\PollResource updatePoll($id, $poll_resource)

Update an existing poll

<b>Permissions Needed:</b> POLLS_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The poll id
$poll_resource = new \KnetikCloud\Model\PollResource(); // \KnetikCloud\Model\PollResource | The poll object

try {
    $result = $api_instance->updatePoll($id, $poll_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->updatePoll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The poll id |
 **poll_resource** | [**\KnetikCloud\Model\PollResource**](../Model/PollResource.md)| The poll object | [optional]

### Return type

[**\KnetikCloud\Model\PollResource**](../Model/PollResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePollTemplate**
> \KnetikCloud\Model\TemplateResource updatePollTemplate($id, $poll_template_resource)

Update a poll template

<b>Permissions Needed:</b> TEMPLATE_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ContentPollsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$poll_template_resource = new \KnetikCloud\Model\TemplateResource(); // \KnetikCloud\Model\TemplateResource | The poll template resource object

try {
    $result = $api_instance->updatePollTemplate($id, $poll_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentPollsApi->updatePollTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **poll_template_resource** | [**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)| The poll template resource object | [optional]

### Return type

[**\KnetikCloud\Model\TemplateResource**](../Model/TemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

