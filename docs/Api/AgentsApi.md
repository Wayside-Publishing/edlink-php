# EdLink\AgentsApi

All URIs are relative to https://ed.link, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agentsControllerFetchAgent()**](AgentsApi.md#agentsControllerFetchAgent) | **GET** /api/v2/graph/agents/{agent_id} | Fetch an individual agent by ID |
| [**agentsControllerListPeopleForIntegration()**](AgentsApi.md#agentsControllerListPeopleForIntegration) | **GET** /api/v2/graph/agents | List all agents for this integration |


## `agentsControllerFetchAgent()`

```php
agentsControllerFetchAgent($agent_id): \EdLink\Model\AgentsControllerFetchAgent200Response
```

Fetch an individual agent by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->agentsControllerFetchAgent($agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsControllerFetchAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |

### Return type

[**\EdLink\Model\AgentsControllerFetchAgent200Response**](../Model/AgentsControllerFetchAgent200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentsControllerListPeopleForIntegration()`

```php
agentsControllerListPeopleForIntegration($last, $before, $first, $after, $filter): \EdLink\Model\AgentsControllerListPeopleForIntegration200Response
```

List all agents for this integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\AgentsApi(
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
    $result = $apiInstance->agentsControllerListPeopleForIntegration($last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsControllerListPeopleForIntegration: ', $e->getMessage(), PHP_EOL;
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

[**\EdLink\Model\AgentsControllerListPeopleForIntegration200Response**](../Model/AgentsControllerListPeopleForIntegration200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
