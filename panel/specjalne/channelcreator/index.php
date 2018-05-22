<?php session_start(); ?>
<?php
	if(!isset($_SESSION['ts3_last_query']))
    $_SESSION['ts3_last_query'] = microtime(true);
	
	if($_SESSION['ts3_last_query'] >= microtime(true))
    die('You Need Wait 10 Seconds To Create Channel Again');
	
	$_SESSION['ts3_last_query'] = microtime(true)+0;
	
	date_default_timezone_set('America/Argentina/Buenos_Aires'); //Change Here!
	require_once("libraries/TeamSpeak3/TeamSpeak3.php");
	include 'data/config.php';
	
 
    function getClientIp() {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
        else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(!empty($_SERVER['HTTP_X_FORWARDED']))
            return $_SERVER['HTTP_X_FORWARDED'];
        else if(!empty($_SERVER['HTTP_FORWARDED_FOR']))
            return $_SERVER['HTTP_FORWARDED_FOR'];
        else if(!empty($_SERVER['HTTP_FORWARDED']))
            return $_SERVER['HTTP_FORWARDED'];
        else if(!empty($_SERVER['REMOTE_ADDR']))
            return $_SERVER['REMOTE_ADDR'];
        else
            return false;
    }
	
    $connect = "serverquery://".$USER_QUERY.":".$PASS_QUERY."@".$HOST_QUERY.":".$PORT_QUERY."/?server_port=".$SERVER_PORT."";
    $ts3 = TeamSpeak3::factory($connect);
    $ts3->execute("clientupdate", array("client_nickname" => $NICK_QUERY));
    $FLAG = false;
	
    foreach ($ts3->clientList(array('client_type' => '0', 'connection_client_ip' => getClientIp())) as $client) {
        $clientuid = $client->client_unique_identifier;
		$client_nickname = $client->client_nickname;
		$client_clid = $client->clid;
        $FLAG = true;
        break;
    }
    if (!$FLAG){
        echo "<p><b>".$lang['f_connectts'].".</b></p><br/>";
        header("refresh: 10; url = ./");
        die;  
    }
 
	if (isset($_POST["create"])) {
		
		$channelname = $_POST['channelname'];
		$password = $_POST['password'];
		$unixTime = time();
		$realTime = date('[Y-m-d]-[H:i]',$unixTime);
		$channel_admin_group = 8; 

		try
		{
			$cid1 = $ts3->channelCreate(array(
			"channel_name" => $channelname,
			"channel_topic" => "WOLNY KANAŁ PRYWATNY",
			"channel_flag_permanent" => "1",
			"channel_description" => '[center][b]Aby otrzymać ten lub inny kanał wejdź na:[/b]
[color=green]» CHCESZ KANAŁ? WEJDŹ TUTAJ «[/color]

[b]Pamiętaj, że musisz być wcześniej zarejestrowany/a na naszym serwerze, aby to zrobić wejdź na:[/b]
[color=pink]» ♀ CHCĘ RANGĘ KOBIETA ♀ «[/color]
[b]lub:[/b]
[color=cyan]» ♂ CHCĘ RANGĘ MĘŻCZYZNA ♂  «[/color][/center]
[hr]
[color=blue][b]Zasady użytkowania kanału prywatnego:[/b][/color]
							- Kanał nieużywany przez ponad 7 dni zostanie zmieniony na wolny,
							- Nie usuwaj numeru kanału wraz z kropką i znakiem specjalnym, wzór: "XX.     » Nazwa",
							- Podkanały nie mogą zawierać numeracji innej niż 1. oraz 2.,
							- Podkanały mogą zawierać własne nazwy, nie uwzględniając przy tym numeracji, np. "XXX" zamiast "1. XXX",
							- Nie reklamuj żadnego innego serwera TS3 lub innej strony konkurencji,
							- Nazwa kanału nie może być wulgarna,
							- Nazwa kanału nie może zawierać znaków specjalnych innych niż te narzucone przez bota/regulamin.
							
[hr][center][b]Pamiętaj, że na naszym serwerze rangi GRACZ, WIEKOWE, 4FUN, WOJEWÓDZTWA możesz ustawić w każdej chwili korzystając z panelu na naszej stronie internetowej. [URL]www.betaspeak.pl[/URL][/b][/center][hr]
[center]
[url=betaspeak.pl][img]http://i.imgur.com/s7vyyST.png[/img][/url][url=https://www.facebook.com/Betaspeakpl-695795557294147/][img]http://i.imgur.com/kfNgKPu.png[/img][/url][/center]
[hr][right][b]Wszelkie prawa zastrzeżone![/b]
Wygenerowane przez [b][COLOR=#0055ff]BETASPEAK BOT[/COLOR][/b][/right] ',
			"channel_order" => "$order",
			'channel_flag_maxclients_unlimited' => 0,
			'channel_flag_maxfamilyclients_unlimited' => 0));
			
			$ts3->clientGetByUid($clientuid)->setChannelGroup($cid1, $channel_admin_group);
			$ts3->clientMove($client_clid, $cid1);
			
		}
		catch(Exception $e)
		{
			echo "Error (ID " . $e->getCode() . ") <b>" . $e->getMessage() . "</b>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Simple Channel Create</title>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>
    <body>
        <div class="container">
            <header>
                <h1><?$a = 5;
echo "Powinno być 5: " . $a-- . "\n";
echo "Powinno być 4: " . $a   . "\n";?></h1>
			</header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" autocomplete="on"> 
                                <h1>Settings</h1> 
								<p> 
                                    <label  class="uname" data-icon="u" > Hola, <?php echo $client_nickname; ?></label>
                                    <input  readonly type="text" value="<?php echo $clientuid; ?>"/>
								</p>
                                <p> 
                                    <label  class="uname" data-icon="u" > Channel Name </label>
                                    <input  name="channelname" required="required" type="text" placeholder="My Super Channel."/>
								</p>
                                <p> 
                                    <label class="youpasswd" data-icon="p"> Channel Password</label>
                                    <input name="password" type="text" placeholder="eg. X8df!90EO" /> 
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="create" value="Create!" /> 
								</p>
							</form>
							<?php echo $client_clid; ?></br>
						</div>
						
					</div>
				</div>  
			</section>
		</div>
	</body>
</html>	