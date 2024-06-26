<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/app_connectors_service.proto

namespace Google\Cloud\BeyondCorp\AppConnectors\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BeyondCorp.GetAppConnector.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnectors.v1.GetAppConnectorRequest</code>
 */
class GetAppConnectorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. BeyondCorp AppConnector name using the form:
     * `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. BeyondCorp AppConnector name using the form:
     *                     `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *                     Please see {@see AppConnectorsServiceClient::appConnectorName()} for help formatting this field.
     *
     * @return \Google\Cloud\BeyondCorp\AppConnectors\V1\GetAppConnectorRequest
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
     *           Required. BeyondCorp AppConnector name using the form:
     *           `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1\AppConnectorsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. BeyondCorp AppConnector name using the form:
     * `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. BeyondCorp AppConnector name using the form:
     * `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
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

