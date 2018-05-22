<?
 session_start();
	
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) {
		session_unset();
		session_destroy();
		header("Location: index.php");
	}
	$_SESSION['LAST_ACTIVITY'] = time();
	
    if (!empty($_GET['reset'])) {
        unset($_SESSION);
    };
    
    if (empty($_SESSION['do'])) {
        $_SESSION['do'] = '0';
    }
    
    
    $error = array();
    $continue = true;
    $base = false;
    require_once('libraries/TeamSpeak3/TeamSpeak3.php');
    require_once('config.php');
    
    if (($_SESSION['do'] == 0 and !empty($_POST['uid'])) or ($_SESSION['do'] == 1 and !empty($_SESSION['uid']))) {
        if ((!empty($_SESSION['uid']) and strlen($_SESSION['uid']) == 28 and $_SESSION['uid'][27] == "=") or (strlen($_POST['uid']) == 28 and $_POST['uid'][27] == "=")) {
            $groups = array();
            if (!empty($_POST['uid'])) {
                $_SESSION['uid'] = $_POST['uid'];
				$_SESSION['nick'] = $_POST['nick'];
				$_SESSION['clid'] = $_POST['clid'];
            }
            try {
                TeamSpeak3::init();
                $ts3 = TeamSpeak3::factory("serverquery://". $config['teamspeak']['loginname'] .":". $config['teamspeak']['loginpass'] ."@". $config['teamspeak']['ip'] .":". $config['teamspeak']['queryport'] ."/?server_port=". $config['teamspeak']['serverport'] ."&nickname=". urlencode($config['teamspeak']['displayname']) ."");
                $filter = array('client_unique_identifier' => str_replace('/','\/', str_replace('+', '\+', str_replace('-', '\-', str_replace('&', '\&', $_SESSION['uid'])))));
                if ($config['teamspeak']['ip-verify']) {
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $filter['connection_client_ip'] = $ip;
                }
                if (count($ts3->clientList($filter)) > 0) {
                    foreach ($ts3->clientList($filter) as $client) {
                        break;
                    }
                } else {
                    unset($_SESSION);
                    $_SESSION['do'] = '0';
                    $error[] = array('type' => 'red', 'msg' => 'Nie uda&lstrok;o si&eogon; nam znale&zacute;&cacute; u&zdot;ytkownika o podanym ID.');
                    $continue = false;
                }
                if (strtolower($config['teamspeak']['group-mode']) === 'ignore' and $continue) {
                    $continue = true;
                } else if (strtolower($config['teamspeak']['group-mode']) === 'only' and $continue){
                    $continue = false;
                }
                if (is_object($client) and $continue) {
                    foreach (explode(",", $config['teamspeak']['groups']) as $cgrp) {
                        if (in_array($cgrp, explode(",",$client->client_servergroups)) and strtolower($config['teamspeak']['group-mode']) == 'ignore') {
                            $error[] = array('type' => 'red', 'msg' => 'Musisz posiada&cacute; rang&eogon; resjetracyjn&aogon;, &zdot;eby nadawa&cacute; sobie rangi.');
                            $_SESSION['do'] = '0';
                            $continue = false;
                        } else if (in_array($cgrp, explode(",",$client->client_servergroups)) and strtolower($config['teamspeak']['group-mode']) == 'only') {
                            break;
                        }
                    }
                };
                if ($continue) {
                    foreach  ($config['groups'] as $grp) {
                        try {
                            $groups[$grp['grpid']] = array();
                            if (empty($grp['name']) or $grp['name'] == '') {
                                $groups[$grp['grpid']]['name'] = $ts3->serverGroupGetById($grp['grpid'])->name;
                            } else {
                                $groups[$grp['grpid']]['name'] = $grp['name'];
								$groups[$grp['grpid']]['group'] = $grp['group'];
                            };
                            if (!empty($grp['icon']) and $grp['icon'] != '') {
                                $groups[$grp['grpid']]['icon'] = $grp['icon'];
                            }else{
								if(!file_exists('style/icons/icon_'.$grp['grpid']))
								{
									$groups[$grp['grpid']]['icon'] = $ts3->serverGroupGetById($grp['grpid'])->iconDownload();
									file_put_contents('style/icons/icon_'.$grp['grpid'], $groups[$grp['grpid']]['icon']);
								}
							};
                        } catch(Exception $e) {
                            $error[] = array('type' => 'red', 'msg' => 'Error: '. $e->getCode() . ": " . $e->getMessage());
                        };
                    }
                    $dbid = $client->client_database_id;
                    $clientGroups = explode(',',$client->client_servergroups);
                    $_SESSION['do'] = '1';
                }
            } catch(Exception $e) {
                $error[] = array('type' => 'red', 'msg' => 'Error: '. $e->getCode() . ": " . $e->getMessage());
            };
        } else {
            $error[] = array('type' => 'red', 'msg' => 'Wykryli&sacute;my z&lstrok;e ID u&zdot;ytkownika, od&sacute;wie&zdot; stron&eogon;.');
        }
    }
    if ($_SESSION['do'] == 1 and (!empty($_POST['assign']))) {
        if ((!empty($_SESSION['verified']) and $_SESSION['verified']) or $_SESSION['pin'] == $_POST['pin']) {
            $assignGroups = array();
            if (!empty($_POST['chbox'])) $assignGroups = $_POST['chbox'];                      
            $_SESSION['verified'] = true;
			
			$gry_limit_max = 4;$gry_limit_count = 0; $gry_l = false; $gry_text = "<b>4 rangi gier</b>";
			$fourfun_limit_max = 5;$fourfun_limit_count = 0; $fourfun_l = false; $fourfun_text = " <b>5 rang 4FUN</b>";
			$wiek_limit_max = 1;$wiek_limit_count = 0; $wiek_l = false;	$wiek_text = " <b>1 ranga wiekowa</b>";
			$woj_limit_max = 1;$woj_limit_count = 0; $woj_l = false;	$woj_text = " <b>1 ranga wojew&oacute;dztwa</b>";
			$spec_limit_max = 99;$spec_limit_count = 0; $spec_l = false;	  $spec_text = "";
			//print_r($groups);
			
			
			foreach($groups as $key => $value) // WSZYSTKIE GRUPY NA SERWERZE
			{
				foreach($assignGroups as $key1)
				{
					if($key == $key1)
					{
						switch($value['group']) // liczymy ile jest rang z danej groupy
						{
							case 'gry': $gry_limit_count++; if($gry_limit_count>$gry_limit_max) $gry_l=true; break;
							case '4fun': $fourfun_limit_count++; if($fourfun_limit_count>$fourfun_limit_max) $fourfun_l=true; break;
							case 'wiek': $wiek_limit_count++; if($wiek_limit_count>$wiek_limit_max) $wiek_l=true; break;
							case 'woj': $woj_limit_count++; if($woj_limit_count>$woj_limit_max) $woj_l=true; break;
							case 'spec': $spec_limit_count++; if($spec_limit_count>$spec_limit_max) $spec_l=true; break;
						}
					}
				}
			}	 
            if (!empty($assignGroups) and $gry_limit_count > $gry_limit_max ||
														$fourfun_limit_count > $fourfun_limit_max ||
														$wiek_limit_count > $wiek_limit_max ||
														$woj_limit_count > $woj_limit_max ||
														$spec_limit_count > $spec_limit_max) {
				$group_limit = "";
				
				if($gry_l)  $group_limit .= $gry_text;
				if($fourfun_l)  $group_limit .= $fourfun_text;
				if($wiek_l)  $group_limit .= $wiek_text;
				if($woj_l)  $group_limit .= $woj_text;
				if($spec_l)  $group_limit .= $spec_text;
				
                $error[] = array('type' => 'red', 'msg' => 'Wybra&lstrok;e&sacute; za du&zdot;o rang! Limit to '.$group_limit.'.');
	       } else {
                foreach ($config['groups'] as $grp) {
                    if (in_array($grp['grpid'], $assignGroups) and !in_array($grp['grpid'], $clientGroups)) {
                        $ts3->serverGroupClientAdd($grp['grpid'], $dbid);
                        $clientGroups[] = $grp['grpid'];
                    } else if (!in_array($grp['grpid'], $assignGroups) and in_array($grp['grpid'], $clientGroups)) {
                        $ts3->serverGroupClientDel($grp['grpid'], $dbid);
						unset($clientGroups[array_search($grp['grpid'], $clientGroups)]);
                    }
                }
			$error[] = array('type' => 'green', 'msg' => 'Sukces! Twoje rangi zosta&lstrok;y zaaktualizowane! Pami&eogon;taj, &zdot;e mo&zdot;esz zmieni&cacute; je ponownie w ka&zdot;dej chwili.');
            }
        } else {
            unset($_SESSION['pin']);
            $error[] = array('type' => 'red', 'msg' => 'Poda&lstrok;e&sacute; z&lstrok;y kod, sprawd&zacute; czy dobrze go skopiowa&lstrok;e&sacute;! Je&zdot;eli jeste&sacute; pewien, &zdot;e kod zosta&lstrok; dobrze wpisany - poczekaj chwil&eogon; i spr&oacute;buj ponownie.');
        }
    }
    
