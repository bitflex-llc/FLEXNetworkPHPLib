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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
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

## API Endpoints

All URIs are relative to *http://127.0.0.1:5000*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**apiAdminAddcointokenPost**](docs/Api/AdminApi.md#apiadminaddcointokenpost) | **POST** /api/Admin/addcointoken | 
*AdminApi* | [**apiAdminGetuserdataPost**](docs/Api/AdminApi.md#apiadmingetuserdatapost) | **POST** /api/Admin/getuserdata | 
*AdminApi* | [**apiAdminGetusertradedataPost**](docs/Api/AdminApi.md#apiadmingetusertradedatapost) | **POST** /api/Admin/getusertradedata | 
*AdminApi* | [**apiAdminSearchuserGet**](docs/Api/AdminApi.md#apiadminsearchuserget) | **GET** /api/Admin/searchuser | 
*AdminApi* | [**apiAdminUsercommandPost**](docs/Api/AdminApi.md#apiadminusercommandpost) | **POST** /api/Admin/usercommand | 
*AdminApi* | [**apiVversionAdminAddcointokenPost**](docs/Api/AdminApi.md#apivversionadminaddcointokenpost) | **POST** /api/v{version}/Admin/addcointoken | 
*AdminApi* | [**apiVversionAdminGetuserdataPost**](docs/Api/AdminApi.md#apivversionadmingetuserdatapost) | **POST** /api/v{version}/Admin/getuserdata | 
*AdminApi* | [**apiVversionAdminGetusertradedataPost**](docs/Api/AdminApi.md#apivversionadmingetusertradedatapost) | **POST** /api/v{version}/Admin/getusertradedata | 
*AdminApi* | [**apiVversionAdminSearchuserGet**](docs/Api/AdminApi.md#apivversionadminsearchuserget) | **GET** /api/v{version}/Admin/searchuser | 
*AdminApi* | [**apiVversionAdminUsercommandPost**](docs/Api/AdminApi.md#apivversionadminusercommandpost) | **POST** /api/v{version}/Admin/usercommand | 
*ApplicationApi* | [**apiApplicationDisableGoogle2stepPost**](docs/Api/ApplicationApi.md#apiapplicationdisablegoogle2steppost) | **POST** /api/Application/DisableGoogle2step | 
*ApplicationApi* | [**apiApplicationEnableGoogle2stepPost**](docs/Api/ApplicationApi.md#apiapplicationenablegoogle2steppost) | **POST** /api/Application/EnableGoogle2step | 
*ApplicationApi* | [**apiApplicationPackagePost**](docs/Api/ApplicationApi.md#apiapplicationpackagepost) | **POST** /api/Application/package | 
*ApplicationApi* | [**apiApplicationProcessFaceImagePost**](docs/Api/ApplicationApi.md#apiapplicationprocessfaceimagepost) | **POST** /api/Application/ProcessFaceImage | 
*ApplicationApi* | [**apiApplicationProcessPassportImagePost**](docs/Api/ApplicationApi.md#apiapplicationprocesspassportimagepost) | **POST** /api/Application/ProcessPassportImage | 
*ApplicationApi* | [**apiApplicationPublicKeyPut**](docs/Api/ApplicationApi.md#apiapplicationpublickeyput) | **PUT** /api/Application/publicKey | 
*ApplicationApi* | [**apiApplicationRatesGet**](docs/Api/ApplicationApi.md#apiapplicationratesget) | **GET** /api/Application/rates | 
*ApplicationApi* | [**apiApplicationRestorePinPost**](docs/Api/ApplicationApi.md#apiapplicationrestorepinpost) | **POST** /api/Application/RestorePin | 
*ApplicationApi* | [**apiApplicationSetpinPut**](docs/Api/ApplicationApi.md#apiapplicationsetpinput) | **PUT** /api/Application/setpin | 
*ApplicationApi* | [**apiApplicationSetpushtokenPost**](docs/Api/ApplicationApi.md#apiapplicationsetpushtokenpost) | **POST** /api/Application/setpushtoken | 
*ApplicationApi* | [**apiApplicationTestGet**](docs/Api/ApplicationApi.md#apiapplicationtestget) | **GET** /api/Application/test | 
*ApplicationApi* | [**apiApplicationValidatePinPost**](docs/Api/ApplicationApi.md#apiapplicationvalidatepinpost) | **POST** /api/Application/validatePin | 
*ApplicationApi* | [**apiApplicationVerifyfacesPost**](docs/Api/ApplicationApi.md#apiapplicationverifyfacespost) | **POST** /api/Application/verifyfaces | 
*ApplicationApi* | [**apiVversionApplicationDisableGoogle2stepPost**](docs/Api/ApplicationApi.md#apivversionapplicationdisablegoogle2steppost) | **POST** /api/v{version}/Application/DisableGoogle2step | 
*ApplicationApi* | [**apiVversionApplicationEnableGoogle2stepPost**](docs/Api/ApplicationApi.md#apivversionapplicationenablegoogle2steppost) | **POST** /api/v{version}/Application/EnableGoogle2step | 
*ApplicationApi* | [**apiVversionApplicationPackagePost**](docs/Api/ApplicationApi.md#apivversionapplicationpackagepost) | **POST** /api/v{version}/Application/package | 
*ApplicationApi* | [**apiVversionApplicationProcessFaceImagePost**](docs/Api/ApplicationApi.md#apivversionapplicationprocessfaceimagepost) | **POST** /api/v{version}/Application/ProcessFaceImage | 
*ApplicationApi* | [**apiVversionApplicationProcessPassportImagePost**](docs/Api/ApplicationApi.md#apivversionapplicationprocesspassportimagepost) | **POST** /api/v{version}/Application/ProcessPassportImage | 
*ApplicationApi* | [**apiVversionApplicationPublicKeyPut**](docs/Api/ApplicationApi.md#apivversionapplicationpublickeyput) | **PUT** /api/v{version}/Application/publicKey | 
*ApplicationApi* | [**apiVversionApplicationRatesGet**](docs/Api/ApplicationApi.md#apivversionapplicationratesget) | **GET** /api/v{version}/Application/rates | 
*ApplicationApi* | [**apiVversionApplicationRestorePinPost**](docs/Api/ApplicationApi.md#apivversionapplicationrestorepinpost) | **POST** /api/v{version}/Application/RestorePin | 
*ApplicationApi* | [**apiVversionApplicationSetpinPut**](docs/Api/ApplicationApi.md#apivversionapplicationsetpinput) | **PUT** /api/v{version}/Application/setpin | 
*ApplicationApi* | [**apiVversionApplicationSetpushtokenPost**](docs/Api/ApplicationApi.md#apivversionapplicationsetpushtokenpost) | **POST** /api/v{version}/Application/setpushtoken | 
*ApplicationApi* | [**apiVversionApplicationTestGet**](docs/Api/ApplicationApi.md#apivversionapplicationtestget) | **GET** /api/v{version}/Application/test | 
*ApplicationApi* | [**apiVversionApplicationValidatePinPost**](docs/Api/ApplicationApi.md#apivversionapplicationvalidatepinpost) | **POST** /api/v{version}/Application/validatePin | 
*ApplicationApi* | [**apiVversionApplicationVerifyfacesPost**](docs/Api/ApplicationApi.md#apivversionapplicationverifyfacespost) | **POST** /api/v{version}/Application/verifyfaces | 
*BalanceApi* | [**apiBalanceCurrencyGet**](docs/Api/BalanceApi.md#apibalancecurrencyget) | **GET** /api/Balance/{currency} | 
*BalanceApi* | [**apiBalanceDepositCurrencyAddressGet**](docs/Api/BalanceApi.md#apibalancedepositcurrencyaddressget) | **GET** /api/Balance/deposit/{currency}/address | 
*BalanceApi* | [**apiBalanceDepositCurrencyAddressPost**](docs/Api/BalanceApi.md#apibalancedepositcurrencyaddresspost) | **POST** /api/Balance/deposit/{currency}/address | 
*BalanceApi* | [**apiBalanceGet**](docs/Api/BalanceApi.md#apibalanceget) | **GET** /api/Balance | 
*BalanceApi* | [**apiBalancePrewithdrawPost**](docs/Api/BalanceApi.md#apibalanceprewithdrawpost) | **POST** /api/Balance/prewithdraw | 
*BalanceApi* | [**apiBalanceWithdrawCurrencyPageGet**](docs/Api/BalanceApi.md#apibalancewithdrawcurrencypageget) | **GET** /api/Balance/withdraw/{currency}/page | 
*BalanceApi* | [**apiBalanceWithdrawPost**](docs/Api/BalanceApi.md#apibalancewithdrawpost) | **POST** /api/Balance/withdraw | 
*BalanceApi* | [**apiBalanceWithdrawguardPost**](docs/Api/BalanceApi.md#apibalancewithdrawguardpost) | **POST** /api/Balance/withdrawguard | 
*BalanceApi* | [**apiBalanceWithdrawstatusPut**](docs/Api/BalanceApi.md#apibalancewithdrawstatusput) | **PUT** /api/Balance/withdrawstatus | 
*BalanceApi* | [**apiVversionBalanceCurrencyGet**](docs/Api/BalanceApi.md#apivversionbalancecurrencyget) | **GET** /api/v{version}/Balance/{currency} | 
*BalanceApi* | [**apiVversionBalanceDepositCurrencyAddressGet**](docs/Api/BalanceApi.md#apivversionbalancedepositcurrencyaddressget) | **GET** /api/v{version}/Balance/deposit/{currency}/address | 
*BalanceApi* | [**apiVversionBalanceDepositCurrencyAddressPost**](docs/Api/BalanceApi.md#apivversionbalancedepositcurrencyaddresspost) | **POST** /api/v{version}/Balance/deposit/{currency}/address | 
*BalanceApi* | [**apiVversionBalanceGet**](docs/Api/BalanceApi.md#apivversionbalanceget) | **GET** /api/v{version}/Balance | 
*BalanceApi* | [**apiVversionBalancePrewithdrawPost**](docs/Api/BalanceApi.md#apivversionbalanceprewithdrawpost) | **POST** /api/v{version}/Balance/prewithdraw | 
*BalanceApi* | [**apiVversionBalanceWithdrawCurrencyPageGet**](docs/Api/BalanceApi.md#apivversionbalancewithdrawcurrencypageget) | **GET** /api/v{version}/Balance/withdraw/{currency}/page | 
*BalanceApi* | [**apiVversionBalanceWithdrawPost**](docs/Api/BalanceApi.md#apivversionbalancewithdrawpost) | **POST** /api/v{version}/Balance/withdraw | 
*BalanceApi* | [**apiVversionBalanceWithdrawguardPost**](docs/Api/BalanceApi.md#apivversionbalancewithdrawguardpost) | **POST** /api/v{version}/Balance/withdrawguard | 
*BalanceApi* | [**apiVversionBalanceWithdrawstatusPut**](docs/Api/BalanceApi.md#apivversionbalancewithdrawstatusput) | **PUT** /api/v{version}/Balance/withdrawstatus | 
*GatewayApi* | [**apiGatewayMerchantGet**](docs/Api/GatewayApi.md#apigatewaymerchantget) | **GET** /api/Gateway/merchant | 
*GatewayApi* | [**apiGatewayMerchantPost**](docs/Api/GatewayApi.md#apigatewaymerchantpost) | **POST** /api/Gateway/merchant | 
*GatewayApi* | [**apiGatewayStatusGet**](docs/Api/GatewayApi.md#apigatewaystatusget) | **GET** /api/Gateway/status | 
*GatewayApi* | [**apiGatewayTransactionGet**](docs/Api/GatewayApi.md#apigatewaytransactionget) | **GET** /api/Gateway/transaction | 
*GatewayApi* | [**apiGatewayTransactionPost**](docs/Api/GatewayApi.md#apigatewaytransactionpost) | **POST** /api/Gateway/transaction | 
*GatewayApi* | [**apiVversionGatewayMerchantGet**](docs/Api/GatewayApi.md#apivversiongatewaymerchantget) | **GET** /api/v{version}/Gateway/merchant | 
*GatewayApi* | [**apiVversionGatewayMerchantPost**](docs/Api/GatewayApi.md#apivversiongatewaymerchantpost) | **POST** /api/v{version}/Gateway/merchant | 
*GatewayApi* | [**apiVversionGatewayStatusGet**](docs/Api/GatewayApi.md#apivversiongatewaystatusget) | **GET** /api/v{version}/Gateway/status | 
*GatewayApi* | [**apiVversionGatewayTransactionGet**](docs/Api/GatewayApi.md#apivversiongatewaytransactionget) | **GET** /api/v{version}/Gateway/transaction | 
*GatewayApi* | [**apiVversionGatewayTransactionPost**](docs/Api/GatewayApi.md#apivversiongatewaytransactionpost) | **POST** /api/v{version}/Gateway/transaction | 
*GuardApi* | [**apiGuardGetAccessTokensGet**](docs/Api/GuardApi.md#apiguardgetaccesstokensget) | **GET** /api/Guard/GetAccessTokens | 
*GuardApi* | [**apiGuardGetlastGet**](docs/Api/GuardApi.md#apiguardgetlastget) | **GET** /api/Guard/getlast | 
*GuardApi* | [**apiGuardPrecheckLogoutPost**](docs/Api/GuardApi.md#apiguardprechecklogoutpost) | **POST** /api/Guard/PrecheckLogout | 
*GuardApi* | [**apiGuardRequestGet**](docs/Api/GuardApi.md#apiguardrequestget) | **GET** /api/Guard/request | 
*GuardApi* | [**apiGuardRequestPost**](docs/Api/GuardApi.md#apiguardrequestpost) | **POST** /api/Guard/request | 
*GuardApi* | [**apiGuardRequestSettingsTokenPost**](docs/Api/GuardApi.md#apiguardrequestsettingstokenpost) | **POST** /api/Guard/RequestSettingsToken | 
*GuardApi* | [**apiGuardRevokeTokenByIdPost**](docs/Api/GuardApi.md#apiguardrevoketokenbyidpost) | **POST** /api/Guard/RevokeTokenById | 
*GuardApi* | [**apiGuardRevokeTokenPost**](docs/Api/GuardApi.md#apiguardrevoketokenpost) | **POST** /api/Guard/RevokeToken | 
*GuardApi* | [**apiGuardSubmitPost**](docs/Api/GuardApi.md#apiguardsubmitpost) | **POST** /api/Guard/submit | 
*GuardApi* | [**apiGuardUpdatePost**](docs/Api/GuardApi.md#apiguardupdatepost) | **POST** /api/Guard/update | 
*GuardApi* | [**apiVversionGuardGetAccessTokensGet**](docs/Api/GuardApi.md#apivversionguardgetaccesstokensget) | **GET** /api/v{version}/Guard/GetAccessTokens | 
*GuardApi* | [**apiVversionGuardGetlastGet**](docs/Api/GuardApi.md#apivversionguardgetlastget) | **GET** /api/v{version}/Guard/getlast | 
*GuardApi* | [**apiVversionGuardPrecheckLogoutPost**](docs/Api/GuardApi.md#apivversionguardprechecklogoutpost) | **POST** /api/v{version}/Guard/PrecheckLogout | 
*GuardApi* | [**apiVversionGuardRequestGet**](docs/Api/GuardApi.md#apivversionguardrequestget) | **GET** /api/v{version}/Guard/request | 
*GuardApi* | [**apiVversionGuardRequestPost**](docs/Api/GuardApi.md#apivversionguardrequestpost) | **POST** /api/v{version}/Guard/request | 
*GuardApi* | [**apiVversionGuardRequestSettingsTokenPost**](docs/Api/GuardApi.md#apivversionguardrequestsettingstokenpost) | **POST** /api/v{version}/Guard/RequestSettingsToken | 
*GuardApi* | [**apiVversionGuardRevokeTokenByIdPost**](docs/Api/GuardApi.md#apivversionguardrevoketokenbyidpost) | **POST** /api/v{version}/Guard/RevokeTokenById | 
*GuardApi* | [**apiVversionGuardRevokeTokenPost**](docs/Api/GuardApi.md#apivversionguardrevoketokenpost) | **POST** /api/v{version}/Guard/RevokeToken | 
*GuardApi* | [**apiVversionGuardSubmitPost**](docs/Api/GuardApi.md#apivversionguardsubmitpost) | **POST** /api/v{version}/Guard/submit | 
*GuardApi* | [**apiVversionGuardUpdatePost**](docs/Api/GuardApi.md#apivversionguardupdatepost) | **POST** /api/v{version}/Guard/update | 
*HealthApi* | [**apiHealthTickGet**](docs/Api/HealthApi.md#apihealthtickget) | **GET** /api/Health/tick | 
*HealthApi* | [**apiHealthTockGet**](docs/Api/HealthApi.md#apihealthtockget) | **GET** /api/Health/tock | 
*HealthApi* | [**apiVversionHealthTickGet**](docs/Api/HealthApi.md#apivversionhealthtickget) | **GET** /api/v{version}/Health/tick | 
*HealthApi* | [**apiVversionHealthTockGet**](docs/Api/HealthApi.md#apivversionhealthtockget) | **GET** /api/v{version}/Health/tock | 
*MarketsApi* | [**apiMarketsAssetsGet**](docs/Api/MarketsApi.md#apimarketsassetsget) | **GET** /api/Markets/assets | 
*MarketsApi* | [**apiMarketsCurrenciesGet**](docs/Api/MarketsApi.md#apimarketscurrenciesget) | **GET** /api/Markets/currencies | 
*MarketsApi* | [**apiMarketsCurrencyInfoGet**](docs/Api/MarketsApi.md#apimarketscurrencyinfoget) | **GET** /api/Markets/currencyInfo | 
*MarketsApi* | [**apiMarketsGet**](docs/Api/MarketsApi.md#apimarketsget) | **GET** /api/Markets | 
*MarketsApi* | [**apiMarketsHistoryGet**](docs/Api/MarketsApi.md#apimarketshistoryget) | **GET** /api/Markets/history | 
*MarketsApi* | [**apiMarketsListingRequestPost**](docs/Api/MarketsApi.md#apimarketslistingrequestpost) | **POST** /api/Markets/ListingRequest | 
*MarketsApi* | [**apiMarketsOrderbookGet**](docs/Api/MarketsApi.md#apimarketsorderbookget) | **GET** /api/Markets/orderbook | 
*MarketsApi* | [**apiMarketsOrdersPairGet**](docs/Api/MarketsApi.md#apimarketsorderspairget) | **GET** /api/Markets/orders/{pair} | 
*MarketsApi* | [**apiMarketsSummaryGet**](docs/Api/MarketsApi.md#apimarketssummaryget) | **GET** /api/Markets/summary | 
*MarketsApi* | [**apiMarketsTestGet**](docs/Api/MarketsApi.md#apimarketstestget) | **GET** /api/Markets/test | 
*MarketsApi* | [**apiMarketsTickerGet**](docs/Api/MarketsApi.md#apimarketstickerget) | **GET** /api/Markets/ticker | 
*MarketsApi* | [**apiMarketsTickersGet**](docs/Api/MarketsApi.md#apimarketstickersget) | **GET** /api/Markets/tickers | 
*MarketsApi* | [**apiMarketsTradesPairGet**](docs/Api/MarketsApi.md#apimarketstradespairget) | **GET** /api/Markets/trades/{pair} | 
*MarketsApi* | [**apiVversionMarketsAssetsGet**](docs/Api/MarketsApi.md#apivversionmarketsassetsget) | **GET** /api/v{version}/Markets/assets | 
*MarketsApi* | [**apiVversionMarketsCurrenciesGet**](docs/Api/MarketsApi.md#apivversionmarketscurrenciesget) | **GET** /api/v{version}/Markets/currencies | 
*MarketsApi* | [**apiVversionMarketsCurrencyInfoGet**](docs/Api/MarketsApi.md#apivversionmarketscurrencyinfoget) | **GET** /api/v{version}/Markets/currencyInfo | 
*MarketsApi* | [**apiVversionMarketsGet**](docs/Api/MarketsApi.md#apivversionmarketsget) | **GET** /api/v{version}/Markets | 
*MarketsApi* | [**apiVversionMarketsHistoryGet**](docs/Api/MarketsApi.md#apivversionmarketshistoryget) | **GET** /api/v{version}/Markets/history | 
*MarketsApi* | [**apiVversionMarketsListingRequestPost**](docs/Api/MarketsApi.md#apivversionmarketslistingrequestpost) | **POST** /api/v{version}/Markets/ListingRequest | 
*MarketsApi* | [**apiVversionMarketsOrderbookGet**](docs/Api/MarketsApi.md#apivversionmarketsorderbookget) | **GET** /api/v{version}/Markets/orderbook | 
*MarketsApi* | [**apiVversionMarketsOrdersPairGet**](docs/Api/MarketsApi.md#apivversionmarketsorderspairget) | **GET** /api/v{version}/Markets/orders/{pair} | 
*MarketsApi* | [**apiVversionMarketsSummaryGet**](docs/Api/MarketsApi.md#apivversionmarketssummaryget) | **GET** /api/v{version}/Markets/summary | 
*MarketsApi* | [**apiVversionMarketsTestGet**](docs/Api/MarketsApi.md#apivversionmarketstestget) | **GET** /api/v{version}/Markets/test | 
*MarketsApi* | [**apiVversionMarketsTickerGet**](docs/Api/MarketsApi.md#apivversionmarketstickerget) | **GET** /api/v{version}/Markets/ticker | 
*MarketsApi* | [**apiVversionMarketsTickersGet**](docs/Api/MarketsApi.md#apivversionmarketstickersget) | **GET** /api/v{version}/Markets/tickers | 
*MarketsApi* | [**apiVversionMarketsTradesPairGet**](docs/Api/MarketsApi.md#apivversionmarketstradespairget) | **GET** /api/v{version}/Markets/trades/{pair} | 
*NotificationsApi* | [**apiNotificationsPricealertDelete**](docs/Api/NotificationsApi.md#apinotificationspricealertdelete) | **DELETE** /api/Notifications/pricealert | 
*NotificationsApi* | [**apiNotificationsPricealertGet**](docs/Api/NotificationsApi.md#apinotificationspricealertget) | **GET** /api/Notifications/pricealert | 
*NotificationsApi* | [**apiNotificationsPricealertPost**](docs/Api/NotificationsApi.md#apinotificationspricealertpost) | **POST** /api/Notifications/pricealert | 
*NotificationsApi* | [**apiVversionNotificationsPricealertDelete**](docs/Api/NotificationsApi.md#apivversionnotificationspricealertdelete) | **DELETE** /api/v{version}/Notifications/pricealert | 
*NotificationsApi* | [**apiVversionNotificationsPricealertGet**](docs/Api/NotificationsApi.md#apivversionnotificationspricealertget) | **GET** /api/v{version}/Notifications/pricealert | 
*NotificationsApi* | [**apiVversionNotificationsPricealertPost**](docs/Api/NotificationsApi.md#apivversionnotificationspricealertpost) | **POST** /api/v{version}/Notifications/pricealert | 
*OrdersApi* | [**apiOrdersCancelPost**](docs/Api/OrdersApi.md#apiorderscancelpost) | **POST** /api/Orders/cancel | 
*OrdersApi* | [**apiOrdersCancelallPost**](docs/Api/OrdersApi.md#apiorderscancelallpost) | **POST** /api/Orders/cancelall | 
*OrdersApi* | [**apiOrdersPost**](docs/Api/OrdersApi.md#apiorderspost) | **POST** /api/Orders | 
*OrdersApi* | [**apiVversionOrdersCancelPost**](docs/Api/OrdersApi.md#apivversionorderscancelpost) | **POST** /api/v{version}/Orders/cancel | 
*OrdersApi* | [**apiVversionOrdersCancelallPost**](docs/Api/OrdersApi.md#apivversionorderscancelallpost) | **POST** /api/v{version}/Orders/cancelall | 
*OrdersApi* | [**apiVversionOrdersPost**](docs/Api/OrdersApi.md#apivversionorderspost) | **POST** /api/v{version}/Orders | 
*P2PApi* | [**apiP2POffersGet**](docs/Api/P2PApi.md#apip2poffersget) | **GET** /api/P2P/offers | 
*P2PApi* | [**apiVversionP2POffersGet**](docs/Api/P2PApi.md#apivversionp2poffersget) | **GET** /api/v{version}/P2P/offers | 
*SignApi* | [**apiSignAskForPermissionPost**](docs/Api/SignApi.md#apisignaskforpermissionpost) | **POST** /api/Sign/AskForPermission | 
*SignApi* | [**apiSignAskPermissionSignInPost**](docs/Api/SignApi.md#apisignaskpermissionsigninpost) | **POST** /api/Sign/AskPermissionSignIn | 
*SignApi* | [**apiSignCheck2StepVerificationStatusGet**](docs/Api/SignApi.md#apisigncheck2stepverificationstatusget) | **GET** /api/Sign/Check2StepVerificationStatus | 
*SignApi* | [**apiSignConfirmPermissionSignInPost**](docs/Api/SignApi.md#apisignconfirmpermissionsigninpost) | **POST** /api/Sign/ConfirmPermissionSignIn | 
*SignApi* | [**apiSignConfirmemailPost**](docs/Api/SignApi.md#apisignconfirmemailpost) | **POST** /api/Sign/confirmemail | 
*SignApi* | [**apiSignGetPermissionDetailsGet**](docs/Api/SignApi.md#apisigngetpermissiondetailsget) | **GET** /api/Sign/GetPermissionDetails | 
*SignApi* | [**apiSignGetreferreremailGet**](docs/Api/SignApi.md#apisigngetreferreremailget) | **GET** /api/Sign/getreferreremail | 
*SignApi* | [**apiSignIsAnyDeviceOnlinePost**](docs/Api/SignApi.md#apisignisanydeviceonlinepost) | **POST** /api/Sign/IsAnyDeviceOnline | 
*SignApi* | [**apiSignMobileConfirmationRequestPost**](docs/Api/SignApi.md#apisignmobileconfirmationrequestpost) | **POST** /api/Sign/MobileConfirmationRequest | 
*SignApi* | [**apiSignResetpasswordPost**](docs/Api/SignApi.md#apisignresetpasswordpost) | **POST** /api/Sign/resetpassword | 
*SignApi* | [**apiSignRestorepasswordPost**](docs/Api/SignApi.md#apisignrestorepasswordpost) | **POST** /api/Sign/restorepassword | 
*SignApi* | [**apiSignSetnewpasswordPost**](docs/Api/SignApi.md#apisignsetnewpasswordpost) | **POST** /api/Sign/setnewpassword | 
*SignApi* | [**apiSignSigninGet**](docs/Api/SignApi.md#apisignsigninget) | **GET** /api/Sign/signin | 
*SignApi* | [**apiSignSigninPost**](docs/Api/SignApi.md#apisignsigninpost) | **POST** /api/Sign/signin | 
*SignApi* | [**apiSignSignoutDelete**](docs/Api/SignApi.md#apisignsignoutdelete) | **DELETE** /api/Sign/signout | 
*SignApi* | [**apiSignSignupPost**](docs/Api/SignApi.md#apisignsignuppost) | **POST** /api/Sign/signup | 
*SignApi* | [**apiVversionSignAskForPermissionPost**](docs/Api/SignApi.md#apivversionsignaskforpermissionpost) | **POST** /api/v{version}/Sign/AskForPermission | 
*SignApi* | [**apiVversionSignAskPermissionSignInPost**](docs/Api/SignApi.md#apivversionsignaskpermissionsigninpost) | **POST** /api/v{version}/Sign/AskPermissionSignIn | 
*SignApi* | [**apiVversionSignCheck2StepVerificationStatusGet**](docs/Api/SignApi.md#apivversionsigncheck2stepverificationstatusget) | **GET** /api/v{version}/Sign/Check2StepVerificationStatus | 
*SignApi* | [**apiVversionSignConfirmPermissionSignInPost**](docs/Api/SignApi.md#apivversionsignconfirmpermissionsigninpost) | **POST** /api/v{version}/Sign/ConfirmPermissionSignIn | 
*SignApi* | [**apiVversionSignConfirmemailPost**](docs/Api/SignApi.md#apivversionsignconfirmemailpost) | **POST** /api/v{version}/Sign/confirmemail | 
*SignApi* | [**apiVversionSignGetPermissionDetailsGet**](docs/Api/SignApi.md#apivversionsigngetpermissiondetailsget) | **GET** /api/v{version}/Sign/GetPermissionDetails | 
*SignApi* | [**apiVversionSignGetreferreremailGet**](docs/Api/SignApi.md#apivversionsigngetreferreremailget) | **GET** /api/v{version}/Sign/getreferreremail | 
*SignApi* | [**apiVversionSignIsAnyDeviceOnlinePost**](docs/Api/SignApi.md#apivversionsignisanydeviceonlinepost) | **POST** /api/v{version}/Sign/IsAnyDeviceOnline | 
*SignApi* | [**apiVversionSignMobileConfirmationRequestPost**](docs/Api/SignApi.md#apivversionsignmobileconfirmationrequestpost) | **POST** /api/v{version}/Sign/MobileConfirmationRequest | 
*SignApi* | [**apiVversionSignResetpasswordPost**](docs/Api/SignApi.md#apivversionsignresetpasswordpost) | **POST** /api/v{version}/Sign/resetpassword | 
*SignApi* | [**apiVversionSignRestorepasswordPost**](docs/Api/SignApi.md#apivversionsignrestorepasswordpost) | **POST** /api/v{version}/Sign/restorepassword | 
*SignApi* | [**apiVversionSignSetnewpasswordPost**](docs/Api/SignApi.md#apivversionsignsetnewpasswordpost) | **POST** /api/v{version}/Sign/setnewpassword | 
*SignApi* | [**apiVversionSignSigninGet**](docs/Api/SignApi.md#apivversionsignsigninget) | **GET** /api/v{version}/Sign/signin | 
*SignApi* | [**apiVversionSignSigninPost**](docs/Api/SignApi.md#apivversionsignsigninpost) | **POST** /api/v{version}/Sign/signin | 
*SignApi* | [**apiVversionSignSignoutDelete**](docs/Api/SignApi.md#apivversionsignsignoutdelete) | **DELETE** /api/v{version}/Sign/signout | 
*SignApi* | [**apiVversionSignSignupPost**](docs/Api/SignApi.md#apivversionsignsignuppost) | **POST** /api/v{version}/Sign/signup | 
*StaticPagesApi* | [**apiStaticPagesStatusGet**](docs/Api/StaticPagesApi.md#apistaticpagesstatusget) | **GET** /api/StaticPages/status | 
*StaticPagesApi* | [**apiVversionStaticPagesStatusGet**](docs/Api/StaticPagesApi.md#apivversionstaticpagesstatusget) | **GET** /api/v{version}/StaticPages/status | 
*UserApi* | [**apiUserAffiliateGet**](docs/Api/UserApi.md#apiuseraffiliateget) | **GET** /api/User/affiliate | 
*UserApi* | [**apiUserAffiliatePost**](docs/Api/UserApi.md#apiuseraffiliatepost) | **POST** /api/User/affiliate | 
*UserApi* | [**apiUserApikeysDelete**](docs/Api/UserApi.md#apiuserapikeysdelete) | **DELETE** /api/User/apikeys | 
*UserApi* | [**apiUserApikeysGet**](docs/Api/UserApi.md#apiuserapikeysget) | **GET** /api/User/apikeys | 
*UserApi* | [**apiUserApikeysPost**](docs/Api/UserApi.md#apiuserapikeyspost) | **POST** /api/User/apikeys | 
*UserApi* | [**apiUserBalancesGet**](docs/Api/UserApi.md#apiuserbalancesget) | **GET** /api/User/balances | 
*UserApi* | [**apiUserBalanceslistGet**](docs/Api/UserApi.md#apiuserbalanceslistget) | **GET** /api/User/balanceslist | 
*UserApi* | [**apiUserDepositsGet**](docs/Api/UserApi.md#apiuserdepositsget) | **GET** /api/User/deposits | 
*UserApi* | [**apiUserDisableGoogleAuthenticatorDelete**](docs/Api/UserApi.md#apiuserdisablegoogleauthenticatordelete) | **DELETE** /api/User/DisableGoogleAuthenticator | 
*UserApi* | [**apiUserDisableGoogleAuthenticatorWithBackupCodeDelete**](docs/Api/UserApi.md#apiuserdisablegoogleauthenticatorwithbackupcodedelete) | **DELETE** /api/User/DisableGoogleAuthenticatorWithBackupCode | 
*UserApi* | [**apiUserFeesGet**](docs/Api/UserApi.md#apiuserfeesget) | **GET** /api/User/Fees | 
*UserApi* | [**apiUserFinishTier1VerificationPost**](docs/Api/UserApi.md#apiuserfinishtier1verificationpost) | **POST** /api/User/FinishTier1Verification | 
*UserApi* | [**apiUserGenerateGoogleAuthenticatorSetupCodePost**](docs/Api/UserApi.md#apiusergenerategoogleauthenticatorsetupcodepost) | **POST** /api/User/GenerateGoogleAuthenticatorSetupCode | 
*UserApi* | [**apiUserGetVerificationLevelGet**](docs/Api/UserApi.md#apiusergetverificationlevelget) | **GET** /api/User/GetVerificationLevel | 
*UserApi* | [**apiUserOrdersGet**](docs/Api/UserApi.md#apiuserordersget) | **GET** /api/User/orders | 
*UserApi* | [**apiUserSetPhoneNumberPost**](docs/Api/UserApi.md#apiusersetphonenumberpost) | **POST** /api/User/SetPhoneNumber | 
*UserApi* | [**apiUserSetparametersPost**](docs/Api/UserApi.md#apiusersetparameterspost) | **POST** /api/User/setparameters | 
*UserApi* | [**apiUserSupportPost**](docs/Api/UserApi.md#apiusersupportpost) | **POST** /api/User/support | 
*UserApi* | [**apiUserTradehistoryGet**](docs/Api/UserApi.md#apiusertradehistoryget) | **GET** /api/User/tradehistory | 
*UserApi* | [**apiUserVerificationsGet**](docs/Api/UserApi.md#apiuserverificationsget) | **GET** /api/User/verifications | 
*UserApi* | [**apiUserVerificationtypeGet**](docs/Api/UserApi.md#apiuserverificationtypeget) | **GET** /api/User/verificationtype | 
*UserApi* | [**apiUserVerifyGoogleAuthenticatorSetupCodePost**](docs/Api/UserApi.md#apiuserverifygoogleauthenticatorsetupcodepost) | **POST** /api/User/VerifyGoogleAuthenticatorSetupCode | 
*UserApi* | [**apiUserVerifyPhoneNumberPost**](docs/Api/UserApi.md#apiuserverifyphonenumberpost) | **POST** /api/User/VerifyPhoneNumber | 
*UserApi* | [**apiUserWithdrawalsGet**](docs/Api/UserApi.md#apiuserwithdrawalsget) | **GET** /api/User/withdrawals | 
*UserApi* | [**apiVversionUserAffiliateGet**](docs/Api/UserApi.md#apivversionuseraffiliateget) | **GET** /api/v{version}/User/affiliate | 
*UserApi* | [**apiVversionUserAffiliatePost**](docs/Api/UserApi.md#apivversionuseraffiliatepost) | **POST** /api/v{version}/User/affiliate | 
*UserApi* | [**apiVversionUserApikeysDelete**](docs/Api/UserApi.md#apivversionuserapikeysdelete) | **DELETE** /api/v{version}/User/apikeys | 
*UserApi* | [**apiVversionUserApikeysGet**](docs/Api/UserApi.md#apivversionuserapikeysget) | **GET** /api/v{version}/User/apikeys | 
*UserApi* | [**apiVversionUserApikeysPost**](docs/Api/UserApi.md#apivversionuserapikeyspost) | **POST** /api/v{version}/User/apikeys | 
*UserApi* | [**apiVversionUserBalancesGet**](docs/Api/UserApi.md#apivversionuserbalancesget) | **GET** /api/v{version}/User/balances | 
*UserApi* | [**apiVversionUserBalanceslistGet**](docs/Api/UserApi.md#apivversionuserbalanceslistget) | **GET** /api/v{version}/User/balanceslist | 
*UserApi* | [**apiVversionUserDepositsGet**](docs/Api/UserApi.md#apivversionuserdepositsget) | **GET** /api/v{version}/User/deposits | 
*UserApi* | [**apiVversionUserDisableGoogleAuthenticatorDelete**](docs/Api/UserApi.md#apivversionuserdisablegoogleauthenticatordelete) | **DELETE** /api/v{version}/User/DisableGoogleAuthenticator | 
*UserApi* | [**apiVversionUserDisableGoogleAuthenticatorWithBackupCodeDelete**](docs/Api/UserApi.md#apivversionuserdisablegoogleauthenticatorwithbackupcodedelete) | **DELETE** /api/v{version}/User/DisableGoogleAuthenticatorWithBackupCode | 
*UserApi* | [**apiVversionUserFeesGet**](docs/Api/UserApi.md#apivversionuserfeesget) | **GET** /api/v{version}/User/Fees | 
*UserApi* | [**apiVversionUserFinishTier1VerificationPost**](docs/Api/UserApi.md#apivversionuserfinishtier1verificationpost) | **POST** /api/v{version}/User/FinishTier1Verification | 
*UserApi* | [**apiVversionUserGenerateGoogleAuthenticatorSetupCodePost**](docs/Api/UserApi.md#apivversionusergenerategoogleauthenticatorsetupcodepost) | **POST** /api/v{version}/User/GenerateGoogleAuthenticatorSetupCode | 
*UserApi* | [**apiVversionUserGetVerificationLevelGet**](docs/Api/UserApi.md#apivversionusergetverificationlevelget) | **GET** /api/v{version}/User/GetVerificationLevel | 
*UserApi* | [**apiVversionUserOrdersGet**](docs/Api/UserApi.md#apivversionuserordersget) | **GET** /api/v{version}/User/orders | 
*UserApi* | [**apiVversionUserSetPhoneNumberPost**](docs/Api/UserApi.md#apivversionusersetphonenumberpost) | **POST** /api/v{version}/User/SetPhoneNumber | 
*UserApi* | [**apiVversionUserSetparametersPost**](docs/Api/UserApi.md#apivversionusersetparameterspost) | **POST** /api/v{version}/User/setparameters | 
*UserApi* | [**apiVversionUserSupportPost**](docs/Api/UserApi.md#apivversionusersupportpost) | **POST** /api/v{version}/User/support | 
*UserApi* | [**apiVversionUserTradehistoryGet**](docs/Api/UserApi.md#apivversionusertradehistoryget) | **GET** /api/v{version}/User/tradehistory | 
*UserApi* | [**apiVversionUserVerificationsGet**](docs/Api/UserApi.md#apivversionuserverificationsget) | **GET** /api/v{version}/User/verifications | 
*UserApi* | [**apiVversionUserVerificationtypeGet**](docs/Api/UserApi.md#apivversionuserverificationtypeget) | **GET** /api/v{version}/User/verificationtype | 
*UserApi* | [**apiVversionUserVerifyGoogleAuthenticatorSetupCodePost**](docs/Api/UserApi.md#apivversionuserverifygoogleauthenticatorsetupcodepost) | **POST** /api/v{version}/User/VerifyGoogleAuthenticatorSetupCode | 
*UserApi* | [**apiVversionUserVerifyPhoneNumberPost**](docs/Api/UserApi.md#apivversionuserverifyphonenumberpost) | **POST** /api/v{version}/User/VerifyPhoneNumber | 
*UserApi* | [**apiVversionUserWithdrawalsGet**](docs/Api/UserApi.md#apivversionuserwithdrawalsget) | **GET** /api/v{version}/User/withdrawals | 

## Models

- [AffiliateDataResponse](docs/Model/AffiliateDataResponse.md)
- [ApiGetDepositsWitdrawals](docs/Model/ApiGetDepositsWitdrawals.md)
- [ApiGetOrders](docs/Model/ApiGetOrders.md)
- [ApiKey](docs/Model/ApiKey.md)
- [ApiMarket](docs/Model/ApiMarket.md)
- [ApiOpenOffer](docs/Model/ApiOpenOffer.md)
- [ApiPair](docs/Model/ApiPair.md)
- [ApiPaymentPage](docs/Model/ApiPaymentPage.md)
- [ApiTickers](docs/Model/ApiTickers.md)
- [ApiTransactionStatusResponse](docs/Model/ApiTransactionStatusResponse.md)
- [ApplicationUser](docs/Model/ApplicationUser.md)
- [AskForPermissionRequestModel](docs/Model/AskForPermissionRequestModel.md)
- [AskPermissionSignInError](docs/Model/AskPermissionSignInError.md)
- [AskPermissionSignInResponse](docs/Model/AskPermissionSignInResponse.md)
- [AssetsResponseModel](docs/Model/AssetsResponseModel.md)
- [Balance](docs/Model/Balance.md)
- [BalanceAction](docs/Model/BalanceAction.md)
- [BalanceActionModel](docs/Model/BalanceActionModel.md)
- [BalanceErrorCode](docs/Model/BalanceErrorCode.md)
- [BitflexApiResponseBase](docs/Model/BitflexApiResponseBase.md)
- [ChangePasswordRequest](docs/Model/ChangePasswordRequest.md)
- [Check2StepVerificationStatusResponse](docs/Model/Check2StepVerificationStatusResponse.md)
- [ClientInfo](docs/Model/ClientInfo.md)
- [Code](docs/Model/Code.md)
- [CoinTokenAddRequest](docs/Model/CoinTokenAddRequest.md)
- [CreateListingError](docs/Model/CreateListingError.md)
- [CreateListingRequestResponse](docs/Model/CreateListingRequestResponse.md)
- [CreateMerchantRequest](docs/Model/CreateMerchantRequest.md)
- [CreateRequestPayload](docs/Model/CreateRequestPayload.md)
- [CreateSupportTicketModel](docs/Model/CreateSupportTicketModel.md)
- [CreateTransactionRequest](docs/Model/CreateTransactionRequest.md)
- [CreateTransactionResult](docs/Model/CreateTransactionResult.md)
- [CryptoCurrency](docs/Model/CryptoCurrency.md)
- [Currencies](docs/Model/Currencies.md)
- [CurrencyStatus](docs/Model/CurrencyStatus.md)
- [Device](docs/Model/Device.md)
- [DevicePermissionRequestType](docs/Model/DevicePermissionRequestType.md)
- [DeviceType](docs/Model/DeviceType.md)
- [EmailConfirmationErrorCode](docs/Model/EmailConfirmationErrorCode.md)
- [EmailConfirmationResult](docs/Model/EmailConfirmationResult.md)
- [EnableDisable2Fa](docs/Model/EnableDisable2Fa.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [FeeStructure](docs/Model/FeeStructure.md)
- [FinishTier1VerificationModel](docs/Model/FinishTier1VerificationModel.md)
- [GenerateAddressResult](docs/Model/GenerateAddressResult.md)
- [GenerateApiKeyRequest](docs/Model/GenerateApiKeyRequest.md)
- [GetAccessTokensResponse](docs/Model/GetAccessTokensResponse.md)
- [GetAddressResponse](docs/Model/GetAddressResponse.md)
- [GetApiMarketsCurrenciesResponse](docs/Model/GetApiMarketsCurrenciesResponse.md)
- [GetBalanceHoldAndLimits](docs/Model/GetBalanceHoldAndLimits.md)
- [GetBalanceRequestModel](docs/Model/GetBalanceRequestModel.md)
- [GetBalancesListResponse](docs/Model/GetBalancesListResponse.md)
- [GetGuardRequestDataResponse](docs/Model/GetGuardRequestDataResponse.md)
- [GetGuardRequestDataResponseErrorType](docs/Model/GetGuardRequestDataResponseErrorType.md)
- [GetMarketsResponse](docs/Model/GetMarketsResponse.md)
- [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
- [GetTickeAsyncResponse](docs/Model/GetTickeAsyncResponse.md)
- [GetTickersResponse](docs/Model/GetTickersResponse.md)
- [GetTradeHistoryResponse](docs/Model/GetTradeHistoryResponse.md)
- [GetVerificationLevelResponse](docs/Model/GetVerificationLevelResponse.md)
- [GetWithdrawResponse](docs/Model/GetWithdrawResponse.md)
- [GuardActionType](docs/Model/GuardActionType.md)
- [GuardRequest](docs/Model/GuardRequest.md)
- [GuardRequestStatus](docs/Model/GuardRequestStatus.md)
- [GuardSignInRequestModel](docs/Model/GuardSignInRequestModel.md)
- [GuardSubmitResult](docs/Model/GuardSubmitResult.md)
- [GuardSubmitResultStatus](docs/Model/GuardSubmitResultStatus.md)
- [GuardWithdrawRequestModel](docs/Model/GuardWithdrawRequestModel.md)
- [ListingRequest](docs/Model/ListingRequest.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantTransaction](docs/Model/MerchantTransaction.md)
- [OS](docs/Model/OS.md)
- [OfferStatus](docs/Model/OfferStatus.md)
- [Order](docs/Model/Order.md)
- [OrderCancelResult](docs/Model/OrderCancelResult.md)
- [OrderCreateResult](docs/Model/OrderCreateResult.md)
- [OrderState](docs/Model/OrderState.md)
- [OrderTypes](docs/Model/OrderTypes.md)
- [OrderViewModel](docs/Model/OrderViewModel.md)
- [OrderbookResponseModel](docs/Model/OrderbookResponseModel.md)
- [OrdersGetViewModel](docs/Model/OrdersGetViewModel.md)
- [ParameterType](docs/Model/ParameterType.md)
- [PinCodeRequestModel](docs/Model/PinCodeRequestModel.md)
- [PostConfirmPermissionSignInRequest](docs/Model/PostConfirmPermissionSignInRequest.md)
- [PostConfirmRequest](docs/Model/PostConfirmRequest.md)
- [PostForgotPasswordRequest](docs/Model/PostForgotPasswordRequest.md)
- [PostMobileConfirmationRequestModel](docs/Model/PostMobileConfirmationRequestModel.md)
- [PostOrdersRequest](docs/Model/PostOrdersRequest.md)
- [PostResetPasswordRequest](docs/Model/PostResetPasswordRequest.md)
- [PostSignInRequest](docs/Model/PostSignInRequest.md)
- [PostSignInResponse](docs/Model/PostSignInResponse.md)
- [PostSignUpRequest](docs/Model/PostSignUpRequest.md)
- [PostSignUpResponse](docs/Model/PostSignUpResponse.md)
- [PostVefirySms](docs/Model/PostVefirySms.md)
- [PostWithdrawGuardResponse](docs/Model/PostWithdrawGuardResponse.md)
- [PostWithdrawGuardResponseErrorCode](docs/Model/PostWithdrawGuardResponseErrorCode.md)
- [PostWithdrawRequest](docs/Model/PostWithdrawRequest.md)
- [PostWithdrawRequestResult](docs/Model/PostWithdrawRequestResult.md)
- [PrecheckLogoutResult](docs/Model/PrecheckLogoutResult.md)
- [PriceAlert](docs/Model/PriceAlert.md)
- [PriceAlertCompareType](docs/Model/PriceAlertCompareType.md)
- [PriceAlertCreateStatus](docs/Model/PriceAlertCreateStatus.md)
- [ProcessFaceImageRequest](docs/Model/ProcessFaceImageRequest.md)
- [Rate](docs/Model/Rate.md)
- [RequestSettingsTokenResponseModel](docs/Model/RequestSettingsTokenResponseModel.md)
- [RequestSettingsTokenResponseRequestModel](docs/Model/RequestSettingsTokenResponseRequestModel.md)
- [RequestType](docs/Model/RequestType.md)
- [RestorePinPostRequest](docs/Model/RestorePinPostRequest.md)
- [ReturnFeeStructure](docs/Model/ReturnFeeStructure.md)
- [RevokeTokenByIdRequestModel](docs/Model/RevokeTokenByIdRequestModel.md)
- [ServerLocation](docs/Model/ServerLocation.md)
- [SetPriceAlertRequestModel](docs/Model/SetPriceAlertRequestModel.md)
- [SetPriceAlertResponseModel](docs/Model/SetPriceAlertResponseModel.md)
- [SetPushTokenRequest](docs/Model/SetPushTokenRequest.md)
- [SettingsTokenRequestErrorType](docs/Model/SettingsTokenRequestErrorType.md)
- [SetupCode](docs/Model/SetupCode.md)
- [SignInPermissionModel](docs/Model/SignInPermissionModel.md)
- [SignInResponseResult](docs/Model/SignInResponseResult.md)
- [SignUpResponseResult](docs/Model/SignUpResponseResult.md)
- [SmsVefiryResult](docs/Model/SmsVefiryResult.md)
- [StatusCodeEnum](docs/Model/StatusCodeEnum.md)
- [SummaryResponseModel](docs/Model/SummaryResponseModel.md)
- [TickerResponseModel](docs/Model/TickerResponseModel.md)
- [TradeData](docs/Model/TradeData.md)
- [TradeDirection](docs/Model/TradeDirection.md)
- [TradeType](docs/Model/TradeType.md)
- [TradesGetViewModel](docs/Model/TradesGetViewModel.md)
- [TradesResponseModel](docs/Model/TradesResponseModel.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionDirection](docs/Model/TransactionDirection.md)
- [TransactionState](docs/Model/TransactionState.md)
- [Tuple3](docs/Model/Tuple3.md)
- [TwoStepVerificationTypes](docs/Model/TwoStepVerificationTypes.md)
- [Type](docs/Model/Type.md)
- [UpdatePublicKeyRequest](docs/Model/UpdatePublicKeyRequest.md)
- [UserAdminCommand](docs/Model/UserAdminCommand.md)
- [UserAgent](docs/Model/UserAgent.md)
- [UserCategory](docs/Model/UserCategory.md)
- [UserFeeLevel](docs/Model/UserFeeLevel.md)
- [ValidatePinPostRequest](docs/Model/ValidatePinPostRequest.md)
- [VerificationResource](docs/Model/VerificationResource.md)
- [VerifyFaceData](docs/Model/VerifyFaceData.md)
- [VerifyResult](docs/Model/VerifyResult.md)
- [WithdrawErrorCode](docs/Model/WithdrawErrorCode.md)

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
