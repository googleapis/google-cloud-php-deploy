<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object for `GetDeployPolicy`
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.GetDeployPolicyRequest</code>
 */
class GetDeployPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the `DeployPolicy`. Format must be
     * `projects/{project_id}/locations/{location_name}/deployPolicies/{deploy_policy_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the `DeployPolicy`. Format must be
     *                     `projects/{project_id}/locations/{location_name}/deployPolicies/{deploy_policy_name}`. Please see
     *                     {@see CloudDeployClient::deployPolicyName()} for help formatting this field.
     *
     * @return \Google\Cloud\Deploy\V1\GetDeployPolicyRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the `DeployPolicy`. Format must be
     *           `projects/{project_id}/locations/{location_name}/deployPolicies/{deploy_policy_name}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the `DeployPolicy`. Format must be
     * `projects/{project_id}/locations/{location_name}/deployPolicies/{deploy_policy_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the `DeployPolicy`. Format must be
     * `projects/{project_id}/locations/{location_name}/deployPolicies/{deploy_policy_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

