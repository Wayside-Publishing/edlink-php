# EdLink\SchoolsApi

All URIs are relative to https://ed.link, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**schoolsControllerFetchSchool()**](SchoolsApi.md#schoolsControllerFetchSchool) | **GET** /api/v2/graph/schools/{school_id} | Fetch an individual school by ID |
| [**schoolsControllerListAdministratorsForSchool()**](SchoolsApi.md#schoolsControllerListAdministratorsForSchool) | **GET** /api/v2/graph/schools/{school_id}/administrators | List all administrators for an individual school |
| [**schoolsControllerListClassesForSchool()**](SchoolsApi.md#schoolsControllerListClassesForSchool) | **GET** /api/v2/graph/schools/{school_id}/classes | List all classes for an individual school |
| [**schoolsControllerListCoursesForSchool()**](SchoolsApi.md#schoolsControllerListCoursesForSchool) | **GET** /api/v2/graph/schools/{school_id}/courses | List all courses for an individual school |
| [**schoolsControllerListPeopleForSchool()**](SchoolsApi.md#schoolsControllerListPeopleForSchool) | **GET** /api/v2/graph/schools/{school_id}/people | List all people for an individual school |
| [**schoolsControllerListSchools()**](SchoolsApi.md#schoolsControllerListSchools) | **GET** /api/v2/graph/schools | List all schools for this integration |
| [**schoolsControllerListSessionsForSchool()**](SchoolsApi.md#schoolsControllerListSessionsForSchool) | **GET** /api/v2/graph/schools/{school_id}/sessions | List all sessions for an individual school |
| [**schoolsControllerListStudentsForSchool()**](SchoolsApi.md#schoolsControllerListStudentsForSchool) | **GET** /api/v2/graph/schools/{school_id}/students | List all students for an individual school |
| [**schoolsControllerListTeachersForSchool()**](SchoolsApi.md#schoolsControllerListTeachersForSchool) | **GET** /api/v2/graph/schools/{school_id}/teachers | List all teachers for an individual school |


## `schoolsControllerFetchSchool()`

```php
schoolsControllerFetchSchool($school_id): \EdLink\Model\SchoolsControllerFetchSchool200Response
```

Fetch an individual school by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string

try {
    $result = $apiInstance->schoolsControllerFetchSchool($school_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerFetchSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |

### Return type

[**\EdLink\Model\SchoolsControllerFetchSchool200Response**](../Model/SchoolsControllerFetchSchool200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schoolsControllerListAdministratorsForSchool()`

```php
schoolsControllerListAdministratorsForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\DistrictsControllerListAdministratorsForDistrict200Response
```

List all administrators for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListAdministratorsForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListAdministratorsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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

## `schoolsControllerListClassesForSchool()`

```php
schoolsControllerListClassesForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\ClassesControllerListClasses200Response
```

List all classes for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListClassesForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListClassesForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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

## `schoolsControllerListCoursesForSchool()`

```php
schoolsControllerListCoursesForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\CoursesControllerListCourses200Response
```

List all courses for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListCoursesForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListCoursesForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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

## `schoolsControllerListPeopleForSchool()`

```php
schoolsControllerListPeopleForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\DistrictsControllerListAdministratorsForDistrict200Response
```

List all people for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListPeopleForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListPeopleForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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

## `schoolsControllerListSchools()`

```php
schoolsControllerListSchools($last, $before, $first, $after, $filter): \EdLink\Model\PeopleControllerListSchoolsForPerson200Response
```

List all schools for this integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
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
    $result = $apiInstance->schoolsControllerListSchools($last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListSchools: ', $e->getMessage(), PHP_EOL;
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

[**\EdLink\Model\PeopleControllerListSchoolsForPerson200Response**](../Model/PeopleControllerListSchoolsForPerson200Response.md)

### Authorization

[integration](../../README.md#integration)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schoolsControllerListSessionsForSchool()`

```php
schoolsControllerListSessionsForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\SchoolsControllerListSessionsForSchool200Response
```

List all sessions for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListSessionsForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListSessionsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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

## `schoolsControllerListStudentsForSchool()`

```php
schoolsControllerListStudentsForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\DistrictsControllerListAdministratorsForDistrict200Response
```

List all students for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListStudentsForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListStudentsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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

## `schoolsControllerListTeachersForSchool()`

```php
schoolsControllerListTeachersForSchool($school_id, $last, $before, $first, $after, $filter): \EdLink\Model\DistrictsControllerListAdministratorsForDistrict200Response
```

List all teachers for an individual school

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: integration
$config = EdLink\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EdLink\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_id = 'school_id_example'; // string
$last = NULL; // mixed | Backwards from the `$before` parameter (or the end of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$before = NULL; // mixed | The last document ID, to be used in conjunction with `$last`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$first = NULL; // mixed | Forwards from the `$after` parameter (or the beginning of the dataset if not specified),how many documents to fetch. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$after = NULL; // mixed | The last document ID, to be used in conjunction with `$first`. For more information, refer to the [Pagination documentation](https://ed.link/docs/guides/v2.0/paginated-requests)
$filter = {"display_name":[{"operator":"starts with","value":"A"}]}; // string | A stringified set of JSON-encoded filters. For more information, refer to the [Result filtering documentation](https://ed.link/docs/guides/v2.0/filtering-results)

try {
    $result = $apiInstance->schoolsControllerListTeachersForSchool($school_id, $last, $before, $first, $after, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsControllerListTeachersForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_id** | **string**|  | |
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
