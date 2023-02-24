# OpenAPI\Client\HealthApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiHealthTickGet()**](HealthApi.md#apiHealthTickGet) | **GET** /api/Health/tick | 
[**apiHealthTockGet()**](HealthApi.md#apiHealthTockGet) | **GET** /api/Health/tock | 
[**apiVversionHealthTickGet()**](HealthApi.md#apiVversionHealthTickGet) | **GET** /api/v{version}/Health/tick | 
[**apiVversionHealthTockGet()**](HealthApi.md#apiVversionHealthTockGet) | **GET** /api/v{version}/Health/tock | 


## `apiHealthTickGet()`

```php
apiHealthTickGet(): \OpenAPI\Client\Model\GetTickeAsyncResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiHealthTickGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->apiHealthTickGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetTickeAsyncResponse**](../Model/GetTickeAsyncResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHealthTockGet()`

```php
apiHealthTockGet($location, $elapsed, $time_stamp)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ServerLocation(); // \OpenAPI\Client\Model\ServerLocation
$elapsed = 56; // int
$time_stamp = 56; // int

try {
    $apiInstance->apiHealthTockGet($location, $elapsed, $time_stamp);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->apiHealthTockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location** | [**\OpenAPI\Client\Model\ServerLocation**](../Model/.md)|  | [optional]
 **elapsed** | **int**|  | [optional]
 **time_stamp** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionHealthTickGet()`

```php
apiVversionHealthTickGet($version): \OpenAPI\Client\Model\GetTickeAsyncResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionHealthTickGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->apiVversionHealthTickGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetTickeAsyncResponse**](../Model/GetTickeAsyncResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionHealthTockGet()`

```php
apiVversionHealthTockGet($version, $location, $elapsed, $time_stamp)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$location = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ServerLocation(); // \OpenAPI\Client\Model\ServerLocation
$elapsed = 56; // int
$time_stamp = 56; // int

try {
    $apiInstance->apiVversionHealthTockGet($version, $location, $elapsed, $time_stamp);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->apiVversionHealthTockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **location** | [**\OpenAPI\Client\Model\ServerLocation**](../Model/.md)|  | [optional]
 **elapsed** | **int**|  | [optional]
 **time_stamp** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
