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
     * Operation getBREActions
     *
     * Get a list of available actions
     *
     * @param string $filter_category Filter for actions that are within a specific category (optional)
     * @param string $filter_name Filter for actions that have names containing the given string (optional)
     * @param string $filter_tags Filter for actions that have all of the given tags (comma separated list) (optional)
     * @param string $filter_search Filter for actions containing the given words somewhere within name, description and tags (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
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
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\ActionResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getBREActionsWithHttpInfo($filter_category = null, $filter_name = null, $filter_tags = null, $filter_search = null)
    {
        $returnType = '\KnetikCloud\Model\ActionResource[]';
        $request = $this->getBREActionsRequest($filter_category, $filter_name, $filter_tags, $filter_search);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\ActionResource[]', $e->getResponseHeaders());
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
     * Operation getBREActionsAsync
     *
     * Get a list of available actions
     *
     * @param string $filter_category Filter for actions that are within a specific category (optional)
     * @param string $filter_name Filter for actions that have names containing the given string (optional)
     * @param string $filter_tags Filter for actions that have all of the given tags (comma separated list) (optional)
     * @param string $filter_search Filter for actions containing the given words somewhere within name, description and tags (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBREActionsAsync($filter_category = null, $filter_name = null, $filter_tags = null, $filter_search = null)
    {
        return $this->getBREActionsAsyncWithHttpInfo($filter_category, $filter_name, $filter_tags, $filter_search)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getBREActionsAsyncWithHttpInfo
     *
     * Get a list of available actions
     *
     * @param string $filter_category Filter for actions that are within a specific category (optional)
     * @param string $filter_name Filter for actions that have names containing the given string (optional)
     * @param string $filter_tags Filter for actions that have all of the given tags (comma separated list) (optional)
     * @param string $filter_search Filter for actions containing the given words somewhere within name, description and tags (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBREActionsAsyncWithHttpInfo($filter_category = null, $filter_name = null, $filter_tags = null, $filter_search = null)
    {
        $returnType = '\KnetikCloud\Model\ActionResource[]';
        $request = $this->getBREActionsRequest($filter_category, $filter_name, $filter_tags, $filter_search);

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
     * Create request for operation 'getBREActions'
     *
     * @param string $filter_category Filter for actions that are within a specific category (optional)
     * @param string $filter_name Filter for actions that have names containing the given string (optional)
     * @param string $filter_tags Filter for actions that have all of the given tags (comma separated list) (optional)
     * @param string $filter_search Filter for actions containing the given words somewhere within name, description and tags (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBREActionsRequest($filter_category = null, $filter_name = null, $filter_tags = null, $filter_search = null)
    {

        $resourcePath = '/bre/actions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_category !== null) {
            $queryParams['filter_category'] = ObjectSerializer::toQueryValue($filter_category);
        }
        // query params
        if ($filter_name !== null) {
            $queryParams['filter_name'] = ObjectSerializer::toQueryValue($filter_name);
        }
        // query params
        if ($filter_tags !== null) {
            $queryParams['filter_tags'] = ObjectSerializer::toQueryValue($filter_tags);
        }
        // query params
        if ($filter_search !== null) {
            $queryParams['filter_search'] = ObjectSerializer::toQueryValue($filter_search);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

}