?>
		<noscript>
			<div class="alert-block bg-red b-radius b-shadow">
			<p>Musisz w&lstrok;¹czy&cacute; obs&lstrok;ug&eogon; javascript!</p>
			<span class="fa fa-times-circle-o"></span>
</div>
        </noscript>
        <?php foreach ($error as $err) { ?> 
			<div class="alert-block bg-<?php echo $err['type']; ?> b-radius b-shadow">
										<p><?php echo $err['msg']; ?></p>
										<span class="fa fa-times-circle-o"></span></div>	
       <?php } ?>
    <!-- Error Displaying Ends -->
			<?php if ($_SESSION['do'] == 0) {
				$login = false;
						try {
								TeamSpeak3::init();
								$ts3 = TeamSpeak3::factory("serverquery://". $config['teamspeak']['loginname'] .":". $config['teamspeak']['loginpass'] ."@". $config['teamspeak']['ip'] .":". $config['teamspeak']['queryport'] ."/?server_port=". $config['teamspeak']['serverport'] ."&nickname=". urlencode($config['teamspeak']['displayname']) ."");
								$filter = array('client_unique_identifier' => str_replace('/','\/', str_replace('+', '\+', str_replace('-', '\-', str_replace('&', '\&', $_SESSION['uid'])))));
								if ($config['teamspeak']['ip-verify']) {
									if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
									   $ip = $_SERVER['HTTP_CLIENT_IP'];
									} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
									  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
									} else {
									  $ip = $_SERVER['REMOTE_ADDR'];
									}
									  $filter['connection_client_ip'] = $ip;
									}
									echo '
											<h2 align="center">WYBIERZ SWOJ&Aogon; IDENTYFIKACJ&Eogon;</h2>
											<br>';
								foreach($ts3->clientList() as $cld){
									if($cld["connection_client_ip"] == $ip){
										$timeconn = $cld['connection_connected_time'];
										$timeconn2 = $timeconn / 60;
										$timeconn3 = $timeconn2 / 1000;
										echo
###################### ZMIENIC ##########################################################################										
										' 
										<form action="" method="POST" class="form-inline">
											<div class="form-group">
												<input type="hidden" class="form-control" name="uid" id="uid" value="'.$cld['client_unique_identifier'].'">
												<input type="hidden" class="form-control" name="nick" id="nick" value="'.$cld['client_nickname'].'">
												<input type="hidden" class="form-control" name="clid" id="clid" value="'.$cld['clid'].'">
											</div>
											<div class="alert-block bg-orange b-radius b-shadow">
											<p><h6><b>NICK</b>: '.$cld['client_nickname'].' <h6 style="margin-top:-5px;font-size:14px">JESTE&Sacute; Z NAMI JU&Zdot; '.round($timeconn3).' MINUT(Y)!&ensp;|&ensp;<b>UID</b>: '.$cld['client_unique_identifier'].'</h6></h6>
											<div style="float:right" class="search-name">
											<button type="submit" style="border: 1px solid #fff;float:right;margin-top:-50px;border-radius:0px;" class="button-2 bg-orange">Wybierz T&Aogon; IDENTYFIKACJ&Eogon;</a>
											</div>
											</div>
										</form> 
									';
									$login = true;
								}
								}
							 } catch(Exception $e) {
										$error[] = array('type' => 'red', 'msg' => 'Error: '. $e->getCode() . ": " . $e->getMessage());
							 };
							if(!$login)
							{
								echo '<div class="alert-block bg-red b-radius b-shadow">
										<p>Nie znale&zacute;li&sacute;my Cie na serwerze, zaloguj si&eogon; na <b>betaspeak.pl</b> przed wej&sacute;ciem do panelu!</p>
										</div>';
							}

						?>
                                              
                        <?php }; ?>
                        <?php if ($_SESSION['do'] == 1) { ?>
                            <form action="" method="POST" class="form-horizontal">
											
                                    <table class="tables b-shadow table">
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323"><b>RANGI GIER</b></font><br>LIMIT: 4 RANGI</td>
<td><font size="3" color="#232323"><b>RANGI 4FUN</b></font><br>LIMIT: 5 RANGI</td>
<td><font size="3" color="#232323"><b>RANGI WIEKOWE</b></font><br>LIMIT: 1 RANGA</td>
<td><font size="3" color="#232323"><b>WOJEW&Oacute;DZTWA</b></font><br>LIMIT: 1 RANGA</td>
<td><font size="3" color="#232323"><b>RANGI SPECJALNE</b></font><br>BRAK LIMITU RANG</td>
</tr>

												<?php 
												$array_rangi = array();
												
												$gry = array("gry" => array());
												$woj = array("woj" => array());
												$fourfun = array("4fun" => array());
												$wiek = array("wiek" => array());
												$spec = array("spec" => array());
												
												foreach ($groups as $id => $group) {
													//echo $group['group']." -> ";	
														
													$kocham = array("id"=>$id, "name" => $group['name'], "icon"=>$group['icon']);
													
													switch($group['group'])
													{
														case 'gry':
															array_push($gry['gry'], $kocham);	
														break;
														case 'woj':
															array_push($woj['woj'], $kocham);	
														break;
														case '4fun':
															array_push($fourfun['4fun'], $kocham);	
														break;
														case 'wiek':
															array_push($wiek['wiek'], $kocham);	
														break;
														case 'spec':
															array_push($spec['spec'], $kocham);	
														break;
													}
												}
												$xddd = $gry + $fourfun + $wiek + $woj + $spec;
												$array1 = $array_rangi + $xddd;
												//print_r($array1);
												
												$count_max = array(count($array1['gry']), 
																				count($array1['woj']),
																				count($array1['4fun']),
																				count($array1['wiek']),
																				count($array1['spec'])
																				); // LICZYMY
			
												$max = max($count_max)-1;
												//echo "max: $max";
												for($i=0; $i<=$max; $i++)
												{

												?>
												<tr>
												<td style="display:none;"></td>
												<?php
												
												foreach($array1 as $key => $value)
												{
													
													if(isset($value[$i])){
														
													
														echo "<td style='text-align:left;' onclick='addClass(this);check(".$value[$i]['id'].")'";
														if (in_array($value[$i]['id'], $clientGroups)) 
															echo " class='active'";
														echo "><input type='checkbox' id='chbox[".$value[$i]['id']."]' name='chbox[]' "; 
														
														if (in_array($value[$i]['id'], $clientGroups)) 
															echo "checked"; 
														
														echo " value='".$value[$i]['id']."'><img style='float:left;' src='". $value[$i]['icon'] ."' height='16' width='16'></img>&ensp;<font color='#000'>&raquo;</font>&ensp;".$value[$i]['name']."</td>";
													
													}else
														echo "<td><hr style='margin-top: 0px;margin-bottom: 0px !important;border-top: 1px solid #ededed;'></td>";
												}
												?>
												</tr>
												<?php
												} ?>
                                        </table>
                                <div class="col-xs-2"></div>
                                <br/><br/>
                                <?php if (!empty($_SESSION['verified']) and $_SESSION['verified']) { ?>
									<div style="float:right;" class="search-name">
									<button type="submit" class="button-2 bg-orange">Przejd&zacute; Dalej</a>
									</div>
                                <?php } else { ?>
									<div style="float:right;" class="search-name">
									<button type="submit" class="button-2 bg-orange">Przejd&zacute; Dalej</a>
									</div>
                                <?php }; ?>
                                <div class="modal fade" id="setgrps">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">KOD WERYFIKACYJNY</h4>
                                        </div>
                                        <div style="height:100px;" class="modal-body">
                                            <p>Je¿eli nie dosta³eœ poke odœwie¿ stronê!
                                                        <input type="hidden" name="assign" value="1"></input>
														<div style="margin-left:20px;" class="input input--nao">
														<input id="pin" name="pin" class="input__field input__field--nao" type="text" id="input-1">
														<label class="input__label input__label--nao" for="input-1">
														<span class="input__label-content input__label-content--nao">Kod otrzymany za pomoc&aogon; <font color="orange">POKE</font></span>
														</label>
														<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
														<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0" stroke-width="1"></path>
														</svg>
														</div>
														<div style="float:right;" class="search-name">
														<button type="submit" class="button-2 bg-orange">Przejd&zacute; Dalej</a>
														</div>
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>                    
                        <?php }; ?>
    
    <script>
        function check(id) {
            document.getElementById('chbox['+id+']').checked = !document.getElementById('chbox['+id+']').checked;
        }
    </script>