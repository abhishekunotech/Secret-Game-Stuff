<?php
    require ('../lib/steamauth/steamauth.php');  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body style="background-color: #EEE;">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; background-color: #FFF;">
		<h1>SteamAuth Demo</h1>
		<span class="small pull-left" style="padding-right: 10px;">for SteamAuth 3.2</span>
		<div class="clear"><hr> </div>
		<?php
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
		}    
		?>
                <div class="clear"></div>
		<hr>
		<div class="pull-right">
			<i>This page is powered by <a href="http://steampowered.com">Steam</a></i>
		</div>
		<a href="https://github.com/SmItH197/SteamAuthentication">GitHub Repo</a><br>
		Demo page by <a href="https://github.com/blackcetha" target="_blank">BlackCetha</a>
	</div>
	
	<!--Version 3.2--> 
  </body>
</html>
