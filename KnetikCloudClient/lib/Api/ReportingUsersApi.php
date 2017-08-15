<?php
/**
 * ReportingUsersApi
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
 * ReportingUsersApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportingUsersApi
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
     * Operation getUserRegistrations
     *
     * Get user registration info
     *
     * @param string $granularity The time duration to aggregate by (optional, default to day)
     * @param int $start_date The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time (optional)
     * @param int $end_date The end of the time range to aggregate, unix timestamp in seconds. Default is end of time (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \KnetikCloud\Model\PageResourceAggregateCountResource_
     */
    public function getUserRegistrations($granularity = 'day', $start_date = null, $end_date = null, $size = '25', $page = '1')
    {
        list($response) = $this->getUserRegistrationsWithHttpInfo($granularity, $start_date, $end_date, $size, $page);
        return $response;
    }

    /**
     * Operation getUserRegistrationsWithHttpInfo
     *
     * Get user registration info
     *
     * @param string $granularity The time duration to aggregate by (optional, default to day)
     * @param int $start_date The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time (optional)
     * @param int $end_date The end of the time range to aggregate, unix timestamp in seconds. Default is end of time (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\PageResourceAggregateCountResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserRegistrationsWithHttpInfo($granularity = 'day', $start_date = null, $end_date = null, $size = '25', $page = '1')
    {
        $returnType = '\KnetikCloud\Model\PageResourceAggregateCountResource_';
        $request = $this->getUserRegistrationsRequest($granularity, $start_date, $end_date, $size, $page);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceAggregateCountResource_', $e->getResponseHeaders());
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
     * Operation getUserRegistrationsAsync
     *
     * Get user registration info
     *
     * @param string $granularity The time duration to aggregate by (optional, default to day)
     * @param int $start_date The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time (optional)
     * @param int $end_date The end of the time range to aggregate, unix timestamp in seconds. Default is end of time (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserRegistrationsAsync($granularity = 'day', $start_date = null, $end_date = null, $size = '25', $page = '1')
    {
        return $this->getUserRegistrationsAsyncWithHttpInfo($granularity, $start_date, $end_date, $size, $page)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getUserRegistrationsAsyncWithHttpInfo
     *
     * Get user registration info
     *
     * @param string $granularity The time duration to aggregate by (optional, default to day)
     * @param int $start_date The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time (optional)
     * @param int $end_date The end of the time range to aggregate, unix timestamp in seconds. Default is end of time (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserRegistrationsAsyncWithHttpInfo($granularity = 'day', $start_date = null, $end_date = null, $size = '25', $page = '1')
    {
        $returnType = '\KnetikCloud\Model\PageResourceAggregateCountResource_';
        $request = $this->getUserRegistrationsRequest($granularity, $start_date, $end_date, $size, $page);

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
     * Create request for operation 'getUserRegistrations'
     *
     * @param string $granularity The time duration to aggregate by (optional, default to day)
     * @param int $start_date The start of the time range to aggregate, unix timestamp in seconds. Default is beginning of time (optional)
     * @param int $end_date The end of the time range to aggregate, unix timestamp in seconds. Default is end of time (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUserRegistrationsRequest($granularity = 'day', $start_date = null, $end_date = null, $size = '25', $page = '1')
    {

        $resourcePath = '/reporting/users/registrations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($granularity !== null) {
            $queryParams['granularity'] = ObjectSerializer::toQueryValue($granularity);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = ObjectSerializer::toQueryValue($size);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
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

}
