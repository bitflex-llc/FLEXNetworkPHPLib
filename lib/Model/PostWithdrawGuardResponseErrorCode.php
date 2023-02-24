<?php
/**
 * PostWithdrawGuardResponseErrorCode
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BCFLEX API
 *
 * BCFLEX Public API Documentation
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PostWithdrawGuardResponseErrorCode Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PostWithdrawGuardResponseErrorCode
{
    /**
     * Possible values of this enum
     */
    const WRONG_AMOUNT = 'WrongAmount';
    const VERIFICATION_TYPE_ERROR = 'VerificationTypeError';
    const WRONG_CURRENCY = 'WrongCurrency';
    const INSUFFICENT_BALANCE = 'InsufficentBalance';
    const WRONG_GUARD_ID = 'WrongGuardId';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WRONG_AMOUNT,
            self::VERIFICATION_TYPE_ERROR,
            self::WRONG_CURRENCY,
            self::INSUFFICENT_BALANCE,
            self::WRONG_GUARD_ID,
        ];
    }
}

