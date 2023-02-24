# OpenAPI\Client\BalanceApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBalanceCurrencyGet()**](BalanceApi.md#apiBalanceCurrencyGet) | **GET** /api/Balance/{currency} | 
[**apiBalanceDepositCurrencyAddressGet()**](BalanceApi.md#apiBalanceDepositCurrencyAddressGet) | **GET** /api/Balance/deposit/{currency}/address | 
[**apiBalanceDepositCurrencyAddressPost()**](BalanceApi.md#apiBalanceDepositCurrencyAddressPost) | **POST** /api/Balance/deposit/{currency}/address | 
[**apiBalanceGet()**](BalanceApi.md#apiBalanceGet) | **GET** /api/Balance | 
[**apiBalancePrewithdrawPost()**](BalanceApi.md#apiBalancePrewithdrawPost) | **POST** /api/Balance/prewithdraw | 
[**apiBalanceWithdrawCurrencyPageGet()**](BalanceApi.md#apiBalanceWithdrawCurrencyPageGet) | **GET** /api/Balance/withdraw/{currency}/page | 
[**apiBalanceWithdrawPost()**](BalanceApi.md#apiBalanceWithdrawPost) | **POST** /api/Balance/withdraw | 
[**apiBalanceWithdrawguardPost()**](BalanceApi.md#apiBalanceWithdrawguardPost) | **POST** /api/Balance/withdrawguard | 
[**apiBalanceWithdrawstatusPut()**](BalanceApi.md#apiBalanceWithdrawstatusPut) | **PUT** /api/Balance/withdrawstatus | 
[**apiVversionBalanceCurrencyGet()**](BalanceApi.md#apiVversionBalanceCurrencyGet) | **GET** /api/v{version}/Balance/{currency} | 
[**apiVversionBalanceDepositCurrencyAddressGet()**](BalanceApi.md#apiVversionBalanceDepositCurrencyAddressGet) | **GET** /api/v{version}/Balance/deposit/{currency}/address | 
[**apiVversionBalanceDepositCurrencyAddressPost()**](BalanceApi.md#apiVversionBalanceDepositCurrencyAddressPost) | **POST** /api/v{version}/Balance/deposit/{currency}/address | 
[**apiVversionBalanceGet()**](BalanceApi.md#apiVversionBalanceGet) | **GET** /api/v{version}/Balance | 
[**apiVversionBalancePrewithdrawPost()**](BalanceApi.md#apiVversionBalancePrewithdrawPost) | **POST** /api/v{version}/Balance/prewithdraw | 
[**apiVversionBalanceWithdrawCurrencyPageGet()**](BalanceApi.md#apiVversionBalanceWithdrawCurrencyPageGet) | **GET** /api/v{version}/Balance/withdraw/{currency}/page | 
[**apiVversionBalanceWithdrawPost()**](BalanceApi.md#apiVversionBalanceWithdrawPost) | **POST** /api/v{version}/Balance/withdraw | 
[**apiVversionBalanceWithdrawguardPost()**](BalanceApi.md#apiVversionBalanceWithdrawguardPost) | **POST** /api/v{version}/Balance/withdrawguard | 
[**apiVversionBalanceWithdrawstatusPut()**](BalanceApi.md#apiVversionBalanceWithdrawstatusPut) | **PUT** /api/v{version}/Balance/withdrawstatus | 


## `apiBalanceCurrencyGet()`

```php
apiBalanceCurrencyGet($currency): \OpenAPI\Client\Model\GetBalanceRequestModel
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string

try {
    $result = $apiInstance->apiBalanceCurrencyGet($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceCurrencyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetBalanceRequestModel**](../Model/GetBalanceRequestModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceDepositCurrencyAddressGet()`

```php
apiBalanceDepositCurrencyAddressGet($currency): \OpenAPI\Client\Model\GetAddressResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string

try {
    $result = $apiInstance->apiBalanceDepositCurrencyAddressGet($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceDepositCurrencyAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetAddressResponse**](../Model/GetAddressResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceDepositCurrencyAddressPost()`

```php
apiBalanceDepositCurrencyAddressPost($currency): \OpenAPI\Client\Model\GenerateAddressResult
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string

try {
    $result = $apiInstance->apiBalanceDepositCurrencyAddressPost($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceDepositCurrencyAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GenerateAddressResult**](../Model/GenerateAddressResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceGet()`

```php
apiBalanceGet(): \OpenAPI\Client\Model\GetBalancesListResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiBalanceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetBalancesListResponse**](../Model/GetBalancesListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalancePrewithdrawPost()`

```php
apiBalancePrewithdrawPost($post_withdraw_request): \OpenAPI\Client\Model\PostWithdrawGuardResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_withdraw_request = new \OpenAPI\Client\Model\PostWithdrawRequest(); // \OpenAPI\Client\Model\PostWithdrawRequest

try {
    $result = $apiInstance->apiBalancePrewithdrawPost($post_withdraw_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalancePrewithdrawPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_withdraw_request** | [**\OpenAPI\Client\Model\PostWithdrawRequest**](../Model/PostWithdrawRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostWithdrawGuardResponse**](../Model/PostWithdrawGuardResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceWithdrawCurrencyPageGet()`

```php
apiBalanceWithdrawCurrencyPageGet($currency): \OpenAPI\Client\Model\GetWithdrawResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string

try {
    $result = $apiInstance->apiBalanceWithdrawCurrencyPageGet($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceWithdrawCurrencyPageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetWithdrawResponse**](../Model/GetWithdrawResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceWithdrawPost()`

```php
apiBalanceWithdrawPost($post_withdraw_request): \OpenAPI\Client\Model\PostWithdrawRequestResult
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_withdraw_request = new \OpenAPI\Client\Model\PostWithdrawRequest(); // \OpenAPI\Client\Model\PostWithdrawRequest

try {
    $result = $apiInstance->apiBalanceWithdrawPost($post_withdraw_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceWithdrawPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_withdraw_request** | [**\OpenAPI\Client\Model\PostWithdrawRequest**](../Model/PostWithdrawRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostWithdrawRequestResult**](../Model/PostWithdrawRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceWithdrawguardPost()`

```php
apiBalanceWithdrawguardPost($guard_request_id): \OpenAPI\Client\Model\PostWithdrawGuardResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guard_request_id = 'guard_request_id_example'; // string

try {
    $result = $apiInstance->apiBalanceWithdrawguardPost($guard_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceWithdrawguardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guard_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostWithdrawGuardResponse**](../Model/PostWithdrawGuardResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBalanceWithdrawstatusPut()`

```php
apiBalanceWithdrawstatusPut($result)
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$result = True; // bool

try {
    $apiInstance->apiBalanceWithdrawstatusPut($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiBalanceWithdrawstatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **result** | **bool**|  | [optional]

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

## `apiVversionBalanceCurrencyGet()`

```php
apiVversionBalanceCurrencyGet($currency, $version): \OpenAPI\Client\Model\GetBalanceRequestModel
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionBalanceCurrencyGet($currency, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceCurrencyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetBalanceRequestModel**](../Model/GetBalanceRequestModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceDepositCurrencyAddressGet()`

```php
apiVversionBalanceDepositCurrencyAddressGet($currency, $version): \OpenAPI\Client\Model\GetAddressResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionBalanceDepositCurrencyAddressGet($currency, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceDepositCurrencyAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetAddressResponse**](../Model/GetAddressResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceDepositCurrencyAddressPost()`

```php
apiVversionBalanceDepositCurrencyAddressPost($currency, $version): \OpenAPI\Client\Model\GenerateAddressResult
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionBalanceDepositCurrencyAddressPost($currency, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceDepositCurrencyAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GenerateAddressResult**](../Model/GenerateAddressResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceGet()`

```php
apiVversionBalanceGet($version): \OpenAPI\Client\Model\GetBalancesListResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionBalanceGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetBalancesListResponse**](../Model/GetBalancesListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalancePrewithdrawPost()`

```php
apiVversionBalancePrewithdrawPost($version, $post_withdraw_request): \OpenAPI\Client\Model\PostWithdrawGuardResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_withdraw_request = new \OpenAPI\Client\Model\PostWithdrawRequest(); // \OpenAPI\Client\Model\PostWithdrawRequest

try {
    $result = $apiInstance->apiVversionBalancePrewithdrawPost($version, $post_withdraw_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalancePrewithdrawPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_withdraw_request** | [**\OpenAPI\Client\Model\PostWithdrawRequest**](../Model/PostWithdrawRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostWithdrawGuardResponse**](../Model/PostWithdrawGuardResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceWithdrawCurrencyPageGet()`

```php
apiVversionBalanceWithdrawCurrencyPageGet($currency, $version): \OpenAPI\Client\Model\GetWithdrawResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionBalanceWithdrawCurrencyPageGet($currency, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceWithdrawCurrencyPageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetWithdrawResponse**](../Model/GetWithdrawResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceWithdrawPost()`

```php
apiVversionBalanceWithdrawPost($version, $post_withdraw_request): \OpenAPI\Client\Model\PostWithdrawRequestResult
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_withdraw_request = new \OpenAPI\Client\Model\PostWithdrawRequest(); // \OpenAPI\Client\Model\PostWithdrawRequest

try {
    $result = $apiInstance->apiVversionBalanceWithdrawPost($version, $post_withdraw_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceWithdrawPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_withdraw_request** | [**\OpenAPI\Client\Model\PostWithdrawRequest**](../Model/PostWithdrawRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostWithdrawRequestResult**](../Model/PostWithdrawRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceWithdrawguardPost()`

```php
apiVversionBalanceWithdrawguardPost($version, $guard_request_id): \OpenAPI\Client\Model\PostWithdrawGuardResponse
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$guard_request_id = 'guard_request_id_example'; // string

try {
    $result = $apiInstance->apiVversionBalanceWithdrawguardPost($version, $guard_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceWithdrawguardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **guard_request_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostWithdrawGuardResponse**](../Model/PostWithdrawGuardResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionBalanceWithdrawstatusPut()`

```php
apiVversionBalanceWithdrawstatusPut($version, $result)
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


$apiInstance = new OpenAPI\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$result = True; // bool

try {
    $apiInstance->apiVversionBalanceWithdrawstatusPut($version, $result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->apiVversionBalanceWithdrawstatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **result** | **bool**|  | [optional]

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
