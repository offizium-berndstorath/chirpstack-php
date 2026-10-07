<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Chirpstack\Api;

/**
 * FuotaService is the service providing API methods for FUOTA deployments.
 */
class FuotaServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create the given FUOTA deployment.
     * @param \Chirpstack\Api\CreateFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateDeployment(\Chirpstack\Api\CreateFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/CreateDeployment',
        $argument,
        ['\Chirpstack\Api\CreateFuotaDeploymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the FUOTA deployment for the given ID.
     * @param \Chirpstack\Api\GetFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDeployment(\Chirpstack\Api\GetFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/GetDeployment',
        $argument,
        ['\Chirpstack\Api\GetFuotaDeploymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update the given FUOTA deployment.
     * @param \Chirpstack\Api\UpdateFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateDeployment(\Chirpstack\Api\UpdateFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/UpdateDeployment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete the FUOTA deployment for the given ID.
     * @param \Chirpstack\Api\DeleteFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDeployment(\Chirpstack\Api\DeleteFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/DeleteDeployment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the FUOTA deployment.
     * @param \Chirpstack\Api\StartFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartDeployment(\Chirpstack\Api\StartFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/StartDeployment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List the FUOTA deployments.
     * @param \Chirpstack\Api\ListFuotaDeploymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDeployments(\Chirpstack\Api\ListFuotaDeploymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/ListDeployments',
        $argument,
        ['\Chirpstack\Api\ListFuotaDeploymentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add the given DevEUIs to the FUOTA deployment.
     * @param \Chirpstack\Api\AddDevicesToFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddDevices(\Chirpstack\Api\AddDevicesToFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/AddDevices',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove the given DevEUIs from the FUOTA deployment.
     * @param \Chirpstack\Api\RemoveDevicesFromFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveDevices(\Chirpstack\Api\RemoveDevicesFromFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/RemoveDevices',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List FUOTA Deployment devices.
     * @param \Chirpstack\Api\ListFuotaDeploymentDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDevices(\Chirpstack\Api\ListFuotaDeploymentDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/ListDevices',
        $argument,
        ['\Chirpstack\Api\ListFuotaDeploymentDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add the given Gateway IDs to the FUOTA deployment.
     * By default, ChirpStack will automatically select the minimum amount of
     * gateways needed to cover all devices within the multicast-group. Setting
     * the gateways manually overrides this behaviour.
     * @param \Chirpstack\Api\AddGatewaysToFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGateways(\Chirpstack\Api\AddGatewaysToFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/AddGateways',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List the gateways added to the FUOTA deployment.
     * @param \Chirpstack\Api\ListFuotaDeploymentGatewaysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListGateways(\Chirpstack\Api\ListFuotaDeploymentGatewaysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/ListGateways',
        $argument,
        ['\Chirpstack\Api\ListFuotaDeploymentGatewaysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove the given Gateway IDs from the FUOTA deployment.
     * @param \Chirpstack\Api\RemoveGatewaysFromFuotaDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveGateways(\Chirpstack\Api\RemoveGatewaysFromFuotaDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/RemoveGateways',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * List jobs for the given FUOTA deployment.
     * @param \Chirpstack\Api\ListFuotaDeploymentJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListJobs(\Chirpstack\Api\ListFuotaDeploymentJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.FuotaService/ListJobs',
        $argument,
        ['\Chirpstack\Api\ListFuotaDeploymentJobsResponse', 'decode'],
        $metadata, $options);
    }

}
