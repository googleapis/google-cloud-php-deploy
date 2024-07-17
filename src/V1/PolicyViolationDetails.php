<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Policy violation details.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.PolicyViolationDetails</code>
 */
class PolicyViolationDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the policy that was violated.
     * Policy resource will be in the format of
     * `projects/{project}/locations/{location}/policies/{policy}`.
     *
     * Generated from protobuf field <code>string policy = 1;</code>
     */
    protected $policy = '';
    /**
     * Id of the rule that triggered the policy violation.
     *
     * Generated from protobuf field <code>string rule_id = 2;</code>
     */
    protected $rule_id = '';
    /**
     * User readable message about why the request violated a policy. This is not
     * intended for machine parsing.
     *
     * Generated from protobuf field <code>string failure_message = 3;</code>
     */
    protected $failure_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $policy
     *           Name of the policy that was violated.
     *           Policy resource will be in the format of
     *           `projects/{project}/locations/{location}/policies/{policy}`.
     *     @type string $rule_id
     *           Id of the rule that triggered the policy violation.
     *     @type string $failure_message
     *           User readable message about why the request violated a policy. This is not
     *           intended for machine parsing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the policy that was violated.
     * Policy resource will be in the format of
     * `projects/{project}/locations/{location}/policies/{policy}`.
     *
     * Generated from protobuf field <code>string policy = 1;</code>
     * @return string
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Name of the policy that was violated.
     * Policy resource will be in the format of
     * `projects/{project}/locations/{location}/policies/{policy}`.
     *
     * Generated from protobuf field <code>string policy = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->policy = $var;

        return $this;
    }

    /**
     * Id of the rule that triggered the policy violation.
     *
     * Generated from protobuf field <code>string rule_id = 2;</code>
     * @return string
     */
    public function getRuleId()
    {
        return $this->rule_id;
    }

    /**
     * Id of the rule that triggered the policy violation.
     *
     * Generated from protobuf field <code>string rule_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rule_id = $var;

        return $this;
    }

    /**
     * User readable message about why the request violated a policy. This is not
     * intended for machine parsing.
     *
     * Generated from protobuf field <code>string failure_message = 3;</code>
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failure_message;
    }

    /**
     * User readable message about why the request violated a policy. This is not
     * intended for machine parsing.
     *
     * Generated from protobuf field <code>string failure_message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFailureMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_message = $var;

        return $this;
    }

}
