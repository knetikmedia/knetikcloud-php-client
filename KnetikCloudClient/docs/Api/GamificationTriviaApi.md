# KnetikCloud\GamificationTriviaApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQuestionAnswers**](GamificationTriviaApi.md#addQuestionAnswers) | **POST** /trivia/questions/{question_id}/answers | Add an answer to a question
[**addQuestionTag**](GamificationTriviaApi.md#addQuestionTag) | **POST** /trivia/questions/{id}/tags | Add a tag to a question
[**addTagToQuestionsBatch**](GamificationTriviaApi.md#addTagToQuestionsBatch) | **POST** /trivia/questions/tags | Add a tag to a batch of questions
[**createImportJob**](GamificationTriviaApi.md#createImportJob) | **POST** /trivia/import | Create an import job
[**createQuestion**](GamificationTriviaApi.md#createQuestion) | **POST** /trivia/questions | Create a question
[**createQuestionTemplate**](GamificationTriviaApi.md#createQuestionTemplate) | **POST** /trivia/questions/templates | Create a question template
[**deleteImportJob**](GamificationTriviaApi.md#deleteImportJob) | **DELETE** /trivia/import/{id} | Delete an import job
[**deleteQuestion**](GamificationTriviaApi.md#deleteQuestion) | **DELETE** /trivia/questions/{id} | Delete a question
[**deleteQuestionAnswers**](GamificationTriviaApi.md#deleteQuestionAnswers) | **DELETE** /trivia/questions/{question_id}/answers/{id} | Remove an answer from a question
[**deleteQuestionTemplate**](GamificationTriviaApi.md#deleteQuestionTemplate) | **DELETE** /trivia/questions/templates/{id} | Delete a question template
[**getImportJob**](GamificationTriviaApi.md#getImportJob) | **GET** /trivia/import/{id} | Get an import job
[**getImportJobs**](GamificationTriviaApi.md#getImportJobs) | **GET** /trivia/import | Get a list of import job
[**getQuestion**](GamificationTriviaApi.md#getQuestion) | **GET** /trivia/questions/{id} | Get a single question
[**getQuestionAnswer**](GamificationTriviaApi.md#getQuestionAnswer) | **GET** /trivia/questions/{question_id}/answers/{id} | Get an answer for a question
[**getQuestionAnswers**](GamificationTriviaApi.md#getQuestionAnswers) | **GET** /trivia/questions/{question_id}/answers | List the answers available for a question
[**getQuestionDeltas**](GamificationTriviaApi.md#getQuestionDeltas) | **GET** /trivia/questions/delta | List question deltas in ascending order of updated date
[**getQuestionTags**](GamificationTriviaApi.md#getQuestionTags) | **GET** /trivia/questions/{id}/tags | List the tags for a question
[**getQuestionTemplate**](GamificationTriviaApi.md#getQuestionTemplate) | **GET** /trivia/questions/templates/{id} | Get a single question template
[**getQuestionTemplates**](GamificationTriviaApi.md#getQuestionTemplates) | **GET** /trivia/questions/templates | List and search question templates
[**getQuestions**](GamificationTriviaApi.md#getQuestions) | **GET** /trivia/questions | List and search questions
[**getQuestionsCount**](GamificationTriviaApi.md#getQuestionsCount) | **GET** /trivia/questions/count | Count questions based on filters
[**processImportJob**](GamificationTriviaApi.md#processImportJob) | **POST** /trivia/import/{id}/process | Start processing an import job
[**removeQuestionTag**](GamificationTriviaApi.md#removeQuestionTag) | **DELETE** /trivia/questions/{id}/tags/{tag} | Remove a tag from a question
[**removeTagToQuestionsBatch**](GamificationTriviaApi.md#removeTagToQuestionsBatch) | **DELETE** /trivia/questions/tags/{tag} | Remove a tag from a batch of questions
[**searchQuestionTags**](GamificationTriviaApi.md#searchQuestionTags) | **GET** /trivia/tags | List and search tags by the beginning of the string
[**updateImportJob**](GamificationTriviaApi.md#updateImportJob) | **PUT** /trivia/import/{id} | Update an import job
[**updateQuestion**](GamificationTriviaApi.md#updateQuestion) | **PUT** /trivia/questions/{id} | Update a question
[**updateQuestionAnswer**](GamificationTriviaApi.md#updateQuestionAnswer) | **PUT** /trivia/questions/{question_id}/answers/{id} | Update an answer for a question
[**updateQuestionTemplate**](GamificationTriviaApi.md#updateQuestionTemplate) | **PUT** /trivia/questions/templates/{id} | Update a question template
[**updateQuestionsInBulk**](GamificationTriviaApi.md#updateQuestionsInBulk) | **PUT** /trivia/questions | Bulk update questions


# **addQuestionAnswers**
> \KnetikCloud\Model\AnswerResource addQuestionAnswers($question_id, $answer)

Add an answer to a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question_id = "question_id_example"; // string | The id of the question
$answer = new \KnetikCloud\Model\AnswerResource(); // \KnetikCloud\Model\AnswerResource | The new answer

try {
    $result = $api_instance->addQuestionAnswers($question_id, $answer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->addQuestionAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question_id** | **string**| The id of the question |
 **answer** | [**\KnetikCloud\Model\AnswerResource**](../Model/AnswerResource.md)| The new answer | [optional]

### Return type

[**\KnetikCloud\Model\AnswerResource**](../Model/AnswerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuestionTag**
> addQuestionTag($id, $tag)

Add a tag to a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the question
$tag = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The new tag

try {
    $api_instance->addQuestionTag($id, $tag);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->addQuestionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the question |
 **tag** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The new tag | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTagToQuestionsBatch**
> int addTagToQuestionsBatch($tag, $filter_search, $filter_idset, $filter_category, $filter_tag, $filter_tagset, $filter_type, $filter_published, $filter_import_id)

Add a tag to a batch of questions

All questions that dont't have the tag and match filters will have it added. The returned number is the number of questions updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$tag = new \KnetikCloud\Model\StringWrapper(); // \KnetikCloud\Model\StringWrapper | The tag to add
$filter_search = "filter_search_example"; // string | Filter for documents whose question, answers or tags contains provided string
$filter_idset = "filter_idset_example"; // string | Filter for documents whose id is in the comma separated list provided
$filter_category = "filter_category_example"; // string | Filter for questions with specified category, by id
$filter_tag = "filter_tag_example"; // string | Filter for questions with specified tag
$filter_tagset = "filter_tagset_example"; // string | Filter for questions with specified tags (separated by comma)
$filter_type = "filter_type_example"; // string | Filter for questions with specified type
$filter_published = true; // bool | Filter for questions currenctly published or not
$filter_import_id = 789; // int | Filter for questions from a specific import job

try {
    $result = $api_instance->addTagToQuestionsBatch($tag, $filter_search, $filter_idset, $filter_category, $filter_tag, $filter_tagset, $filter_type, $filter_published, $filter_import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->addTagToQuestionsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | [**\KnetikCloud\Model\StringWrapper**](../Model/StringWrapper.md)| The tag to add | [optional]
 **filter_search** | **string**| Filter for documents whose question, answers or tags contains provided string | [optional]
 **filter_idset** | **string**| Filter for documents whose id is in the comma separated list provided | [optional]
 **filter_category** | **string**| Filter for questions with specified category, by id | [optional]
 **filter_tag** | **string**| Filter for questions with specified tag | [optional]
 **filter_tagset** | **string**| Filter for questions with specified tags (separated by comma) | [optional]
 **filter_type** | **string**| Filter for questions with specified type | [optional]
 **filter_published** | **bool**| Filter for questions currenctly published or not | [optional]
 **filter_import_id** | **int**| Filter for questions from a specific import job | [optional]

### Return type

**int**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImportJob**
> \KnetikCloud\Model\ImportJobResource createImportJob($request)

Create an import job

Set up a job to import a set of trivia questions from a cvs file at a remote url. the file will be validated asynchronously but will not be processed until started manually with the process endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$request = new \KnetikCloud\Model\ImportJobResource(); // \KnetikCloud\Model\ImportJobResource | The new import job

try {
    $result = $api_instance->createImportJob($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->createImportJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\KnetikCloud\Model\ImportJobResource**](../Model/ImportJobResource.md)| The new import job | [optional]

### Return type

[**\KnetikCloud\Model\ImportJobResource**](../Model/ImportJobResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createQuestion**
> \KnetikCloud\Model\QuestionResource createQuestion($question)

Create a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question = new \KnetikCloud\Model\QuestionResource(); // \KnetikCloud\Model\QuestionResource | The new question

try {
    $result = $api_instance->createQuestion($question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->createQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question** | [**\KnetikCloud\Model\QuestionResource**](../Model/QuestionResource.md)| The new question | [optional]

### Return type

[**\KnetikCloud\Model\QuestionResource**](../Model/QuestionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createQuestionTemplate**
> \KnetikCloud\Model\QuestionTemplateResource createQuestionTemplate($question_template_resource)

Create a question template

Question templates define a type of question and the properties they have

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question_template_resource = new \KnetikCloud\Model\QuestionTemplateResource(); // \KnetikCloud\Model\QuestionTemplateResource | The question template resource object

try {
    $result = $api_instance->createQuestionTemplate($question_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->createQuestionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question_template_resource** | [**\KnetikCloud\Model\QuestionTemplateResource**](../Model/QuestionTemplateResource.md)| The question template resource object | [optional]

### Return type

[**\KnetikCloud\Model\QuestionTemplateResource**](../Model/QuestionTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImportJob**
> deleteImportJob($id)

Delete an import job

Also deletes all questions that were imported by it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the job

try {
    $api_instance->deleteImportJob($id);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->deleteImportJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the job |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestion**
> deleteQuestion($id)

Delete a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the question

try {
    $api_instance->deleteQuestion($id);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->deleteQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the question |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionAnswers**
> deleteQuestionAnswers($question_id, $id)

Remove an answer from a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question_id = "question_id_example"; // string | The id of the question
$id = "id_example"; // string | The id of the answer

try {
    $api_instance->deleteQuestionAnswers($question_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->deleteQuestionAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question_id** | **string**| The id of the question |
 **id** | **string**| The id of the answer |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionTemplate**
> deleteQuestionTemplate($id, $cascade)

Delete a question template

If cascade = 'detach', it will force delete the template even if it's attached to other objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$cascade = "cascade_example"; // string | The value needed to delete used templates

try {
    $api_instance->deleteQuestionTemplate($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->deleteQuestionTemplate: ', $e->getMessage(), PHP_EOL;
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

# **getImportJob**
> \KnetikCloud\Model\ImportJobResource getImportJob($id)

Get an import job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the job

try {
    $result = $api_instance->getImportJob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getImportJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the job |

### Return type

[**\KnetikCloud\Model\ImportJobResource**](../Model/ImportJobResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportJobs**
> \KnetikCloud\Model\PageResourceImportJobResource_ getImportJobs($filter_vendor, $filter_category, $filter_name, $filter_status, $size, $page, $order)

Get a list of import job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$filter_vendor = "filter_vendor_example"; // string | Filter for jobs by vendor id
$filter_category = "filter_category_example"; // string | Filter for jobs by category id
$filter_name = "filter_name_example"; // string | Filter for jobs which name *STARTS* with the given string
$filter_status = "filter_status_example"; // string | Filter for jobs that are in a specific set of statuses (comma separated)
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getImportJobs($filter_vendor, $filter_category, $filter_name, $filter_status, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getImportJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_vendor** | **string**| Filter for jobs by vendor id | [optional]
 **filter_category** | **string**| Filter for jobs by category id | [optional]
 **filter_name** | **string**| Filter for jobs which name *STARTS* with the given string | [optional]
 **filter_status** | **string**| Filter for jobs that are in a specific set of statuses (comma separated) | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]

### Return type

[**\KnetikCloud\Model\PageResourceImportJobResource_**](../Model/PageResourceImportJobResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestion**
> \KnetikCloud\Model\QuestionResource getQuestion($id)

Get a single question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the question

try {
    $result = $api_instance->getQuestion($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the question |

### Return type

[**\KnetikCloud\Model\QuestionResource**](../Model/QuestionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionAnswer**
> \KnetikCloud\Model\AnswerResource getQuestionAnswer($question_id, $id)

Get an answer for a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question_id = "question_id_example"; // string | The id of the question
$id = "id_example"; // string | The id of the answer

try {
    $result = $api_instance->getQuestionAnswer($question_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question_id** | **string**| The id of the question |
 **id** | **string**| The id of the answer |

### Return type

[**\KnetikCloud\Model\AnswerResource**](../Model/AnswerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionAnswers**
> \KnetikCloud\Model\AnswerResource[] getQuestionAnswers($question_id)

List the answers available for a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question_id = "question_id_example"; // string | The id of the question

try {
    $result = $api_instance->getQuestionAnswers($question_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question_id** | **string**| The id of the question |

### Return type

[**\KnetikCloud\Model\AnswerResource[]**](../Model/AnswerResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionDeltas**
> \KnetikCloud\Model\DeltaResource[] getQuestionDeltas($since)

List question deltas in ascending order of updated date

The 'since' parameter is important to avoid getting a full list of all questions. Implementors should make sure they pass the updated date of the last resource loaded, not the date of the last request, in order to avoid gaps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$since = 789; // int | Timestamp in seconds

try {
    $result = $api_instance->getQuestionDeltas($since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionDeltas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **int**| Timestamp in seconds | [optional]

### Return type

[**\KnetikCloud\Model\DeltaResource[]**](../Model/DeltaResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionTags**
> string[] getQuestionTags($id)

List the tags for a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the question

try {
    $result = $api_instance->getQuestionTags($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the question |

### Return type

**string[]**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionTemplate**
> \KnetikCloud\Model\QuestionTemplateResource getQuestionTemplate($id)

Get a single question template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template

try {
    $result = $api_instance->getQuestionTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |

### Return type

[**\KnetikCloud\Model\QuestionTemplateResource**](../Model/QuestionTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionTemplates**
> \KnetikCloud\Model\PageResourceQuestionTemplateResource_ getQuestionTemplates($size, $page, $order)

List and search question templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getQuestionTemplates($size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionTemplates: ', $e->getMessage(), PHP_EOL;
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

[**\KnetikCloud\Model\PageResourceQuestionTemplateResource_**](../Model/PageResourceQuestionTemplateResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestions**
> \KnetikCloud\Model\PageResourceQuestionResource_ getQuestions($size, $page, $order, $filter_search, $filter_idset, $filter_category, $filter_tagset, $filter_tag, $filter_type, $filter_published, $filter_import_id)

List and search questions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned, starting with 1
$order = "id:ASC"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]
$filter_search = "filter_search_example"; // string | Filter for documents whose question, answers or tags contains provided string
$filter_idset = "filter_idset_example"; // string | Filter for documents whose id is in the comma separated list provided
$filter_category = "filter_category_example"; // string | Filter for questions with specified category, by id
$filter_tagset = "filter_tagset_example"; // string | Filter for questions with specified tags (separated by comma)
$filter_tag = "filter_tag_example"; // string | Filter for questions with specified tag
$filter_type = "filter_type_example"; // string | Filter for questions with specified type.  Allowable values: ('TEXT', 'IMAGE', 'VIDEO', 'AUDIO')
$filter_published = true; // bool | Filter for questions currenctly published or not
$filter_import_id = 789; // int | Filter for questions from a specific import job

try {
    $result = $api_instance->getQuestions($size, $page, $order, $filter_search, $filter_idset, $filter_category, $filter_tagset, $filter_tag, $filter_type, $filter_published, $filter_import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned, starting with 1 | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional] [default to id:ASC]
 **filter_search** | **string**| Filter for documents whose question, answers or tags contains provided string | [optional]
 **filter_idset** | **string**| Filter for documents whose id is in the comma separated list provided | [optional]
 **filter_category** | **string**| Filter for questions with specified category, by id | [optional]
 **filter_tagset** | **string**| Filter for questions with specified tags (separated by comma) | [optional]
 **filter_tag** | **string**| Filter for questions with specified tag | [optional]
 **filter_type** | **string**| Filter for questions with specified type.  Allowable values: (&#39;TEXT&#39;, &#39;IMAGE&#39;, &#39;VIDEO&#39;, &#39;AUDIO&#39;) | [optional]
 **filter_published** | **bool**| Filter for questions currenctly published or not | [optional]
 **filter_import_id** | **int**| Filter for questions from a specific import job | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceQuestionResource_**](../Model/PageResourceQuestionResource_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionsCount**
> int getQuestionsCount($filter_search, $filter_idset, $filter_category, $filter_tag, $filter_tagset, $filter_type, $filter_published)

Count questions based on filters

This is also provided by the list endpoint so you don't need to call this for pagination purposes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$filter_search = "filter_search_example"; // string | Filter for documents whose question, answers or tags contains provided string
$filter_idset = "filter_idset_example"; // string | Filter for documents whose id is in the comma separated list provided
$filter_category = "filter_category_example"; // string | Filter for questions with specified category, by id
$filter_tag = "filter_tag_example"; // string | Filter for questions with specified tag
$filter_tagset = "filter_tagset_example"; // string | Filter for questions with specified tags (separated by comma)
$filter_type = "filter_type_example"; // string | Filter for questions with specified type.  Allowable values: ('TEXT', 'IMAGE', 'VIDEO', 'AUDIO')
$filter_published = true; // bool | Filter for questions currenctly published or not

try {
    $result = $api_instance->getQuestionsCount($filter_search, $filter_idset, $filter_category, $filter_tag, $filter_tagset, $filter_type, $filter_published);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->getQuestionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Filter for documents whose question, answers or tags contains provided string | [optional]
 **filter_idset** | **string**| Filter for documents whose id is in the comma separated list provided | [optional]
 **filter_category** | **string**| Filter for questions with specified category, by id | [optional]
 **filter_tag** | **string**| Filter for questions with specified tag | [optional]
 **filter_tagset** | **string**| Filter for questions with specified tags (separated by comma) | [optional]
 **filter_type** | **string**| Filter for questions with specified type.  Allowable values: (&#39;TEXT&#39;, &#39;IMAGE&#39;, &#39;VIDEO&#39;, &#39;AUDIO&#39;) | [optional]
 **filter_published** | **bool**| Filter for questions currenctly published or not | [optional]

### Return type

**int**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processImportJob**
> \KnetikCloud\Model\ImportJobResource processImportJob($id, $publish_now)

Start processing an import job

Will process the CSV file and add new questions asynchronously. The status of the job must be 'VALID'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the job
$publish_now = true; // bool | Whether the new questions should be published live immediately

try {
    $result = $api_instance->processImportJob($id, $publish_now);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->processImportJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the job |
 **publish_now** | **bool**| Whether the new questions should be published live immediately |

### Return type

[**\KnetikCloud\Model\ImportJobResource**](../Model/ImportJobResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeQuestionTag**
> removeQuestionTag($id, $tag)

Remove a tag from a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the question
$tag = "tag_example"; // string | The tag to remove

try {
    $api_instance->removeQuestionTag($id, $tag);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->removeQuestionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the question |
 **tag** | **string**| The tag to remove |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagToQuestionsBatch**
> int removeTagToQuestionsBatch($tag, $filter_search, $filter_idset, $filter_category, $filter_tag, $filter_tagset, $filter_type, $filter_published, $filter_import_id)

Remove a tag from a batch of questions

ll questions that have the tag and match filters will have it removed. The returned number is the number of questions updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$tag = "tag_example"; // string | The tag to remove
$filter_search = "filter_search_example"; // string | Filter for documents whose question, answers or tags contains provided string
$filter_idset = "filter_idset_example"; // string | Filter for documents whose id is in the comma separated list provided
$filter_category = "filter_category_example"; // string | Filter for questions with specified category, by id
$filter_tag = "filter_tag_example"; // string | Filter for questions with specified tag
$filter_tagset = "filter_tagset_example"; // string | Filter for questions with specified tags (separated by comma)
$filter_type = "filter_type_example"; // string | Filter for questions with specified type.  Allowable values: ('TEXT', 'IMAGE', 'VIDEO', 'AUDIO')
$filter_published = true; // bool | Filter for questions currenctly published or not
$filter_import_id = 789; // int | Filter for questions from a specific import job

try {
    $result = $api_instance->removeTagToQuestionsBatch($tag, $filter_search, $filter_idset, $filter_category, $filter_tag, $filter_tagset, $filter_type, $filter_published, $filter_import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->removeTagToQuestionsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **string**| The tag to remove |
 **filter_search** | **string**| Filter for documents whose question, answers or tags contains provided string | [optional]
 **filter_idset** | **string**| Filter for documents whose id is in the comma separated list provided | [optional]
 **filter_category** | **string**| Filter for questions with specified category, by id | [optional]
 **filter_tag** | **string**| Filter for questions with specified tag | [optional]
 **filter_tagset** | **string**| Filter for questions with specified tags (separated by comma) | [optional]
 **filter_type** | **string**| Filter for questions with specified type.  Allowable values: (&#39;TEXT&#39;, &#39;IMAGE&#39;, &#39;VIDEO&#39;, &#39;AUDIO&#39;) | [optional]
 **filter_published** | **bool**| Filter for questions currenctly published or not | [optional]
 **filter_import_id** | **int**| Filter for questions from a specific import job | [optional]

### Return type

**int**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchQuestionTags**
> \KnetikCloud\Model\CollectionString_ searchQuestionTags($filter_search, $filter_category, $filter_import_id)

List and search tags by the beginning of the string

For performance reasons, search & category filters are mutually exclusive. If category is specified, search filter will be ignored in order to do fast matches for typeahead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$filter_search = "filter_search_example"; // string | Filter for tags starting with the given text
$filter_category = "filter_category_example"; // string | Filter for tags on questions from a specific category
$filter_import_id = 789; // int | Filter for tags on questions from a specific import job

try {
    $result = $api_instance->searchQuestionTags($filter_search, $filter_category, $filter_import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->searchQuestionTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_search** | **string**| Filter for tags starting with the given text | [optional]
 **filter_category** | **string**| Filter for tags on questions from a specific category | [optional]
 **filter_import_id** | **int**| Filter for tags on questions from a specific import job | [optional]

### Return type

[**\KnetikCloud\Model\CollectionString_**](../Model/CollectionString_.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImportJob**
> \KnetikCloud\Model\ImportJobResource updateImportJob($id, $request)

Update an import job

Changes should be made before process is started for there to be any effect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the job
$request = new \KnetikCloud\Model\ImportJobResource(); // \KnetikCloud\Model\ImportJobResource | The updated job

try {
    $result = $api_instance->updateImportJob($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->updateImportJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the job |
 **request** | [**\KnetikCloud\Model\ImportJobResource**](../Model/ImportJobResource.md)| The updated job | [optional]

### Return type

[**\KnetikCloud\Model\ImportJobResource**](../Model/ImportJobResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestion**
> \KnetikCloud\Model\QuestionResource updateQuestion($id, $question)

Update a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the question
$question = new \KnetikCloud\Model\QuestionResource(); // \KnetikCloud\Model\QuestionResource | The updated question

try {
    $result = $api_instance->updateQuestion($id, $question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->updateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the question |
 **question** | [**\KnetikCloud\Model\QuestionResource**](../Model/QuestionResource.md)| The updated question | [optional]

### Return type

[**\KnetikCloud\Model\QuestionResource**](../Model/QuestionResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionAnswer**
> updateQuestionAnswer($question_id, $id, $answer)

Update an answer for a question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question_id = "question_id_example"; // string | The id of the question
$id = "id_example"; // string | The id of the answer
$answer = new \KnetikCloud\Model\AnswerResource(); // \KnetikCloud\Model\AnswerResource | The updated answer

try {
    $api_instance->updateQuestionAnswer($question_id, $id, $answer);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->updateQuestionAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question_id** | **string**| The id of the question |
 **id** | **string**| The id of the answer |
 **answer** | [**\KnetikCloud\Model\AnswerResource**](../Model/AnswerResource.md)| The updated answer | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionTemplate**
> \KnetikCloud\Model\QuestionTemplateResource updateQuestionTemplate($id, $question_template_resource)

Update a question template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the template
$question_template_resource = new \KnetikCloud\Model\QuestionTemplateResource(); // \KnetikCloud\Model\QuestionTemplateResource | The question template resource object

try {
    $result = $api_instance->updateQuestionTemplate($id, $question_template_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->updateQuestionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the template |
 **question_template_resource** | [**\KnetikCloud\Model\QuestionTemplateResource**](../Model/QuestionTemplateResource.md)| The question template resource object | [optional]

### Return type

[**\KnetikCloud\Model\QuestionTemplateResource**](../Model/QuestionTemplateResource.md)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionsInBulk**
> int updateQuestionsInBulk($question, $filter_search, $filter_idset, $filter_category, $filter_tagset, $filter_type, $filter_published, $filter_import_id)

Bulk update questions

Will update all questions that match filters used (or all questions in system if no filters used). Body should match a question resource with only those properties you wish to set. Null values will be ignored. Returned number is how many were updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\GamificationTriviaApi(new \Http\Adapter\Guzzle6\Client());
$question = new \KnetikCloud\Model\QuestionResource(); // \KnetikCloud\Model\QuestionResource | New values for a set of question fields
$filter_search = "filter_search_example"; // string | Filter for documents whose question, answers or tags contains provided string
$filter_idset = "filter_idset_example"; // string | Filter for documents whose id is in the comma separated list provided
$filter_category = "filter_category_example"; // string | Filter for questions with specified category, by id
$filter_tagset = "filter_tagset_example"; // string | Filter for questions with specified tags (separated by comma)
$filter_type = "filter_type_example"; // string | Filter for questions with specified type.  Allowable values: ('TEXT', 'IMAGE', 'VIDEO', 'AUDIO')
$filter_published = true; // bool | Filter for questions currenctly published or not
$filter_import_id = 789; // int | Filter for questions from a specific import job

try {
    $result = $api_instance->updateQuestionsInBulk($question, $filter_search, $filter_idset, $filter_category, $filter_tagset, $filter_type, $filter_published, $filter_import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationTriviaApi->updateQuestionsInBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **question** | [**\KnetikCloud\Model\QuestionResource**](../Model/QuestionResource.md)| New values for a set of question fields | [optional]
 **filter_search** | **string**| Filter for documents whose question, answers or tags contains provided string | [optional]
 **filter_idset** | **string**| Filter for documents whose id is in the comma separated list provided | [optional]
 **filter_category** | **string**| Filter for questions with specified category, by id | [optional]
 **filter_tagset** | **string**| Filter for questions with specified tags (separated by comma) | [optional]
 **filter_type** | **string**| Filter for questions with specified type.  Allowable values: (&#39;TEXT&#39;, &#39;IMAGE&#39;, &#39;VIDEO&#39;, &#39;AUDIO&#39;) | [optional]
 **filter_published** | **bool**| Filter for questions currenctly published or not | [optional]
 **filter_import_id** | **int**| Filter for questions from a specific import job | [optional]

### Return type

**int**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

