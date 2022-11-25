# EdLink\PeopleApi

All URIs are relative to https://ed.link, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**peopleControllerFetchPersonForIntegration()**](PeopleApi.md#peopleControllerFetchPersonForIntegration) | **GET** /api/v2/graph/people/{person_id} | Fetch an individual person by ID |
| [**peopleControllerListAgentsForPerson()**](PeopleApi.md#peopleControllerListAgentsForPerson) | **GET** /api/v2/graph/people/{person_id}/agents | List all agents for an individual person |
| [**peopleControllerListClassesForPerson()**](PeopleApi.md#peopleControllerListClassesForPerson) | **GET** /api/v2/graph/people/{person_id}/classes | List all classes for an individual person |
| [**peopleControllerListDistrictsForPerson()**](PeopleApi.md#peopleControllerListDistrictsForPerson) | **GET** /api/v2/graph/people/{person_id}/districts | List all districts for an individual person |
| [**peopleControllerListEnrollmentsForPerson()**](PeopleApi.md#peopleControllerListEnrollmentsForPerson) | **GET** /api/v2/graph/people/{person_id}/enrollments | List all enrollments for an individual person |
| [**peopleControllerListPeopleForIntegration()**](PeopleApi.md#peopleControllerListPeopleForIntegration) | **GET** /api/v2/graph/people | List all people for this integration |
| [**peopleControllerListSchoolsForPerson()**](PeopleApi.md#peopleControllerListSchoolsForPerson) | **GET** /api/v2/graph/people/{person_id}/schools | List all schools for an individual person |


## `peopleControllerFetchPersonForIntegration()`

```php
peopleControllerFetchPersonForIntegration($person_id): \EdLink\Model\PeopleControllerFetchPersonForIntegration200Response
```

Fetch an individual person by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->peopleControllerFetchPersonForIntegration($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerFetchPersonForIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |

### Return type

[**\EdLink\Model\PeopleControllerFetchPersonForIntegration200Response**](../Model/PeopleControllerFetchPersonForIntegration200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peopleControllerListAgentsForPerson()`

```php
peopleControllerListAgentsForPerson($person_id, $last, $before, $first, $after, $filter): \EdLink\Model\AgentsControllerListPeopleForIntegration200Response
```

List all agents for an individual person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->peopleControllerListAgentsForPerson($person_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerListAgentsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |
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

## `peopleControllerListClassesForPerson()`

```php
peopleControllerListClassesForPerson($person_id, $last, $before, $first, $after, $filter): \EdLink\Model\ClassesControllerListClasses200Response
```

List all classes for an individual person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->peopleControllerListClassesForPerson($person_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerListClassesForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |
| **last** | [**mixed**](../Model/.md)| Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **before** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **first** | [**mixed**](../Model/.md)| Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **after** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **filter** | **string**| A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) | [optional] |

### Return type

[**\EdLink\Model\ClassesControllerListClasses200Response**](../Model/ClassesControllerListClasses200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peopleControllerListDistrictsForPerson()`

```php
peopleControllerListDistrictsForPerson($person_id): \EdLink\Model\DistrictsControllerListDistrictsForIntegration200Response
```

List all districts for an individual person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->peopleControllerListDistrictsForPerson($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerListDistrictsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |

### Return type

[**\EdLink\Model\DistrictsControllerListDistrictsForIntegration200Response**](../Model/DistrictsControllerListDistrictsForIntegration200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peopleControllerListEnrollmentsForPerson()`

```php
peopleControllerListEnrollmentsForPerson($person_id, $last, $before, $first, $after, $filter): \EdLink\Model\PeopleControllerListEnrollmentsForPerson200Response
```

List all enrollments for an individual person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->peopleControllerListEnrollmentsForPerson($person_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerListEnrollmentsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |
| **last** | [**mixed**](../Model/.md)| Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **before** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **first** | [**mixed**](../Model/.md)| Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **after** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **filter** | **string**| A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) | [optional] |

### Return type

[**\EdLink\Model\PeopleControllerListEnrollmentsForPerson200Response**](../Model/PeopleControllerListEnrollmentsForPerson200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peopleControllerListPeopleForIntegration()`

```php
peopleControllerListPeopleForIntegration($last, $before, $first, $after, $filter): \EdLink\Model\DistrictsControllerListAdministratorsForDistrict200Response
```

List all people for this integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
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
    $result = $apiInstance->peopleControllerListPeopleForIntegration($last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerListPeopleForIntegration: ', $e->getMessage(), PHP_EOL;
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

[**\EdLink\Model\DistrictsControllerListAdministratorsForDistrict200Response**](../Model/DistrictsControllerListAdministratorsForDistrict200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peopleControllerListSchoolsForPerson()`

```php
peopleControllerListSchoolsForPerson($person_id, $last, $before, $first, $after, $filter): \EdLink\Model\PeopleControllerListSchoolsForPerson200Response
```

List all schools for an individual person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->peopleControllerListSchoolsForPerson($person_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->peopleControllerListSchoolsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |
| **last** | [**mixed**](../Model/.md)| Backwards from the &#x60;$before&#x60; parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **before** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$last&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **first** | [**mixed**](../Model/.md)| Forwards from the &#x60;$after&#x60; parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **after** | [**mixed**](../Model/.md)| The last document ID, to be used in conjunction with &#x60;$first&#x60;. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests) | [optional] |
| **filter** | **string**| A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results) | [optional] |

### Return type

[**\EdLink\Model\PeopleControllerListSchoolsForPerson200Response**](../Model/PeopleControllerListSchoolsForPerson200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
