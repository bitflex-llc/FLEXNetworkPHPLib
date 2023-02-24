# OpenAPI\Client\GatewayApi

All URIs are relative to http://api.bcflex.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1GatewayStatusGet()**](GatewayApi.md#apiV1GatewayStatusGet) | **GET** /api/v1/gateway/status | 
[**apiV1GatewayTransactionGet()**](GatewayApi.md#apiV1GatewayTransactionGet) | **GET** /api/v1/gateway/transaction | 
[**apiV1GatewayTransactionPost()**](GatewayApi.md#apiV1GatewayTransactionPost) | **POST** /api/v1/gateway/transaction | 


## `apiV1GatewayStatusGet()`

```php
apiV1GatewayStatusGet($transaction_id): \OpenAPI\Client\Model\ApiTransactionStatusResponse
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->apiV1GatewayStatusGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiV1GatewayStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiTransactionStatusResponse**](../Model/ApiTransactionStatusResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1GatewayTransactionGet()`

```php
apiV1GatewayTransactionGet($transaction_id): \OpenAPI\Client\Model\ApiPaymentPage
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->apiV1GatewayTransactionGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiV1GatewayTransactionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiPaymentPage**](../Model/ApiPaymentPage.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1GatewayTransactionPost()`

```php
apiV1GatewayTransactionPost($create_transaction_request): \OpenAPI\Client\Model\CreateTransactionResult
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_transaction_request = new \OpenAPI\Client\Model\CreateTransactionRequest(); // \OpenAPI\Client\Model\CreateTransactionRequest

try {
    $result = $apiInstance->apiV1GatewayTransactionPost($create_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiV1GatewayTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_transaction_request** | [**\OpenAPI\Client\Model\CreateTransactionRequest**](../Model/CreateTransactionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateTransactionResult**](../Model/CreateTransactionResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
