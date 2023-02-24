# OpenAPI\Client\ApplicationApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiApplicationDisableGoogle2stepPost()**](ApplicationApi.md#apiApplicationDisableGoogle2stepPost) | **POST** /api/Application/DisableGoogle2step | 
[**apiApplicationEnableGoogle2stepPost()**](ApplicationApi.md#apiApplicationEnableGoogle2stepPost) | **POST** /api/Application/EnableGoogle2step | 
[**apiApplicationPackagePost()**](ApplicationApi.md#apiApplicationPackagePost) | **POST** /api/Application/package | 
[**apiApplicationProcessFaceImagePost()**](ApplicationApi.md#apiApplicationProcessFaceImagePost) | **POST** /api/Application/ProcessFaceImage | 
[**apiApplicationProcessPassportImagePost()**](ApplicationApi.md#apiApplicationProcessPassportImagePost) | **POST** /api/Application/ProcessPassportImage | 
[**apiApplicationPublicKeyPut()**](ApplicationApi.md#apiApplicationPublicKeyPut) | **PUT** /api/Application/publicKey | 
[**apiApplicationRatesGet()**](ApplicationApi.md#apiApplicationRatesGet) | **GET** /api/Application/rates | 
[**apiApplicationRestorePinPost()**](ApplicationApi.md#apiApplicationRestorePinPost) | **POST** /api/Application/RestorePin | 
[**apiApplicationSetpinPut()**](ApplicationApi.md#apiApplicationSetpinPut) | **PUT** /api/Application/setpin | 
[**apiApplicationSetpushtokenPost()**](ApplicationApi.md#apiApplicationSetpushtokenPost) | **POST** /api/Application/setpushtoken | 
[**apiApplicationTestGet()**](ApplicationApi.md#apiApplicationTestGet) | **GET** /api/Application/test | 
[**apiApplicationValidatePinPost()**](ApplicationApi.md#apiApplicationValidatePinPost) | **POST** /api/Application/validatePin | 
[**apiApplicationVerifyfacesPost()**](ApplicationApi.md#apiApplicationVerifyfacesPost) | **POST** /api/Application/verifyfaces | 
[**apiVversionApplicationDisableGoogle2stepPost()**](ApplicationApi.md#apiVversionApplicationDisableGoogle2stepPost) | **POST** /api/v{version}/Application/DisableGoogle2step | 
[**apiVversionApplicationEnableGoogle2stepPost()**](ApplicationApi.md#apiVversionApplicationEnableGoogle2stepPost) | **POST** /api/v{version}/Application/EnableGoogle2step | 
[**apiVversionApplicationPackagePost()**](ApplicationApi.md#apiVversionApplicationPackagePost) | **POST** /api/v{version}/Application/package | 
[**apiVversionApplicationProcessFaceImagePost()**](ApplicationApi.md#apiVversionApplicationProcessFaceImagePost) | **POST** /api/v{version}/Application/ProcessFaceImage | 
[**apiVversionApplicationProcessPassportImagePost()**](ApplicationApi.md#apiVversionApplicationProcessPassportImagePost) | **POST** /api/v{version}/Application/ProcessPassportImage | 
[**apiVversionApplicationPublicKeyPut()**](ApplicationApi.md#apiVversionApplicationPublicKeyPut) | **PUT** /api/v{version}/Application/publicKey | 
[**apiVversionApplicationRatesGet()**](ApplicationApi.md#apiVversionApplicationRatesGet) | **GET** /api/v{version}/Application/rates | 
[**apiVversionApplicationRestorePinPost()**](ApplicationApi.md#apiVversionApplicationRestorePinPost) | **POST** /api/v{version}/Application/RestorePin | 
[**apiVversionApplicationSetpinPut()**](ApplicationApi.md#apiVversionApplicationSetpinPut) | **PUT** /api/v{version}/Application/setpin | 
[**apiVversionApplicationSetpushtokenPost()**](ApplicationApi.md#apiVversionApplicationSetpushtokenPost) | **POST** /api/v{version}/Application/setpushtoken | 
[**apiVversionApplicationTestGet()**](ApplicationApi.md#apiVversionApplicationTestGet) | **GET** /api/v{version}/Application/test | 
[**apiVversionApplicationValidatePinPost()**](ApplicationApi.md#apiVversionApplicationValidatePinPost) | **POST** /api/v{version}/Application/validatePin | 
[**apiVversionApplicationVerifyfacesPost()**](ApplicationApi.md#apiVversionApplicationVerifyfacesPost) | **POST** /api/v{version}/Application/verifyfaces | 


## `apiApplicationDisableGoogle2stepPost()`

```php
apiApplicationDisableGoogle2stepPost($enable_disable2_fa)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enable_disable2_fa = new \OpenAPI\Client\Model\EnableDisable2Fa(); // \OpenAPI\Client\Model\EnableDisable2Fa

try {
    $apiInstance->apiApplicationDisableGoogle2stepPost($enable_disable2_fa);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationDisableGoogle2stepPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enable_disable2_fa** | [**\OpenAPI\Client\Model\EnableDisable2Fa**](../Model/EnableDisable2Fa.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationEnableGoogle2stepPost()`

```php
apiApplicationEnableGoogle2stepPost($enable_disable2_fa)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enable_disable2_fa = new \OpenAPI\Client\Model\EnableDisable2Fa(); // \OpenAPI\Client\Model\EnableDisable2Fa

try {
    $apiInstance->apiApplicationEnableGoogle2stepPost($enable_disable2_fa);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationEnableGoogle2stepPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enable_disable2_fa** | [**\OpenAPI\Client\Model\EnableDisable2Fa**](../Model/EnableDisable2Fa.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationPackagePost()`

```php
apiApplicationPackagePost()
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiApplicationPackagePost();
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationPackagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiApplicationProcessFaceImagePost()`

```php
apiApplicationProcessFaceImagePost($process_face_image_request): string
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_face_image_request = new \OpenAPI\Client\Model\ProcessFaceImageRequest(); // \OpenAPI\Client\Model\ProcessFaceImageRequest

try {
    $result = $apiInstance->apiApplicationProcessFaceImagePost($process_face_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationProcessFaceImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_face_image_request** | [**\OpenAPI\Client\Model\ProcessFaceImageRequest**](../Model/ProcessFaceImageRequest.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationProcessPassportImagePost()`

```php
apiApplicationProcessPassportImagePost($process_face_image_request): string
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_face_image_request = new \OpenAPI\Client\Model\ProcessFaceImageRequest(); // \OpenAPI\Client\Model\ProcessFaceImageRequest

try {
    $result = $apiInstance->apiApplicationProcessPassportImagePost($process_face_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationProcessPassportImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_face_image_request** | [**\OpenAPI\Client\Model\ProcessFaceImageRequest**](../Model/ProcessFaceImageRequest.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationPublicKeyPut()`

```php
apiApplicationPublicKeyPut($update_public_key_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_public_key_request = new \OpenAPI\Client\Model\UpdatePublicKeyRequest(); // \OpenAPI\Client\Model\UpdatePublicKeyRequest

try {
    $result = $apiInstance->apiApplicationPublicKeyPut($update_public_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationPublicKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_public_key_request** | [**\OpenAPI\Client\Model\UpdatePublicKeyRequest**](../Model/UpdatePublicKeyRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationRatesGet()`

```php
apiApplicationRatesGet(): \OpenAPI\Client\Model\Rate[]
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiApplicationRatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Rate[]**](../Model/Rate.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationRestorePinPost()`

```php
apiApplicationRestorePinPost($restore_pin_post_request)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$restore_pin_post_request = new \OpenAPI\Client\Model\RestorePinPostRequest(); // \OpenAPI\Client\Model\RestorePinPostRequest

try {
    $apiInstance->apiApplicationRestorePinPost($restore_pin_post_request);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationRestorePinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restore_pin_post_request** | [**\OpenAPI\Client\Model\RestorePinPostRequest**](../Model/RestorePinPostRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationSetpinPut()`

```php
apiApplicationSetpinPut($pin_code_request_model): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pin_code_request_model = new \OpenAPI\Client\Model\PinCodeRequestModel(); // \OpenAPI\Client\Model\PinCodeRequestModel

try {
    $result = $apiInstance->apiApplicationSetpinPut($pin_code_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationSetpinPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pin_code_request_model** | [**\OpenAPI\Client\Model\PinCodeRequestModel**](../Model/PinCodeRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationSetpushtokenPost()`

```php
apiApplicationSetpushtokenPost($set_push_token_request)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_push_token_request = new \OpenAPI\Client\Model\SetPushTokenRequest(); // \OpenAPI\Client\Model\SetPushTokenRequest

try {
    $apiInstance->apiApplicationSetpushtokenPost($set_push_token_request);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationSetpushtokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_push_token_request** | [**\OpenAPI\Client\Model\SetPushTokenRequest**](../Model/SetPushTokenRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationTestGet()`

```php
apiApplicationTestGet()
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiApplicationTestGet();
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationTestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiApplicationValidatePinPost()`

```php
apiApplicationValidatePinPost($validate_pin_post_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_pin_post_request = new \OpenAPI\Client\Model\ValidatePinPostRequest(); // \OpenAPI\Client\Model\ValidatePinPostRequest

try {
    $result = $apiInstance->apiApplicationValidatePinPost($validate_pin_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationValidatePinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validate_pin_post_request** | [**\OpenAPI\Client\Model\ValidatePinPostRequest**](../Model/ValidatePinPostRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApplicationVerifyfacesPost()`

```php
apiApplicationVerifyfacesPost($verify_face_data): \OpenAPI\Client\Model\VerifyResult
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verify_face_data = new \OpenAPI\Client\Model\VerifyFaceData(); // \OpenAPI\Client\Model\VerifyFaceData

try {
    $result = $apiInstance->apiApplicationVerifyfacesPost($verify_face_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiApplicationVerifyfacesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verify_face_data** | [**\OpenAPI\Client\Model\VerifyFaceData**](../Model/VerifyFaceData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VerifyResult**](../Model/VerifyResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationDisableGoogle2stepPost()`

```php
apiVversionApplicationDisableGoogle2stepPost($version, $enable_disable2_fa)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$enable_disable2_fa = new \OpenAPI\Client\Model\EnableDisable2Fa(); // \OpenAPI\Client\Model\EnableDisable2Fa

try {
    $apiInstance->apiVversionApplicationDisableGoogle2stepPost($version, $enable_disable2_fa);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationDisableGoogle2stepPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **enable_disable2_fa** | [**\OpenAPI\Client\Model\EnableDisable2Fa**](../Model/EnableDisable2Fa.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationEnableGoogle2stepPost()`

```php
apiVversionApplicationEnableGoogle2stepPost($version, $enable_disable2_fa)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$enable_disable2_fa = new \OpenAPI\Client\Model\EnableDisable2Fa(); // \OpenAPI\Client\Model\EnableDisable2Fa

try {
    $apiInstance->apiVversionApplicationEnableGoogle2stepPost($version, $enable_disable2_fa);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationEnableGoogle2stepPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **enable_disable2_fa** | [**\OpenAPI\Client\Model\EnableDisable2Fa**](../Model/EnableDisable2Fa.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationPackagePost()`

```php
apiVversionApplicationPackagePost($version)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $apiInstance->apiVversionApplicationPackagePost($version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationPackagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

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

## `apiVversionApplicationProcessFaceImagePost()`

```php
apiVversionApplicationProcessFaceImagePost($version, $process_face_image_request): string
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$process_face_image_request = new \OpenAPI\Client\Model\ProcessFaceImageRequest(); // \OpenAPI\Client\Model\ProcessFaceImageRequest

try {
    $result = $apiInstance->apiVversionApplicationProcessFaceImagePost($version, $process_face_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationProcessFaceImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **process_face_image_request** | [**\OpenAPI\Client\Model\ProcessFaceImageRequest**](../Model/ProcessFaceImageRequest.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationProcessPassportImagePost()`

```php
apiVversionApplicationProcessPassportImagePost($version, $process_face_image_request): string
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$process_face_image_request = new \OpenAPI\Client\Model\ProcessFaceImageRequest(); // \OpenAPI\Client\Model\ProcessFaceImageRequest

try {
    $result = $apiInstance->apiVversionApplicationProcessPassportImagePost($version, $process_face_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationProcessPassportImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **process_face_image_request** | [**\OpenAPI\Client\Model\ProcessFaceImageRequest**](../Model/ProcessFaceImageRequest.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationPublicKeyPut()`

```php
apiVversionApplicationPublicKeyPut($version, $update_public_key_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$update_public_key_request = new \OpenAPI\Client\Model\UpdatePublicKeyRequest(); // \OpenAPI\Client\Model\UpdatePublicKeyRequest

try {
    $result = $apiInstance->apiVversionApplicationPublicKeyPut($version, $update_public_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationPublicKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **update_public_key_request** | [**\OpenAPI\Client\Model\UpdatePublicKeyRequest**](../Model/UpdatePublicKeyRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationRatesGet()`

```php
apiVversionApplicationRatesGet($version): \OpenAPI\Client\Model\Rate[]
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionApplicationRatesGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Rate[]**](../Model/Rate.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationRestorePinPost()`

```php
apiVversionApplicationRestorePinPost($version, $restore_pin_post_request)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$restore_pin_post_request = new \OpenAPI\Client\Model\RestorePinPostRequest(); // \OpenAPI\Client\Model\RestorePinPostRequest

try {
    $apiInstance->apiVversionApplicationRestorePinPost($version, $restore_pin_post_request);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationRestorePinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restore_pin_post_request** | [**\OpenAPI\Client\Model\RestorePinPostRequest**](../Model/RestorePinPostRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationSetpinPut()`

```php
apiVversionApplicationSetpinPut($version, $pin_code_request_model): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$pin_code_request_model = new \OpenAPI\Client\Model\PinCodeRequestModel(); // \OpenAPI\Client\Model\PinCodeRequestModel

try {
    $result = $apiInstance->apiVversionApplicationSetpinPut($version, $pin_code_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationSetpinPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **pin_code_request_model** | [**\OpenAPI\Client\Model\PinCodeRequestModel**](../Model/PinCodeRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationSetpushtokenPost()`

```php
apiVversionApplicationSetpushtokenPost($version, $set_push_token_request)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$set_push_token_request = new \OpenAPI\Client\Model\SetPushTokenRequest(); // \OpenAPI\Client\Model\SetPushTokenRequest

try {
    $apiInstance->apiVversionApplicationSetpushtokenPost($version, $set_push_token_request);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationSetpushtokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **set_push_token_request** | [**\OpenAPI\Client\Model\SetPushTokenRequest**](../Model/SetPushTokenRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationTestGet()`

```php
apiVversionApplicationTestGet($version)
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $apiInstance->apiVversionApplicationTestGet($version);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationTestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

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

## `apiVversionApplicationValidatePinPost()`

```php
apiVversionApplicationValidatePinPost($version, $validate_pin_post_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$validate_pin_post_request = new \OpenAPI\Client\Model\ValidatePinPostRequest(); // \OpenAPI\Client\Model\ValidatePinPostRequest

try {
    $result = $apiInstance->apiVversionApplicationValidatePinPost($version, $validate_pin_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationValidatePinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **validate_pin_post_request** | [**\OpenAPI\Client\Model\ValidatePinPostRequest**](../Model/ValidatePinPostRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionApplicationVerifyfacesPost()`

```php
apiVversionApplicationVerifyfacesPost($version, $verify_face_data): \OpenAPI\Client\Model\VerifyResult
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


$apiInstance = new OpenAPI\Client\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$verify_face_data = new \OpenAPI\Client\Model\VerifyFaceData(); // \OpenAPI\Client\Model\VerifyFaceData

try {
    $result = $apiInstance->apiVversionApplicationVerifyfacesPost($version, $verify_face_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->apiVversionApplicationVerifyfacesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **verify_face_data** | [**\OpenAPI\Client\Model\VerifyFaceData**](../Model/VerifyFaceData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VerifyResult**](../Model/VerifyResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
