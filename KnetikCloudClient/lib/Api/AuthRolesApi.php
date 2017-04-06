<?php
/**
 * AuthRolesApi
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
 * AuthRolesApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthRolesApi
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
     * @return AuthRolesApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRole
     *
     * Create a new role
     *
     * @param \KnetikCloud\Model\RoleResource $role_resource The role resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RoleResource
     */
    public function createRole($role_resource = null)
    {
        list($response) = $this->createRoleWithHttpInfo($role_resource);
        return $response;
    }

    /**
     * Operation createRoleWithHttpInfo
     *
     * Create a new role
     *
     * @param \KnetikCloud\Model\RoleResource $role_resource The role resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RoleResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRoleWithHttpInfo($role_resource = null)
    {
        // parse inputs
        $resourcePath = "/auth/roles";
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
        if (isset($role_resource)) {
            $_tempBody = $role_resource;
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
                '\KnetikCloud\Model\RoleResource',
                '/auth/roles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RoleResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RoleResource', $e->getResponseHeaders());
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
     * Operation deleteRole
     *
     * Delete a role
     *
     * @param string $role The role value (required)
     * @param bool $force If true, removes role from users/clients (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteRole($role, $force = null)
    {
        list($response) = $this->deleteRoleWithHttpInfo($role, $force);
        return $response;
    }

    /**
     * Operation deleteRoleWithHttpInfo
     *
     * Delete a role
     *
     * @param string $role The role value (required)
     * @param bool $force If true, removes role from users/clients (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRoleWithHttpInfo($role, $force = null)
    {
        // verify the required parameter 'role' is set
        if ($role === null) {
            throw new \InvalidArgumentException('Missing the required parameter $role when calling deleteRole');
        }
        // parse inputs
        $resourcePath = "/auth/roles/{role}";
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
        if ($force !== null) {
            $queryParams['force'] = $this->apiClient->getSerializer()->toQueryValue($force);
        }
        // path params
        if ($role !== null) {
            $resourcePath = str_replace(
                "{" . "role" . "}",
                $this->apiClient->getSerializer()->toPathValue($role),
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
                '/auth/roles/{role}'
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
     * Operation getClientRoles
     *
     * Get roles for a client
     *
     * @param string $client_key The client key (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RoleResource[]
     */
    public function getClientRoles($client_key)
    {
        list($response) = $this->getClientRolesWithHttpInfo($client_key);
        return $response;
    }

    /**
     * Operation getClientRolesWithHttpInfo
     *
     * Get roles for a client
     *
     * @param string $client_key The client key (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RoleResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getClientRolesWithHttpInfo($client_key)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling getClientRoles');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}/roles";
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
                '\KnetikCloud\Model\RoleResource[]',
                '/auth/clients/{client_key}/roles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RoleResource[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RoleResource[]', $e->getResponseHeaders());
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
     * Operation getRole
     *
     * Get a single role
     *
     * @param string $role The role value (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RoleResource
     */
    public function getRole($role)
    {
        list($response) = $this->getRoleWithHttpInfo($role);
        return $response;
    }

    /**
     * Operation getRoleWithHttpInfo
     *
     * Get a single role
     *
     * @param string $role The role value (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RoleResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRoleWithHttpInfo($role)
    {
        // verify the required parameter 'role' is set
        if ($role === null) {
            throw new \InvalidArgumentException('Missing the required parameter $role when calling getRole');
        }
        // parse inputs
        $resourcePath = "/auth/roles/{role}";
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
        if ($role !== null) {
            $resourcePath = str_replace(
                "{" . "role" . "}",
                $this->apiClient->getSerializer()->toPathValue($role),
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
                '\KnetikCloud\Model\RoleResource',
                '/auth/roles/{role}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RoleResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RoleResource', $e->getResponseHeaders());
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
     * Operation getRoles
     *
     * List and search roles
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to name:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceRoleResource_
     */
    public function getRoles($size = null, $page = null, $order = null)
    {
        list($response) = $this->getRolesWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getRolesWithHttpInfo
     *
     * List and search roles
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to name:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceRoleResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRolesWithHttpInfo($size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/auth/roles";
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
                '\KnetikCloud\Model\PageResourceRoleResource_',
                '/auth/roles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceRoleResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceRoleResource_', $e->getResponseHeaders());
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
     * Operation getUserRoles
     *
     * Get roles for a user
     *
     * @param int $user_id The user&#39;s id (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RoleResource[]
     */
    public function getUserRoles($user_id)
    {
        list($response) = $this->getUserRolesWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getUserRolesWithHttpInfo
     *
     * Get roles for a user
     *
     * @param int $user_id The user&#39;s id (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RoleResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserRolesWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getUserRoles');
        }
        // parse inputs
        $resourcePath = "/auth/users/{user_id}/roles";
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
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
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
                '\KnetikCloud\Model\RoleResource[]',
                '/auth/users/{user_id}/roles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RoleResource[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RoleResource[]', $e->getResponseHeaders());
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
     * Operation setClientRoles
     *
     * Set roles for a client
     *
     * @param string $client_key The client key (required)
     * @param string[] $roles_list The list of unique roles (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ClientResource
     */
    public function setClientRoles($client_key, $roles_list = null)
    {
        list($response) = $this->setClientRolesWithHttpInfo($client_key, $roles_list);
        return $response;
    }

    /**
     * Operation setClientRolesWithHttpInfo
     *
     * Set roles for a client
     *
     * @param string $client_key The client key (required)
     * @param string[] $roles_list The list of unique roles (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ClientResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function setClientRolesWithHttpInfo($client_key, $roles_list = null)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_key when calling setClientRoles');
        }
        // parse inputs
        $resourcePath = "/auth/clients/{client_key}/roles";
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
        if (isset($roles_list)) {
            $_tempBody = $roles_list;
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
                '/auth/clients/{client_key}/roles'
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

    /**
     * Operation setPermissionsForRole
     *
     * Set permissions for a role
     *
     * @param string $role The role value (required)
     * @param string[] $permissions_list The list of unique permissions (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RoleResource
     */
    public function setPermissionsForRole($role, $permissions_list = null)
    {
        list($response) = $this->setPermissionsForRoleWithHttpInfo($role, $permissions_list);
        return $response;
    }

    /**
     * Operation setPermissionsForRoleWithHttpInfo
     *
     * Set permissions for a role
     *
     * @param string $role The role value (required)
     * @param string[] $permissions_list The list of unique permissions (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RoleResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function setPermissionsForRoleWithHttpInfo($role, $permissions_list = null)
    {
        // verify the required parameter 'role' is set
        if ($role === null) {
            throw new \InvalidArgumentException('Missing the required parameter $role when calling setPermissionsForRole');
        }
        // parse inputs
        $resourcePath = "/auth/roles/{role}/permissions";
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
        if ($role !== null) {
            $resourcePath = str_replace(
                "{" . "role" . "}",
                $this->apiClient->getSerializer()->toPathValue($role),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($permissions_list)) {
            $_tempBody = $permissions_list;
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
                '\KnetikCloud\Model\RoleResource',
                '/auth/roles/{role}/permissions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RoleResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RoleResource', $e->getResponseHeaders());
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
     * Operation setUserRoles
     *
     * Set roles for a user
     *
     * @param int $user_id The user&#39;s id (required)
     * @param string[] $roles_list The list of unique roles (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\UserResource
     */
    public function setUserRoles($user_id, $roles_list = null)
    {
        list($response) = $this->setUserRolesWithHttpInfo($user_id, $roles_list);
        return $response;
    }

    /**
     * Operation setUserRolesWithHttpInfo
     *
     * Set roles for a user
     *
     * @param int $user_id The user&#39;s id (required)
     * @param string[] $roles_list The list of unique roles (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\UserResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function setUserRolesWithHttpInfo($user_id, $roles_list = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling setUserRoles');
        }
        // parse inputs
        $resourcePath = "/auth/users/{user_id}/roles";
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
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($roles_list)) {
            $_tempBody = $roles_list;
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
                '\KnetikCloud\Model\UserResource',
                '/auth/users/{user_id}/roles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\UserResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\UserResource', $e->getResponseHeaders());
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
     * Operation updateRole
     *
     * Update a role
     *
     * @param string $role The role value (required)
     * @param \KnetikCloud\Model\RoleResource $role_resource The role resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\RoleResource
     */
    public function updateRole($role, $role_resource = null)
    {
        list($response) = $this->updateRoleWithHttpInfo($role, $role_resource);
        return $response;
    }

    /**
     * Operation updateRoleWithHttpInfo
     *
     * Update a role
     *
     * @param string $role The role value (required)
     * @param \KnetikCloud\Model\RoleResource $role_resource The role resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\RoleResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRoleWithHttpInfo($role, $role_resource = null)
    {
        // verify the required parameter 'role' is set
        if ($role === null) {
            throw new \InvalidArgumentException('Missing the required parameter $role when calling updateRole');
        }
        // parse inputs
        $resourcePath = "/auth/roles/{role}";
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
        if ($role !== null) {
            $resourcePath = str_replace(
                "{" . "role" . "}",
                $this->apiClient->getSerializer()->toPathValue($role),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($role_resource)) {
            $_tempBody = $role_resource;
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
                '\KnetikCloud\Model\RoleResource',
                '/auth/roles/{role}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\RoleResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\RoleResource', $e->getResponseHeaders());
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
