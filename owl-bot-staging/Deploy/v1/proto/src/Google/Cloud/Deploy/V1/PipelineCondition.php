<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PipelineCondition contains all conditions relevant to a Delivery Pipeline.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.PipelineCondition</code>
 */
class PipelineCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Details around the Pipeline's overall status.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PipelineReadyCondition pipeline_ready_condition = 1;</code>
     */
    protected $pipeline_ready_condition = null;
    /**
     * Detalis around targets enumerated in the pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 3;</code>
     */
    protected $targets_present_condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\PipelineReadyCondition $pipeline_ready_condition
     *           Details around the Pipeline's overall status.
     *     @type \Google\Cloud\Deploy\V1\TargetsPresentCondition $targets_present_condition
     *           Detalis around targets enumerated in the pipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Details around the Pipeline's overall status.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PipelineReadyCondition pipeline_ready_condition = 1;</code>
     * @return \Google\Cloud\Deploy\V1\PipelineReadyCondition|null
     */
    public function getPipelineReadyCondition()
    {
        return $this->pipeline_ready_condition;
    }

    public function hasPipelineReadyCondition()
    {
        return isset($this->pipeline_ready_condition);
    }

    public function clearPipelineReadyCondition()
    {
        unset($this->pipeline_ready_condition);
    }

    /**
     * Details around the Pipeline's overall status.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PipelineReadyCondition pipeline_ready_condition = 1;</code>
     * @param \Google\Cloud\Deploy\V1\PipelineReadyCondition $var
     * @return $this
     */
    public function setPipelineReadyCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\PipelineReadyCondition::class);
        $this->pipeline_ready_condition = $var;

        return $this;
    }

    /**
     * Detalis around targets enumerated in the pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 3;</code>
     * @return \Google\Cloud\Deploy\V1\TargetsPresentCondition|null
     */
    public function getTargetsPresentCondition()
    {
        return $this->targets_present_condition;
    }

    public function hasTargetsPresentCondition()
    {
        return isset($this->targets_present_condition);
    }

    public function clearTargetsPresentCondition()
    {
        unset($this->targets_present_condition);
    }

    /**
     * Detalis around targets enumerated in the pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 3;</code>
     * @param \Google\Cloud\Deploy\V1\TargetsPresentCondition $var
     * @return $this
     */
    public function setTargetsPresentCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\TargetsPresentCondition::class);
        $this->targets_present_condition = $var;

        return $this;
    }

}
