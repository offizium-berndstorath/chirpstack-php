<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Chirpstack\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.MetricDataset</code>
 */
class MetricDataset extends \Google\Protobuf\Internal\Message
{
    /**
     * Label.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     */
    protected $label = '';
    /**
     * Data.
     * Each value index corresponds with the same timestamp index of the Metric.
     *
     * Generated from protobuf field <code>repeated float data = 2;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label
     *           Label.
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $data
     *           Data.
     *           Each value index corresponds with the same timestamp index of the Metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Common\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Label.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Label.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Data.
     * Each value index corresponds with the same timestamp index of the Metric.
     *
     * Generated from protobuf field <code>repeated float data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Data.
     * Each value index corresponds with the same timestamp index of the Metric.
     *
     * Generated from protobuf field <code>repeated float data = 2;</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->data = $arr;

        return $this;
    }

}
