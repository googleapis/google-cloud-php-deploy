<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\KubernetesConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the Kubernetes Gateway API service mesh configuration.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.KubernetesConfig.GatewayServiceMesh</code>
 */
class GatewayServiceMesh extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Gateway API HTTPRoute.
     *
     * Generated from protobuf field <code>string http_route = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $http_route = '';
    /**
     * Required. Name of the Kubernetes Service.
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service = '';
    /**
     * Required. Name of the Kubernetes Deployment whose traffic is managed by
     * the specified HTTPRoute and Service.
     *
     * Generated from protobuf field <code>string deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment = '';
    /**
     * Optional. The time to wait for route updates to propagate. The maximum
     * configurable time is 3 hours, in seconds format. If unspecified, there is
     * no wait time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration route_update_wait_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $route_update_wait_time = null;
    /**
     * Optional. The amount of time to migrate traffic back from the canary
     * Service to the original Service during the stable phase deployment. If
     * specified, must be between 15s and 3600s. If unspecified, there is no
     * cutback time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stable_cutback_duration = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $stable_cutback_duration = null;
    /**
     * Optional. The label to use when selecting Pods for the Deployment and
     * Service resources. This label must already be present in both resources.
     *
     * Generated from protobuf field <code>string pod_selector_label = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $pod_selector_label = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $http_route
     *           Required. Name of the Gateway API HTTPRoute.
     *     @type string $service
     *           Required. Name of the Kubernetes Service.
     *     @type string $deployment
     *           Required. Name of the Kubernetes Deployment whose traffic is managed by
     *           the specified HTTPRoute and Service.
     *     @type \Google\Protobuf\Duration $route_update_wait_time
     *           Optional. The time to wait for route updates to propagate. The maximum
     *           configurable time is 3 hours, in seconds format. If unspecified, there is
     *           no wait time.
     *     @type \Google\Protobuf\Duration $stable_cutback_duration
     *           Optional. The amount of time to migrate traffic back from the canary
     *           Service to the original Service during the stable phase deployment. If
     *           specified, must be between 15s and 3600s. If unspecified, there is no
     *           cutback time.
     *     @type string $pod_selector_label
     *           Optional. The label to use when selecting Pods for the Deployment and
     *           Service resources. This label must already be present in both resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Gateway API HTTPRoute.
     *
     * Generated from protobuf field <code>string http_route = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHttpRoute()
    {
        return $this->http_route;
    }

    /**
     * Required. Name of the Gateway API HTTPRoute.
     *
     * Generated from protobuf field <code>string http_route = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHttpRoute($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_route = $var;

        return $this;
    }

    /**
     * Required. Name of the Kubernetes Service.
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. Name of the Kubernetes Service.
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Required. Name of the Kubernetes Deployment whose traffic is managed by
     * the specified HTTPRoute and Service.
     *
     * Generated from protobuf field <code>string deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * Required. Name of the Kubernetes Deployment whose traffic is managed by
     * the specified HTTPRoute and Service.
     *
     * Generated from protobuf field <code>string deployment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment = $var;

        return $this;
    }

    /**
     * Optional. The time to wait for route updates to propagate. The maximum
     * configurable time is 3 hours, in seconds format. If unspecified, there is
     * no wait time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration route_update_wait_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRouteUpdateWaitTime()
    {
        return $this->route_update_wait_time;
    }

    public function hasRouteUpdateWaitTime()
    {
        return isset($this->route_update_wait_time);
    }

    public function clearRouteUpdateWaitTime()
    {
        unset($this->route_update_wait_time);
    }

    /**
     * Optional. The time to wait for route updates to propagate. The maximum
     * configurable time is 3 hours, in seconds format. If unspecified, there is
     * no wait time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration route_update_wait_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRouteUpdateWaitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->route_update_wait_time = $var;

        return $this;
    }

    /**
     * Optional. The amount of time to migrate traffic back from the canary
     * Service to the original Service during the stable phase deployment. If
     * specified, must be between 15s and 3600s. If unspecified, there is no
     * cutback time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stable_cutback_duration = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStableCutbackDuration()
    {
        return $this->stable_cutback_duration;
    }

    public function hasStableCutbackDuration()
    {
        return isset($this->stable_cutback_duration);
    }

    public function clearStableCutbackDuration()
    {
        unset($this->stable_cutback_duration);
    }

    /**
     * Optional. The amount of time to migrate traffic back from the canary
     * Service to the original Service during the stable phase deployment. If
     * specified, must be between 15s and 3600s. If unspecified, there is no
     * cutback time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stable_cutback_duration = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStableCutbackDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->stable_cutback_duration = $var;

        return $this;
    }

    /**
     * Optional. The label to use when selecting Pods for the Deployment and
     * Service resources. This label must already be present in both resources.
     *
     * Generated from protobuf field <code>string pod_selector_label = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPodSelectorLabel()
    {
        return $this->pod_selector_label;
    }

    /**
     * Optional. The label to use when selecting Pods for the Deployment and
     * Service resources. This label must already be present in both resources.
     *
     * Generated from protobuf field <code>string pod_selector_label = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPodSelectorLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->pod_selector_label = $var;

        return $this;
    }

}


