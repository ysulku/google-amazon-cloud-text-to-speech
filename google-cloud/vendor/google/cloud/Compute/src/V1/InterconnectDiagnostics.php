<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Diagnostics information about interconnect, contains detailed and current technical information about Google's side of the connection.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectDiagnostics</code>
 */
class InterconnectDiagnostics extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing individual neighbors currently seen by the Google router in the ARP cache for the Interconnect. This will be empty when the Interconnect is not bundled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 414591761;</code>
     */
    private $arp_caches;
    /**
     * A list of InterconnectDiagnostics.LinkStatus objects, describing the status for each link on the Interconnect.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsLinkStatus links = 102977465;</code>
     */
    private $links;
    /**
     * The MAC address of the Interconnect's bundle interface.
     *
     * Generated from protobuf field <code>string mac_address = 332540164;</code>
     */
    private $mac_address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry[]|\Google\Protobuf\Internal\RepeatedField $arp_caches
     *           A list of InterconnectDiagnostics.ARPEntry objects, describing individual neighbors currently seen by the Google router in the ARP cache for the Interconnect. This will be empty when the Interconnect is not bundled.
     *     @type \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkStatus[]|\Google\Protobuf\Internal\RepeatedField $links
     *           A list of InterconnectDiagnostics.LinkStatus objects, describing the status for each link on the Interconnect.
     *     @type string $mac_address
     *           The MAC address of the Interconnect's bundle interface.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing individual neighbors currently seen by the Google router in the ARP cache for the Interconnect. This will be empty when the Interconnect is not bundled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 414591761;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArpCaches()
    {
        return $this->arp_caches;
    }

    /**
     * A list of InterconnectDiagnostics.ARPEntry objects, describing individual neighbors currently seen by the Google router in the ARP cache for the Interconnect. This will be empty when the Interconnect is not bundled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsARPEntry arp_caches = 414591761;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArpCaches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectDiagnosticsARPEntry::class);
        $this->arp_caches = $arr;

        return $this;
    }

    /**
     * A list of InterconnectDiagnostics.LinkStatus objects, describing the status for each link on the Interconnect.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsLinkStatus links = 102977465;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * A list of InterconnectDiagnostics.LinkStatus objects, describing the status for each link on the Interconnect.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectDiagnosticsLinkStatus links = 102977465;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkStatus::class);
        $this->links = $arr;

        return $this;
    }

    /**
     * The MAC address of the Interconnect's bundle interface.
     *
     * Generated from protobuf field <code>string mac_address = 332540164;</code>
     * @return string
     */
    public function getMacAddress()
    {
        return isset($this->mac_address) ? $this->mac_address : '';
    }

    public function hasMacAddress()
    {
        return isset($this->mac_address);
    }

    public function clearMacAddress()
    {
        unset($this->mac_address);
    }

    /**
     * The MAC address of the Interconnect's bundle interface.
     *
     * Generated from protobuf field <code>string mac_address = 332540164;</code>
     * @param string $var
     * @return $this
     */
    public function setMacAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->mac_address = $var;

        return $this;
    }

}

