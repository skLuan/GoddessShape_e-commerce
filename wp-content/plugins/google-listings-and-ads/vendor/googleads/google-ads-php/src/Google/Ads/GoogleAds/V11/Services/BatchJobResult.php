<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/batch_job_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual batch job result.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.BatchJobResult</code>
 */
class BatchJobResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Index of the mutate operation.
     *
     * Generated from protobuf field <code>int64 operation_index = 1;</code>
     */
    protected $operation_index = 0;
    /**
     * Response for the mutate.
     * May be empty if errors occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.services.MutateOperationResponse mutate_operation_response = 2;</code>
     */
    protected $mutate_operation_response = null;
    /**
     * Details of the errors when processing the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $operation_index
     *           Index of the mutate operation.
     *     @type \Google\Ads\GoogleAds\V11\Services\MutateOperationResponse $mutate_operation_response
     *           Response for the mutate.
     *           May be empty if errors occurred.
     *     @type \Google\Rpc\Status $status
     *           Details of the errors when processing the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\BatchJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Index of the mutate operation.
     *
     * Generated from protobuf field <code>int64 operation_index = 1;</code>
     * @return int|string
     */
    public function getOperationIndex()
    {
        return $this->operation_index;
    }

    /**
     * Index of the mutate operation.
     *
     * Generated from protobuf field <code>int64 operation_index = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOperationIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->operation_index = $var;

        return $this;
    }

    /**
     * Response for the mutate.
     * May be empty if errors occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.services.MutateOperationResponse mutate_operation_response = 2;</code>
     * @return \Google\Ads\GoogleAds\V11\Services\MutateOperationResponse|null
     */
    public function getMutateOperationResponse()
    {
        return $this->mutate_operation_response;
    }

    public function hasMutateOperationResponse()
    {
        return isset($this->mutate_operation_response);
    }

    public function clearMutateOperationResponse()
    {
        unset($this->mutate_operation_response);
    }

    /**
     * Response for the mutate.
     * May be empty if errors occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.services.MutateOperationResponse mutate_operation_response = 2;</code>
     * @param \Google\Ads\GoogleAds\V11\Services\MutateOperationResponse $var
     * @return $this
     */
    public function setMutateOperationResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Services\MutateOperationResponse::class);
        $this->mutate_operation_response = $var;

        return $this;
    }

    /**
     * Details of the errors when processing the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Details of the errors when processing the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

