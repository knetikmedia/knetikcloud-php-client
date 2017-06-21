<?php
/**
 * AuthClientsApi
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
 * AuthClientsApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthClientsApi
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
     * @return AuthClientsApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createClient
     *
     * Create a new client
     *
     * @param \KnetikCloud\Model\ClientResource $client_resource The client resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ClientResource
     */
    public function createClient($client_resource = null)
    {
        list($response) = $this->createClientWithHttpInfo($client_resource);
        return $response;
    }

    /**
     * Operation createClientWithHttpInfo
     *
     * Create a new client
     *
     * @param \KnetikCloud\Model\ClientResource $client_resource The client resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ClientResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createClientWithHttpInfo($client_resource = null)
    {
        // parse inputs
        $resourcePath = "/auth/clients";
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
        if (isset($client_resource)) {
            $_tempBody = $client_resource;
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
                '\KnetikCloud\Model\ClientResource',
                '/auth/clients'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ClientResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ClientResource', $e->getResponseHeaders());
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
     * Operation deleteClient
     *
     * Delete a client
     *
     * @param string $client_key The key of the client (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteClient($client_key)
    {
        list($response) = $this->deleteClientWithHttpInfo($client_key);
        return $response;
    }

    /**
     * Operation deleteClientWithHttpInfo
     *
     * Delete a client
     *
     * @param string $client_key The key of the client (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteClientWithHttpInfo($client_key)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling deleteClient');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}";
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
        if ($client_key !== null) {
            $resourcePath = str_replace(
                "{" . "client_key" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_key),
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
                '/auth/clients/{client_key}'
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
     * Operation getClient
     *
     * Get a single client
     *
     * @param string $client_key The key of the client (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ClientResource
     */
    public function getClient($client_key)
    {
        list($response) = $this->getClientWithHttpInfo($client_key);
        return $response;
    }

    /**
     * Operation getClientWithHttpInfo
     *
     * Get a single client
     *
     * @param string $client_key The key of the client (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ClientResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getClientWithHttpInfo($client_key)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling getClient');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}";
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
        if ($client_key !== null) {
            $resourcePath = str_replace(
                "{" . "client_key" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_key),
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
                '\KnetikCloud\Model\ClientResource',
                '/auth/clients/{client_key}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ClientResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ClientResource', $e->getResponseHeaders());
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
     * Operation getClientGrantTypes
     *
     * List available client grant types
     *
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\GrantTypeResource[]
     */
    public function getClientGrantTypes()
    {
        list($response) = $this->getClientGrantTypesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getClientGrantTypesWithHttpInfo
     *
     * List available client grant types
     *
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\GrantTypeResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getClientGrantTypesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/auth/clients/grant-types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        
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
                '\KnetikCloud\Model\GrantTypeResource[]',
                '/auth/clients/grant-types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\GrantTypeResource[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\GrantTypeResource[]', $e->getResponseHeaders());
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
     * Operation getClients
     *
     * List and search clients
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceClientResource_
     */
    public function getClients($size = null, $page = null, $order = null)
    {
        list($response) = $this->getClientsWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getClientsWithHttpInfo
     *
     * List and search clients
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceClientResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getClientsWithHttpInfo($size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/auth/clients";
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
                '\KnetikCloud\Model\PageResourceClientResource_',
                '/auth/clients'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceClientResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceClientResource_', $e->getResponseHeaders());
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
     * Operation setClientGrantTypes
     *
     * Set grant types for a client
     *
     * @param string $client_key The key of the client (required)
     * @param string[] $grant_list A list of unique grant types (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function setClientGrantTypes($client_key, $grant_list = null)
    {
        list($response) = $this->setClientGrantTypesWithHttpInfo($client_key, $grant_list);
        return $response;
    }

    /**
     * Operation setClientGrantTypesWithHttpInfo
     *
     * Set grant types for a client
     *
     * @param string $client_key The key of the client (required)
     * @param string[] $grant_list A list of unique grant types (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setClientGrantTypesWithHttpInfo($client_key, $grant_list = null)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling setClientGrantTypes');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}/grant-types";
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
        if ($client_key !== null) {
            $resourcePath = str_replace(
                "{" . "client_key" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_key),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($grant_list)) {
            $_tempBody = $grant_list;
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
                null,
                '/auth/clients/{client_key}/grant-types'
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
     * Operation setClientRedirectUris
     *
     * Set redirect uris for a client
     *
     * @param string $client_key The key of the client (required)
     * @param string[] $redirect_list A list of unique redirect uris (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function setClientRedirectUris($client_key, $redirect_list = null)
    {
        list($response) = $this->setClientRedirectUrisWithHttpInfo($client_key, $redirect_list);
        return $response;
    }

    /**
     * Operation setClientRedirectUrisWithHttpInfo
     *
     * Set redirect uris for a client
     *
     * @param string $client_key The key of the client (required)
     * @param string[] $redirect_list A list of unique redirect uris (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setClientRedirectUrisWithHttpInfo($client_key, $redirect_list = null)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling setClientRedirectUris');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}/redirect-uris";
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
        if ($client_key !== null) {
            $resourcePath = str_replace(
                "{" . "client_key" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_key),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($redirect_list)) {
            $_tempBody = $redirect_list;
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
                null,
                '/auth/clients/{client_key}/redirect-uris'
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
     * Operation updateClient
     *
     * Update a client
     *
     * @param string $client_key The key of the client (required)
     * @param \KnetikCloud\Model\ClientResource $client_resource The client resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ClientResource
     */
    public function updateClient($client_key, $client_resource = null)
    {
        list($response) = $this->updateClientWithHttpInfo($client_key, $client_resource);
        return $response;
    }

    /**
     * Operation updateClientWithHttpInfo
     *
     * Update a client
     *
     * @param string $client_key The key of the client (required)
     * @param \KnetikCloud\Model\ClientResource $client_resource The client resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ClientResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateClientWithHttpInfo($client_key, $client_resource = null)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling updateClient');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}";
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
        if ($client_key !== null) {
            $resourcePath = str_replace(
                "{" . "client_key" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_key),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($client_resource)) {
            $_tempBody = $client_resource;
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
                '\KnetikCloud\Model\ClientResource',
                '/auth/clients/{client_key}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ClientResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ClientResource', $e->getResponseHeaders());
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