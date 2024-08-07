<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object for `CreateDeliveryPipeline`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CreateDeliveryPipelineRequest</code>
 */
class CreateDeliveryPipelineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent collection in which the `DeliveryPipeline` must be
     * created. The format is `projects/{project_id}/locations/{location_name}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. ID of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string delivery_pipeline_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $delivery_pipeline_id = '';
    /**
     * Required. The `DeliveryPipeline` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipeline delivery_pipeline = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $delivery_pipeline = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server knows to ignore the
     * request if it has already been completed. The server guarantees that for
     * at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                   $parent             Required. The parent collection in which the `DeliveryPipeline` must be
     *                                                                     created. The format is `projects/{project_id}/locations/{location_name}`. Please see
     *                                                                     {@see CloudDeployClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Deploy\V1\DeliveryPipeline $deliveryPipeline   Required. The `DeliveryPipeline` to create.
     * @param string                                   $deliveryPipelineId Required. ID of the `DeliveryPipeline`.
     *
     * @return \Google\Cloud\Deploy\V1\CreateDeliveryPipelineRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Deploy\V1\DeliveryPipeline $deliveryPipeline, string $deliveryPipelineId): self
    {
        return (new self())
            ->setParent($parent)
            ->setDeliveryPipeline($deliveryPipeline)
            ->setDeliveryPipelineId($deliveryPipelineId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent collection in which the `DeliveryPipeline` must be
     *           created. The format is `projects/{project_id}/locations/{location_name}`.
     *     @type string $delivery_pipeline_id
     *           Required. ID of the `DeliveryPipeline`.
     *     @type \Google\Cloud\Deploy\V1\DeliveryPipeline $delivery_pipeline
     *           Required. The `DeliveryPipeline` to create.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server knows to ignore the
     *           request if it has already been completed. The server guarantees that for
     *           at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set to true, the request is validated and the user is provided
     *           with an expected result, but no actual change is made.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent collection in which the `DeliveryPipeline` must be
     * created. The format is `projects/{project_id}/locations/{location_name}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent collection in which the `DeliveryPipeline` must be
     * created. The format is `projects/{project_id}/locations/{location_name}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. ID of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string delivery_pipeline_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeliveryPipelineId()
    {
        return $this->delivery_pipeline_id;
    }

    /**
     * Required. ID of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string delivery_pipeline_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveryPipelineId($var)
    {
        GPBUtil::checkString($var, True);
        $this->delivery_pipeline_id = $var;

        return $this;
    }

    /**
     * Required. The `DeliveryPipeline` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipeline delivery_pipeline = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Deploy\V1\DeliveryPipeline|null
     */
    public function getDeliveryPipeline()
    {
        return $this->delivery_pipeline;
    }

    public function hasDeliveryPipeline()
    {
        return isset($this->delivery_pipeline);
    }

    public function clearDeliveryPipeline()
    {
        unset($this->delivery_pipeline);
    }

    /**
     * Required. The `DeliveryPipeline` to create.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipeline delivery_pipeline = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Deploy\V1\DeliveryPipeline $var
     * @return $this
     */
    public function setDeliveryPipeline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DeliveryPipeline::class);
        $this->delivery_pipeline = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server knows to ignore the
     * request if it has already been completed. The server guarantees that for
     * at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server knows to ignore the
     * request if it has already been completed. The server guarantees that for
     * at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set to true, the request is validated and the user is provided
     * with an expected result, but no actual change is made.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

