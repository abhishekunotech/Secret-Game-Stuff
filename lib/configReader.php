<?php
	function readConfigFile(){
		$string = file_get_contents("../config/config.json");
		$json_a = json_decode($string, true);
		return $json_a;
	}

	function getSteamAPIKey(){
		$jsonString = readConfigFile();
		return $jsonString['SteamAPIkey'];
	}

	function getTwitchClientID(){
		$jsonString = readConfigFile();
		return $jsonString['TwitchClientID'];
	}

	function getDatabaseIP(){
		$jsonString = readConfigFile();
		return $jsonString['DatabaseIP'];
	}


	function getDatabaseName(){
		$jsonString = readConfigFile();
		return $jsonString['DatabaseName'];	
	}

	function getDatabasePwd(){
		$jsonString = readConfigFile();
		return $jsonString['DatabasePwd'];
	}

	function getDatabaseUser(){
		$jsonString = readConfigFile();
		return $jsonString['DatabaseUser'];
	}
?>
