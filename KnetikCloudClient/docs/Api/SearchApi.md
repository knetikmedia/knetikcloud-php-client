# KnetikCloud\SearchApi

All URIs are relative to *https://sandbox.knetikcloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCountGET**](SearchApi.md#searchCountGET) | **GET** /search/count/{type} | Count matches with no template
[**searchCountPOST**](SearchApi.md#searchCountPOST) | **POST** /search/count/{type} | Count matches with no template
[**searchCountWithTemplateGET**](SearchApi.md#searchCountWithTemplateGET) | **GET** /search/count/{type}/{template} | Count matches with a template
[**searchCountWithTemplatePOST**](SearchApi.md#searchCountWithTemplatePOST) | **POST** /search/count/{type}/{template} | Count matches with a template
[**searchDocumentGET**](SearchApi.md#searchDocumentGET) | **GET** /search/documents/{type}/{id} | Get document with no template
[**searchDocumentWithTemplateGET**](SearchApi.md#searchDocumentWithTemplateGET) | **GET** /search/documents/{type}/{template}/{id} | Get document with a template
[**searchExplainGET**](SearchApi.md#searchExplainGET) | **GET** /search/explain/{type}/{id} | Explain matches with no template
[**searchExplainPOST**](SearchApi.md#searchExplainPOST) | **POST** /search/explain/{type}/{id} | Explain matches with no template
[**searchExplainWithTemplateGET**](SearchApi.md#searchExplainWithTemplateGET) | **GET** /search/explain/{type}/{template}/{id} | Explain matches with a template
[**searchExplainWithTemplatePOST**](SearchApi.md#searchExplainWithTemplatePOST) | **POST** /search/explain/{type}/{template}/{id} | Explain matches with a template
[**searchIndex**](SearchApi.md#searchIndex) | **POST** /search/index/{type} | Search an index with no template
[**searchIndexGET**](SearchApi.md#searchIndexGET) | **GET** /search/index/{type} | Search an index with no template
[**searchIndexWithTemplateGET**](SearchApi.md#searchIndexWithTemplateGET) | **GET** /search/index/{type}/{template} | Search an index with a template
[**searchIndexWithTemplatePOST**](SearchApi.md#searchIndexWithTemplatePOST) | **POST** /search/index/{type}/{template} | Search an index with a template
[**searchIndicesGET**](SearchApi.md#searchIndicesGET) | **GET** /search/indices | Get indices
[**searchMappingsGET**](SearchApi.md#searchMappingsGET) | **GET** /search/mappings/{type} | Get mapping with no template
[**searchMappingsWithTemplateGET**](SearchApi.md#searchMappingsWithTemplateGET) | **GET** /search/mappings/{type}/{template} | Get mapping with a template
[**searchValidateGET**](SearchApi.md#searchValidateGET) | **GET** /search/validate/{type} | Validate matches with no template
[**searchValidatePOST**](SearchApi.md#searchValidatePOST) | **POST** /search/validate/{type} | Validate matches with no template
[**searchValidateWithTemplateGET**](SearchApi.md#searchValidateWithTemplateGET) | **GET** /search/validate/{type}/{template} | Validate matches with a template
[**searchValidateWithTemplatePOST**](SearchApi.md#searchValidateWithTemplatePOST) | **POST** /search/validate/{type}/{template} | Validate matches with a template


# **searchCountGET**
> object searchCountGET($type)

Count matches with no template

This is a 1 to 1 mapping of a ElasticSearch call to _count.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type

try {
    $result = $api_instance->searchCountGET($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCountGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCountPOST**
> object searchCountPOST($type, $query)

Count matches with no template

This is a 1 to 1 mapping of a ElasticSearch call to _count.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchCountPOST($type, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCountPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCountWithTemplateGET**
> object searchCountWithTemplateGET($type, $template)

Count matches with a template

This is a 1 to 1 mapping of a ElasticSearch call to _count.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template

try {
    $result = $api_instance->searchCountWithTemplateGET($type, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCountWithTemplateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCountWithTemplatePOST**
> object searchCountWithTemplatePOST($type, $template, $query)

Count matches with a template

This is a 1 to 1 mapping of a ElasticSearch call to _count.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchCountWithTemplatePOST($type, $template, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCountWithTemplatePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDocumentGET**
> object searchDocumentGET($type, $id)

Get document with no template

This is a 1 to 1 mapping of a ElasticSearch call.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The index id

try {
    $result = $api_instance->searchDocumentGET($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDocumentGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The index id |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDocumentWithTemplateGET**
> object searchDocumentWithTemplateGET($type, $id, $template)

Get document with a template

This is a 1 to 1 mapping of a ElasticSearch call.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The index id
$template = "template_example"; // string | The index template

try {
    $result = $api_instance->searchDocumentWithTemplateGET($type, $id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDocumentWithTemplateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The index id |
 **template** | **string**| The index template |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchExplainGET**
> object searchExplainGET($type, $id)

Explain matches with no template

This is a 1 to 1 mapping of a ElasticSearch call to _explain.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The index id

try {
    $result = $api_instance->searchExplainGET($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchExplainGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The index id |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchExplainPOST**
> object searchExplainPOST($type, $id, $query)

Explain matches with no template

This is a 1 to 1 mapping of a ElasticSearch call to _explain.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The index id
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchExplainPOST($type, $id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchExplainPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The index id |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchExplainWithTemplateGET**
> object searchExplainWithTemplateGET($type, $id, $template)

Explain matches with a template

This is a 1 to 1 mapping of a ElasticSearch call to _explain.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The index id
$template = "template_example"; // string | The index template

try {
    $result = $api_instance->searchExplainWithTemplateGET($type, $id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchExplainWithTemplateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The index id |
 **template** | **string**| The index template |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchExplainWithTemplatePOST**
> object searchExplainWithTemplatePOST($type, $id, $template, $query)

Explain matches with a template

This is a 1 to 1 mapping of a ElasticSearch call to _explain.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-count.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$id = "id_example"; // string | The index id
$template = "template_example"; // string | The index template
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchExplainWithTemplatePOST($type, $id, $template, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchExplainWithTemplatePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **id** | **string**| The index id |
 **template** | **string**| The index template |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIndex**
> object searchIndex($type, $query)

Search an index with no template

This is a 1 to 1 mapping of a ElasticSearch call to _search.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchIndex($type, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIndexGET**
> object searchIndexGET($type)

Search an index with no template

This is a 1 to 1 mapping of a ElasticSearch call to _search.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type

try {
    $result = $api_instance->searchIndexGET($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndexGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIndexWithTemplateGET**
> object searchIndexWithTemplateGET($type, $template)

Search an index with a template

This is a 1 to 1 mapping of a ElasticSearch call to _search.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template

try {
    $result = $api_instance->searchIndexWithTemplateGET($type, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndexWithTemplateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIndexWithTemplatePOST**
> object searchIndexWithTemplatePOST($type, $template, $query)

Search an index with a template

This is a 1 to 1 mapping of a ElasticSearch call to _search.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchIndexWithTemplatePOST($type, $template, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndexWithTemplatePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIndicesGET**
> object searchIndicesGET()

Get indices

This is a 1 to 1 mapping of a ElasticSearch call to _cat/indices for indices.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-get-mapping.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->searchIndicesGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndicesGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMappingsGET**
> object searchMappingsGET($type)

Get mapping with no template

This is a 1 to 1 mapping of a ElasticSearch call to _mapping.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-get-mapping.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type

try {
    $result = $api_instance->searchMappingsGET($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchMappingsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMappingsWithTemplateGET**
> object searchMappingsWithTemplateGET($type, $template)

Get mapping with a template

This is a 1 to 1 mapping of a ElasticSearch call to _mapping.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-get-mapping.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template

try {
    $result = $api_instance->searchMappingsWithTemplateGET($type, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchMappingsWithTemplateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchValidateGET**
> object searchValidateGET($type)

Validate matches with no template

This is a 1 to 1 mapping of a ElasticSearch call to _validate/query.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-validate.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type

try {
    $result = $api_instance->searchValidateGET($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchValidateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchValidatePOST**
> object searchValidatePOST($type, $query)

Validate matches with no template

This is a 1 to 1 mapping of a ElasticSearch call to _validate/query.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-validate.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchValidatePOST($type, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchValidatePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchValidateWithTemplateGET**
> object searchValidateWithTemplateGET($type, $template)

Validate matches with a template

This is a 1 to 1 mapping of a ElasticSearch call to _validate/query.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-validate.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template

try {
    $result = $api_instance->searchValidateWithTemplateGET($type, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchValidateWithTemplateGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchValidateWithTemplatePOST**
> object searchValidateWithTemplatePOST($type, $template, $query)

Validate matches with a template

This is a 1 to 1 mapping of a ElasticSearch call to _validate/query.  Further information can be found at their <a href='https://www.elastic.co/guide/en/elasticsearch/reference/current/search-validate.html'>API guide</a>. <br><br><b>Permissions Needed:</b> SEARCH_ADMIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: oauth2_password_grant
KnetikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new KnetikCloud\Api\SearchApi(new \Http\Adapter\Guzzle6\Client());
$type = "type_example"; // string | The index type
$template = "template_example"; // string | The index template
$query = NULL; // object | The query to be used for the search

try {
    $result = $api_instance->searchValidateWithTemplatePOST($type, $template, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchValidateWithTemplatePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The index type |
 **template** | **string**| The index template |
 **query** | **object**| The query to be used for the search | [optional]

### Return type

**object**

### Authorization

[oauth2_client_credentials_grant](../../README.md#oauth2_client_credentials_grant), [oauth2_password_grant](../../README.md#oauth2_password_grant)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

