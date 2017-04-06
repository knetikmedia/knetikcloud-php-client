# KnetikCloud\ReportingChallengesApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChallengeEventLeaderboard**](ReportingChallengesApi.md#getChallengeEventLeaderboard) | **GET** /reporting/events/leaderboard | Retrieve a challenge event leaderboard details
[**getChallengeEventParticipants**](ReportingChallengesApi.md#getChallengeEventParticipants) | **GET** /reporting/events/participants | Retrieve a challenge event participant details


# **getChallengeEventLeaderboard**
> \KnetikCloud\Model\PageResourceChallengeEventParticipantResource_ getChallengeEventLeaderboard($filter_event)

Retrieve a challenge event leaderboard details

Lists all leaderboard entries with additional user details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ReportingChallengesApi();
$filter_event = 789; // int | A sepecific challenge event id

try {
    $result = $api_instance->getChallengeEventLeaderboard($filter_event);
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

### Return type

[**\KnetikCloud\Model\PageResourceChallengeEventParticipantResource_**](../Model/PageResourceChallengeEventParticipantResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChallengeEventParticipants**
> \KnetikCloud\Model\PageResourceChallengeEventParticipantResource_ getChallengeEventParticipants($filter_event)

Retrieve a challenge event participant details

Lists all user submitted scores sorted by value, including those that do not apear in the leaderboard due to value or aggregation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\ReportingChallengesApi();
$filter_event = 789; // int | A sepecific challenge event id

try {
    $result = $api_instance->getChallengeEventParticipants($filter_event);
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

### Return type

[**\KnetikCloud\Model\PageResourceChallengeEventParticipantResource_**](../Model/PageResourceChallengeEventParticipantResource_.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

