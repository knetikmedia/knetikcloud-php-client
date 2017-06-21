<?php
/**
 * PaymentsWalletsApi
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
 * PaymentsWalletsApi Class Doc Comment
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsWalletsApi
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
     * @return PaymentsWalletsApi
     */
    public function setApiClient(\KnetikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getUserWallet
     *
     * Returns the user's wallet for the given currency code
     *
     * @param int $user_id The ID of the user for whom wallet is being retrieved (required)
     * @param string $currency_code Currency code of the user&#39;s wallet (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\SimpleWallet
     */
    public function getUserWallet($user_id, $currency_code)
    {
        list($response) = $this->getUserWalletWithHttpInfo($user_id, $currency_code);
        return $response;
    }

    /**
     * Operation getUserWalletWithHttpInfo
     *
     * Returns the user's wallet for the given currency code
     *
     * @param int $user_id The ID of the user for whom wallet is being retrieved (required)
     * @param string $currency_code Currency code of the user&#39;s wallet (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\SimpleWallet, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserWalletWithHttpInfo($user_id, $currency_code)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getUserWallet');
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency_code when calling getUserWallet');
        }
        // parse inputs
        $resourcePath = "/users/{user_id}/wallets/{currency_code}";
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
        // path params
        if ($currency_code !== null) {
            $resourcePath = str_replace(
                "{" . "currency_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($currency_code),
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
                '\KnetikCloud\Model\SimpleWallet',
                '/users/{user_id}/wallets/{currency_code}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\SimpleWallet', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\SimpleWallet', $e->getResponseHeaders());
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
     * Operation getUserWalletTransactions
     *
     * Retrieve a user's wallet transactions
     *
     * @param int $user_id The ID of the user for whom wallet transactions are being retrieved (required)
     * @param string $currency_code Currency code of the user&#39;s wallet (required)
     * @param string $filter_type Filter for transactions with specified type (optional)
     * @param int $filter_max_date Filter for transactions from no earlier than the specified date as a unix timestamp in seconds (optional)
     * @param int $filter_min_date Filter for transactions from no later than the specified date as a unix timestamp in seconds (optional)
     * @param string $filter_sign Filter for transactions with amount with the given sign.  Allowable values: (&#39;positive&#39;, &#39;negative&#39;) (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceWalletTransactionResource_
     */
    public function getUserWalletTransactions($user_id, $currency_code, $filter_type = null, $filter_max_date = null, $filter_min_date = null, $filter_sign = null, $size = null, $page = null, $order = null)
    {
        list($response) = $this->getUserWalletTransactionsWithHttpInfo($user_id, $currency_code, $filter_type, $filter_max_date, $filter_min_date, $filter_sign, $size, $page, $order);
        return $response;
    }

    /**
     * Operation getUserWalletTransactionsWithHttpInfo
     *
     * Retrieve a user's wallet transactions
     *
     * @param int $user_id The ID of the user for whom wallet transactions are being retrieved (required)
     * @param string $currency_code Currency code of the user&#39;s wallet (required)
     * @param string $filter_type Filter for transactions with specified type (optional)
     * @param int $filter_max_date Filter for transactions from no earlier than the specified date as a unix timestamp in seconds (optional)
     * @param int $filter_min_date Filter for transactions from no later than the specified date as a unix timestamp in seconds (optional)
     * @param string $filter_sign Filter for transactions with amount with the given sign.  Allowable values: (&#39;positive&#39;, &#39;negative&#39;) (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceWalletTransactionResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserWalletTransactionsWithHttpInfo($user_id, $currency_code, $filter_type = null, $filter_max_date = null, $filter_min_date = null, $filter_sign = null, $size = null, $page = null, $order = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getUserWalletTransactions');
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency_code when calling getUserWalletTransactions');
        }
        // parse inputs
        $resourcePath = "/users/{user_id}/wallets/{currency_code}/transactions";
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
        if ($filter_type !== null) {
            $queryParams['filter_type'] = $this->apiClient->getSerializer()->toQueryValue($filter_type);
        }
        // query params
        if ($filter_max_date !== null) {
            $queryParams['filter_max_date'] = $this->apiClient->getSerializer()->toQueryValue($filter_max_date);
        }
        // query params
        if ($filter_min_date !== null) {
            $queryParams['filter_min_date'] = $this->apiClient->getSerializer()->toQueryValue($filter_min_date);
        }
        // query params
        if ($filter_sign !== null) {
            $queryParams['filter_sign'] = $this->apiClient->getSerializer()->toQueryValue($filter_sign);
        }
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
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($currency_code !== null) {
            $resourcePath = str_replace(
                "{" . "currency_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($currency_code),
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
                '\KnetikCloud\Model\PageResourceWalletTransactionResource_',
                '/users/{user_id}/wallets/{currency_code}/transactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceWalletTransactionResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceWalletTransactionResource_', $e->getResponseHeaders());
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
     * Operation getUserWallets
     *
     * List all of a user's wallets
     *
     * @param int $user_id The ID of the user for whom wallets are being retrieved (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\SimpleWallet[]
     */
    public function getUserWallets($user_id)
    {
        list($response) = $this->getUserWalletsWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getUserWalletsWithHttpInfo
     *
     * List all of a user's wallets
     *
     * @param int $user_id The ID of the user for whom wallets are being retrieved (required)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\SimpleWallet[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserWalletsWithHttpInfo($user_id)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling getUserWallets');
        }
        // parse inputs
        $resourcePath = "/users/{user_id}/wallets";
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
                '\KnetikCloud\Model\SimpleWallet[]',
                '/users/{user_id}/wallets'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\SimpleWallet[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\SimpleWallet[]', $e->getResponseHeaders());
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
     * Operation getWalletBalances
     *
     * Retrieves a summation of wallet balances by currency code
     *
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceWalletTotalResponse_
     */
    public function getWalletBalances()
    {
        list($response) = $this->getWalletBalancesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getWalletBalancesWithHttpInfo
     *
     * Retrieves a summation of wallet balances by currency code
     *
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceWalletTotalResponse_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWalletBalancesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/wallets/totals";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        
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
                '\KnetikCloud\Model\PageResourceWalletTotalResponse_',
                '/wallets/totals'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceWalletTotalResponse_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceWalletTotalResponse_', $e->getResponseHeaders());
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
     * Operation getWalletTransactions
     *
     * Retrieve wallet transactions across the system
     *
     * @param int $filter_invoice Filter for transactions from a specific invoice (optional)
     * @param string $filter_type Filter for transactions with specified type (optional)
     * @param string $filter_date A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE). (optional)
     * @param string $filter_sign Filter for transactions with amount with the given sign (optional)
     * @param int $filter_user_id Filter for transactions for specific userId (optional)
     * @param string $filter_username Filter for transactions for specific username that start with the given string (optional)
     * @param string $filter_details Filter for transactions for specific details that start with the given string (optional)
     * @param string $filter_currency_code Filter for transactions for specific currency code (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceWalletTransactionResource_
     */
    public function getWalletTransactions($filter_invoice = null, $filter_type = null, $filter_date = null, $filter_sign = null, $filter_user_id = null, $filter_username = null, $filter_details = null, $filter_currency_code = null, $size = null, $page = null, $order = null)
    {
        list($response) = $this->getWalletTransactionsWithHttpInfo($filter_invoice, $filter_type, $filter_date, $filter_sign, $filter_user_id, $filter_username, $filter_details, $filter_currency_code, $size, $page, $order);
        return $response;
    }

    /**
     * Operation getWalletTransactionsWithHttpInfo
     *
     * Retrieve wallet transactions across the system
     *
     * @param int $filter_invoice Filter for transactions from a specific invoice (optional)
     * @param string $filter_type Filter for transactions with specified type (optional)
     * @param string $filter_date A comma separated string without spaces.  First value is the operator to search on, second value is the log start date, a unix timestamp in seconds. Can be repeated for a range, eg: GT,123,LT,456  Allowed operators: (GT, LT, EQ, GOE, LOE). (optional)
     * @param string $filter_sign Filter for transactions with amount with the given sign (optional)
     * @param int $filter_user_id Filter for transactions for specific userId (optional)
     * @param string $filter_username Filter for transactions for specific username that start with the given string (optional)
     * @param string $filter_details Filter for transactions for specific details that start with the given string (optional)
     * @param string $filter_currency_code Filter for transactions for specific currency code (optional)
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceWalletTransactionResource_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWalletTransactionsWithHttpInfo($filter_invoice = null, $filter_type = null, $filter_date = null, $filter_sign = null, $filter_user_id = null, $filter_username = null, $filter_details = null, $filter_currency_code = null, $size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/wallets/transactions";
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
        if ($filter_invoice !== null) {
            $queryParams['filter_invoice'] = $this->apiClient->getSerializer()->toQueryValue($filter_invoice);
        }
        // query params
        if ($filter_type !== null) {
            $queryParams['filter_type'] = $this->apiClient->getSerializer()->toQueryValue($filter_type);
        }
        // query params
        if ($filter_date !== null) {
            $queryParams['filter_date'] = $this->apiClient->getSerializer()->toQueryValue($filter_date);
        }
        // query params
        if ($filter_sign !== null) {
            $queryParams['filter_sign'] = $this->apiClient->getSerializer()->toQueryValue($filter_sign);
        }
        // query params
        if ($filter_user_id !== null) {
            $queryParams['filter_user_id'] = $this->apiClient->getSerializer()->toQueryValue($filter_user_id);
        }
        // query params
        if ($filter_username !== null) {
            $queryParams['filter_username'] = $this->apiClient->getSerializer()->toQueryValue($filter_username);
        }
        // query params
        if ($filter_details !== null) {
            $queryParams['filter_details'] = $this->apiClient->getSerializer()->toQueryValue($filter_details);
        }
        // query params
        if ($filter_currency_code !== null) {
            $queryParams['filter_currency_code'] = $this->apiClient->getSerializer()->toQueryValue($filter_currency_code);
        }
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
                '\KnetikCloud\Model\PageResourceWalletTransactionResource_',
                '/wallets/transactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceWalletTransactionResource_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceWalletTransactionResource_', $e->getResponseHeaders());
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
     * Operation getWallets
     *
     * Retrieve a list of wallets across the system
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\PageResourceSimpleWallet_
     */
    public function getWallets($size = null, $page = null, $order = null)
    {
        list($response) = $this->getWalletsWithHttpInfo($size, $page, $order);
        return $response;
    }

    /**
     * Operation getWalletsWithHttpInfo
     *
     * Retrieve a list of wallets across the system
     *
     * @param int $size The number of objects returned per page (optional, default to 25)
     * @param int $page The number of the page returned, starting with 1 (optional, default to 1)
     * @param string $order A comma separated list of sorting requirements in priority order, each entry matching PROPERTY_NAME:[ASC|DESC] (optional, default to id:ASC)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\PageResourceSimpleWallet_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWalletsWithHttpInfo($size = null, $page = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/wallets";
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
                '\KnetikCloud\Model\PageResourceSimpleWallet_',
                '/wallets'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\PageResourceSimpleWallet_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\PageResourceSimpleWallet_', $e->getResponseHeaders());
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
     * Operation updateWalletBalance
     *
     * Updates the balance for a user's wallet
     *
     * @param int $user_id The ID of the user for whom wallet is being modified (required)
     * @param string $currency_code Currency code of the user&#39;s wallet (required)
     * @param \KnetikCloud\Model\WalletAlterRequest $request The requested balance modification to be made to the user&#39;s wallet (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return \KnetikCloud\Model\WalletTransactionResource
     */
    public function updateWalletBalance($user_id, $currency_code, $request = null)
    {
        list($response) = $this->updateWalletBalanceWithHttpInfo($user_id, $currency_code, $request);
        return $response;
    }

    /**
     * Operation updateWalletBalanceWithHttpInfo
     *
     * Updates the balance for a user's wallet
     *
     * @param int $user_id The ID of the user for whom wallet is being modified (required)
     * @param string $currency_code Currency code of the user&#39;s wallet (required)
     * @param \KnetikCloud\Model\WalletAlterRequest $request The requested balance modification to be made to the user&#39;s wallet (optional)
     * @throws \KnetikCloud\ApiException on non-2xx response
     * @return array of \KnetikCloud\Model\WalletTransactionResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWalletBalanceWithHttpInfo($user_id, $currency_code, $request = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling updateWalletBalance');
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency_code when calling updateWalletBalance');
        }
        // parse inputs
        $resourcePath = "/users/{user_id}/wallets/{currency_code}/balance";
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
        // path params
        if ($currency_code !== null) {
            $resourcePath = str_replace(
                "{" . "currency_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($currency_code),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
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
                '\KnetikCloud\Model\WalletTransactionResource',
                '/users/{user_id}/wallets/{currency_code}/balance'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\KnetikCloud\Model\WalletTransactionResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KnetikCloud\Model\WalletTransactionResource', $e->getResponseHeaders());
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