# EdLink\CoursesApi

All URIs are relative to https://ed.link, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**coursesControllerFetchAgent()**](CoursesApi.md#coursesControllerFetchAgent) | **GET** /api/v2/graph/courses/{course_id} | Fetch an individual agent by ID |
| [**coursesControllerListClassesForCourse()**](CoursesApi.md#coursesControllerListClassesForCourse) | **GET** /api/v2/graph/courses/{course_id}/classes | Fetch all classes for a specific course |
| [**coursesControllerListCourses()**](CoursesApi.md#coursesControllerListCourses) | **GET** /api/v2/graph/courses | List all courses for this integration |


## `coursesControllerFetchAgent()`

```php
coursesControllerFetchAgent($course_id): \EdLink\Model\CoursesControllerFetchAgent200Response
```

Fetch an individual agent by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = 'course_id_example'; // string

try {
    $result = $apiInstance->coursesControllerFetchAgent($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesControllerFetchAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **course_id** | **string**|  | |

### Return type

[**\EdLink\Model\CoursesControllerFetchAgent200Response**](../Model/CoursesControllerFetchAgent200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coursesControllerListClassesForCourse()`

```php
coursesControllerListClassesForCourse($course_id, $last, $before, $first, $after, $filter): \EdLink\Model\ClassesControllerListClasses200Response
```

Fetch all classes for a specific course

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = 'course_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->coursesControllerListClassesForCourse($course_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesControllerListClassesForCourse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **course_id** | **string**|  | |
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

## `coursesControllerListCourses()`

```php
coursesControllerListCourses($last, $before, $first, $after, $filter): \EdLink\Model\CoursesControllerListCourses200Response
```

List all courses for this integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\CoursesApi(
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
    $result = $apiInstance->coursesControllerListCourses($last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesControllerListCourses: ', $e->getMessage(), PHP_EOL;
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

[**\EdLink\Model\CoursesControllerListCourses200Response**](../Model/CoursesControllerListCourses200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
