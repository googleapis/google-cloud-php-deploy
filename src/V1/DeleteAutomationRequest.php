<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object for `DeleteAutomation`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeleteAutomationRequest</code>
 */
class DeleteAutomationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the `Automation` to delete. Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/automations/{automation_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
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
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';
    /**
     * Optional. If set to true, then deleting an already deleted or non-existing
     * `Automation` will succeed.
     *
     * Generated from protobuf field <code>bool allow_missing = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allow_missing = false;
    /**
     * Optional. If set, validate the request and verify whether the resource
     * exists, but do not actually post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;
    /**
     * Optional. The weak etag of the request.
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';

    /**
     * @param string $name Required. The name of the `Automation` to delete. Format should be
     *                     `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/automations/{automation_name}`. Please see
     *                     {@see CloudDeployClient::automationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Deploy\V1\DeleteAutomationRequest
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
     *           Required. The name of the `Automation` to delete. Format should be
     *           `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/automations/{automation_name}`.
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
     *     @type bool $allow_missing
     *           Optional. If set to true, then deleting an already deleted or non-existing
     *           `Automation` will succeed.
     *     @type bool $validate_only
     *           Optional. If set, validate the request and verify whether the resource
     *           exists, but do not actually post it.
     *     @type string $etag
     *           Optional. The weak etag of the request.
     *           This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the `Automation` to delete. Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/automations/{automation_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the `Automation` to delete. Format should be
     * `projects/{project_id}/locations/{location_name}/deliveryPipelines/{pipeline_name}/automations/{automation_name}`.
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
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. If set to true, then deleting an already deleted or non-existing
     * `Automation` will succeed.
     *
     * Generated from protobuf field <code>bool allow_missing = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * Optional. If set to true, then deleting an already deleted or non-existing
     * `Automation` will succeed.
     *
     * Generated from protobuf field <code>bool allow_missing = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

    /**
     * Optional. If set, validate the request and verify whether the resource
     * exists, but do not actually post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, validate the request and verify whether the resource
     * exists, but do not actually post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. The weak etag of the request.
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The weak etag of the request.
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

