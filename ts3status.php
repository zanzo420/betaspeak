<?php
/**
 * @name Display TS3 Status and Clientcount
 * @author SilentStorm
 */

date_default_timezone_set("Europe/London");
require_once("TeamSpeak3/TeamSpeak3.php");
TeamSpeak3::init();

header('Content-Type: text/html; charset=utf8');

$status = "offline";
$procent = 0;
$online = 0;
$ping = 0;
$packetloss = 0;
$admini = 0;

try {
    $ts3 = TeamSpeak3::factory("serverquery://serveradmin:admin_slg@localhost:10011/?server_port=9987&use_offline_as_virtual=1&no_query_clients=1");
    $status = $ts3->getProperty("virtualserver_status");
    $procent = ($ts3->getProperty("virtualserver_clientsonline") - $ts3->getProperty("virtualserver_queryclientsonline")) / 500 *100;
	$online = $ts3->getProperty("virtualserver_clientsonline") - $ts3->getProperty("virtualserver_queryclientsonline");
	$uptime = TeamSpeak3_Helper_Convert::seconds($ts3->getProperty("virtualserver_uptime"), false, "%dd %02dh<br>%02dm");
    $ping = $ts3->getProperty("virtualserver_total_ping");
	$packetloss = $ts3->getProperty("virtualserver_total_packetloss_total");
}
catch (Exception $e) {
    echo '<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-1" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="0" data-fgcolor="#fecc17" data-animationstep="1">
<div class="skill-line">
<span class="timer" data-to="21" data-speed="1000">0</span>%
</div>
</div>
<div class="skill-txt">
<h5>x/500 ONLINE</h5>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-2" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="0" data-fgcolor="#ccdb38" data-animationstep="1">
<div class="skill-line">
<span class="timer" data-to="0" data-speed="1000">0</span>
</div>
</div>
<div class="skill-txt">
<h5>PING SERWERA</h5>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-3" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="0" data-fgcolor="#f04d4e" data-animationstep="1">
<div class="skill-line">
<span class="timer" data-to="0" data-speed="1000">0</span>%
</div>
</div>
<div class="skill-txt">
<h5>PACKET LOSS</h5>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-4" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="99" data-fgcolor="#00bff3" data-animationstep="1">
<div style="margin-top:7px;" class="skill-line">
0d 0h<br>0m
</div>
</div>
<div class="skill-txt">
<h5>UPTIME SERWERA</h5>
</div>
</div>
</div>

	';
}
echo '<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-1" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="'.$procent.'" data-fgcolor="#fecc17" data-animationstep="1">
<div class="skill-line">
<span class="timer" data-to="'.$procent.'" data-speed="1000">'.$procent.'</span>%
</div>
</div>
<div class="skill-txt">
<h5>'.$online.' / 500 ONLINE</h5>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-2" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="'.$ping.'" data-fgcolor="#ccdb38" data-animationstep="1">
<div class="skill-line">
<span class="timer" data-to="'.$ping.'" data-speed="1000">0</span>
</div>
</div>
<div class="skill-txt">
<h5>PING SERWERA</h5>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-3" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="'.$packetloss.'" data-fgcolor="#f04d4e" data-animationstep="1">
<div class="skill-line">
<span class="timer" data-to="'.$packetloss.'" data-speed="1000">0</span>%
</div>
</div>
<div class="skill-txt">
<h5>PACKET LOSS</h5>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="skill-block col-white">
<div class="skill-circle" id="skill-circle-4" data-border="true" data-dimension="175" data-bgcolor="#754cbc" data-width="2" data-percent="99" data-fgcolor="#00bff3" data-animationstep="1">
<div style="margin-top:7px;" class="skill-line">
'.$uptime.'
</div>
</div>
<div class="skill-txt">
<h5>UPTIME SERWERA</h5>
</div>
</div>
</div>

';

?>