<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/resource_info.proto

namespace Google\Cloud\BeyondCorp\AppConnectors\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceInfo represents the information/status of an app connector resource.
 * Such as:
 * - remote_agent
 *   - container
 *     - runtime
 *     - appgateway
 *       - appconnector
 *         - appconnection
 *           - tunnel
 *       - logagent
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnectors.v1.ResourceInfo</code>
 */
class ResourceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Unique Id for the resource.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Overall health status. Overall status is derived based on the status of
     * each sub level resources.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.HealthStatus status = 2;</code>
     */
    protected $status = 0;
    /**
     * Specific details for the resource. This is for internal use only.
     *
     * Generated from protobuf field <code>.google.protobuf.Any resource = 3;</code>
     */
    protected $resource = null;
    /**
     * The timestamp to collect the info. It is suggested to be set by
     * the topmost level resource only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4;</code>
     */
    protected $time = null;
    /**
     * List of Info for the sub level resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.beyondcorp.appconnectors.v1.ResourceInfo sub = 5;</code>
     */
    private $sub;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. Unique Id for the resource.
     *     @type int $status
     *           Overall health status. Overall status is derived based on the status of
     *           each sub level resources.
     *     @type \Google\Protobuf\Any $resource
     *           Specific details for the resource. This is for internal use only.
     *     @type \Google\Protobuf\Timestamp $time
     *           The timestamp to collect the info. It is suggested to be set by
     *           the topmost level resource only.
     *     @type array<\Google\Cloud\BeyondCorp\AppConnectors\V1\ResourceInfo>|\Google\Protobuf\Internal\RepeatedField $sub
     *           List of Info for the sub level resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1\ResourceInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Unique Id for the resource.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. Unique Id for the resource.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Overall health status. Overall status is derived based on the status of
     * each sub level resources.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.HealthStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Overall health status. Overall status is derived based on the status of
     * each sub level resources.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.HealthStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BeyondCorp\AppConnectors\V1\HealthStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Specific details for the resource. This is for internal use only.
     *
     * Generated from protobuf field <code>.google.protobuf.Any resource = 3;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Specific details for the resource. This is for internal use only.
     *
     * Generated from protobuf field <code>.google.protobuf.Any resource = 3;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * The timestamp to collect the info. It is suggested to be set by
     * the topmost level resource only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     * The timestamp to collect the info. It is suggested to be set by
     * the topmost level resource only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     * List of Info for the sub level resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.beyondcorp.appconnectors.v1.ResourceInfo sub = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * List of Info for the sub level resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.beyondcorp.appconnectors.v1.ResourceInfo sub = 5;</code>
     * @param array<\Google\Cloud\BeyondCorp\AppConnectors\V1\ResourceInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSub($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BeyondCorp\AppConnectors\V1\ResourceInfo::class);
        $this->sub = $arr;

        return $this;
    }

}

