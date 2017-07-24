<?php
/**
 * CampaignsRewardsApi
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
 * CampaignsRewardsApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignsRewardsApi
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
     * @return CampaignsRewardsApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRewardSet
     *
     * Create a reward set
     *
     * @param \KnetikCloud\Model\RewardSetResource $reward_set_resource The reward set resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RewardSetResource
     */
    public function createRewardSet($reward_set_resource = null)
    {
        list($response) = $this->createRewardSetWithHttpInfo($reward_set_resource);
        return $response;
    }

    /**
     * Operation createRewardSetWithHttpInfo
     *
     * Create a reward set
     *
     * @param \KnetikCloud\Model\RewardSetResource $reward_set_resource The reward set resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RewardSetResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRewardSetWithHttpInfo($reward_set_resource = null)
    {
        // parse inputs
        $resourcePath = "/rewards";
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
        if (isset($reward_set_resource)) {
            $_tempBody = $reward_set_resource;
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
                '\KnetikCloud\Model\RewardSetResource',
                '/rewards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RewardSetResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RewardSetResource', $e->getResponseHeaders());
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
     * Operation deleteRewardSet
     *
     * Delete a reward set
     *
     * @param int $id The reward id (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteRewardSet($id)
    {
        list($response) = $this->deleteRewardSetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteRewardSetWithHttpInfo
     *
     * Delete a reward set
     *
     * @param int $id The reward id (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRewardSetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteRewardSet');
        }
        // parse inputs
        $resourcePath = "/rewards/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '/rewards/{id}'
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
     * Operation getRewardSet
     *
     * Get a single reward set
     *
     * @param int $id The reward id (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RewardSetResource
     */
    public function getRewardSet($id)
    {
        list($response) = $this->getRewardSetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getRewardSetWithHttpInfo
     *
     * Get a single reward set
     *
     * @param int $id The reward id (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RewardSetResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRewardSetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getRewardSet');
        }
        // parse inputs
        $resourcePath = "/rewards/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\RewardSetResource',
                '/rewards/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RewardSetResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RewardSetResource', $e->getResponseHeaders());
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
     * Operation getRewardSets
     *
     * List and search reward sets
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceRewardSetResource_
     */
    public function getRewardSets($size = '25', $page = '1', $order = 'id:ASC')
    {
        list($response) = $this->getRewardSetsWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getRewardSetsWithHttpInfo
     *
     * List and search reward sets
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceRewardSetResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRewardSetsWithHttpInfo($size = '25', $page = '1', $order = 'id:ASC')
    {
        // parse inputs
        $resourcePath = "/rewards";
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
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\PageResourceRewardSetResource_',
                '/rewards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceRewardSetResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceRewardSetResource_', $e->getResponseHeaders());
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
     * Operation updateRewardSet
     *
     * Update a reward set
     *
     * @param int $id The reward id (required)
     * @param \KnetikCloud\Model\RewardSetResource $reward_set_resource The reward set resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RewardSetResource
     */
    public function updateRewardSet($id, $reward_set_resource = null)
    {
        list($response) = $this->updateRewardSetWithHttpInfo($id, $reward_set_resource);
        return $response;
    }

    /**
     * Operation updateRewardSetWithHttpInfo
     *
     * Update a reward set
     *
     * @param int $id The reward id (required)
     * @param \KnetikCloud\Model\RewardSetResource $reward_set_resource The reward set resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RewardSetResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRewardSetWithHttpInfo($id, $reward_set_resource = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateRewardSet');
        }
        // parse inputs
        $resourcePath = "/rewards/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($reward_set_resource)) {
            $_tempBody = $reward_set_resource;
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
                '\KnetikCloud\Model\RewardSetResource',
                '/rewards/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RewardSetResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RewardSetResource', $e->getResponseHeaders());
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
