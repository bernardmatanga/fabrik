<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber;

use Twilio\Options;
use Twilio\Values;

abstract class MobileOptions {
    /**
     * @param boolean $beta Include phone numbers new to the Twilio platform.
     * @param string $friendlyName Only show the incoming phone number resources
     *                             with friendly names that exactly match this name.
     * @param string $phoneNumber Only show the incoming phone number resources
     *                            that match this pattern.
     * @param string $origin Include phone numbers based on the origin, by default,
     *                       phone numbers of all origin are included.
     * @return ReadMobileOptions Options builder
     */
    public static function read($beta = Values::NONE, $friendlyName = Values::NONE, $phoneNumber = Values::NONE, $origin = Values::NONE) {
        return new ReadMobileOptions($beta, $friendlyName, $phoneNumber, $origin);
    }

    /**
     * @param string $apiVersion The Twilio REST API version to use for incoming
     *                           calls made to this number.
     * @param string $friendlyName A human readable description of the new incoming
     *                             phone number.
     * @param string $smsApplicationSid The 34 character sid of the application
     *                                  Twilio should use to handle SMSs sent to
     *                                  the new number.
     * @param string $smsFallbackMethod The HTTP method that should be used to
     *                                  request the SmsFallbackUrl.
     * @param string $smsFallbackUrl A URL that Twilio will request if an error
     *                               occurs requesting or executing the TwiML
     *                               defined by SmsUrl.
     * @param string $smsMethod The HTTP method that should be used to request the
     *                          SmsUrl.
     * @param string $smsUrl The URL that Twilio should request when somebody sends
     *                       an SMS to the phone number.
     * @param string $statusCallback The URL that Twilio will request to pass
     *                               status parameters to your application.
     * @param string $statusCallbackMethod The HTTP method Twilio will use to make
     *                                     requests to the StatusCallback URL.
     * @param string $voiceApplicationSid The 34 character sid of the application
     *                                    Twilio should use to handle phone calls
     *                                    to the new number.
     * @param boolean $voiceCallerIdLookup Do a lookup of a caller's name from the
     *                                     CNAM database and post it to your app.
     * @param string $voiceFallbackMethod The HTTP method that should be used to
     *                                    request the VoiceFallbackUrl.
     * @param string $voiceFallbackUrl A URL that Twilio will request if an error
     *                                 occurs requesting or executing the TwiML at
     *                                 Url.
     * @param string $voiceMethod The HTTP method that should be used to request
     *                            the VoiceUrl.
     * @param string $voiceUrl The URL that Twilio should request when somebody
     *                         dials the new phone number.
     * @param string $identitySid The identity_sid
     * @param string $addressSid The 34 character sid of the address Twilio should
     *                           associate with the number.
     * @return CreateMobileOptions Options builder
     */
    public static function create($apiVersion = Values::NONE, $friendlyName = Values::NONE, $smsApplicationSid = Values::NONE, $smsFallbackMethod = Values::NONE, $smsFallbackUrl = Values::NONE, $smsMethod = Values::NONE, $smsUrl = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $voiceApplicationSid = Values::NONE, $voiceCallerIdLookup = Values::NONE, $voiceFallbackMethod = Values::NONE, $voiceFallbackUrl = Values::NONE, $voiceMethod = Values::NONE, $voiceUrl = Values::NONE, $identitySid = Values::NONE, $addressSid = Values::NONE) {
        return new CreateMobileOptions($apiVersion, $friendlyName, $smsApplicationSid, $smsFallbackMethod, $smsFallbackUrl, $smsMethod, $smsUrl, $statusCallback, $statusCallbackMethod, $voiceApplicationSid, $voiceCallerIdLookup, $voiceFallbackMethod, $voiceFallbackUrl, $voiceMethod, $voiceUrl, $identitySid, $addressSid);
    }
}

class ReadMobileOptions extends Options {
    /**
     * @param boolean $beta Include phone numbers new to the Twilio platform.
     * @param string $friendlyName Only show the incoming phone number resources
     *                             with friendly names that exactly match this name.
     * @param string $phoneNumber Only show the incoming phone number resources
     *                            that match this pattern.
     * @param string $origin Include phone numbers based on the origin, by default,
     *                       phone numbers of all origin are included.
     */
    public function __construct($beta = Values::NONE, $friendlyName = Values::NONE, $phoneNumber = Values::NONE, $origin = Values::NONE) {
        $this->options['beta'] = $beta;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['phoneNumber'] = $phoneNumber;
        $this->options['origin'] = $origin;
    }

    /**
     * Include phone numbers new to the Twilio platform. Possible values are either `true` or `false`. Default is `true`.
     * 
     * @param boolean $beta Include phone numbers new to the Twilio platform.
     * @return $this Fluent Builder
     */
    public function setBeta($beta) {
        $this->options['beta'] = $beta;
        return $this;
    }

