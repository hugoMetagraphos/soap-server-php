<?php
/**
* @author Hugo Espinosa
* @email hespinosa@metagraphos.com
*
*/

class Client
{
	public function __construct()
	{
		$params = array('location' => 'http://dev.app/soap-server/server.php',
						'uri' => 'urn://dev.app/soap-server/server.php',
						'trace' => 1);
		$this->instance = new SoapClient(NULL,$params);
	}

	public function getCourse($id_array)
	{
		return $this->instance->__soapCall('getCourse', $id_array);
	}
}

$client = new Client;