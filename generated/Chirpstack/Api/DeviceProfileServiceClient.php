<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Chirpstack\Api;

/**
 * DeviceProfileService is the service providing API methods for managing
 * device-profiles.
 */
class DeviceProfileServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create the given device-profile.
     * @param \Chirpstack\Api\CreateDeviceProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Create(\Chirpstack\Api\CreateDeviceProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/Create',
        $argument,
        ['\Chirpstack\Api\CreateDeviceProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the device-profile for the given ID.
     * @param \Chirpstack\Api\GetDeviceProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(\Chirpstack\Api\GetDeviceProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/Get',
        $argument,
        ['\Chirpstack\Api\GetDeviceProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetByProfileId tries to get the device-profile for the given ProfileID (see TR0005).
     * @param \Chirpstack\Api\GetDeviceProfileByProfileIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetByProfileId(\Chirpstack\Api\GetDeviceProfileByProfileIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/GetByProfileId',
        $argument,
        ['\Chirpstack\Api\GetDeviceProfileByProfileIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update the given device-profile.
     * @param \Chirpstack\Api\UpdateDeviceProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Update(\Chirpstack\Api\UpdateDeviceProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/Update',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete the device-profile with the given ID.
     * @param \Chirpstack\Api\DeleteDeviceProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Chirpstack\Api\DeleteDeviceProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/Delete',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List the available device-profiles.
     * @param \Chirpstack\Api\ListDeviceProfilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Chirpstack\Api\ListDeviceProfilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/List',
        $argument,
        ['\Chirpstack\Api\ListDeviceProfilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the available device-profile vendors.
     * @param \Chirpstack\Api\ListDeviceProfileVendorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListVendors(\Chirpstack\Api\ListDeviceProfileVendorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/ListVendors',
        $argument,
        ['\Chirpstack\Api\ListDeviceProfileVendorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the device-profile vendor.
     * @param \Chirpstack\Api\GetDeviceProfileVendorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVendor(\Chirpstack\Api\GetDeviceProfileVendorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/GetVendor',
        $argument,
        ['\Chirpstack\Api\GetDeviceProfileVendorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete the given device-profile vendor.
     * @param \Chirpstack\Api\DeleteDeviceProfileVendorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVendor(\Chirpstack\Api\DeleteDeviceProfileVendorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/DeleteVendor',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List the available device-profile devices.
     * @param \Chirpstack\Api\ListDeviceProfileDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDevices(\Chirpstack\Api\ListDeviceProfileDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/ListDevices',
        $argument,
        ['\Chirpstack\Api\ListDeviceProfileDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the device-profile device.
     * @param \Chirpstack\Api\GetDeviceProfileDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDevice(\Chirpstack\Api\GetDeviceProfileDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/GetDevice',
        $argument,
        ['\Chirpstack\Api\GetDeviceProfileDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete the given device-profile device.
     * @param \Chirpstack\Api\DeleteDeviceProfileDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDevice(\Chirpstack\Api\DeleteDeviceProfileDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/DeleteDevice',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List available ADR algorithms.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAdrAlgorithms(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.DeviceProfileService/ListAdrAlgorithms',
        $argument,
        ['\Chirpstack\Api\ListDeviceProfileAdrAlgorithmsResponse', 'decode'],
        $metadata, $options);
    }

}
