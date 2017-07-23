<?php
	include('../lib/configReader.php');
	$SteamAPIKey = getSteamAPIKey();
        $TwitchCliID = getTwitchClientID();
        $DBIP = getDatabaseIP();
	$DBName = getDatabaseName();
        $DBPwd = getDatabasePwd();
        $DBUser = getDatabaseUser();

	print "Steam API Key:".$SteamAPIKey."\n";
        print "Twitch Client ID:".$TwitchCliID."\n";
	print "Database IP: ".$DBIP." Database Name ".$DBName." Database Password ".$DBPwd." Database User ".$DBUser."\n";
?>
