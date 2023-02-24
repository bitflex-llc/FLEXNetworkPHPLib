<?php
/**
 * SignUpResponseResult
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
 * SignUpResponseResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignUpResponseResult
{
    /**
     * Possible values of this enum
     */
    const BAD_INPUT = 'BadInput';
    const FAIL_CREATION = 'FailCreation';
    const SUCCESS_EMAIL_SENT = 'SuccessEmailSent';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BAD_INPUT,
            self::FAIL_CREATION,
            self::SUCCESS_EMAIL_SENT,
        ];
    }
}


