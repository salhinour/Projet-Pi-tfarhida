<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trusthub\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsChannelEndpointAssignmentList;
use Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsEvaluationsList;
use Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsEntityAssignmentsList;


/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $policySid
 * @property string|null $friendlyName
 * @property string $status
 * @property \DateTime|null $validUntil
 * @property string|null $email
 * @property string|null $statusCallback
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $url
 * @property array|null $links
 */
class TrustProductsInstance extends InstanceResource
{
    protected $_trustProductsChannelEndpointAssignment;
    protected $_trustProductsEvaluations;
    protected $_trustProductsEntityAssignments;

    /**
     * Initialize the TrustProductsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The unique string that we created to identify the Customer-Profile resource.
     */
    public function __construct(Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'policySid' => Values::array_get($payload, 'policy_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'status' => Values::array_get($payload, 'status'),
            'validUntil' => Deserialize::dateTime(Values::array_get($payload, 'valid_until')),
            'email' => Values::array_get($payload, 'email'),
            'statusCallback' => Values::array_get($payload, 'status_callback'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TrustProductsContext Context for this TrustProductsInstance
     */
    protected function proxy(): TrustProductsContext
    {
        if (!$this->context) {
            $this->context = new TrustProductsContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the TrustProductsInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the TrustProductsInstance
     *
     * @return TrustProductsInstance Fetched TrustProductsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TrustProductsInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the TrustProductsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TrustProductsInstance Updated TrustProductsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): TrustProductsInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the trustProductsChannelEndpointAssignment
     */
    protected function getTrustProductsChannelEndpointAssignment(): TrustProductsChannelEndpointAssignmentList
    {
        return $this->proxy()->trustProductsChannelEndpointAssignment;
    }

    /**
     * Access the trustProductsEvaluations
     */
    protected function getTrustProductsEvaluations(): TrustProductsEvaluationsList
    {
        return $this->proxy()->trustProductsEvaluations;
    }

    /**
     * Access the trustProductsEntityAssignments
     */
    protected function getTrustProductsEntityAssignments(): TrustProductsEntityAssignmentsList
    {
        return $this->proxy()->trustProductsEntityAssignments;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Trusthub.V1.TrustProductsInstance ' . \implode(' ', $context) . ']';
    }
}