    /**
     * Only show the incoming phone number resources with friendly names that exactly match this name.
     * 
     * @param string $friendlyName Only show the incoming phone number resources
     *                             with friendly names that exactly match this name.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Only show the incoming phone number resources that match this pattern. You can specify partial numbers and use '*' as a wildcard for any digit.
     * 
     * @param string $phoneNumber Only show the incoming phone number resources
     *                            that match this pattern.
     * @return $this Fluent Builder
     */
    public function setPhoneNumber($phoneNumber) {
        $this->options['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Include phone numbers based on the origin, by default, phone numbers of all origin are included. Possible values are either `twilio` or `hosted`.
     * 
     * @param string $origin Include phone numbers based on the origin, by default,
     *                       phone numbers of all origin are included.
     * @return $this Fluent Builder
     */
    public function setOrigin($origin) {
        $this->options['origin'] = $origin;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadMobileOptions ' . implode(' ', $options) . ']';
    }
}

class CreateMobileOptions extends Options {
    /**
     * @param string $apiVersion The Twilio REST API version to use for incoming
     *                           calls made to this number.
     * @param string $friendlyName A human readable description of the new incoming
     *                             phone number.
     * @param string $smsApplicationSid The 34 character sid of the application
     *                                  Twilio should use to handle SMSs sent to
     *                                  the new number.
     * @param string $smsFallbackMethod The HTTP method that should be used to
     *                                  request the SmsFallbackUrl.
     * @param string $smsFallbackUrl A URL that Twilio will request if an error
     *                               occurs requesting or executing the TwiML
     *                               defined by SmsUrl.
     * @param string $smsMethod The HTTP method that should be used to request the
     *                          SmsUrl.
     * @param string $smsUrl The URL that Twilio should request when somebody sends
     *                       an SMS to the phone number.
     * @param string $statusCallback The URL that Twilio will request to pass
     *                               status parameters to your application.
     * @param string $statusCallbackMethod The HTTP method Twilio will use to make
     *                                     requests to the StatusCallback URL.
     * @param string $voiceApplicationSid The 34 character sid of the application
     *                                    Twilio should use to handle phone calls
     *                                    to the new number.
     * @param boolean $voiceCallerIdLookup Do a lookup of a caller's name from the
     *                                     CNAM database and post it to your app.
     * @param string $voiceFallbackMethod The HTTP method that should be used to
     *                                    request the VoiceFallbackUrl.
     * @param string $voiceFallbackUrl A URL that Twilio will request if an error
     *                                 occurs requesting or executing the TwiML at
     *                                 Url.
     * @param string $voiceMethod The HTTP method that should be used to request
     *                            the VoiceUrl.
     * @param string $voiceUrl The URL that Twilio should request when somebody
     *                         dials the new phone number.
     * @param string $identitySid The identity_sid
     * @param string $addressSid The 34 character sid of the address Twilio should
     *                           associate with the number.
     */
    public function __construct($apiVersion = Values::NONE, $friendlyName = Values::NONE, $smsApplicationSid = Values::NONE, $smsFallbackMethod = Values::NONE, $smsFallbackUrl = Values::NONE, $smsMethod = Values::NONE, $smsUrl = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $voiceApplicationSid = Values::NONE, $voiceCallerIdLookup = Values::NONE, $voiceFallbackMethod = Values::NONE, $voiceFallbackUrl = Values::NONE, $voiceMethod = Values::NONE, $voiceUrl = Values::NONE, $identitySid = Values::NONE, $addressSid = Values::NONE) {
        $this->options['apiVersion'] = $apiVersion;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['smsApplicationSid'] = $smsApplicationSid;
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        $this->options['smsMethod'] = $smsMethod;
        $this->options['smsUrl'] = $smsUrl;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['voiceApplicationSid'] = $voiceApplicationSid;
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['identitySid'] = $identitySid;
        $this->options['addressSid'] = $addressSid;
    }

