<?php
/**
 * UsersRelationshipsApi
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
 * UsersRelationshipsApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersRelationshipsApi
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
     * @return UsersRelationshipsApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createUserRelationship
     *
     * Create a user relationship
     *
     * @param \KnetikCloud\Model\UserRelationshipResource $relationship The new relationship (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\UserRelationshipResource
     */
    public function createUserRelationship($relationship = null)
    {
        list($response) = $this->createUserRelationshipWithHttpInfo($relationship);
        return $response;
    }

    /**
     * Operation createUserRelationshipWithHttpInfo
     *
     * Create a user relationship
     *
     * @param \KnetikCloud\Model\UserRelationshipResource $relationship The new relationship (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\UserRelationshipResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUserRelationshipWithHttpInfo($relationship = null)
    {
        // parse inputs
        $resourcePath = "/users/relationships";
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
        if (isset($relationship)) {
            $_tempBody = $relationship;
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
                '\KnetikCloud\Model\UserRelationshipResource',
                '/users/relationships'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\UserRelationshipResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\UserRelationshipResource', $e->getResponseHeaders());
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
     * Operation deleteUserRelationship
     *
     * Delete a user relationship
     *
     * @param int $id The id of the relationship (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteUserRelationship($id)
    {
        list($response) = $this->deleteUserRelationshipWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteUserRelationshipWithHttpInfo
     *
     * Delete a user relationship
     *
     * @param int $id The id of the relationship (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserRelationshipWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteUserRelationship');
        }
        // parse inputs
        $resourcePath = "/users/relationships/{id}";
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
                '/users/relationships/{id}'
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
     * Operation getUserRelationship
     *
     * Get a user relationship
     *
     * @param int $id The id of the relationship (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\UserRelationshipResource
     */
    public function getUserRelationship($id)
    {
        list($response) = $this->getUserRelationshipWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getUserRelationshipWithHttpInfo
     *
     * Get a user relationship
     *
     * @param int $id The id of the relationship (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\UserRelationshipResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserRelationshipWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getUserRelationship');
        }
        // parse inputs
        $resourcePath = "/users/relationships/{id}";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\UserRelationshipResource',
                '/users/relationships/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\UserRelationshipResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\UserRelationshipResource', $e->getResponseHeaders());
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
     * Operation getUserRelationships
     *
     * Get a list of user relationships
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceUserRelationshipResource_
     */
    public function getUserRelationships($size = null, $page = null, $order = null)
    {
        list($response) = $this->getUserRelationshipsWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getUserRelationshipsWithHttpInfo
     *
     * Get a list of user relationships
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceUserRelationshipResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserRelationshipsWithHttpInfo($size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/users/relationships";
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
                '\KnetikCloud\Model\PageResourceUserRelationshipResource_',
                '/users/relationships'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceUserRelationshipResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceUserRelationshipResource_', $e->getResponseHeaders());
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
     * Operation updateUserRelationship
     *
     * Update a user relationship
     *
     * @param int $id The id of the relationship (required)
     * @param \KnetikCloud\Model\UserRelationshipResource $relationship The new relationship (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\UserRelationshipResource
     */
    public function updateUserRelationship($id, $relationship = null)
    {
        list($response) = $this->updateUserRelationshipWithHttpInfo($id, $relationship);
        return $response;
    }

    /**
     * Operation updateUserRelationshipWithHttpInfo
     *
     * Update a user relationship
     *
     * @param int $id The id of the relationship (required)
     * @param \KnetikCloud\Model\UserRelationshipResource $relationship The new relationship (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\UserRelationshipResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserRelationshipWithHttpInfo($id, $relationship = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateUserRelationship');
        }
        // parse inputs
        $resourcePath = "/users/relationships/{id}";
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
        if (isset($relationship)) {
            $_tempBody = $relationship;
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
                '\KnetikCloud\Model\UserRelationshipResource',
                '/users/relationships/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\UserRelationshipResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\UserRelationshipResource', $e->getResponseHeaders());
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
