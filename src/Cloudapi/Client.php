<?php
namespace Cloudapi;

use Unirest\Request;


class Client
{
	const ENDPOINT = 'https://cloudapi.biz/v1/messages/send?';
	
	public $username;
	public $password;
	
	public $params = array();
	
	
	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
		
		Request::auth($username, $password);
	}
	
	public function send_message(array $params)
	{
		if(!isset($params['dst']))
			throw new MissingParametersException('dst is required');
		elseif(!isset($params['text']))
			throw new MissingParametersException('text is required');
		
		$response = Request::get(
			self::ENDPOINT . http_build_query($params));
		
		if($response && $response->code == 200)
			return $response->body;
		
		return null;
	}
}


//	username: api
//	password: "7;k3..kv.2ld904vh.3.r.rm,24"