    /**
     * The Twilio REST API version to use for incoming calls made to this number. If omitted, uses `2010-04-01`.
     * 
     * @param string $apiVersion The Twilio REST API version to use for incoming
     *                           calls made to this number.
     * @return $this Fluent Builder
     */
    public function setApiVersion($apiVersion) {
        $this->options['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
     * A human readable description of the new incoming phone number. Maximum 64 characters. Defaults to a formatted version of the number.
     * 
     * @param string $friendlyName A human readable description of the new incoming
     *                             phone number.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The 34 character sid of the application Twilio should use to handle SMSs sent to the new number. If a `SmsApplicationSid` is present, Twilio will ignore all of the SMS urls above and use those set on the application.
     * 
     * @param string $smsApplicationSid The 34 character sid of the application
     *                                  Twilio should use to handle SMSs sent to
     *                                  the new number.
     * @return $this Fluent Builder
     */
    public function setSmsApplicationSid($smsApplicationSid) {
        $this->options['smsApplicationSid'] = $smsApplicationSid;
        return $this;
    }

    /**
     * The HTTP method that should be used to request the `SmsFallbackUrl`. Must be either `GET` or `POST`. Defaults to `POST`.
     * 
     * @param string $smsFallbackMethod The HTTP method that should be used to
     *                                  request the SmsFallbackUrl.
     * @return $this Fluent Builder
     */
    public function setSmsFallbackMethod($smsFallbackMethod) {
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        return $this;
    }

    /**
     * A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by `SmsUrl`.
     * 
     * @param string $smsFallbackUrl A URL that Twilio will request if an error
     *                               occurs requesting or executing the TwiML
     *                               defined by SmsUrl.
     * @return $this Fluent Builder
     */
    public function setSmsFallbackUrl($smsFallbackUrl) {
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method that should be used to request the `SmsUrl`. Must be either `GET` or `POST`. Defaults to `POST`.
     * 
     * @param string $smsMethod The HTTP method that should be used to request the
     *                          SmsUrl.
     * @return $this Fluent Builder
     */
    public function setSmsMethod($smsMethod) {
        $this->options['smsMethod'] = $smsMethod;
        return $this;
    }

    /**
     * The URL that Twilio should request when somebody sends an SMS to the phone number.
     * 
     * @param string $smsUrl The URL that Twilio should request when somebody sends
     *                       an SMS to the phone number.
     * @return $this Fluent Builder
     */
    public function setSmsUrl($smsUrl) {
        $this->options['smsUrl'] = $smsUrl;
        return $this;
    }

    /**
     * The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     * 
     * @param string $statusCallback The URL that Twilio will request to pass
     *                               status parameters to your application.
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method Twilio will use to make requests to the `StatusCallback` URL. Either `GET` or `POST`. Defaults to `POST`.
     * 
     * @param string $statusCallbackMethod The HTTP method Twilio will use to make
     *                                     requests to the StatusCallback URL.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The 34 character sid of the application Twilio should use to handle phone calls to the new number. If a `VoiceApplicationSid` is present, Twilio will ignore all of the voice urls above and use those set on the application. Setting a `VoiceApplicationSid` will automatically delete your `TrunkSid` and vice versa.
     * 
     * @param string $voiceApplicationSid The 34 character sid of the application
     *                                    Twilio should use to handle phone calls
     *                                    to the new number.
     * @return $this Fluent Builder
     */
    public function setVoiceApplicationSid($voiceApplicationSid) {
        $this->options['voiceApplicationSid'] = $voiceApplicationSid;
        return $this;
    }

    /**
     * Do a lookup of a caller's name from the CNAM database and post it to your app. Either `true` or `false`. Defaults to `false`.
     * 
     * @param boolean $voiceCallerIdLookup Do a lookup of a caller's name from the
     *                                     CNAM database and post it to your app.
     * @return $this Fluent Builder
     */
    public function setVoiceCallerIdLookup($voiceCallerIdLookup) {
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        return $this;
    }

    /**
     * The HTTP method that should be used to request the `VoiceFallbackUrl`. Either `GET` or `POST`. Defaults to `POST`.
     * 
     * @param string $voiceFallbackMethod The HTTP method that should be used to
     *                                    request the VoiceFallbackUrl.
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackMethod($voiceFallbackMethod) {
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        return $this;
    }

    /**
     * A URL that Twilio will request if an error occurs requesting or executing the TwiML at `Url`.
     * 
     * @param string $voiceFallbackUrl A URL that Twilio will request if an error
     *                                 occurs requesting or executing the TwiML at
     *                                 Url.
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackUrl($voiceFallbackUrl) {
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method that should be used to request the `VoiceUrl`. Must be either `GET` or `POST`. Defaults to `POST`.
     * 
     * @param string $voiceMethod The HTTP method that should be used to request
     *                            the VoiceUrl.
     * @return $this Fluent Builder
     */
    public function setVoiceMethod($voiceMethod) {
        $this->options['voiceMethod'] = $voiceMethod;
        return $this;
    }

    /**
     * The URL that Twilio should request when somebody dials the new phone number. The VoiceURL will  no longer be used if a `VoiceApplicationSid` or a `TrunkSid` is set.
     * 
     * @param string $voiceUrl The URL that Twilio should request when somebody
     *                         dials the new phone number.
     * @return $this Fluent Builder
     */
    public function setVoiceUrl($voiceUrl) {
        $this->options['voiceUrl'] = $voiceUrl;
        return $this;
    }

    /**
     * The identity_sid
     * 
     * @param string $identitySid The identity_sid
     * @return $this Fluent Builder
     */
    public function setIdentitySid($identitySid) {
        $this->options['identitySid'] = $identitySid;
        return $this;
    }

    /**
     * The 34 character sid of the address Twilio should associate with the number.
     * 
     * @param string $addressSid The 34 character sid of the address Twilio should
     *                           associate with the number.
     * @return $this Fluent Builder
     */
    public function setAddressSid($addressSid) {
        $this->options['addressSid'] = $addressSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.CreateMobileOptions ' . implode(' ', $options) . ']';
    }
}