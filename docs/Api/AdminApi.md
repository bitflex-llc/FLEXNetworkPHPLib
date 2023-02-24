# OpenAPI\Client\AdminApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiAdminAddcointokenPost()**](AdminApi.md#apiAdminAddcointokenPost) | **POST** /api/Admin/addcointoken | 
[**apiAdminGetuserdataPost()**](AdminApi.md#apiAdminGetuserdataPost) | **POST** /api/Admin/getuserdata | 
[**apiAdminGetusertradedataPost()**](AdminApi.md#apiAdminGetusertradedataPost) | **POST** /api/Admin/getusertradedata | 
[**apiAdminSearchuserGet()**](AdminApi.md#apiAdminSearchuserGet) | **GET** /api/Admin/searchuser | 
[**apiAdminUsercommandPost()**](AdminApi.md#apiAdminUsercommandPost) | **POST** /api/Admin/usercommand | 
[**apiVversionAdminAddcointokenPost()**](AdminApi.md#apiVversionAdminAddcointokenPost) | **POST** /api/v{version}/Admin/addcointoken | 
[**apiVversionAdminGetuserdataPost()**](AdminApi.md#apiVversionAdminGetuserdataPost) | **POST** /api/v{version}/Admin/getuserdata | 
[**apiVversionAdminGetusertradedataPost()**](AdminApi.md#apiVversionAdminGetusertradedataPost) | **POST** /api/v{version}/Admin/getusertradedata | 
[**apiVversionAdminSearchuserGet()**](AdminApi.md#apiVversionAdminSearchuserGet) | **GET** /api/v{version}/Admin/searchuser | 
[**apiVversionAdminUsercommandPost()**](AdminApi.md#apiVversionAdminUsercommandPost) | **POST** /api/v{version}/Admin/usercommand | 


## `apiAdminAddcointokenPost()`

```php
apiAdminAddcointokenPost($coin_token_add_request): \OpenAPI\Client\Model\CryptoCurrency
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coin_token_add_request = new \OpenAPI\Client\Model\CoinTokenAddRequest(); // \OpenAPI\Client\Model\CoinTokenAddRequest

try {
    $result = $apiInstance->apiAdminAddcointokenPost($coin_token_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiAdminAddcointokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin_token_add_request** | [**\OpenAPI\Client\Model\CoinTokenAddRequest**](../Model/CoinTokenAddRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CryptoCurrency**](../Model/CryptoCurrency.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAdminGetuserdataPost()`

```php
apiAdminGetuserdataPost($email): \OpenAPI\Client\Model\ApplicationUser
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string

try {
    $result = $apiInstance->apiAdminGetuserdataPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiAdminGetuserdataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationUser**](../Model/ApplicationUser.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAdminGetusertradedataPost()`

```php
apiAdminGetusertradedataPost($email): \OpenAPI\Client\Model\TradeData
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string

try {
    $result = $apiInstance->apiAdminGetusertradedataPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiAdminGetusertradedataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TradeData**](../Model/TradeData.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAdminSearchuserGet()`

```php
apiAdminSearchuserGet($search_string): string[]
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_string = 'search_string_example'; // string

try {
    $result = $apiInstance->apiAdminSearchuserGet($search_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiAdminSearchuserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_string** | **string**|  | [optional]

### Return type

**string[]**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAdminUsercommandPost()`

```php
apiAdminUsercommandPost($email, $command): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string
$command = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\UserAdminCommand(); // \OpenAPI\Client\Model\UserAdminCommand

try {
    $result = $apiInstance->apiAdminUsercommandPost($email, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiAdminUsercommandPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | [optional]
 **command** | [**\OpenAPI\Client\Model\UserAdminCommand**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionAdminAddcointokenPost()`

```php
apiVversionAdminAddcointokenPost($version, $coin_token_add_request): \OpenAPI\Client\Model\CryptoCurrency
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$coin_token_add_request = new \OpenAPI\Client\Model\CoinTokenAddRequest(); // \OpenAPI\Client\Model\CoinTokenAddRequest

try {
    $result = $apiInstance->apiVversionAdminAddcointokenPost($version, $coin_token_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiVversionAdminAddcointokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **coin_token_add_request** | [**\OpenAPI\Client\Model\CoinTokenAddRequest**](../Model/CoinTokenAddRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CryptoCurrency**](../Model/CryptoCurrency.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionAdminGetuserdataPost()`

```php
apiVversionAdminGetuserdataPost($version, $email): \OpenAPI\Client\Model\ApplicationUser
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$email = 'email_example'; // string

try {
    $result = $apiInstance->apiVversionAdminGetuserdataPost($version, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiVversionAdminGetuserdataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **email** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationUser**](../Model/ApplicationUser.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionAdminGetusertradedataPost()`

```php
apiVversionAdminGetusertradedataPost($version, $email): \OpenAPI\Client\Model\TradeData
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$email = 'email_example'; // string

try {
    $result = $apiInstance->apiVversionAdminGetusertradedataPost($version, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiVversionAdminGetusertradedataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **email** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TradeData**](../Model/TradeData.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionAdminSearchuserGet()`

```php
apiVversionAdminSearchuserGet($version, $search_string): string[]
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$search_string = 'search_string_example'; // string

try {
    $result = $apiInstance->apiVversionAdminSearchuserGet($version, $search_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiVversionAdminSearchuserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **search_string** | **string**|  | [optional]

### Return type

**string[]**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionAdminUsercommandPost()`

```php
apiVversionAdminUsercommandPost($version, $email, $command): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$email = 'email_example'; // string
$command = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\UserAdminCommand(); // \OpenAPI\Client\Model\UserAdminCommand

try {
    $result = $apiInstance->apiVversionAdminUsercommandPost($version, $email, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiVversionAdminUsercommandPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **email** | **string**|  | [optional]
 **command** | [**\OpenAPI\Client\Model\UserAdminCommand**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
