# KnetikCloud\ReportingChallengesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChallengeEventLeaderboard**](ReportingChallengesApi.md#getChallengeEventLeaderboard) | **GET** /reporting/events/leaderboard | Retrieve a challenge event leaderboard details
[**getChallengeEventParticipants**](ReportingChallengesApi.md#getChallengeEventParticipants) | **GET** /reporting/events/participants | Retrieve a challenge event participant details


# **getChallengeEventLeaderboard**
> \KnetikCloud\Model\PageResourceChallengeEventParticipantResource_ getChallengeEventLeaderboard($filter_event, $size, $page, $order)

Retrieve a challenge event leaderboard details

Lists all leaderboard entries with additional user details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingChallengesApi(new \Http\Adapter\Guzzle6\Client());
$filter_event = 789; // int | A sepecific challenge event id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallengeEventLeaderboard($filter_event, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingChallengesApi->getChallengeEventLeaderboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_event** | **int**| A sepecific challenge event id | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceChallengeEventParticipantResource_**](../Model/PageResourceChallengeEventParticipantResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeEventParticipants**
> \KnetikCloud\Model\PageResourceChallengeEventParticipantResource_ getChallengeEventParticipants($filter_event, $size, $page, $order)

Retrieve a challenge event participant details

Lists all user submitted scores sorted by value, including those that do not apear in the leaderboard due to value or aggregation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\ReportingChallengesApi(new \Http\Adapter\Guzzle6\Client());
$filter_event = 789; // int | A sepecific challenge event id
$size = 25; // int | The number of objects returned per page
$page = 1; // int | The number of the page returned
$order = "order_example"; // string | A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC]

try {
    $result = $api_instance->getChallengeEventParticipants($filter_event, $size, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingChallengesApi->getChallengeEventParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_event** | **int**| A sepecific challenge event id | [optional]
 **size** | **int**| The number of objects returned per page | [optional] [default to 25]
 **page** | **int**| The number of the page returned | [optional] [default to 1]
 **order** | **string**| A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] | [optional]

### Return type

[**\KnetikCloud\Model\PageResourceChallengeEventParticipantResource_**](../Model/PageResourceChallengeEventParticipantResource_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

