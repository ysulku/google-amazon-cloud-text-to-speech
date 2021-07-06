<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The export asset response. This message is returned by the
 * [google.longrunning.Operations.GetOperation][google.longrunning.Operations.GetOperation] method in the returned
 * [google.longrunning.Operation.response][google.longrunning.Operation.response] field.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.ExportAssetsResponse</code>
 */
class ExportAssetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     */
    private $read_time = null;
    /**
     * Output configuration indicating where the results were output to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.OutputConfig output_config = 2;</code>
     */
    private $output_config = null;
    /**
     * Output result indicating where the assets were exported to. For example, a
     * set of actual Google Cloud Storage object uris where the assets are
     * exported to. The uris can be different from what [output_config] has
     * specified, as the service will split the output object into multiple ones
     * once it exceeds a single Google Cloud Storage object limit.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.OutputResult output_result = 3;</code>
     */
    private $output_result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Time the snapshot was taken.
     *     @type \Google\Cloud\Asset\V1\OutputConfig $output_config
     *           Output configuration indicating where the results were output to.
     *     @type \Google\Cloud\Asset\V1\OutputResult $output_result
     *           Output result indicating where the assets were exported to. For example, a
     *           set of actual Google Cloud Storage object uris where the assets are
     *           exported to. The uris can be different from what [output_config] has
     *           specified, as the service will split the output object into multiple ones
     *           once it exceeds a single Google Cloud Storage object limit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return isset($this->read_time) ? $this->read_time : null;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * Output configuration indicating where the results were output to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.OutputConfig output_config = 2;</code>
     * @return \Google\Cloud\Asset\V1\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return isset($this->output_config) ? $this->output_config : null;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Output configuration indicating where the results were output to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.OutputConfig output_config = 2;</code>
     * @param \Google\Cloud\Asset\V1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

    /**
     * Output result indicating where the assets were exported to. For example, a
     * set of actual Google Cloud Storage object uris where the assets are
     * exported to. The uris can be different from what [output_config] has
     * specified, as the service will split the output object into multiple ones
     * once it exceeds a single Google Cloud Storage object limit.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.OutputResult output_result = 3;</code>
     * @return \Google\Cloud\Asset\V1\OutputResult|null
     */
    public function getOutputResult()
    {
        return isset($this->output_result) ? $this->output_result : null;
    }

    public function hasOutputResult()
    {
        return isset($this->output_result);
    }

    public function clearOutputResult()
    {
        unset($this->output_result);
    }

    /**
     * Output result indicating where the assets were exported to. For example, a
     * set of actual Google Cloud Storage object uris where the assets are
     * exported to. The uris can be different from what [output_config] has
     * specified, as the service will split the output object into multiple ones
     * once it exceeds a single Google Cloud Storage object limit.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.OutputResult output_result = 3;</code>
     * @param \Google\Cloud\Asset\V1\OutputResult $var
     * @return $this
     */
    public function setOutputResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\OutputResult::class);
        $this->output_result = $var;

        return $this;
    }

}

