<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Proxy
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Proxy\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class PhoneNumberContext extends InstanceContext
    {
    /**
     * Initialize the PhoneNumberContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID parent [Service](https://www.twilio.com/docs/proxy/api/service) resource of the new PhoneNumber resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the PhoneNumber resource to delete.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/PhoneNumbers/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the PhoneNumberInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the PhoneNumberInstance
     *
     * @return PhoneNumberInstance Fetched PhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): PhoneNumberInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new PhoneNumberInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the PhoneNumberInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PhoneNumberInstance Updated PhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): PhoneNumberInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'IsReserved' =>
                Serialize::booleanToString($options['isReserved']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new PhoneNumberInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Proxy.V1.PhoneNumberContext ' . \implode(' ', $context) . ']';
    }
}
