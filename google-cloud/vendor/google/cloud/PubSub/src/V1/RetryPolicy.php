<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A policy that specifies how Cloud Pub/Sub retries message delivery.
 * Retry delay will be exponential based on provided minimum and maximum
 * backoffs. https://en.wikipedia.org/wiki/Exponential_backoff.
 * RetryPolicy will be triggered on NACKs or acknowledgement deadline exceeded
 * events for a given message.
 * Retry Policy is implemented on a best effort basis. At times, the delay
 * between consecutive deliveries may not match the configuration. That is,
 * delay can be more or less than configured backoff.
 *
 * Generated from protobuf message <code>google.pubsub.v1.RetryPolicy</code>
 */
class RetryPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum delay between consecutive deliveries of a given message.
     * Value should be between 0 and 600 seconds. Defaults to 10 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration minimum_backoff = 1;</code>
     */
    private $minimum_backoff = null;
    /**
     * The maximum delay between consecutive deliveries of a given message.
     * Value should be between 0 and 600 seconds. Defaults to 600 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_backoff = 2;</code>
     */
    private $maximum_backoff = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $minimum_backoff
     *           The minimum delay between consecutive deliveries of a given message.
     *           Value should be between 0 and 600 seconds. Defaults to 10 seconds.
     *     @type \Google\Protobuf\Duration $maximum_backoff
     *           The maximum delay between consecutive deliveries of a given message.
     *           Value should be between 0 and 600 seconds. Defaults to 600 seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum delay between consecutive deliveries of a given message.
     * Value should be between 0 and 600 seconds. Defaults to 10 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration minimum_backoff = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinimumBackoff()
    {
        return isset($this->minimum_backoff) ? $this->minimum_backoff : null;
    }

    public function hasMinimumBackoff()
    {
        return isset($this->minimum_backoff);
    }

    public function clearMinimumBackoff()
    {
        unset($this->minimum_backoff);
    }

    /**
     * The minimum delay between consecutive deliveries of a given message.
     * Value should be between 0 and 600 seconds. Defaults to 10 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration minimum_backoff = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinimumBackoff($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->minimum_backoff = $var;

        return $this;
    }

    /**
     * The maximum delay between consecutive deliveries of a given message.
     * Value should be between 0 and 600 seconds. Defaults to 600 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_backoff = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaximumBackoff()
    {
        return isset($this->maximum_backoff) ? $this->maximum_backoff : null;
    }

    public function hasMaximumBackoff()
    {
        return isset($this->maximum_backoff);
    }

    public function clearMaximumBackoff()
    {
        unset($this->maximum_backoff);
    }

    /**
     * The maximum delay between consecutive deliveries of a given message.
     * Value should be between 0 and 600 seconds. Defaults to 600 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_backoff = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaximumBackoff($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->maximum_backoff = $var;

        return $this;
    }

}
