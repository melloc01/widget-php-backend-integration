<?php
require __DIR__ . '/vendor/autoload.php';

$veridu = [
	'client' => 'YOUR_API_KEY',
	'secret' => 'YOUR_SECRET_KEY',
	'version' => '0.3',
];
//Instantiate API object
$api = \Veridu\API::factory(
	$veridu['client'],
	$veridu['secret'],
	$veridu['version']
);

$api->getStorage()->setSessionToken($_GET['session']);
$api->getStorage()->setUsername($_GET['username']);

$response = $api->user->getAllDetails(); 
	
/*
 * Prints API response
*/
echo json_encode($response);