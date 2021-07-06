<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CaPool;

use UnexpectedValueException;

/**
 * The tier of a [CaPool][google.cloud.security.privateca.v1.CaPool], indicating its supported functionality and/or
 * billing SKU.
 *
 * Protobuf type <code>google.cloud.security.privateca.v1.CaPool.Tier</code>
 */
class Tier
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>TIER_UNSPECIFIED = 0;</code>
     */
    const TIER_UNSPECIFIED = 0;
    /**
     * Enterprise tier.
     *
     * Generated from protobuf enum <code>ENTERPRISE = 1;</code>
     */
    const ENTERPRISE = 1;
    /**
     * DevOps tier.
     *
     * Generated from protobuf enum <code>DEVOPS = 2;</code>
     */
    const DEVOPS = 2;

    private static $valueToName = [
        self::TIER_UNSPECIFIED => 'TIER_UNSPECIFIED',
        self::ENTERPRISE => 'ENTERPRISE',
        self::DEVOPS => 'DEVOPS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Tier::class, \Google\Cloud\Security\PrivateCA\V1\CaPool_Tier::class);

