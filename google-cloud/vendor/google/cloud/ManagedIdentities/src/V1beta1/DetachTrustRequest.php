<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DetachTrust][google.cloud.managedidentities.v1beta1.DetachTrust]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1beta1.DetachTrustRequest</code>
 */
class DetachTrustRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource domain name, project name, and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The domain trust resource to removed.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Trust trust = 2;</code>
     */
    private $trust = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource domain name, project name, and location using the form:
     *           `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type \Google\Cloud\ManagedIdentities\V1beta1\Trust $trust
     *           The domain trust resource to removed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1Beta1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource domain name, project name, and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource domain name, project name, and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The domain trust resource to removed.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Trust trust = 2;</code>
     * @return \Google\Cloud\ManagedIdentities\V1beta1\Trust|null
     */
    public function getTrust()
    {
        return isset($this->trust) ? $this->trust : null;
    }

    public function hasTrust()
    {
        return isset($this->trust);
    }

    public function clearTrust()
    {
        unset($this->trust);
    }

    /**
     * The domain trust resource to removed.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Trust trust = 2;</code>
     * @param \Google\Cloud\ManagedIdentities\V1beta1\Trust $var
     * @return $this
     */
    public function setTrust($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedIdentities\V1beta1\Trust::class);
        $this->trust = $var;

        return $this;
    }

}

