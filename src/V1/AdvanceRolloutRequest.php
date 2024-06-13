<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object used by `AdvanceRollout`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AdvanceRolloutRequest</code>
 */
class AdvanceRolloutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Rollout. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The phase ID to advance the `Rollout` to.
     *
     * Generated from protobuf field <code>string phase_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $phase_id = '';

    /**
     * @param string $name    Required. Name of the Rollout. Format is
     *                        `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`. Please see
     *                        {@see CloudDeployClient::rolloutName()} for help formatting this field.
     * @param string $phaseId Required. The phase ID to advance the `Rollout` to.
     *
     * @return \Google\Cloud\Deploy\V1\AdvanceRolloutRequest
     *
     * @experimental
     */
    public static function build(string $name, string $phaseId): self
    {
        return (new self())
            ->setName($name)
            ->setPhaseId($phaseId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the Rollout. Format is
     *           `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
     *     @type string $phase_id
     *           Required. The phase ID to advance the `Rollout` to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Rollout. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the Rollout. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
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

    /**
     * Required. The phase ID to advance the `Rollout` to.
     *
     * Generated from protobuf field <code>string phase_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPhaseId()
    {
        return $this->phase_id;
    }

    /**
     * Required. The phase ID to advance the `Rollout` to.
     *
     * Generated from protobuf field <code>string phase_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPhaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->phase_id = $var;

        return $this;
    }

}

