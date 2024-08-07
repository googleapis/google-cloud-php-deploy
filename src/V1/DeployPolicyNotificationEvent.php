<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/deploypolicy_notification_payload.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload proto for "clouddeploy.googleapis.com/deploypolicy_notification".
 * Platform Log event that describes the failure to send a pub/sub notification
 * when there is a DeployPolicy status change.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeployPolicyNotificationEvent</code>
 */
class DeployPolicyNotificationEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Debug message for when a deploy policy fails to send a pub/sub
     * notification.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * The name of the `DeployPolicy`.
     *
     * Generated from protobuf field <code>string deploy_policy = 2;</code>
     */
    protected $deploy_policy = '';
    /**
     * Unique identifier of the deploy policy.
     *
     * Generated from protobuf field <code>string deploy_policy_uid = 3;</code>
     */
    protected $deploy_policy_uid = '';
    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 4;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Debug message for when a deploy policy fails to send a pub/sub
     *           notification.
     *     @type string $deploy_policy
     *           The name of the `DeployPolicy`.
     *     @type string $deploy_policy_uid
     *           Unique identifier of the deploy policy.
     *     @type int $type
     *           Type of this notification, e.g. for a Pub/Sub failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\DeploypolicyNotificationPayload::initOnce();
        parent::__construct($data);
    }

    /**
     * Debug message for when a deploy policy fails to send a pub/sub
     * notification.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Debug message for when a deploy policy fails to send a pub/sub
     * notification.
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
     * The name of the `DeployPolicy`.
     *
     * Generated from protobuf field <code>string deploy_policy = 2;</code>
     * @return string
     */
    public function getDeployPolicy()
    {
        return $this->deploy_policy;
    }

    /**
     * The name of the `DeployPolicy`.
     *
     * Generated from protobuf field <code>string deploy_policy = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->deploy_policy = $var;

        return $this;
    }

    /**
     * Unique identifier of the deploy policy.
     *
     * Generated from protobuf field <code>string deploy_policy_uid = 3;</code>
     * @return string
     */
    public function getDeployPolicyUid()
    {
        return $this->deploy_policy_uid;
    }

    /**
     * Unique identifier of the deploy policy.
     *
     * Generated from protobuf field <code>string deploy_policy_uid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployPolicyUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->deploy_policy_uid = $var;

        return $this;
    }

    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 4;</code>
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

