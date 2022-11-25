# EdLink\SessionsApi

All URIs are relative to https://ed.link, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sessionsControllerFetchSession()**](SessionsApi.md#sessionsControllerFetchSession) | **GET** /api/v2/graph/sessions/{session_id} | Fetch an individual session by ID |
| [**sessionsControllerListSessions()**](SessionsApi.md#sessionsControllerListSessions) | **GET** /api/v2/graph/sessions | List all sessions for this integration |


## `sessionsControllerFetchSession()`

```php
sessionsControllerFetchSession($session_id): \EdLink\Model\SessionsControllerFetchSession200Response
```

Fetch an individual session by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->sessionsControllerFetchSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->sessionsControllerFetchSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\EdLink\Model\SessionsControllerFetchSession200Response**](../Model/SessionsControllerFetchSession200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionsControllerListSessions()`

```php
sessionsControllerListSessions($last, $before, $first, $after, $filter): \EdLink\Model\SchoolsControllerListSessionsForSchool200Response
```

List all sessions for this integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->sessionsControllerListSessions($last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->sessionsControllerListSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **last** | [**mixed**](../Model/.md)| Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **before** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **first** | [**mixed**](../Model/.md)| Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **after** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **filter** | **string**| A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) | [optional] |

### Return type

[**\EdLink\Model\SchoolsControllerListSessionsForSchool200Response**](../Model/SchoolsControllerListSessionsForSchool200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
