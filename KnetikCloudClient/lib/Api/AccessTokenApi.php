<?php
/**
 * AccessTokenApi
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
 * AccessTokenApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessTokenApi
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
     * @return AccessTokenApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getOAuthToken
     *
     * Get access token
     *
     * @param string $grant_type Grant type (required)
     * @param string $client_id The id of the client (required)
     * @param string $client_secret The secret key of the client.  Used only with a grant_type of client_credentials (optional)
     * @param string $username The username of the client.  Used only with a grant_type of password (optional)
     * @param string $password The password of the client.  Used only with a grant_type of password (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\OAuth2Resource
     */
    public function getOAuthToken($grant_type, $client_id, $client_secret = null, $username = null, $password = null)
    {
        list($response) = $this->getOAuthTokenWithHttpInfo($grant_type, $client_id, $client_secret, $username, $password);
        return $response;
    }

    /**
     * Operation getOAuthTokenWithHttpInfo
     *
     * Get access token
     *
     * @param string $grant_type Grant type (required)
     * @param string $client_id The id of the client (required)
     * @param string $client_secret The secret key of the client.  Used only with a grant_type of client_credentials (optional)
     * @param string $username The username of the client.  Used only with a grant_type of password (optional)
     * @param string $password The password of the client.  Used only with a grant_type of password (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\OAuth2Resource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOAuthTokenWithHttpInfo($grant_type, $client_id, $client_secret = null, $username = null, $password = null)
    {
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling getOAuthToken');
        }
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling getOAuthToken');
        }
        // parse inputs
        $resourcePath = "/oauth/token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = $this->apiClient->getSerializer()->toFormValue($grant_type);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = $this->apiClient->getSerializer()->toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = $this->apiClient->getSerializer()->toFormValue($client_secret);
        }
        // form params
        if ($username !== null) {
            $formParams['username'] = $this->apiClient->getSerializer()->toFormValue($username);
        }
        // form params
        if ($password !== null) {
            $formParams['password'] = $this->apiClient->getSerializer()->toFormValue($password);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KnetikCloud\Model\OAuth2Resource',
                '/oauth/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\OAuth2Resource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\OAuth2Resource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
