<?php

	/*
	|===============================================
	| Jamf
	|===============================================
	|
	| A working Jamf server is required for use of this module.
	|
	| To use the Jamf module, set 'jamf_enable' to TRUE and
	| enter the server, username, and password for accessing your
	| Jamf instance.
	|
	| This module pulls data about Macs that are in Jamf. It
	| should work properly with Jamf Cloud. It has been tested
	| with Jamf version 10.4.1, but should work down to 9.9x.
	| 
	| jamf_verify_ssl is to disable SSL verification when
	| connecting to your Jamf server. If using a self signed
	| certificate, set this to false.
	|
	*/

return [
  'jamf_enable' => env('JAMF_ENABLE', false),
  'jamf_verify_ssl' => env('JAMF_VERIFY_SSL', true),
  'jamf_username' => env('JAMF_USERNAME', ""),
  'jamf_password' => env('JAMF_PASSWORD', ""),
  'jamf_server' => env('JAMF_SERVER', ""),
];
