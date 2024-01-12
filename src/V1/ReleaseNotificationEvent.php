<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/release_notification_payload.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload proto for "clouddeploy.googleapis.com/release_notification"
 * Platform Log event that describes the failure to send release status change
 * Pub/Sub notification.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.ReleaseNotificationEvent</code>
 */
class ReleaseNotificationEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Debug message for when a notification fails to send.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 4;</code>
     */
    private $pipeline_uid = '';
    /**
     * Unique identifier of the `Release`.
     *
     * Generated from protobuf field <code>string release_uid = 5;</code>
     */
    private $release_uid = '';
    /**
     * The name of the `Release`.
     *
     * Generated from protobuf field <code>string release = 2;</code>
     */
    private $release = '';
    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 3;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Debug message for when a notification fails to send.
     *     @type string $pipeline_uid
     *           Unique identifier of the `DeliveryPipeline`.
     *     @type string $release_uid
     *           Unique identifier of the `Release`.
     *     @type string $release
     *           The name of the `Release`.
     *     @type int $type
     *           Type of this notification, e.g. for a Pub/Sub failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\ReleaseNotificationPayload::initOnce();
        parent::__construct($data);
    }

    /**
     * Debug message for when a notification fails to send.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Debug message for when a notification fails to send.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 4;</code>
     * @return string
     */
    public function getPipelineUid()
    {
        return $this->pipeline_uid;
    }

    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_uid = $var;

        return $this;
    }

    /**
     * Unique identifier of the `Release`.
     *
     * Generated from protobuf field <code>string release_uid = 5;</code>
     * @return string
     */
    public function getReleaseUid()
    {
        return $this->release_uid;
    }

    /**
     * Unique identifier of the `Release`.
     *
     * Generated from protobuf field <code>string release_uid = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setReleaseUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->release_uid = $var;

        return $this;
    }

    /**
     * The name of the `Release`.
     *
     * Generated from protobuf field <code>string release = 2;</code>
     * @return string
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * The name of the `Release`.
     *
     * Generated from protobuf field <code>string release = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->release = $var;

        return $this;
    }

    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Type::class);
        $this->type = $var;

        return $this;
    }

}

