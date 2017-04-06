<?php
/**
 * BRERuleEngineCategoriesApi
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
 * BRERuleEngineCategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BRERuleEngineCategoriesApi
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
     * @return BRERuleEngineCategoriesApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createBRECategoryTemplate
     *
     * Create a BRE category template
     *
     * @param \KnetikCloud\Model\TemplateResource $template The category template to create (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\TemplateResource
     */
    public function createBRECategoryTemplate($template = null)
    {
        list($response) = $this->createBRECategoryTemplateWithHttpInfo($template);
        return $response;
    }

    /**
     * Operation createBRECategoryTemplateWithHttpInfo
     *
     * Create a BRE category template
     *
     * @param \KnetikCloud\Model\TemplateResource $template The category template to create (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\TemplateResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBRECategoryTemplateWithHttpInfo($template = null)
    {
        // parse inputs
        $resourcePath = "/bre/categories/templates";
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
        if (isset($template)) {
            $_tempBody = $template;
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
                '\KnetikCloud\Model\TemplateResource',
                '/bre/categories/templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\TemplateResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\TemplateResource', $e->getResponseHeaders());
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
     * Operation deleteBRECategoryTemplate
     *
     * Delete a BRE category template
     *
     * @param string $id The id of the template (required)
     * @param string $cascade The value needed to delete used templates (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteBRECategoryTemplate($id, $cascade = null)
    {
        list($response) = $this->deleteBRECategoryTemplateWithHttpInfo($id, $cascade);
        return $response;
    }

    /**
     * Operation deleteBRECategoryTemplateWithHttpInfo
     *
     * Delete a BRE category template
     *
     * @param string $id The id of the template (required)
     * @param string $cascade The value needed to delete used templates (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBRECategoryTemplateWithHttpInfo($id, $cascade = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteBRECategoryTemplate');
        }
        // parse inputs
        $resourcePath = "/bre/categories/templates/{id}";
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
        if ($cascade !== null) {
            $queryParams['cascade'] = $this->apiClient->getSerializer()->toQueryValue($cascade);
        }
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
                '/bre/categories/templates/{id}'
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
     * Operation getBRECategories
     *
     * List categories
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceBreCategoryResource_
     */
    public function getBRECategories($size = null, $page = null)
    {
        list($response) = $this->getBRECategoriesWithHttpInfo($size, $page);
        return $response;
    }

    /**
     * Operation getBRECategoriesWithHttpInfo
     *
     * List categories
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceBreCategoryResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBRECategoriesWithHttpInfo($size = null, $page = null)
    {
        // parse inputs
        $resourcePath = "/bre/categories";
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
                '\KnetikCloud\Model\PageResourceBreCategoryResource_',
                '/bre/categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceBreCategoryResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceBreCategoryResource_', $e->getResponseHeaders());
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
     * Operation getBRECategory
     *
     * Get a single category
     *
     * @param string $name The category name (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BreCategoryResource
     */
    public function getBRECategory($name)
    {
        list($response) = $this->getBRECategoryWithHttpInfo($name);
        return $response;
    }

    /**
     * Operation getBRECategoryWithHttpInfo
     *
     * Get a single category
     *
     * @param string $name The category name (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BreCategoryResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBRECategoryWithHttpInfo($name)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getBRECategory');
        }
        // parse inputs
        $resourcePath = "/bre/categories/{name}";
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
        if ($name !== null) {
            $resourcePath = str_replace(
                "{" . "name" . "}",
                $this->apiClient->getSerializer()->toPathValue($name),
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
                '\KnetikCloud\Model\BreCategoryResource',
                '/bre/categories/{name}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BreCategoryResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BreCategoryResource', $e->getResponseHeaders());
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
     * Operation getBRECategoryTemplate
     *
     * Get a single BRE category template
     *
     * @param string $id The id of the template (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\TemplateResource
     */
    public function getBRECategoryTemplate($id)
    {
        list($response) = $this->getBRECategoryTemplateWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getBRECategoryTemplateWithHttpInfo
     *
     * Get a single BRE category template
     *
     * @param string $id The id of the template (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\TemplateResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBRECategoryTemplateWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getBRECategoryTemplate');
        }
        // parse inputs
        $resourcePath = "/bre/categories/templates/{id}";
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
                '\KnetikCloud\Model\TemplateResource',
                '/bre/categories/templates/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\TemplateResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\TemplateResource', $e->getResponseHeaders());
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
     * Operation getBRECategoryTemplates
     *
     * List and search BRE category templates
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceTemplateResource_
     */
    public function getBRECategoryTemplates($size = null, $page = null, $order = null)
    {
        list($response) = $this->getBRECategoryTemplatesWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getBRECategoryTemplatesWithHttpInfo
     *
     * List and search BRE category templates
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceTemplateResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBRECategoryTemplatesWithHttpInfo($size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/bre/categories/templates";
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
                '\KnetikCloud\Model\PageResourceTemplateResource_',
                '/bre/categories/templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceTemplateResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceTemplateResource_', $e->getResponseHeaders());
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
     * Operation updateBRECategory
     *
     * Update a category
     *
     * @param string $name The category name (required)
     * @param \KnetikCloud\Model\BreCategoryResource $category The updated BRE category information (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BreCategoryResource
     */
    public function updateBRECategory($name, $category = null)
    {
        list($response) = $this->updateBRECategoryWithHttpInfo($name, $category);
        return $response;
    }

    /**
     * Operation updateBRECategoryWithHttpInfo
     *
     * Update a category
     *
     * @param string $name The category name (required)
     * @param \KnetikCloud\Model\BreCategoryResource $category The updated BRE category information (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BreCategoryResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBRECategoryWithHttpInfo($name, $category = null)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateBRECategory');
        }
        // parse inputs
        $resourcePath = "/bre/categories/{name}";
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
        if ($name !== null) {
            $resourcePath = str_replace(
                "{" . "name" . "}",
                $this->apiClient->getSerializer()->toPathValue($name),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($category)) {
            $_tempBody = $category;
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
                '\KnetikCloud\Model\BreCategoryResource',
                '/bre/categories/{name}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BreCategoryResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BreCategoryResource', $e->getResponseHeaders());
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
     * Operation updateBRECategoryTemplate
     *
     * Update a BRE category template
     *
     * @param string $id The id of the template (required)
     * @param \KnetikCloud\Model\TemplateResource $template The updated category template definition (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\TemplateResource
     */
    public function updateBRECategoryTemplate($id, $template = null)
    {
        list($response) = $this->updateBRECategoryTemplateWithHttpInfo($id, $template);
        return $response;
    }

    /**
     * Operation updateBRECategoryTemplateWithHttpInfo
     *
     * Update a BRE category template
     *
     * @param string $id The id of the template (required)
     * @param \KnetikCloud\Model\TemplateResource $template The updated category template definition (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\TemplateResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBRECategoryTemplateWithHttpInfo($id, $template = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateBRECategoryTemplate');
        }
        // parse inputs
        $resourcePath = "/bre/categories/templates/{id}";
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
        if (isset($template)) {
            $_tempBody = $template;
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
                '\KnetikCloud\Model\TemplateResource',
                '/bre/categories/templates/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\TemplateResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\TemplateResource', $e->getResponseHeaders());
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
