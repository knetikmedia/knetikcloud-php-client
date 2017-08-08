<?php
/**
 * GamificationLeaderboardsApi
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
 * GamificationLeaderboardsApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GamificationLeaderboardsApi
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
     * Operation getLeaderboard
     *
     * Retrieves leaderboard details and paginated entries
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to score:DESC,updated:ASC,user_id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \KnetikCloud\Model\LeaderboardResource
     */
    public function getLeaderboard($context_type, $context_id, $size = '25', $page = '1', $order = 'score:DESC,updated:ASC,user_id:ASC')
    {
        list($response) = $this->getLeaderboardWithHttpInfo($context_type, $context_id, $size, $page, $order);
        return $response;
    }

    /**
     * Operation getLeaderboardWithHttpInfo
     *
     * Retrieves leaderboard details and paginated entries
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to score:DESC,updated:ASC,user_id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\LeaderboardResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLeaderboardWithHttpInfo($context_type, $context_id, $size = '25', $page = '1', $order = 'score:DESC,updated:ASC,user_id:ASC')
    {
        $returnType = '\KnetikCloud\Model\LeaderboardResource';
        $request = $this->getLeaderboardRequest($context_type, $context_id, $size, $page, $order);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\LeaderboardResource', $e->getResponseHeaders());
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
     * Operation getLeaderboardAsync
     *
     * Retrieves leaderboard details and paginated entries
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to score:DESC,updated:ASC,user_id:ASC)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeaderboardAsync($context_type, $context_id, $size = '25', $page = '1', $order = 'score:DESC,updated:ASC,user_id:ASC')
    {
        return $this->getLeaderboardAsyncWithHttpInfo($context_type, $context_id, $size, $page, $order)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getLeaderboardAsyncWithHttpInfo
     *
     * Retrieves leaderboard details and paginated entries
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to score:DESC,updated:ASC,user_id:ASC)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeaderboardAsyncWithHttpInfo($context_type, $context_id, $size = '25', $page = '1', $order = 'score:DESC,updated:ASC,user_id:ASC')
    {
        $returnType = '\KnetikCloud\Model\LeaderboardResource';
        $request = $this->getLeaderboardRequest($context_type, $context_id, $size, $page, $order);

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
     * Create request for operation 'getLeaderboard'
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to score:DESC,updated:ASC,user_id:ASC)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLeaderboardRequest($context_type, $context_id, $size = '25', $page = '1', $order = 'score:DESC,updated:ASC,user_id:ASC')
    {
        // verify the required parameter 'context_type' is set
        if ($context_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context_type when calling getLeaderboard');
        }
        // verify the required parameter 'context_id' is set
        if ($context_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context_id when calling getLeaderboard');
        }

        $resourcePath = '/leaderboards/{context_type}/{context_id}';
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
        // query params
        if ($order !== null) {
            $queryParams['order'] = ObjectSerializer::toQueryValue($order);
        }

        // path params
        if ($context_type !== null) {
            $resourcePath = str_replace('{' . 'context_type' . '}', ObjectSerializer::toPathValue($context_type), $resourcePath);
        }
        // path params
        if ($context_id !== null) {
            $resourcePath = str_replace('{' . 'context_id' . '}', ObjectSerializer::toPathValue($context_id), $resourcePath);
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
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getLeaderboardRank
     *
     * Retrieves a specific user entry with rank
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param string $id The id of a user (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \KnetikCloud\Model\LeaderboardEntryResource
     */
    public function getLeaderboardRank($context_type, $context_id, $id)
    {
        list($response) = $this->getLeaderboardRankWithHttpInfo($context_type, $context_id, $id);
        return $response;
    }

    /**
     * Operation getLeaderboardRankWithHttpInfo
     *
     * Retrieves a specific user entry with rank
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param string $id The id of a user (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\LeaderboardEntryResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLeaderboardRankWithHttpInfo($context_type, $context_id, $id)
    {
        $returnType = '\KnetikCloud\Model\LeaderboardEntryResource';
        $request = $this->getLeaderboardRankRequest($context_type, $context_id, $id);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\LeaderboardEntryResource', $e->getResponseHeaders());
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
     * Operation getLeaderboardRankAsync
     *
     * Retrieves a specific user entry with rank
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param string $id The id of a user (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeaderboardRankAsync($context_type, $context_id, $id)
    {
        return $this->getLeaderboardRankAsyncWithHttpInfo($context_type, $context_id, $id)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getLeaderboardRankAsyncWithHttpInfo
     *
     * Retrieves a specific user entry with rank
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param string $id The id of a user (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeaderboardRankAsyncWithHttpInfo($context_type, $context_id, $id)
    {
        $returnType = '\KnetikCloud\Model\LeaderboardEntryResource';
        $request = $this->getLeaderboardRankRequest($context_type, $context_id, $id);

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
     * Create request for operation 'getLeaderboardRank'
     *
     * @param string $context_type The context type for the leaderboard (required)
     * @param string $context_id The context id for the leaderboard (required)
     * @param string $id The id of a user (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLeaderboardRankRequest($context_type, $context_id, $id)
    {
        // verify the required parameter 'context_type' is set
        if ($context_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context_type when calling getLeaderboardRank');
        }
        // verify the required parameter 'context_id' is set
        if ($context_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context_id when calling getLeaderboardRank');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getLeaderboardRank');
        }

        $resourcePath = '/leaderboards/{context_type}/{context_id}/users/{id}/rank';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($context_type !== null) {
            $resourcePath = str_replace('{' . 'context_type' . '}', ObjectSerializer::toPathValue($context_type), $resourcePath);
        }
        // path params
        if ($context_id !== null) {
            $resourcePath = str_replace('{' . 'context_id' . '}', ObjectSerializer::toPathValue($context_id), $resourcePath);
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

    /**
     * Operation getLeaderboardStrategies
     *
     * Get a list of available leaderboard strategy names
     *
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string[]
     */
    public function getLeaderboardStrategies()
    {
        list($response) = $this->getLeaderboardStrategiesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getLeaderboardStrategiesWithHttpInfo
     *
     * Get a list of available leaderboard strategy names
     *
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getLeaderboardStrategiesWithHttpInfo()
    {
        $returnType = 'string[]';
        $request = $this->getLeaderboardStrategiesRequest();

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
     * Operation getLeaderboardStrategiesAsync
     *
     * Get a list of available leaderboard strategy names
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeaderboardStrategiesAsync()
    {
        return $this->getLeaderboardStrategiesAsyncWithHttpInfo()->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getLeaderboardStrategiesAsyncWithHttpInfo
     *
     * Get a list of available leaderboard strategy names
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLeaderboardStrategiesAsyncWithHttpInfo()
    {
        $returnType = 'string[]';
        $request = $this->getLeaderboardStrategiesRequest();

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
     * Create request for operation 'getLeaderboardStrategies'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getLeaderboardStrategiesRequest()
    {

        $resourcePath = '/leaderboards/strategies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




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
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

}
