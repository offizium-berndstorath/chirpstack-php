<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device_profile.proto

namespace Chirpstack\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>api.RelayModeActivation</code>
 */
class RelayModeActivation
{
    /**
     * Disable the relay mode.
     *
     * Generated from protobuf enum <code>DISABLE_RELAY_MODE = 0;</code>
     */
    const DISABLE_RELAY_MODE = 0;
    /**
     * Enable the relay model.
     *
     * Generated from protobuf enum <code>ENABLE_RELAY_MODE = 1;</code>
     */
    const ENABLE_RELAY_MODE = 1;
    /**
     * Dynamic.
     *
     * Generated from protobuf enum <code>DYNAMIC = 2;</code>
     */
    const DYNAMIC = 2;
    /**
     * End-device controlled.
     *
     * Generated from protobuf enum <code>END_DEVICE_CONTROLLED = 3;</code>
     */
    const END_DEVICE_CONTROLLED = 3;

    private static $valueToName = [
        self::DISABLE_RELAY_MODE => 'DISABLE_RELAY_MODE',
        self::ENABLE_RELAY_MODE => 'ENABLE_RELAY_MODE',
        self::DYNAMIC => 'DYNAMIC',
        self::END_DEVICE_CONTROLLED => 'END_DEVICE_CONTROLLED',
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
