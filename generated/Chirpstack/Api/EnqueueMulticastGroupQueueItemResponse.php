<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/multicast_group.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.EnqueueMulticastGroupQueueItemResponse</code>
 */
class EnqueueMulticastGroupQueueItemResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Frame-counter of the enqueued payload.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 1;</code>
     */
    protected $f_cnt = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $f_cnt
     *           Frame-counter of the enqueued payload.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Frame-counter of the enqueued payload.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 1;</code>
     * @return int
     */
    public function getFCnt()
    {
        return $this->f_cnt;
    }

    /**
     * Frame-counter of the enqueued payload.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->f_cnt = $var;

        return $this;
    }

}
