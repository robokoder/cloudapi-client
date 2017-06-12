<?php
//require __DIR__ . '/Cloudapi/Client.php';
//require __DIR__ . '/Cloudapi/Exceptions/MissingParametersException.php';
require __DIR__ . '/vendor/autoload.php';

$api = new Cloudapi\Client('api', '7;k3..kv.2ld904vh.3.r.rm,24');
$response = $api->send_message(array(
	'src' => '17632843658',
	'dst' => '18582203909',
	'text' => 'This is a message, hooray this is a message and that is awesome!',
));

var_dump($response);
