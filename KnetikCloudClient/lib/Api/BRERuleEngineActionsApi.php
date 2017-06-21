<?php
/**
 * BRERuleEngineActionsApi
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
 * This is the spec for the Knetik API.  Use this in conjunction with the documentation found at https://knetikcloud.com
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
 * BRERuleEngineActionsApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BRERuleEngineActionsApi
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
     * @return BRERuleEngineActionsApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getBREActions
     *
     * Get a list of available actions
     *
     * @param string $filter_category Filter for actions that are within a specific category (optional)
     * @param string $filter_name Filter for actions that have names containing the given string (optional)
     * @param string $filter_tags Filter for actions that have all of the given tags (comma separated list) (optional)
     * @param string $filter_search Filter for actions containing the given words somewhere within name, description and tags (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ActionResource[]
     */
    public function getBREActions($filter_category = null, $filter_name = null, $filter_tags = null, $filter_search = null)
    {
        list($response) = $this->getBREActionsWithHttpInfo($filter_category, $filter_name, $filter_tags, $filter_search);
        return $response;
    }

    /**
     * Operation getBREActionsWithHttpInfo
     *
     * Get a list of available actions
     *
     * @param string $filter_category Filter for actions that are within a specific category (optional)
     * @param string $filter_name Filter for actions that have names containing the given string (optional)
     * @param string $filter_tags Filter for actions that have all of the given tags (comma separated list) (optional)
     * @param string $filter_search Filter for actions containing the given words somewhere within name, description and tags (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ActionResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getBREActionsWithHttpInfo($filter_category = null, $filter_name = null, $filter_tags = null, $filter_search = null)
    {
        // parse inputs
        $resourcePath = "/bre/actions";
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
        if ($filter_category !== null) {
            $queryParams['filter_category'] = $this->apiClient->getSerializer()->toQueryValue($filter_category);
        }
        // query params
        if ($filter_name !== null) {
            $queryParams['filter_name'] = $this->apiClient->getSerializer()->toQueryValue($filter_name);
        }
        // query params
        if ($filter_tags !== null) {
            $queryParams['filter_tags'] = $this->apiClient->getSerializer()->toQueryValue($filter_tags);
        }
        // query params
        if ($filter_search !== null) {
            $queryParams['filter_search'] = $this->apiClient->getSerializer()->toQueryValue($filter_search);
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
                '\KnetikCloud\Model\ActionResource[]',
                '/bre/actions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ActionResource[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ActionResource[]', $e->getResponseHeaders());
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