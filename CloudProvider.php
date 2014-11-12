<?php namespace MyApp;

use Aws\S3\S3Client;

class CloudProvider {

	protected $provider;

	public function __construct($config)
	{
		$this->provider = S3Client::factory($config);
	}

	public function getProviderClass()
	{
		return get_class($this->provider);
	}

}
