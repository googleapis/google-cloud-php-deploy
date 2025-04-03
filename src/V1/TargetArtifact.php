<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The artifacts produced by a target render operation.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.TargetArtifact</code>
 */
class TargetArtifact extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. File path of the resolved Skaffold configuration for the
     * stable phase, relative to the URI.
     *
     * Generated from protobuf field <code>string skaffold_config_path = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $skaffold_config_path = '';
    /**
     * Output only. File path of the rendered manifest relative to the URI for the
     * stable phase.
     *
     * Generated from protobuf field <code>string manifest_path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manifest_path = '';
    /**
     * Output only. Map from the phase ID to the phase artifacts for the `Target`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.TargetArtifact.PhaseArtifact> phase_artifacts = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $phase_artifacts;
    protected $uri;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $artifact_uri
     *           Output only. URI of a directory containing the artifacts. This contains
     *           deployment configuration used by Skaffold during a rollout, and all
     *           paths are relative to this location.
     *     @type string $skaffold_config_path
     *           Output only. File path of the resolved Skaffold configuration for the
     *           stable phase, relative to the URI.
     *     @type string $manifest_path
     *           Output only. File path of the rendered manifest relative to the URI for the
     *           stable phase.
     *     @type array|\Google\Protobuf\Internal\MapField $phase_artifacts
     *           Output only. Map from the phase ID to the phase artifacts for the `Target`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. URI of a directory containing the artifacts. This contains
     * deployment configuration used by Skaffold during a rollout, and all
     * paths are relative to this location.
     *
     * Generated from protobuf field <code>string artifact_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getArtifactUri()
    {
        return $this->readOneof(4);
    }

    public function hasArtifactUri()
    {
        return $this->hasOneof(4);
    }

    /**
     * Output only. URI of a directory containing the artifacts. This contains
     * deployment configuration used by Skaffold during a rollout, and all
     * paths are relative to this location.
     *
     * Generated from protobuf field <code>string artifact_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. File path of the resolved Skaffold configuration for the
     * stable phase, relative to the URI.
     *
     * Generated from protobuf field <code>string skaffold_config_path = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSkaffoldConfigPath()
    {
        return $this->skaffold_config_path;
    }

    /**
     * Output only. File path of the resolved Skaffold configuration for the
     * stable phase, relative to the URI.
     *
     * Generated from protobuf field <code>string skaffold_config_path = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSkaffoldConfigPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->skaffold_config_path = $var;

        return $this;
    }

    /**
     * Output only. File path of the rendered manifest relative to the URI for the
     * stable phase.
     *
     * Generated from protobuf field <code>string manifest_path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getManifestPath()
    {
        return $this->manifest_path;
    }

    /**
     * Output only. File path of the rendered manifest relative to the URI for the
     * stable phase.
     *
     * Generated from protobuf field <code>string manifest_path = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setManifestPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->manifest_path = $var;

        return $this;
    }

    /**
     * Output only. Map from the phase ID to the phase artifacts for the `Target`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.TargetArtifact.PhaseArtifact> phase_artifacts = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPhaseArtifacts()
    {
        return $this->phase_artifacts;
    }

    /**
     * Output only. Map from the phase ID to the phase artifacts for the `Target`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.TargetArtifact.PhaseArtifact> phase_artifacts = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPhaseArtifacts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\TargetArtifact\PhaseArtifact::class);
        $this->phase_artifacts = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->whichOneof("uri");
    }

}

