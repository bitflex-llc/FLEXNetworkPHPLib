<?php
/**
 * PrecheckLogoutResult
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
 * PrecheckLogoutResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PrecheckLogoutResult
{
    /**
     * Possible values of this enum
     */
    const CAN_LOGOUT = 'CanLogout';
    const CAN_LOGOUT_OTHER_DEVICE_AVAILABLE = 'CanLogout_OtherDeviceAvailable';
    const CANNOT = 'Cannot';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAN_LOGOUT,
            self::CAN_LOGOUT_OTHER_DEVICE_AVAILABLE,
            self::CANNOT,
        ];
    }
}


