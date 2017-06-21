<?php
/**
 * StoreBundlesApi
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
 * StoreBundlesApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreBundlesApi
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
     * @return StoreBundlesApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createBundleItem
     *
     * Create a bundle item
     *
     * @param bool $cascade Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. (optional, default to false)
     * @param \KnetikCloud\Model\BundleItem $bundle_item The bundle item object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BundleItem
     */
    public function createBundleItem($cascade = null, $bundle_item = null)
    {
        list($response) = $this->createBundleItemWithHttpInfo($cascade, $bundle_item);
        return $response;
    }

    /**
     * Operation createBundleItemWithHttpInfo
     *
     * Create a bundle item
     *
     * @param bool $cascade Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. (optional, default to false)
     * @param \KnetikCloud\Model\BundleItem $bundle_item The bundle item object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BundleItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBundleItemWithHttpInfo($cascade = null, $bundle_item = null)
    {
        // parse inputs
        $resourcePath = "/store/bundles";
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
        // body params
        $_tempBody = null;
        if (isset($bundle_item)) {
            $_tempBody = $bundle_item;
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
                '\KnetikCloud\Model\BundleItem',
                '/store/bundles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BundleItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BundleItem', $e->getResponseHeaders());
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
     * Operation createBundleTemplate
     *
     * Create a bundle template
     *
     * @param \KnetikCloud\Model\ItemTemplateResource $bundle_template_resource The new bundle template (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ItemTemplateResource
     */
    public function createBundleTemplate($bundle_template_resource = null)
    {
        list($response) = $this->createBundleTemplateWithHttpInfo($bundle_template_resource);
        return $response;
    }

    /**
     * Operation createBundleTemplateWithHttpInfo
     *
     * Create a bundle template
     *
     * @param \KnetikCloud\Model\ItemTemplateResource $bundle_template_resource The new bundle template (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ItemTemplateResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBundleTemplateWithHttpInfo($bundle_template_resource = null)
    {
        // parse inputs
        $resourcePath = "/store/bundles/templates";
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
        if (isset($bundle_template_resource)) {
            $_tempBody = $bundle_template_resource;
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
                '\KnetikCloud\Model\ItemTemplateResource',
                '/store/bundles/templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ItemTemplateResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ItemTemplateResource', $e->getResponseHeaders());
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
     * Operation deleteBundleItem
     *
     * Delete a bundle item
     *
     * @param int $id The id of the bundle (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteBundleItem($id)
    {
        list($response) = $this->deleteBundleItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteBundleItemWithHttpInfo
     *
     * Delete a bundle item
     *
     * @param int $id The id of the bundle (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBundleItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteBundleItem');
        }
        // parse inputs
        $resourcePath = "/store/bundles/{id}";
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
                '/store/bundles/{id}'
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
     * Operation deleteBundleTemplate
     *
     * Delete a bundle template
     *
     * @param string $id The id of the template (required)
     * @param string $cascade force deleting the template if it&#39;s attached to other objects, cascade &#x3D; detach (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return void
     */
    public function deleteBundleTemplate($id, $cascade = null)
    {
        list($response) = $this->deleteBundleTemplateWithHttpInfo($id, $cascade);
        return $response;
    }

    /**
     * Operation deleteBundleTemplateWithHttpInfo
     *
     * Delete a bundle template
     *
     * @param string $id The id of the template (required)
     * @param string $cascade force deleting the template if it&#39;s attached to other objects, cascade &#x3D; detach (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBundleTemplateWithHttpInfo($id, $cascade = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteBundleTemplate');
        }
        // parse inputs
        $resourcePath = "/store/bundles/templates/{id}";
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
                '/store/bundles/templates/{id}'
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
     * Operation getBundleItem
     *
     * Get a single bundle item
     *
     * @param int $id The id of the bundle (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BundleItem
     */
    public function getBundleItem($id)
    {
        list($response) = $this->getBundleItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getBundleItemWithHttpInfo
     *
     * Get a single bundle item
     *
     * @param int $id The id of the bundle (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BundleItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBundleItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getBundleItem');
        }
        // parse inputs
        $resourcePath = "/store/bundles/{id}";
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
                '\KnetikCloud\Model\BundleItem',
                '/store/bundles/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BundleItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BundleItem', $e->getResponseHeaders());
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
     * Operation getBundleTemplate
     *
     * Get a single bundle template
     *
     * @param string $id The id of the template (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ItemTemplateResource
     */
    public function getBundleTemplate($id)
    {
        list($response) = $this->getBundleTemplateWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getBundleTemplateWithHttpInfo
     *
     * Get a single bundle template
     *
     * @param string $id The id of the template (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ItemTemplateResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBundleTemplateWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getBundleTemplate');
        }
        // parse inputs
        $resourcePath = "/store/bundles/templates/{id}";
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
                '\KnetikCloud\Model\ItemTemplateResource',
                '/store/bundles/templates/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ItemTemplateResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ItemTemplateResource', $e->getResponseHeaders());
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
     * Operation getBundleTemplates
     *
     * List and search bundle templates
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceItemTemplateResource_
     */
    public function getBundleTemplates($size = null, $page = null, $order = null)
    {
        list($response) = $this->getBundleTemplatesWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getBundleTemplatesWithHttpInfo
     *
     * List and search bundle templates
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceItemTemplateResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBundleTemplatesWithHttpInfo($size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/store/bundles/templates";
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
                '\KnetikCloud\Model\PageResourceItemTemplateResource_',
                '/store/bundles/templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceItemTemplateResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceItemTemplateResource_', $e->getResponseHeaders());
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
     * Operation updateBundleItem
     *
     * Update a bundle item
     *
     * @param int $id The id of the bundle (required)
     * @param bool $cascade Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. (optional, default to false)
     * @param \KnetikCloud\Model\BundleItem $bundle_item The bundle item object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\BundleItem
     */
    public function updateBundleItem($id, $cascade = null, $bundle_item = null)
    {
        list($response) = $this->updateBundleItemWithHttpInfo($id, $cascade, $bundle_item);
        return $response;
    }

    /**
     * Operation updateBundleItemWithHttpInfo
     *
     * Update a bundle item
     *
     * @param int $id The id of the bundle (required)
     * @param bool $cascade Whether to cascade group changes, such as in the limited gettable behavior. A 400 error will return otherwise if the group is already in use with different values. (optional, default to false)
     * @param \KnetikCloud\Model\BundleItem $bundle_item The bundle item object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\BundleItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBundleItemWithHttpInfo($id, $cascade = null, $bundle_item = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateBundleItem');
        }
        // parse inputs
        $resourcePath = "/store/bundles/{id}";
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
        // body params
        $_tempBody = null;
        if (isset($bundle_item)) {
            $_tempBody = $bundle_item;
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
                '\KnetikCloud\Model\BundleItem',
                '/store/bundles/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\BundleItem', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\BundleItem', $e->getResponseHeaders());
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
     * Operation updateBundleTemplate
     *
     * Update a bundle template
     *
     * @param string $id The id of the template (required)
     * @param \KnetikCloud\Model\ItemTemplateResource $bundle_template_resource The bundle template resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\ItemTemplateResource
     */
    public function updateBundleTemplate($id, $bundle_template_resource = null)
    {
        list($response) = $this->updateBundleTemplateWithHttpInfo($id, $bundle_template_resource);
        return $response;
    }

    /**
     * Operation updateBundleTemplateWithHttpInfo
     *
     * Update a bundle template
     *
     * @param string $id The id of the template (required)
     * @param \KnetikCloud\Model\ItemTemplateResource $bundle_template_resource The bundle template resource object (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\ItemTemplateResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBundleTemplateWithHttpInfo($id, $bundle_template_resource = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateBundleTemplate');
        }
        // parse inputs
        $resourcePath = "/store/bundles/templates/{id}";
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
        if (isset($bundle_template_resource)) {
            $_tempBody = $bundle_template_resource;
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
                '\KnetikCloud\Model\ItemTemplateResource',
                '/store/bundles/templates/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\ItemTemplateResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\ItemTemplateResource', $e->getResponseHeaders());
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