# OpenAPIClient-php

BCFLEX Public API Documentation


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/bitflex-llc/FLEXNetworkPHPLib.git"
    }
  ],
  "require": {
    "bitflex-llc/FLEXNetworkPHPLib": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://api.bcflex.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GatewayApi* | [**apiV1GatewayStatusGet**](docs/Api/GatewayApi.md#apiv1gatewaystatusget) | **GET** /api/v1/gateway/status | 
*GatewayApi* | [**apiV1GatewayTransactionGet**](docs/Api/GatewayApi.md#apiv1gatewaytransactionget) | **GET** /api/v1/gateway/transaction | 
*GatewayApi* | [**apiV1GatewayTransactionPost**](docs/Api/GatewayApi.md#apiv1gatewaytransactionpost) | **POST** /api/v1/gateway/transaction | 
*MarketsApi* | [**apiV1MarketsAssetsGet**](docs/Api/MarketsApi.md#apiv1marketsassetsget) | **GET** /api/v1/markets/assets | 
*MarketsApi* | [**apiV1MarketsCurrenciesGet**](docs/Api/MarketsApi.md#apiv1marketscurrenciesget) | **GET** /api/v1/markets/currencies | 
*MarketsApi* | [**apiV1MarketsCurrencyinfoGet**](docs/Api/MarketsApi.md#apiv1marketscurrencyinfoget) | **GET** /api/v1/markets/currencyinfo | 
*MarketsApi* | [**apiV1MarketsGet**](docs/Api/MarketsApi.md#apiv1marketsget) | **GET** /api/v1/markets | 
*MarketsApi* | [**apiV1MarketsHistoryGet**](docs/Api/MarketsApi.md#apiv1marketshistoryget) | **GET** /api/v1/markets/history | 
*MarketsApi* | [**apiV1MarketsOrderbookGet**](docs/Api/MarketsApi.md#apiv1marketsorderbookget) | **GET** /api/v1/markets/orderbook | 
*MarketsApi* | [**apiV1MarketsOrdersPairGet**](docs/Api/MarketsApi.md#apiv1marketsorderspairget) | **GET** /api/v1/markets/orders/{pair} | 
*MarketsApi* | [**apiV1MarketsSummaryGet**](docs/Api/MarketsApi.md#apiv1marketssummaryget) | **GET** /api/v1/markets/summary | 
*MarketsApi* | [**apiV1MarketsTestGet**](docs/Api/MarketsApi.md#apiv1marketstestget) | **GET** /api/v1/markets/test | 
*MarketsApi* | [**apiV1MarketsTickerGet**](docs/Api/MarketsApi.md#apiv1marketstickerget) | **GET** /api/v1/markets/ticker | 
*MarketsApi* | [**apiV1MarketsTickersGet**](docs/Api/MarketsApi.md#apiv1marketstickersget) | **GET** /api/v1/markets/tickers | 
*MarketsApi* | [**apiV1MarketsTradesPairGet**](docs/Api/MarketsApi.md#apiv1marketstradespairget) | **GET** /api/v1/markets/trades/{pair} | 
*OrdersApi* | [**apiV1OrdersCancelPost**](docs/Api/OrdersApi.md#apiv1orderscancelpost) | **POST** /api/v1/orders/cancel | 
*OrdersApi* | [**apiV1OrdersCancelallPost**](docs/Api/OrdersApi.md#apiv1orderscancelallpost) | **POST** /api/v1/orders/cancelall | 
*OrdersApi* | [**apiV1OrdersPost**](docs/Api/OrdersApi.md#apiv1orderspost) | **POST** /api/v1/orders | 
*UserApi* | [**apiV1UserBalancesGet**](docs/Api/UserApi.md#apiv1userbalancesget) | **GET** /api/v1/user/balances | 
*UserApi* | [**apiV1UserBalanceslistGet**](docs/Api/UserApi.md#apiv1userbalanceslistget) | **GET** /api/v1/user/balanceslist | 
*UserApi* | [**apiV1UserDepositsGet**](docs/Api/UserApi.md#apiv1userdepositsget) | **GET** /api/v1/user/deposits | 
*UserApi* | [**apiV1UserFeesGet**](docs/Api/UserApi.md#apiv1userfeesget) | **GET** /api/v1/user/fees | 
*UserApi* | [**apiV1UserOrdersGet**](docs/Api/UserApi.md#apiv1userordersget) | **GET** /api/v1/user/orders | 
*UserApi* | [**apiV1UserTradehistoryGet**](docs/Api/UserApi.md#apiv1usertradehistoryget) | **GET** /api/v1/user/tradehistory | 
*UserApi* | [**apiV1UserWithdrawalsGet**](docs/Api/UserApi.md#apiv1userwithdrawalsget) | **GET** /api/v1/user/withdrawals | 

## Models

- [ApiGetDepositsWitdrawals](docs/Model/ApiGetDepositsWitdrawals.md)
- [ApiGetOrders](docs/Model/ApiGetOrders.md)
- [ApiMarket](docs/Model/ApiMarket.md)
- [ApiPair](docs/Model/ApiPair.md)
- [ApiPaymentPage](docs/Model/ApiPaymentPage.md)
- [ApiTickers](docs/Model/ApiTickers.md)
- [ApiTransactionStatusResponse](docs/Model/ApiTransactionStatusResponse.md)
- [AssetsResponseModel](docs/Model/AssetsResponseModel.md)
- [Balance](docs/Model/Balance.md)
- [BalanceAction](docs/Model/BalanceAction.md)
- [BalanceActionModel](docs/Model/BalanceActionModel.md)
- [BalanceErrorCode](docs/Model/BalanceErrorCode.md)
- [Code](docs/Model/Code.md)
- [CreateTransactionRequest](docs/Model/CreateTransactionRequest.md)
- [CreateTransactionResult](docs/Model/CreateTransactionResult.md)
- [CryptoCurrency](docs/Model/CryptoCurrency.md)
- [FeeStructure](docs/Model/FeeStructure.md)
- [GetApiMarketsCurrenciesResponse](docs/Model/GetApiMarketsCurrenciesResponse.md)
- [GetBalanceHoldAndLimits](docs/Model/GetBalanceHoldAndLimits.md)
- [GetBalanceRequestModel](docs/Model/GetBalanceRequestModel.md)
- [GetBalancesListResponse](docs/Model/GetBalancesListResponse.md)
- [GetMarketsResponse](docs/Model/GetMarketsResponse.md)
- [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
- [GetTickersResponse](docs/Model/GetTickersResponse.md)
- [GetTradeHistoryResponse](docs/Model/GetTradeHistoryResponse.md)
- [MerchantTransaction](docs/Model/MerchantTransaction.md)
- [Order](docs/Model/Order.md)
- [OrderCancelResult](docs/Model/OrderCancelResult.md)
- [OrderCreateResult](docs/Model/OrderCreateResult.md)
- [OrderState](docs/Model/OrderState.md)
- [OrderTypes](docs/Model/OrderTypes.md)
- [OrderViewModel](docs/Model/OrderViewModel.md)
- [OrderbookResponseModel](docs/Model/OrderbookResponseModel.md)
- [OrdersGetViewModel](docs/Model/OrdersGetViewModel.md)
- [PostOrdersRequest](docs/Model/PostOrdersRequest.md)
- [ReturnFeeStructure](docs/Model/ReturnFeeStructure.md)
- [StatusCodeEnum](docs/Model/StatusCodeEnum.md)
- [SummaryResponseModel](docs/Model/SummaryResponseModel.md)
- [TickerResponseModel](docs/Model/TickerResponseModel.md)
- [TradeType](docs/Model/TradeType.md)
- [TradesGetViewModel](docs/Model/TradesGetViewModel.md)
- [TradesResponseModel](docs/Model/TradesResponseModel.md)
- [TransactionState](docs/Model/TransactionState.md)
- [Type](docs/Model/Type.md)
- [UserFeeLevel](docs/Model/UserFeeLevel.md)

## Authorization

### Bearer

- **Type**: Bearer authentication (JWT)


### X-BF-API-KEY

- **Type**: API key
- **API key parameter name**: X-BF-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
