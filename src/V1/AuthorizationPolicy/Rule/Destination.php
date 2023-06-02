<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/authorization_policy.proto

namespace Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of traffic destination attributes.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1.AuthorizationPolicy.Rule.Destination</code>
 */
class Destination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. List of host names to match. Matched against the ":authority" header in
     * http requests. At least one host should match. Each host can be an
     * exact match, or a prefix match (example "mydomain.*") or a suffix
     * match (example "*.myorg.com") or a presence (any) match "*".
     *
     * Generated from protobuf field <code>repeated string hosts = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $hosts;
    /**
     * Required. List of destination ports to match. At least one port should match.
     *
     * Generated from protobuf field <code>repeated uint32 ports = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ports;
    /**
     * Optional. A list of HTTP methods to match. At least one method should
     * match. Should not be set for gRPC services.
     *
     * Generated from protobuf field <code>repeated string methods = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $methods;
    /**
     * Optional. Match against key:value pair in http header. Provides a flexible match
     * based on HTTP headers, for potentially advanced use cases. At least one
     * header should match. Avoid using header matches to make authorization
     * decisions unless there is a strong guarantee that requests arrive
     * through a trusted client or proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.AuthorizationPolicy.Rule.Destination.HttpHeaderMatch http_header_match = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $http_header_match = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $hosts
     *           Required. List of host names to match. Matched against the ":authority" header in
     *           http requests. At least one host should match. Each host can be an
     *           exact match, or a prefix match (example "mydomain.*") or a suffix
     *           match (example "*.myorg.com") or a presence (any) match "*".
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ports
     *           Required. List of destination ports to match. At least one port should match.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $methods
     *           Optional. A list of HTTP methods to match. At least one method should
     *           match. Should not be set for gRPC services.
     *     @type \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy\Rule\Destination\HttpHeaderMatch $http_header_match
     *           Optional. Match against key:value pair in http header. Provides a flexible match
     *           based on HTTP headers, for potentially advanced use cases. At least one
     *           header should match. Avoid using header matches to make authorization
     *           decisions unless there is a strong guarantee that requests arrive
     *           through a trusted client or proxy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1\AuthorizationPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. List of host names to match. Matched against the ":authority" header in
     * http requests. At least one host should match. Each host can be an
     * exact match, or a prefix match (example "mydomain.*") or a suffix
     * match (example "*.myorg.com") or a presence (any) match "*".
     *
     * Generated from protobuf field <code>repeated string hosts = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Required. List of host names to match. Matched against the ":authority" header in
     * http requests. At least one host should match. Each host can be an
     * exact match, or a prefix match (example "mydomain.*") or a suffix
     * match (example "*.myorg.com") or a presence (any) match "*".
     *
     * Generated from protobuf field <code>repeated string hosts = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->hosts = $arr;

        return $this;
    }

    /**
     * Required. List of destination ports to match. At least one port should match.
     *
     * Generated from protobuf field <code>repeated uint32 ports = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * Required. List of destination ports to match. At least one port should match.
     *
     * Generated from protobuf field <code>repeated uint32 ports = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ports = $arr;

        return $this;
    }

    /**
     * Optional. A list of HTTP methods to match. At least one method should
     * match. Should not be set for gRPC services.
     *
     * Generated from protobuf field <code>repeated string methods = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * Optional. A list of HTTP methods to match. At least one method should
     * match. Should not be set for gRPC services.
     *
     * Generated from protobuf field <code>repeated string methods = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethods($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->methods = $arr;

        return $this;
    }

    /**
     * Optional. Match against key:value pair in http header. Provides a flexible match
     * based on HTTP headers, for potentially advanced use cases. At least one
     * header should match. Avoid using header matches to make authorization
     * decisions unless there is a strong guarantee that requests arrive
     * through a trusted client or proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.AuthorizationPolicy.Rule.Destination.HttpHeaderMatch http_header_match = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy\Rule\Destination\HttpHeaderMatch|null
     */
    public function getHttpHeaderMatch()
    {
        return $this->http_header_match;
    }

    public function hasHttpHeaderMatch()
    {
        return isset($this->http_header_match);
    }

    public function clearHttpHeaderMatch()
    {
        unset($this->http_header_match);
    }

    /**
     * Optional. Match against key:value pair in http header. Provides a flexible match
     * based on HTTP headers, for potentially advanced use cases. At least one
     * header should match. Avoid using header matches to make authorization
     * decisions unless there is a strong guarantee that requests arrive
     * through a trusted client or proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.AuthorizationPolicy.Rule.Destination.HttpHeaderMatch http_header_match = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy\Rule\Destination\HttpHeaderMatch $var
     * @return $this
     */
    public function setHttpHeaderMatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1\AuthorizationPolicy\Rule\Destination\HttpHeaderMatch::class);
        $this->http_header_match = $var;

        return $this;
    }

}

