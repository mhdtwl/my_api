<?php

namespace  API;
 
class ReadAPI
{
	private $guzzle;

	function __construct()
	{
		$this->guzzle = new \GuzzleHttp\Client();
        #$this->authToken = getenv('AUTH_TOKEN');
	}

	public function get($url)
    {
        return $this->guzzle->get($url);
    }

    /**
    * @return  array
    */
	public function read_api($urls = [])
	{
		$url = "http://dummy.restapiexample.com/api/v1/employees";
		$response = $this->get($url);
		return   (json_decode($response->getBody()));
	}

    /**
      * @return  json
      */
	public function read_api_json($urls = [])
	{
		return json_encode( $this->read_api() ) ; 
	}
}
