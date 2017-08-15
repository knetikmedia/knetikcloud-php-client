<?php
/**
 * SearchApi
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

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use KnetikCloud\ApiException;
use KnetikCloud\Configuration;
use KnetikCloud\HeaderSelector;
use KnetikCloud\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation addSearchIndex
     *
     * Add a new object to an index
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object (required)
     * @param object $object The object to add (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addSearchIndex($type, $id, $object = null)
    {
        $this->addSearchIndexWithHttpInfo($type, $id, $object);
    }

    /**
     * Operation addSearchIndexWithHttpInfo
     *
     * Add a new object to an index
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object (required)
     * @param object $object The object to add (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addSearchIndexWithHttpInfo($type, $id, $object = null)
    {
        $returnType = '';
        $request = $this->addSearchIndexRequest($type, $id, $object);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addSearchIndexAsync
     *
     * Add a new object to an index
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object (required)
     * @param object $object The object to add (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSearchIndexAsync($type, $id, $object = null)
    {
        return $this->addSearchIndexAsyncWithHttpInfo($type, $id, $object)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation addSearchIndexAsyncWithHttpInfo
     *
     * Add a new object to an index
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object (required)
     * @param object $object The object to add (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSearchIndexAsyncWithHttpInfo($type, $id, $object = null)
    {
        $returnType = '';
        $request = $this->addSearchIndexRequest($type, $id, $object);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'addSearchIndex'
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object (required)
     * @param object $object The object to add (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addSearchIndexRequest($type, $id, $object = null)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling addSearchIndex');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling addSearchIndex');
        }

        $resourcePath = '/search/index/{type}/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($type !== null) {
            $resourcePath = str_replace('{' . 'type' . '}', ObjectSerializer::toPathValue($type), $resourcePath);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace('{' . 'id' . '}', ObjectSerializer::toPathValue($id), $resourcePath);
        }

        // body params
        $_tempBody = null;
        if (isset($object)) {
            $_tempBody = $object;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation addSearchMappings
     *
     * Register reference mappings
     *
     * @param \KnetikCloud\Model\SearchReferenceMapping[] $mappings The mappings to add (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addSearchMappings($mappings = null)
    {
        $this->addSearchMappingsWithHttpInfo($mappings);
    }

    /**
     * Operation addSearchMappingsWithHttpInfo
     *
     * Register reference mappings
     *
     * @param \KnetikCloud\Model\SearchReferenceMapping[] $mappings The mappings to add (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addSearchMappingsWithHttpInfo($mappings = null)
    {
        $returnType = '';
        $request = $this->addSearchMappingsRequest($mappings);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addSearchMappingsAsync
     *
     * Register reference mappings
     *
     * @param \KnetikCloud\Model\SearchReferenceMapping[] $mappings The mappings to add (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSearchMappingsAsync($mappings = null)
    {
        return $this->addSearchMappingsAsyncWithHttpInfo($mappings)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation addSearchMappingsAsyncWithHttpInfo
     *
     * Register reference mappings
     *
     * @param \KnetikCloud\Model\SearchReferenceMapping[] $mappings The mappings to add (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSearchMappingsAsyncWithHttpInfo($mappings = null)
    {
        $returnType = '';
        $request = $this->addSearchMappingsRequest($mappings);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'addSearchMappings'
     *
     * @param \KnetikCloud\Model\SearchReferenceMapping[] $mappings The mappings to add (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addSearchMappingsRequest($mappings = null)
    {

        $resourcePath = '/search/mappings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($mappings)) {
            $_tempBody = $mappings;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteSearchIndex
     *
     * Delete an object
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object to delete (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSearchIndex($type, $id)
    {
        $this->deleteSearchIndexWithHttpInfo($type, $id);
    }

    /**
     * Operation deleteSearchIndexWithHttpInfo
     *
     * Delete an object
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object to delete (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSearchIndexWithHttpInfo($type, $id)
    {
        $returnType = '';
        $request = $this->deleteSearchIndexRequest($type, $id);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteSearchIndexAsync
     *
     * Delete an object
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object to delete (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchIndexAsync($type, $id)
    {
        return $this->deleteSearchIndexAsyncWithHttpInfo($type, $id)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation deleteSearchIndexAsyncWithHttpInfo
     *
     * Delete an object
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object to delete (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchIndexAsyncWithHttpInfo($type, $id)
    {
        $returnType = '';
        $request = $this->deleteSearchIndexRequest($type, $id);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'deleteSearchIndex'
     *
     * @param string $type The index type (required)
     * @param string $id The ID of the object to delete (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSearchIndexRequest($type, $id)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling deleteSearchIndex');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteSearchIndex');
        }

        $resourcePath = '/search/index/{type}/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($type !== null) {
            $resourcePath = str_replace('{' . 'type' . '}', ObjectSerializer::toPathValue($type), $resourcePath);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace('{' . 'id' . '}', ObjectSerializer::toPathValue($id), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'DELETE',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteSearchIndexes
     *
     * Delete all objects in an index
     *
     * @param string $type The index type (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSearchIndexes($type)
    {
        $this->deleteSearchIndexesWithHttpInfo($type);
    }

    /**
     * Operation deleteSearchIndexesWithHttpInfo
     *
     * Delete all objects in an index
     *
     * @param string $type The index type (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSearchIndexesWithHttpInfo($type)
    {
        $returnType = '';
        $request = $this->deleteSearchIndexesRequest($type);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteSearchIndexesAsync
     *
     * Delete all objects in an index
     *
     * @param string $type The index type (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchIndexesAsync($type)
    {
        return $this->deleteSearchIndexesAsyncWithHttpInfo($type)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation deleteSearchIndexesAsyncWithHttpInfo
     *
     * Delete all objects in an index
     *
     * @param string $type The index type (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchIndexesAsyncWithHttpInfo($type)
    {
        $returnType = '';
        $request = $this->deleteSearchIndexesRequest($type);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'deleteSearchIndexes'
     *
     * @param string $type The index type (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSearchIndexesRequest($type)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling deleteSearchIndexes');
        }

        $resourcePath = '/search/index/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($type !== null) {
            $resourcePath = str_replace('{' . 'type' . '}', ObjectSerializer::toPathValue($type), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'DELETE',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation searchIndex
     *
     * Search an index
     *
     * @param string $type The index type (required)
     * @param object $query The query to be used for the search (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \KnetikCloud\Model\PageResourceMapStringObject_
     */
    public function searchIndex($type, $query = null, $size = '25', $page = '1')
    {
        list($response) = $this->searchIndexWithHttpInfo($type, $query, $size, $page);
        return $response;
    }

    /**
     * Operation searchIndexWithHttpInfo
     *
     * Search an index
     *
     * @param string $type The index type (required)
     * @param object $query The query to be used for the search (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\PageResourceMapStringObject_, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchIndexWithHttpInfo($type, $query = null, $size = '25', $page = '1')
    {
        $returnType = '\KnetikCloud\Model\PageResourceMapStringObject_';
        $request = $this->searchIndexRequest($type, $query, $size, $page);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceMapStringObject_', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchIndexAsync
     *
     * Search an index
     *
     * @param string $type The index type (required)
     * @param object $query The query to be used for the search (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchIndexAsync($type, $query = null, $size = '25', $page = '1')
    {
        return $this->searchIndexAsyncWithHttpInfo($type, $query, $size, $page)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation searchIndexAsyncWithHttpInfo
     *
     * Search an index
     *
     * @param string $type The index type (required)
     * @param object $query The query to be used for the search (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchIndexAsyncWithHttpInfo($type, $query = null, $size = '25', $page = '1')
    {
        $returnType = '\KnetikCloud\Model\PageResourceMapStringObject_';
        $request = $this->searchIndexRequest($type, $query, $size, $page);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'searchIndex'
     *
     * @param string $type The index type (required)
     * @param object $query The query to be used for the search (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchIndexRequest($type, $query = null, $size = '25', $page = '1')
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling searchIndex');
        }

        $resourcePath = '/search/index/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($size !== null) {
            $queryParams['size'] = ObjectSerializer::toQueryValue($size);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }

        // path params
        if ($type !== null) {
            $resourcePath = str_replace('{' . 'type' . '}', ObjectSerializer::toPathValue($type), $resourcePath);
        }

        // body params
        $_tempBody = null;
        if (isset($query)) {
            $_tempBody = $query;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );
    }

}
