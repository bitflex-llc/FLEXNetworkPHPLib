<?php
/**
 * PriceAlertCreateStatus
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
 * PriceAlertCreateStatus Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceAlertCreateStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'Created';
    const FAIL_ALREADY_EXISTS = 'Fail_AlreadyExists';
    const SYSTEM_ERROR = 'SystemError';
    const MAX_REACHED = 'MaxReached';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::FAIL_ALREADY_EXISTS,
            self::SYSTEM_ERROR,
            self::MAX_REACHED,
        ];
    }
}

