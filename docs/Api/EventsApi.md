# EdLink\EventsApi

All URIs are relative to https://ed.link, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsControllerFetchEventForIntegration()**](EventsApi.md#eventsControllerFetchEventForIntegration) | **GET** /api/v2/graph/events/{event_id} | Fetch a specific event by ID |
| [**eventsControllerListEventsForIntegration()**](EventsApi.md#eventsControllerListEventsForIntegration) | **GET** /api/v2/graph/events | List all events for this integration |


## `eventsControllerFetchEventForIntegration()`

```php
eventsControllerFetchEventForIntegration($event_id): \EdLink\Model\EventsControllerFetchEventForIntegration200Response
```

Fetch a specific event by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->eventsControllerFetchEventForIntegration($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsControllerFetchEventForIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

[**\EdLink\Model\EventsControllerFetchEventForIntegration200Response**](../Model/EventsControllerFetchEventForIntegration200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsControllerListEventsForIntegration()`

```php
eventsControllerListEventsForIntegration($last, $before, $first, $after): \EdLink\Model\EventsControllerListEventsForIntegration200Response
```

List all events for this integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)

try {
    $result = $apiInstance->eventsControllerListEventsForIntegration($last, $before, $first, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsControllerListEventsForIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **last** | [**mixed**](../Model/.md)| Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **before** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **first** | [**mixed**](../Model/.md)| Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **after** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |

### Return type

[**\EdLink\Model\EventsControllerListEventsForIntegration200Response**](../Model/EventsControllerListEventsForIntegration200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
