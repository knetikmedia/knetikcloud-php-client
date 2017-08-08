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
     * @throws \InvalidArgumentException
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
     * @throws \InvalidArgumentException
     * @return array of \KnetikCloud\Model\OAuth2Resource, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOAuthTokenWithHttpInfo($grant_type, $client_id, $client_secret = null, $username = null, $password = null)
    {
        $returnType = '\KnetikCloud\Model\OAuth2Resource';
        $request = $this->getOAuthTokenRequest($grant_type, $client_id, $client_secret, $username, $password);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\KnetikCloud\Model\OAuth2Resource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOAuthTokenAsync
     *
     * Get access token
     *
     * @param string $grant_type Grant type (required)
     * @param string $client_id The id of the client (required)
     * @param string $client_secret The secret key of the client.  Used only with a grant_type of client_credentials (optional)
     * @param string $username The username of the client.  Used only with a grant_type of password (optional)
     * @param string $password The password of the client.  Used only with a grant_type of password (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOAuthTokenAsync($grant_type, $client_id, $client_secret = null, $username = null, $password = null)
    {
        return $this->getOAuthTokenAsyncWithHttpInfo($grant_type, $client_id, $client_secret, $username, $password)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getOAuthTokenAsyncWithHttpInfo
     *
     * Get access token
     *
     * @param string $grant_type Grant type (required)
     * @param string $client_id The id of the client (required)
     * @param string $client_secret The secret key of the client.  Used only with a grant_type of client_credentials (optional)
     * @param string $username The username of the client.  Used only with a grant_type of password (optional)
     * @param string $password The password of the client.  Used only with a grant_type of password (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOAuthTokenAsyncWithHttpInfo($grant_type, $client_id, $client_secret = null, $username = null, $password = null)
    {
        $returnType = '\KnetikCloud\Model\OAuth2Resource';
        $request = $this->getOAuthTokenRequest($grant_type, $client_id, $client_secret, $username, $password);

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
     * Create request for operation 'getOAuthToken'
     *
     * @param string $grant_type Grant type (required)
     * @param string $client_id The id of the client (required)
     * @param string $client_secret The secret key of the client.  Used only with a grant_type of client_credentials (optional)
     * @param string $username The username of the client.  Used only with a grant_type of password (optional)
     * @param string $password The password of the client.  Used only with a grant_type of password (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOAuthTokenRequest($grant_type, $client_id, $client_secret = null, $username = null, $password = null)
    {
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling getOAuthToken');
        }
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling getOAuthToken');
        }

        $resourcePath = '/oauth/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // form params
        if ($username !== null) {
            $formParams['username'] = ObjectSerializer::toFormValue($username);
        }
        // form params
        if ($password !== null) {
            $formParams['password'] = ObjectSerializer::toFormValue($password);
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
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
