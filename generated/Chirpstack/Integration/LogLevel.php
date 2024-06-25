<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integration/integration.proto

namespace Chirpstack\Integration;

use UnexpectedValueException;

/**
 * Protobuf type <code>integration.LogLevel</code>
 */
class LogLevel
{
    /**
     * Info.
     *
     * Generated from protobuf enum <code>INFO = 0;</code>
     */
    const INFO = 0;
    /**
     * Warning.
     *
     * Generated from protobuf enum <code>WARNING = 1;</code>
     */
    const WARNING = 1;
    /**
     * Error.
     *
     * Generated from protobuf enum <code>ERROR = 2;</code>
     */
    const ERROR = 2;

    private static $valueToName = [
        self::INFO => 'INFO',
        self::WARNING => 'WARNING',
        self::ERROR => 'ERROR',
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
