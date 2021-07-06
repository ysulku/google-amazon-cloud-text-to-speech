<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An [X509Parameters][google.cloud.security.privateca.v1.X509Parameters] is used to describe certain fields of an
 * X.509 certificate, such as the key usage fields, fields specific to CA
 * certificates, certificate policy extensions and custom extensions.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.X509Parameters</code>
 */
class X509Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Indicates the intended use for keys that correspond to a certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage key_usage = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $key_usage = null;
    /**
     * Optional. Describes options in this [X509Parameters][google.cloud.security.privateca.v1.X509Parameters] that are relevant in a CA
     * certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters.CaOptions ca_options = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ca_options = null;
    /**
     * Optional. Describes the X.509 certificate policy object identifiers, per
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.4.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.ObjectId policy_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $policy_ids;
    /**
     * Optional. Describes Online Certificate Status Protocol (OCSP) endpoint addresses
     * that appear in the "Authority Information Access" extension in the
     * certificate.
     *
     * Generated from protobuf field <code>repeated string aia_ocsp_servers = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $aia_ocsp_servers;
    /**
     * Optional. Describes custom X.509 extensions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.X509Extension additional_extensions = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $additional_extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\KeyUsage $key_usage
     *           Optional. Indicates the intended use for keys that correspond to a certificate.
     *     @type \Google\Cloud\Security\PrivateCA\V1\X509Parameters\CaOptions $ca_options
     *           Optional. Describes options in this [X509Parameters][google.cloud.security.privateca.v1.X509Parameters] that are relevant in a CA
     *           certificate.
     *     @type \Google\Cloud\Security\PrivateCA\V1\ObjectId[]|\Google\Protobuf\Internal\RepeatedField $policy_ids
     *           Optional. Describes the X.509 certificate policy object identifiers, per
     *           https://tools.ietf.org/html/rfc5280#section-4.2.1.4.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $aia_ocsp_servers
     *           Optional. Describes Online Certificate Status Protocol (OCSP) endpoint addresses
     *           that appear in the "Authority Information Access" extension in the
     *           certificate.
     *     @type \Google\Cloud\Security\PrivateCA\V1\X509Extension[]|\Google\Protobuf\Internal\RepeatedField $additional_extensions
     *           Optional. Describes custom X.509 extensions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Indicates the intended use for keys that correspond to a certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage key_usage = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\KeyUsage|null
     */
    public function getKeyUsage()
    {
        return isset($this->key_usage) ? $this->key_usage : null;
    }

    public function hasKeyUsage()
    {
        return isset($this->key_usage);
    }

    public function clearKeyUsage()
    {
        unset($this->key_usage);
    }

    /**
     * Optional. Indicates the intended use for keys that correspond to a certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage key_usage = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\KeyUsage $var
     * @return $this
     */
    public function setKeyUsage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\KeyUsage::class);
        $this->key_usage = $var;

        return $this;
    }

    /**
     * Optional. Describes options in this [X509Parameters][google.cloud.security.privateca.v1.X509Parameters] that are relevant in a CA
     * certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters.CaOptions ca_options = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\X509Parameters\CaOptions|null
     */
    public function getCaOptions()
    {
        return isset($this->ca_options) ? $this->ca_options : null;
    }

    public function hasCaOptions()
    {
        return isset($this->ca_options);
    }

    public function clearCaOptions()
    {
        unset($this->ca_options);
    }

    /**
     * Optional. Describes options in this [X509Parameters][google.cloud.security.privateca.v1.X509Parameters] that are relevant in a CA
     * certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters.CaOptions ca_options = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\X509Parameters\CaOptions $var
     * @return $this
     */
    public function setCaOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\X509Parameters\CaOptions::class);
        $this->ca_options = $var;

        return $this;
    }

    /**
     * Optional. Describes the X.509 certificate policy object identifiers, per
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.4.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.ObjectId policy_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyIds()
    {
        return $this->policy_ids;
    }

    /**
     * Optional. Describes the X.509 certificate policy object identifiers, per
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.4.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.ObjectId policy_ids = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\ObjectId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1\ObjectId::class);
        $this->policy_ids = $arr;

        return $this;
    }

    /**
     * Optional. Describes Online Certificate Status Protocol (OCSP) endpoint addresses
     * that appear in the "Authority Information Access" extension in the
     * certificate.
     *
     * Generated from protobuf field <code>repeated string aia_ocsp_servers = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAiaOcspServers()
    {
        return $this->aia_ocsp_servers;
    }

    /**
     * Optional. Describes Online Certificate Status Protocol (OCSP) endpoint addresses
     * that appear in the "Authority Information Access" extension in the
     * certificate.
     *
     * Generated from protobuf field <code>repeated string aia_ocsp_servers = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAiaOcspServers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->aia_ocsp_servers = $arr;

        return $this;
    }

    /**
     * Optional. Describes custom X.509 extensions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.X509Extension additional_extensions = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalExtensions()
    {
        return $this->additional_extensions;
    }

    /**
     * Optional. Describes custom X.509 extensions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.X509Extension additional_extensions = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\X509Extension[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalExtensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1\X509Extension::class);
        $this->additional_extensions = $arr;

        return $this;
    }

}

