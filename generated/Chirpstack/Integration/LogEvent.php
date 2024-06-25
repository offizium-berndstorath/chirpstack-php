<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integration/integration.proto

namespace Chirpstack\Integration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LogEvent is the message sent when a device-related log was sent.
 *
 * Generated from protobuf message <code>integration.LogEvent</code>
 */
class LogEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     */
    protected $time = null;
    /**
     * Device info.
     *
     * Generated from protobuf field <code>.integration.DeviceInfo device_info = 2;</code>
     */
    protected $device_info = null;
    /**
     * Log level.
     *
     * Generated from protobuf field <code>.integration.LogLevel level = 3;</code>
     */
    protected $level = 0;
    /**
     * Log code.
     *
     * Generated from protobuf field <code>.integration.LogCode code = 4;</code>
     */
    protected $code = 0;
    /**
     * Description message.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Context map.
     *
     * Generated from protobuf field <code>map<string, string> context = 6;</code>
     */
    private $context;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $time
     *           Timestamp.
     *     @type \Chirpstack\Integration\DeviceInfo $device_info
     *           Device info.
     *     @type int $level
     *           Log level.
     *     @type int $code
     *           Log code.
     *     @type string $description
     *           Description message.
     *     @type array|\Google\Protobuf\Internal\MapField $context
     *           Context map.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Integration\Integration::initOnce();
        parent::__construct($data);
    }

    /**
     * Timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     * Timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     * Device info.
     *
     * Generated from protobuf field <code>.integration.DeviceInfo device_info = 2;</code>
     * @return \Chirpstack\Integration\DeviceInfo|null
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    public function hasDeviceInfo()
    {
        return isset($this->device_info);
    }

    public function clearDeviceInfo()
    {
        unset($this->device_info);
    }

    /**
     * Device info.
     *
     * Generated from protobuf field <code>.integration.DeviceInfo device_info = 2;</code>
     * @param \Chirpstack\Integration\DeviceInfo $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Integration\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }

    /**
     * Log level.
     *
     * Generated from protobuf field <code>.integration.LogLevel level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Log level.
     *
     * Generated from protobuf field <code>.integration.LogLevel level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Integration\LogLevel::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Log code.
     *
     * Generated from protobuf field <code>.integration.LogCode code = 4;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Log code.
     *
     * Generated from protobuf field <code>.integration.LogCode code = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Integration\LogCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Description message.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description message.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Context map.
     *
     * Generated from protobuf field <code>map<string, string> context = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Context map.
     *
     * Generated from protobuf field <code>map<string, string> context = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setContext($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->context = $arr;

        return $this;
    }

}
