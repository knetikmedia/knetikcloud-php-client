<?php
/**
 * BRERuleEngineTriggersApi
 * PHP version 5
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Knetik Platform API Documentation latest
 *
 * This is the spec for the Knetik API.  Use this in conjunction with the documentation found at https://knetikcloud.com.
 *
 * OpenAPI spec version: latest
 * Contact: support@knetik.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace KnetikCloud\Api;

use \KnetikCloud\ApiClient;
use \KnetikCloud\ApiException;
use \KnetikCloud\Configuration;
use \KnetikCloud\ObjectSerializer;

/**
 * BRERuleEngineTriggersApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BRERuleEngineTriggersApi
{
    /**
     * API Client
     *
     * @var \KnetikCloud\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \KnetikCloud\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\KnetikCloud\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \KnetikCloud\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \KnetikCloud\ApiClient $apiClient set the API client
     *
     * @return BRERuleEngineTriggersApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createBRETrigger
     *
     * Create a trigger
     *
     * @param \KnetikCloud\Model\BreTriggerResource $bre_trigger_resource The BRE trigger resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BreTriggerResource
     */
    public function createBRETrigger($bre_trigger_resource = null)
    {
        list($response) = $this->createBRETriggerWithHttpInfo($bre_trigger_resource);
        return $response;
    }

    /**
     * Operation createBRETriggerWithHttpInfo
     *
     * Create a trigger
     *
     * @param \KnetikCloud\Model\BreTriggerResource $bre_trigger_resource The BRE trigger resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BreTriggerResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBRETriggerWithHttpInfo($bre_trigger_resource = null)
    {
        // parse inputs
        $resourcePath = "/bre/triggers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($bre_trigger_resource)) {
            $_tempBody = $bre_trigger_resource;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\BreTriggerResource',
                '/bre/triggers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BreTriggerResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BreTriggerResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteBRETrigger
     *
     * Delete a trigger
     *
     * @param string $event_name The trigger event name (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteBRETrigger($event_name)
    {
        list($response) = $this->deleteBRETriggerWithHttpInfo($event_name);
        return $response;
    }

    /**
     * Operation deleteBRETriggerWithHttpInfo
     *
     * Delete a trigger
     *
     * @param string $event_name The trigger event name (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBRETriggerWithHttpInfo($event_name)
    {
        // verify the required parameter 'event_name' is set
        if ($event_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_name when calling deleteBRETrigger');
        }
        // parse inputs
        $resourcePath = "/bre/triggers/{event_name}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($event_name !== null) {
            $resourcePath = str_replace(
                "{" . "event_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($event_name),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/bre/triggers/{event_name}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBRETrigger
     *
     * Get a single trigger
     *
     * @param string $event_name The trigger event name (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BreTriggerResource
     */
    public function getBRETrigger($event_name)
    {
        list($response) = $this->getBRETriggerWithHttpInfo($event_name);
        return $response;
    }

    /**
     * Operation getBRETriggerWithHttpInfo
     *
     * Get a single trigger
     *
     * @param string $event_name The trigger event name (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BreTriggerResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBRETriggerWithHttpInfo($event_name)
    {
        // verify the required parameter 'event_name' is set
        if ($event_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_name when calling getBRETrigger');
        }
        // parse inputs
        $resourcePath = "/bre/triggers/{event_name}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($event_name !== null) {
            $resourcePath = str_replace(
                "{" . "event_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($event_name),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\BreTriggerResource',
                '/bre/triggers/{event_name}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BreTriggerResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BreTriggerResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getBRETriggers
     *
     * List triggers
     *
     * @param bool $filter_system Filter for triggers that are system triggers when true, or not when false. Leave off for both mixed (optional)
     * @param string $filter_category Filter for triggers that are within a specific category (optional)
     * @param string $filter_tags Filter for triggers that have all of the given tags (comma separated list) (optional)
     * @param string $filter_name Filter for triggers that have names containing the given string (optional)
     * @param string $filter_search Filter for triggers containing the given words somewhere within name, description and tags (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceBreTriggerResource_
     */
    public function getBRETriggers($filter_system = null, $filter_category = null, $filter_tags = null, $filter_name = null, $filter_search = null, $size = '25', $page = '1')
    {
        list($response) = $this->getBRETriggersWithHttpInfo($filter_system, $filter_category, $filter_tags, $filter_name, $filter_search, $size, $page);
        return $response;
    }

    /**
     * Operation getBRETriggersWithHttpInfo
     *
     * List triggers
     *
     * @param bool $filter_system Filter for triggers that are system triggers when true, or not when false. Leave off for both mixed (optional)
     * @param string $filter_category Filter for triggers that are within a specific category (optional)
     * @param string $filter_tags Filter for triggers that have all of the given tags (comma separated list) (optional)
     * @param string $filter_name Filter for triggers that have names containing the given string (optional)
     * @param string $filter_search Filter for triggers containing the given words somewhere within name, description and tags (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceBreTriggerResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBRETriggersWithHttpInfo($filter_system = null, $filter_category = null, $filter_tags = null, $filter_name = null, $filter_search = null, $size = '25', $page = '1')
    {
        // parse inputs
        $resourcePath = "/bre/triggers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($filter_system !== null) {
            $queryParams['filter_system'] = $this->apiClient->getSerializer()->toQueryValue($filter_system);
        }
        // query params
        if ($filter_category !== null) {
            $queryParams['filter_category'] = $this->apiClient->getSerializer()->toQueryValue($filter_category);
        }
        // query params
        if ($filter_tags !== null) {
            $queryParams['filter_tags'] = $this->apiClient->getSerializer()->toQueryValue($filter_tags);
        }
        // query params
        if ($filter_name !== null) {
            $queryParams['filter_name'] = $this->apiClient->getSerializer()->toQueryValue($filter_name);
        }
        // query params
        if ($filter_search !== null) {
            $queryParams['filter_search'] = $this->apiClient->getSerializer()->toQueryValue($filter_search);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\PageResourceBreTriggerResource_',
                '/bre/triggers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceBreTriggerResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceBreTriggerResource_', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateBRETrigger
     *
     * Update a trigger
     *
     * @param string $event_name The trigger event name (required)
     * @param \KnetikCloud\Model\BreTriggerResource $bre_trigger_resource The BRE trigger resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BreTriggerResource
     */
    public function updateBRETrigger($event_name, $bre_trigger_resource = null)
    {
        list($response) = $this->updateBRETriggerWithHttpInfo($event_name, $bre_trigger_resource);
        return $response;
    }

    /**
     * Operation updateBRETriggerWithHttpInfo
     *
     * Update a trigger
     *
     * @param string $event_name The trigger event name (required)
     * @param \KnetikCloud\Model\BreTriggerResource $bre_trigger_resource The BRE trigger resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BreTriggerResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBRETriggerWithHttpInfo($event_name, $bre_trigger_resource = null)
    {
        // verify the required parameter 'event_name' is set
        if ($event_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_name when calling updateBRETrigger');
        }
        // parse inputs
        $resourcePath = "/bre/triggers/{event_name}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($event_name !== null) {
            $resourcePath = str_replace(
                "{" . "event_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($event_name),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($bre_trigger_resource)) {
            $_tempBody = $bre_trigger_resource;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\BreTriggerResource',
                '/bre/triggers/{event_name}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BreTriggerResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BreTriggerResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
