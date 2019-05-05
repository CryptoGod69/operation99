<?php
session_start ();

	require_once "../Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '318809775454556',
		'app_secret' => 'aae34f632d7c388e8c8df8d86c1356d7',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
	
?>