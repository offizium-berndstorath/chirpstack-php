<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GcpPubSubIntegration</code>
 */
class GcpPubSubIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     */
    protected $application_id = '';
    /**
     * Encoding.
     *
     * Generated from protobuf field <code>.api.Encoding encoding = 2;</code>
     */
    protected $encoding = 0;
    /**
     * Credentials file.
     * This IAM service-account credentials file (JSON) must have the following
     * Pub/Sub roles:
     * * Pub/Sub Publisher
     *
     * Generated from protobuf field <code>string credentials_file = 3;</code>
     */
    protected $credentials_file = '';
    /**
     * Project ID.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     */
    protected $project_id = '';
    /**
     * Topic name.
     * This is the name of the Pub/Sub topic.
     *
     * Generated from protobuf field <code>string topic_name = 5;</code>
     */
    protected $topic_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $application_id
     *           Application ID (UUID).
     *     @type int $encoding
     *           Encoding.
     *     @type string $credentials_file
     *           Credentials file.
     *           This IAM service-account credentials file (JSON) must have the following
     *           Pub/Sub roles:
     *           * Pub/Sub Publisher
     *     @type string $project_id
     *           Project ID.
     *     @type string $topic_name
     *           Topic name.
     *           This is the name of the Pub/Sub topic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     * @return string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Encoding.
     *
     * Generated from protobuf field <code>.api.Encoding encoding = 2;</code>
     * @return int
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Encoding.
     *
     * Generated from protobuf field <code>.api.Encoding encoding = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Api\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Credentials file.
     * This IAM service-account credentials file (JSON) must have the following
     * Pub/Sub roles:
     * * Pub/Sub Publisher
     *
     * Generated from protobuf field <code>string credentials_file = 3;</code>
     * @return string
     */
    public function getCredentialsFile()
    {
        return $this->credentials_file;
    }

    /**
     * Credentials file.
     * This IAM service-account credentials file (JSON) must have the following
     * Pub/Sub roles:
     * * Pub/Sub Publisher
     *
     * Generated from protobuf field <code>string credentials_file = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialsFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->credentials_file = $var;

        return $this;
    }

    /**
     * Project ID.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project ID.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Topic name.
     * This is the name of the Pub/Sub topic.
     *
     * Generated from protobuf field <code>string topic_name = 5;</code>
     * @return string
     */
    public function getTopicName()
    {
        return $this->topic_name;
    }

    /**
     * Topic name.
     * This is the name of the Pub/Sub topic.
     *
     * Generated from protobuf field <code>string topic_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTopicName($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic_name = $var;

        return $this;
    }

}
