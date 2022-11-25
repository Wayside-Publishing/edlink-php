<?php
/**
 * SessionsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  EdLink
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edlink Graph API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EdLink\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EdLink\ApiException;
use EdLink\Configuration;
use EdLink\HeaderSelector;
use EdLink\ObjectSerializer;

/**
 * SessionsApi Class Doc Comment
 *
 * @category Class
 * @package  EdLink
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SessionsApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'sessionsControllerFetchSession' => [
            'application/json',
        ],
        'sessionsControllerListSessions' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sessionsControllerFetchSession
     *
     * Fetch an individual session by ID
     *
     * @param  string $session_id session_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerFetchSession'] to see the possible values for this operation
     *
     * @throws \EdLink\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EdLink\Model\SessionsControllerFetchSession200Response
     */
    public function sessionsControllerFetchSession($session_id, string $contentType = self::contentTypes['sessionsControllerFetchSession'][0])
    {
        list($response) = $this->sessionsControllerFetchSessionWithHttpInfo($session_id, $contentType);
        return $response;
    }

    /**
     * Operation sessionsControllerFetchSessionWithHttpInfo
     *
     * Fetch an individual session by ID
     *
     * @param  string $session_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerFetchSession'] to see the possible values for this operation
     *
     * @throws \EdLink\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EdLink\Model\SessionsControllerFetchSession200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function sessionsControllerFetchSessionWithHttpInfo($session_id, string $contentType = self::contentTypes['sessionsControllerFetchSession'][0])
    {
        $request = $this->sessionsControllerFetchSessionRequest($session_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\EdLink\Model\SessionsControllerFetchSession200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EdLink\Model\SessionsControllerFetchSession200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EdLink\Model\SessionsControllerFetchSession200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EdLink\Model\SessionsControllerFetchSession200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EdLink\Model\SessionsControllerFetchSession200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sessionsControllerFetchSessionAsync
     *
     * Fetch an individual session by ID
     *
     * @param  string $session_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerFetchSession'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sessionsControllerFetchSessionAsync($session_id, string $contentType = self::contentTypes['sessionsControllerFetchSession'][0])
    {
        return $this->sessionsControllerFetchSessionAsyncWithHttpInfo($session_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sessionsControllerFetchSessionAsyncWithHttpInfo
     *
     * Fetch an individual session by ID
     *
     * @param  string $session_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerFetchSession'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sessionsControllerFetchSessionAsyncWithHttpInfo($session_id, string $contentType = self::contentTypes['sessionsControllerFetchSession'][0])
    {
        $returnType = '\EdLink\Model\SessionsControllerFetchSession200Response';
        $request = $this->sessionsControllerFetchSessionRequest($session_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sessionsControllerFetchSession'
     *
     * @param  string $session_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerFetchSession'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sessionsControllerFetchSessionRequest($session_id, string $contentType = self::contentTypes['sessionsControllerFetchSession'][0])
    {

        // verify the required parameter 'session_id' is set
        if ($session_id === null || (is_array($session_id) && count($session_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $session_id when calling sessionsControllerFetchSession'
            );
        }


        $resourcePath = '/api/v2/graph/sessions/{session_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($session_id !== null) {
            $resourcePath = str_replace(
                '{' . 'session_id' . '}',
                ObjectSerializer::toPathValue($session_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sessionsControllerListSessions
     *
     * List all sessions for this integration
     *
     * @param  mixed $last Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $before The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $first Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $after The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  string $filter A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerListSessions'] to see the possible values for this operation
     *
     * @throws \EdLink\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EdLink\Model\SchoolsControllerListSessionsForSchool200Response
     */
    public function sessionsControllerListSessions($last = null, $before = null, $first = null, $after = null, $filter = null, string $contentType = self::contentTypes['sessionsControllerListSessions'][0])
    {
        list($response) = $this->sessionsControllerListSessionsWithHttpInfo($last, $before, $first, $after, $filter, $contentType);
        return $response;
    }

    /**
     * Operation sessionsControllerListSessionsWithHttpInfo
     *
     * List all sessions for this integration
     *
     * @param  mixed $last Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $before The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $first Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $after The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  string $filter A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerListSessions'] to see the possible values for this operation
     *
     * @throws \EdLink\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EdLink\Model\SchoolsControllerListSessionsForSchool200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function sessionsControllerListSessionsWithHttpInfo($last = null, $before = null, $first = null, $after = null, $filter = null, string $contentType = self::contentTypes['sessionsControllerListSessions'][0])
    {
        $request = $this->sessionsControllerListSessionsRequest($last, $before, $first, $after, $filter, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\EdLink\Model\SchoolsControllerListSessionsForSchool200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EdLink\Model\SchoolsControllerListSessionsForSchool200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EdLink\Model\SchoolsControllerListSessionsForSchool200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EdLink\Model\SchoolsControllerListSessionsForSchool200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EdLink\Model\SchoolsControllerListSessionsForSchool200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sessionsControllerListSessionsAsync
     *
     * List all sessions for this integration
     *
     * @param  mixed $last Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $before The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $first Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $after The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  string $filter A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerListSessions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sessionsControllerListSessionsAsync($last = null, $before = null, $first = null, $after = null, $filter = null, string $contentType = self::contentTypes['sessionsControllerListSessions'][0])
    {
        return $this->sessionsControllerListSessionsAsyncWithHttpInfo($last, $before, $first, $after, $filter, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sessionsControllerListSessionsAsyncWithHttpInfo
     *
     * List all sessions for this integration
     *
     * @param  mixed $last Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $before The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $first Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $after The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  string $filter A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerListSessions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sessionsControllerListSessionsAsyncWithHttpInfo($last = null, $before = null, $first = null, $after = null, $filter = null, string $contentType = self::contentTypes['sessionsControllerListSessions'][0])
    {
        $returnType = '\EdLink\Model\SchoolsControllerListSessionsForSchool200Response';
        $request = $this->sessionsControllerListSessionsRequest($last, $before, $first, $after, $filter, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sessionsControllerListSessions'
     *
     * @param  mixed $last Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $before The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $first Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  mixed $after The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) (optional)
     * @param  string $filter A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sessionsControllerListSessions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sessionsControllerListSessionsRequest($last = null, $before = null, $first = null, $after = null, $filter = null, string $contentType = self::contentTypes['sessionsControllerListSessions'][0])
    {

        if ($last !== null && $last > 10000) {
            throw new \InvalidArgumentException('invalid value for "$last" when calling SessionsApi.sessionsControllerListSessions, must be smaller than or equal to 10000.');
        }
        if ($last !== null && $last < 1) {
            throw new \InvalidArgumentException('invalid value for "$last" when calling SessionsApi.sessionsControllerListSessions, must be bigger than or equal to 1.');
        }
        

        if ($first !== null && $first > 10000) {
            throw new \InvalidArgumentException('invalid value for "$first" when calling SessionsApi.sessionsControllerListSessions, must be smaller than or equal to 10000.');
        }
        if ($first !== null && $first < 1) {
            throw new \InvalidArgumentException('invalid value for "$first" when calling SessionsApi.sessionsControllerListSessions, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/api/v2/graph/sessions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last,
            '$last', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $before,
            '$before', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first,
            '$first', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $after,
            '$after', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            '$filter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}