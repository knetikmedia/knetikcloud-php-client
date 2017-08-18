# KnetikCloud\UtilMaintenanceApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMaintenance**](UtilMaintenanceApi.md#deleteMaintenance) | **DELETE** /maintenance | Delete maintenance info
[**getMaintenance**](UtilMaintenanceApi.md#getMaintenance) | **GET** /maintenance | Get current maintenance info
[**setMaintenance**](UtilMaintenanceApi.md#setMaintenance) | **POST** /maintenance | Set current maintenance info
[**updateMaintenance**](UtilMaintenanceApi.md#updateMaintenance) | **PUT** /maintenance | Update current maintenance info


# **deleteMaintenance**
> deleteMaintenance()

Delete maintenance info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UtilMaintenanceApi(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->deleteMaintenance();
} catch (Exception $e) {
    echo 'Exception when calling UtilMaintenanceApi->deleteMaintenance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMaintenance**
> \KnetikCloud\Model\Maintenance getMaintenance()

Get current maintenance info

Get current maintenance info. 404 if no maintenance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KnetikCloud\Api\UtilMaintenanceApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getMaintenance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilMaintenanceApi->getMaintenance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KnetikCloud\Model\Maintenance**](../Model/Maintenance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMaintenance**
> setMaintenance($maintenance)

Set current maintenance info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UtilMaintenanceApi(new \Http\Adapter\Guzzle6\Client());
$maintenance = new \KnetikCloud\Model\Maintenance(); // \KnetikCloud\Model\Maintenance | The maintenance object

try {
    $api_instance->setMaintenance($maintenance);
} catch (Exception $e) {
    echo 'Exception when calling UtilMaintenanceApi->setMaintenance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maintenance** | [**\KnetikCloud\Model\Maintenance**](../Model/Maintenance.md)| The maintenance object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMaintenance**
> updateMaintenance($maintenance)

Update current maintenance info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\UtilMaintenanceApi(new \Http\Adapter\Guzzle6\Client());
$maintenance = new \KnetikCloud\Model\Maintenance(); // \KnetikCloud\Model\Maintenance | The maintenance object

try {
    $api_instance->updateMaintenance($maintenance);
} catch (Exception $e) {
    echo 'Exception when calling UtilMaintenanceApi->updateMaintenance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maintenance** | [**\KnetikCloud\Model\Maintenance**](../Model/Maintenance.md)| The maintenance object | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

