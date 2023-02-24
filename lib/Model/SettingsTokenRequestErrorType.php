<?php
/**
 * SettingsTokenRequestErrorType
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
 * SettingsTokenRequestErrorType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingsTokenRequestErrorType
{
    /**
     * Possible values of this enum
     */
    const WRONG_PIN_CODE = 'WrongPinCode';
    const DEVICE_NOT_ALLOWED = 'DeviceNotAllowed';
    const PREVIOUS_NOT_EXPIRED = 'PreviousNotExpired';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WRONG_PIN_CODE,
            self::DEVICE_NOT_ALLOWED,
            self::PREVIOUS_NOT_EXPIRED,
        ];
    }
}

