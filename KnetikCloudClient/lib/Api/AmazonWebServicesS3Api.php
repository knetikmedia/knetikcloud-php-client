<?php
/**
 * AmazonWebServicesS3Api
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
 * AmazonWebServicesS3Api Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AmazonWebServicesS3Api
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
     * Operation getDownloadURL
     *
     * Get a temporary signed S3 URL for download
     *
     * @param string $bucket S3 bucket name (optional)
     * @param string $path The path to the file relative the bucket (the s3 object key) (optional)
     * @param int $expiration The number of seconds this URL will be valid. Default to 60 (optional, default to 60)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function getDownloadURL($bucket = null, $path = null, $expiration = '60')
    {
        list($response) = $this->getDownloadURLWithHttpInfo($bucket, $path, $expiration);
        return $response;
    }

    /**
     * Operation getDownloadURLWithHttpInfo
     *
     * Get a temporary signed S3 URL for download
     *
     * @param string $bucket S3 bucket name (optional)
     * @param string $path The path to the file relative the bucket (the s3 object key) (optional)
     * @param int $expiration The number of seconds this URL will be valid. Default to 60 (optional, default to 60)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDownloadURLWithHttpInfo($bucket = null, $path = null, $expiration = '60')
    {
        $returnType = 'string';
        $request = $this->getDownloadURLRequest($bucket, $path, $expiration);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
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
     * Operation getDownloadURLAsync
     *
     * Get a temporary signed S3 URL for download
     *
     * @param string $bucket S3 bucket name (optional)
     * @param string $path The path to the file relative the bucket (the s3 object key) (optional)
     * @param int $expiration The number of seconds this URL will be valid. Default to 60 (optional, default to 60)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDownloadURLAsync($bucket = null, $path = null, $expiration = '60')
    {
        return $this->getDownloadURLAsyncWithHttpInfo($bucket, $path, $expiration)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getDownloadURLAsyncWithHttpInfo
     *
     * Get a temporary signed S3 URL for download
     *
     * @param string $bucket S3 bucket name (optional)
     * @param string $path The path to the file relative the bucket (the s3 object key) (optional)
     * @param int $expiration The number of seconds this URL will be valid. Default to 60 (optional, default to 60)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDownloadURLAsyncWithHttpInfo($bucket = null, $path = null, $expiration = '60')
    {
        $returnType = 'string';
        $request = $this->getDownloadURLRequest($bucket, $path, $expiration);

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
     * Create request for operation 'getDownloadURL'
     *
     * @param string $bucket S3 bucket name (optional)
     * @param string $path The path to the file relative the bucket (the s3 object key) (optional)
     * @param int $expiration The number of seconds this URL will be valid. Default to 60 (optional, default to 60)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDownloadURLRequest($bucket = null, $path = null, $expiration = '60')
    {

        $resourcePath = '/amazon/s3/downloadurl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($bucket !== null) {
            $queryParams['bucket'] = ObjectSerializer::toQueryValue($bucket);
        }
        // query params
        if ($path !== null) {
            $queryParams['path'] = ObjectSerializer::toQueryValue($path);
        }
        // query params
        if ($expiration !== null) {
            $queryParams['expiration'] = ObjectSerializer::toQueryValue($expiration);
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
     * Operation getSignedS3URL
     *
     * Get a signed S3 URL for upload
     *
     * @param string $filename The file name (optional)
     * @param string $content_type The content type (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \KnetikCloud\Model\AmazonS3Activity
     */
    public function getSignedS3URL($filename = null, $content_type = null)
    {
        list($response) = $this->getSignedS3URLWithHttpInfo($filename, $content_type);
        return $response;
    }

    /**
     * Operation getSignedS3URLWithHttpInfo
     *
     * Get a signed S3 URL for upload
     *
     * @param string $filename The file name (optional)
     * @param string $content_type The content type (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\AmazonS3Activity, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSignedS3URLWithHttpInfo($filename = null, $content_type = null)
    {
        $returnType = '\KnetikCloud\Model\AmazonS3Activity';
        $request = $this->getSignedS3URLRequest($filename, $content_type);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\AmazonS3Activity', $e->getResponseHeaders());
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
     * Operation getSignedS3URLAsync
     *
     * Get a signed S3 URL for upload
     *
     * @param string $filename The file name (optional)
     * @param string $content_type The content type (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSignedS3URLAsync($filename = null, $content_type = null)
    {
        return $this->getSignedS3URLAsyncWithHttpInfo($filename, $content_type)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getSignedS3URLAsyncWithHttpInfo
     *
     * Get a signed S3 URL for upload
     *
     * @param string $filename The file name (optional)
     * @param string $content_type The content type (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSignedS3URLAsyncWithHttpInfo($filename = null, $content_type = null)
    {
        $returnType = '\KnetikCloud\Model\AmazonS3Activity';
        $request = $this->getSignedS3URLRequest($filename, $content_type);

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
     * Create request for operation 'getSignedS3URL'
     *
     * @param string $filename The file name (optional)
     * @param string $content_type The content type (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSignedS3URLRequest($filename = null, $content_type = null)
    {

        $resourcePath = '/amazon/s3/signedposturl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filename !== null) {
            $queryParams['filename'] = ObjectSerializer::toQueryValue($filename);
        }
        // query params
        if ($content_type !== null) {
            $queryParams['content_type'] = ObjectSerializer::toQueryValue($content_type);
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
