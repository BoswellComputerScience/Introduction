<?php

	$username = $_POST["username"];
	$password = $_POST["password"];

	// TODO: API link
	$api_response = http_get("api.github.com/orgs/boswellcomputerscience",, $api_info);
	print_r($info);

?>