<?php

require('../vendor/autoload.php');
require('../lib/steamauth/steamauth.php');
//include('../lib/steamauth/userInfo.php');
include('../lib/call.php');
include('../lib/configReader.php');
include('../lib/twitch/SystemConfig_Twitch.php');



$client = new \Zyberspace\SteamWebApi\Client(getSteamAPIKey());


//$steamUser = new \Zyberspace\SteamWebApi\Interfaces\ICSGOServers_730($client);
//$response = $steamUser->GetGameServersStatusV1();

var_dump($_SESSION);

                
if(!isset($_SESSION['steamid'])) {
    echo "<div style='margin: 30px auto; text-align: center;'>Welcome Guest! Please log in!<br>";
    loginbutton();
        echo "</div>";
        }  else {
    include ('../lib/steamauth/userInfo.php');
        ?>
                <div style='float:left;'>
                        <a href='http://meteormedia.in'>
                                <button class='btn btn-success' style='margin: 2px 3px;' type='button'>Meteor Media Website</button>
                        </a>
                        <!--a href='https://github.com/SmItH197/SteamAuthentication/releases'>
                                <button class='btn btn-warning' style='margin: 2px 3px;' type='button'>Download</button>
                        </a-->
                </div>
                <span style='float:right;'><?php logoutbutton(); ?></span>

                <?php
                
                
                $jsonGetVariable = '{"client_id":"'.returnTwitchClientID().'"}';

		$response = CallAPI("GET","https://api.twitch.tv/api/steam/".$steamprofile['steamid']."",json_decode($jsonGetVariable));
 
 
                 var_dump($response);
}
?>
